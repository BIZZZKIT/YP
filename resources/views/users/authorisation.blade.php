@extends('main')
@section('title', 'Регистрация')
@section('content')
    <div class="container">
        <div class="row vh-100 d-flex align-items-center">
            <div class="col"></div>
            <div class="col">
                <form method="post">
                    @csrf
                    <H1>Авторизироваться</H1>
                    <div class="mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" class="form-control @error('login') is-invalid @enderror" name="login" id="login" aria-describedby="emailHelp">
                        @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Авторизироваться</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
