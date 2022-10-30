@extends('layouts.main')

@section('title')
    Главная страница
@endsection

@section('content')
    <div class="row">
        <form action="/" method="get">
            <select name = "orderby" class="form-select form-select-lg-3 mb-3" aria-label="Поле сортировки">
                <option value="name">Имя</option>
                <option value="email">Email</option>
                <option value="done">Статус</option>
            </select>
            <select name ='direction' class="form-select form-select-lg-3 mb-3" aria-label="Направление сортировки">
                <option value="asc">По возрастанию</option>
                <option value="desc">По убыванию</option>
            </select>
            <button type='submit' class="btn btn-success mt-3">Сортировать</button>
        </form>
    </div>
    @foreach ($data as $el)
        <div class="alert alert-info mt-3">
            @if($el->done == 1)
                <p>Задание выполнено</p>
            @endif
            <h3>{{ $el->name}}</h3>
            <p>{{ $el->email}}</p>
            <p>{{$el->message}}</p>
        </div>
    @endforeach

    <div class="col-8">
        {{ $data->appends($_GET)->links()}}
    </div>
@endsection