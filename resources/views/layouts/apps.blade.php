<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>livewire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <livewire:styles />
    <livewire:scripts />
    <script src="{{asset('js/app.js')}}"></script>

</head>

<body class="flex flex-wrap justify-center">
    <div class="flex w-full justify-between px-4 bg-purple-900 text-white">
        <a class="mx-3 py-4" href="/">Home</a>
        <div class="py-4">
            <a class="mx-3" href="/login">Login</a>
            <a class="mx-3" href="/register">Register</a>

        </div>

    </div>
    <div class="my-10 flex justify-center">
        @yield('content')
    </div>


</body>

</html>