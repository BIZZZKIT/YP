@extends('main')
@section('title', 'Регистрация')
@section('content')
    <div class="container">
        <div class="row vh-100 d-flex align-items-center">
            <div class="col"></div>
            <div class="col">
                <form method="post">
                    @csrf
                    <H1>Регистрация</H1>
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
                        <label for="surname" class="form-label">Фамилия</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" id="surname">
                        @error('surname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="patronymic" class="form-label">Отчество</label>
                        <input type="text" class="form-control @error('patronymic') is-invalid @enderror" id="patronymic" name="patronymic">
                        @error('patronymic')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a href="{{route('login')}}">У меня уже есть аккаунт</a>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
