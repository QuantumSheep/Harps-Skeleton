@extends('/templates/_Layout')
@section('title', 'Welcome to Harps')
@section('content')
<section>
    Welcome to Harps!<br />
    Your php version is {{ $model->php_version }}<br />
    The current uri is {{ $model->current_uri }}
</section>
@endsection
