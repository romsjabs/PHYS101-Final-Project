<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title }}
    </title>
    @include('util.favicons')
    @include('util.fonts')
    <link rel="stylesheet" href="{{ asset('assets/css/components/require.css') }}">
    <script>
        window.location.replace('{{ url('/') }}');
    </script>
</head>
<body>
    This page requires JavaScript.
</body>
</html>