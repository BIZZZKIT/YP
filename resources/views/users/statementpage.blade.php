@extends('main')
@section('title', 'Страница добавления заявления')
@section('content')
    <div class="container">
        <div class="row vh-100 d-flex align-items-center">
            <div class="col"></div>
            <div class="col">
                <form method="post">
                    @csrf
                    <H1>Добавление заявления</H1>
                    <div class="mb-3">
                        <label for="statenum" class="form-label">Укажите гос.номер автомобиля</label>
                        <input type="text" class="form-control @error('statenum') is-invalid @enderror" name="statenum" id="statenum" aria-describedby="emailHelp">
                        @error('statenum')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание нарушения</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description">
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
