<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\App;
use App\Project;
use App\Product;
use App\Category;

class InputController extends Controller
{
    public function search(Request $request)
    {
        $text = trim(strip_tags($request->text));

	    // $products = Product::where('status', 1)
	    //     ->where(function($query) use ($text, $qQuery) {
	    //         return $query->where('barcode', 'LIKE', '%'.$text.'%')
	    //         ->orWhere('title', 'LIKE', '%'.$text.'%')
	    //         ->orWhere('oem', 'LIKE', '%'.$text.'%');
	    //     })->paginate(27);

        $products = Product::search($text)->where('status', '<>', 0)->paginate(27);

        $products->appends([
            'text' => $request->text,
        ]);

        return view('shop.found', compact('text', 'products'));
    }

    public function searchAjax(Request $request)
    {
        $text = trim(strip_tags($request->text));

        $products = Product::search($text)->where('status', '<>', 0)->get();

        return response()->json($products);
    }

    public function filterProducts(Request $request)
    {
        $from = ($request->price_from) ? (int) $request->price_from : 0;
        $to = ($request->price_to) ? (int) $request->price_to : 9999999999;

        $products = Product::where('status', 1)->whereBetween('price', [$request->from, $request->to])->paginate(27);

        return redirect()->back()->with([
            'alert' => $status,
            'products' => $products
        ]);
    }

    public function sendApp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:60',
            'phone' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact-form')->withErrors($validator)->withInput();
        }

        $project = Project::where('name', $request->project)->first();

        $app = new App;
        $app->project_id = $project->id;
        $app->name = $request->name;
        $app->email = $request->email;
        $app->phone = $request->phone;
        $app->message = $request->message;
        $app->save();

        // Email subject
        $subject = "Biotic - " . $project->name . " Новая заявка от $request->name";

        // Email content
        $content = "<h2>Biotic - " . $project->name . "</h2>";
        $content .= "<b>Имя: $request->name</b><br>";
        $content .= "<b>Номер: $request->phone</b><br>";
        $content .= "<b>Email: $request->email</b><br>";
        $content .= "<b>Текст: $request->message</b><br>";
        $content .= "<b>Дата: " . date('Y-m-d') . "</b><br>";
        $content .= "<b>Время: " . date('G:i') . "</b>";

        $headers = "From: info@biotic.kz \r\n" .
                   "MIME-Version: 1.0" . "\r\n" . 
                   "Content-type: text/html; charset=UTF-8" . "\r\n";

        // Send the email
        if (mail('biotic.company@gmail.com', $subject, $content, $headers)) {
            $status = 'alert-success';
            $message = 'Ваша заявка принята. Спасибо!';
        }
        else {
            $status = 'alert-danger';
            $message = 'Произошла ошибка.';
        }

        // dd($status, $message);
        return redirect()->back()->with([
            'status' => $status,
            'message' => $message
        ]);
    }
}