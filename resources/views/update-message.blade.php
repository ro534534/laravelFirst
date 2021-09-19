@extends('layouts.app')

@section('title-blog')
Обновление записи
@endsection

@section('content')
<h1>Обновление записи</h1>



<form action="{{route('contact-update-submit', $data->id)}}" method="POST">
@csrf
<div class="form-group">
<label for="name">Введите имя</label>
<input class="form-control" type="text" value="{{$data->name}}" name="name" placeholder="Введите имя" id="name">
</div>

<div class="form-group">
<label for="email">Введите почту</label>
<input class="form-control" type="text" value="{{$data->email}}" name="email" placeholder="Введите почту" id="email">
</div>

<div class="form-group">
<label for="subject">Тема сообщения</label>
<input class="form-control" type="text" value="{{$data->subject}}" name="subject" placeholder="Тема сообщения" id="subject">
</div>

<div class="form-group">
<label for="message">Сообщение</label>
<textarea class="form-control" placeholder="Введите сообщение"  name="message" id="message" cols="30" rows="10">{{$data->message}}</textarea>
</div>
<button type="submit" class="btn btn-success">Обновить</button>
</form>


@endsection