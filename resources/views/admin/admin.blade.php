@extends('main')
@section('title', 'Панель администратора')
@section('content')
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
                        <td>Имя стукача</td>
                        <td>Фамилия стукача</td>
                        <td>Отчество стукача</td>
                        <td>Действие</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($statements as $statement)
                        <tr>
                            <td>{{$statement->statenum}}</td>
                            <td>{{$statement->description}}</td>
                            <td>{{$statement->status}}</td>
                            <td>{{$statement->user->name}}</td>
                            <td>{{$statement->user->surname}}</td>
                            <td>{{$statement->user->patronymic}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Изменить
                                </button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{route('updateStatus', $statement->id)}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Изменить статус</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <select class="form-select" name="status">
                                                        @foreach($statements_statuses as $statement_status)
                                                            <option value="{{$statement_status}}">{{$statement_status}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
