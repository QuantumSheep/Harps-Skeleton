@extends('/Templates/_Layout')
@section('title', 'Welcome to Harps')
@section('content')
Welcome to Harps!<br />
Your php version is {{ $model->php_version }}<br />
The current uri is {{ $model->current_uri }}
@endsection