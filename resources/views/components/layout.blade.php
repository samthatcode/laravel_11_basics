<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css"> --}}
    <title>Laravel App</title>
</head>

<body>

    @if (session('status'))

        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        
    @endif

    {{ $slot }}

</body>

</html>
