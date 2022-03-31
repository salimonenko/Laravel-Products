@extends('Layouts.app')
		

@section('title-block')
	Наименование продукта: {{ $data->id }} 
@endsection


@section('top')
	<h1>Карточка продукта {{  $data->NAME }}:</h1>
@endsection
	
	
@section('content')
	
		<div class="alert-messages">
			<div class="message">Продукт: {{ $data->NAME }}</div>
			<div class="message">Артикул: {{ $data->ARTICLE }}</div>
			<div class="message">Статус: {{ $data->STATUS }}</div>
			<div class="message">Цвет: {{ $data->Color }}</div>
			<div class="message">Размер: {{ $data->Size }}</div>
			<div class="message">Создано: {{ $data->created_at }}</div>
			<div class="message">Обновлено: {{ $data->updated_at }}</div>
			
			<a href="{{ route('contact-update', $data->id) }}"><button>Редактировать</button></a>
			<a href="{{ route('contact-delete', $data->id) }}"><button>Удалить</button></a>
		</div>
	
	
@endsection


