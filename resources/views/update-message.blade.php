@extends('Layouts.app')

@section('title-block')
	Редактирование и отправка карточки продукта
@endsection


@section('top')
	<h1>Редактирование продукта: {{ $data->NAME }}</h1>
@endsection


@section('content')
	
	
	@if($errors->any())
		<div class="alert alert-error">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	@if(session('success'))
		<div class="alert alert-success">
			Карточка продукта отредактирована!
		</div>
	@endif
	
	
<!--  <form action="/contact/submit" method="post"> - это напрямую  -->
	  <form action="{{ route('contact-updateSubmit', $data->id) }}" method="post">  <!--  это при помощи имени обработчика, указанного в файле web.php  -->
	
		@csrf  <!--  Защищенный ключ - специфика Laravel  -->
		<div class="form-contacts">
			<h2>Форма редактирования продукта:</h2>
			<div class="form-contacts" >
				<label for="NAME">Продукт: </label>
				<input type="text" name="NAME" value="{{$data->NAME}}" placeholder="Продукт..." id="NAME" />
			</div>
			
			@auth <!--  Только для админа  -->
				<div class="form-contacts" >
					<label for="ARTICLE">Артикул: </label>
					<input type="text" name="ARTICLE" value="{{$data->ARTICLE}}" placeholder="Артикул..." id="ARTICLE" />
				</div>
			@endauth
			
			<div class="form-contacts" >
				<label for="STATUS">Статус: </label>
<!--				<input type="text" name="STATUS" value="{{$data->STATUS}}" placeholder='available | unavailable' id="STATUS" />
-->				<select id="STATUS" name="STATUS">
				  <option value="available" selected="selected">available</option>
				  <option value="unavailable">unavailable</option>
				</select>
			</div>
			
			<div class="form-contacts" >
				<label for="Color">Цвет: </label>
				<input type="text" name="Color" value="{{$data->Color}}" placeholder="Цвет..." id="Color" />
			</div>
			
			<div class="form-contacts" >
				<label for="Size">Размер: </label>
				<input type="text" name="Size" value="{{$data->Size}}" placeholder="Размер..." id="Size" />
			</div>
			
			
			<button type="submit" class="btn-success">Обновить</button>
		
		</div>
	</form>

	
@endsection