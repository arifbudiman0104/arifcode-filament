<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>

<body
    {{-- class="bg-dark text-light" --}}
    >
    @include('partials.navbar')

    <div class=" bg-gray-900">
        @yield('container')
    </div>

</body>

</html>
