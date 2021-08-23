
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper" id="app">

    @include('layouts.components.navbar')

    @include('layouts.components.sidebar')

    @include('layouts.components.content')

    @include('layouts.components.footer')
</div>

<script src="/js/app.js"></script>
</body>
</html>
