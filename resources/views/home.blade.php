
@extends('layouts.app')
@section('title-blog')
Главная страница
@endsection


@section('content')
<h1>Главная страница</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim rem expedita labore facilis maiores sunt quia exercitationem voluptatum, temporibus neque ea voluptatibus similique, tempora, debitis iure! Autem eius officiis enim.</p>
@endsection

@section('aside')
@parent
<p>Дополнительный текст</p>
@endsection