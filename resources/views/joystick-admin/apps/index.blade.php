@extends('joystick-admin.layout')

@section('content')
  <h2 class="page-header">Заявки</h2>

  @include('joystick-admin.partials.alerts')

  <div class="table-responsive">
    <table class="table table-striped table-condensed">
      <thead>
        <tr class="active">
          <td>№</td>
          <td>Проект</td>
          <td>Имя</td>
          <td>Email</td>
          <td>Номер</td>
          <td>Текст</td>
          <td class="text-right">Функции</td>
        </tr>
      </thead>
      <tbody>
        @forelse ($apps as $app)
          <tr>
            <td>{{ $app->id }}</td>
            <td>{{ $app->project->name }}</td>
            <td>{{ $app->name }}</td>
            <td>{{ $app->email }}</td>
            <td>{{ $app->phone }}</td>
            <td>{{ $app->message }}</td>
            <td class="text-right">
              <a class="btn btn-link btn-xs" href="{{ url($app->id) }}" title="Просмотр страницы" target="_blank"><i class="material-icons md-18">link</i></a>
              <form method="POST" action="/admin/apps/{{ $app->id }}" accept-charset="UTF-8" class="btn-delete">
                <input name="_method" type="hidden" value="DELETE">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-link btn-xs" onclick="return confirm('Удалить запись?')"><i class="material-icons md-18">clear</i></button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5">Нет записи</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  {{ $apps->links() }}

@endsection