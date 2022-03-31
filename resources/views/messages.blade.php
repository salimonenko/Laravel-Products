@extends('Layouts.app')

@section('title-block')
	Продукты: полный список 
@endsection

@section('title-block')
Здесь присутствуют все продукты
@endsection

@section('top')
	<h1>Все продукты</h1>
@endsection
	
	
@section('content')
	<h1>Список продуктов:</h1>
	
	@foreach($data as $element)
		<div class="alert-messages">
			<div class="message">Продукт: {{ $element->NAME }}</div>
			
<!--			<div class="message">Дата, время: {{ $element->created_at }}</div>
			<div class="message">Сообщение: {{ $element->message }}</div> 		
-->			
			<a href="{{ route('contact-dataOne', $element->id) }}"><button>Редактировать</button></a>
			<a href="{{ route('contact-delete', $element->id) }}"><button>Удалить</button></a>
		</div>
	@endforeach
	
@endsection


