<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" href="{{ URL::asset('images/favicon.jpg') }}" />
<title>@yield('title') CoTenants</title>
<meta name="description" content="@yield('description')">

<!-- Styles -->
{{ HTML::style('css/app.css') }}

<!-- Scripts -->
{{ HTML::script('js/app.js') }}
{{ HTML::script('js/bootstrap.js') }}
{{ HTML::script('js/fontawesome.js') }}