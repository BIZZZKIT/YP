@php use Illuminate\Support\Facades\Auth; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js')}}"></script>
    <title>@auth()
            @if(Auth::user()->isAdmin == true)
                @yield('title', 'Панель управления')
            @else @yield('title', 'Главная страница')
            @endif
        @endauth</title>
</head>
<body>
@if(!\Illuminate\Support\Facades\Route::is('register') && !\Illuminate\Support\Facades\Route::is('login'))
    @include('components.header')
@endif
@yield('content')
@auth()
    @if(\Illuminate\Support\Facades\Route::is('main'))
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>Гос.номер</td>
                            <td>Описание</td>
                            <td>Статус</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($statements as $statement)
                            <tr>
                                <td>{{$statement->statenum}}</td>
                                <td>{{$statement->description}}</td>
                                <td>{{$statement->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
            </div>
        </div>
    @endif
@endauth
</body>
</html>
