@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin-task-edit-apply', $data->id ) }}" method="post">
        @csrf
        <div class="form-group mt-3">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" readonly value = "{{$data->name}}" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="name">Email</label>
            <input type="text" name="email" placeholder="Введите email" value="{{$data->email}}" readonly id="email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="name">Текст задачи</label>
            <textarea type="text" name="message" placeholder="Введите задачу"  id="message" class="form-control">{{$data->message}} </textarea>
        </div>
        <div class="form-group">
            <label class="form-check-label mr-5" for="flexCheckChecked"><p>Выполнено</p></label>
            <input class="form-check-input" name="done" type="checkbox" @if ($data->done)
                checked
            @endif id="flexCheckChecked">
        </div>
        <button type='submit' class="btn btn-success mt-3">Сохранить</button>
    </form>
@endsection