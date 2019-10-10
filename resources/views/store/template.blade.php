<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title','home')</title>
    {{-- metadatos --}}
    {{-- open graf  y twitter--}}

</head>
<body>
    {{-- @include('store.partials.nav') --}}
    @yield('content')
    {{-- @include('store.partials.footer') --}}
</body>
</html>
