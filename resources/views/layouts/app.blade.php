<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title }} | {{ config('app.name') }}
    </title>
    @include('util.favicons')
    @include('util.fonts')
    @yield('styles')
    @include('util.styles')
    <noscript>
        <meta http-equiv="refresh" content="0;url={{ url('/require') }}">
    </noscript>
    @include('util.scripts')
    @yield('scripts')
    @yield('component-styles')
</head>
<body>
    @include('partials.header')
        <main>
            @yield('content')
        </main>
    @include('partials.footer')
</body>
</html>