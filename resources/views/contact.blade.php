@extends('layouts.app')

@section('title-blog')
Страница контактов
@endsection

@section('content')
<h1>Страница контактов</h1>



<form action="{{route('contact-form')}}" method="POST">
@csrf
<div class="form-group">
<label for="name">Введите имя</label>
<input class="form-control" type="text" name="name" placeholder="Введите имя" id="name">
</div>

<div class="form-group">
<label for="email">Введите почту</label>
<input class="form-control" type="text" name="email" placeholder="Введите почту" id="email">
</div>

<div class="form-group">
<label for="subject">Тема сообщения</label>
<input class="form-control" type="text" name="subject" placeholder="Тема сообщения" id="subject">
</div>

<div class="form-group">
<label for="message">Сообщение</label>
<textarea class="form-control" placeholder="Введите сообщение" name="message" id="message" cols="30" rows="10"></textarea>
</div>
<button type="submit" class="btn btn-success">Отправить</button>
</form>


@endsection