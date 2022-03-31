@extends('Layouts.app')

@section('title-block')
	Добавление продукта в базу данных 
@endsection

@section('title-block')
Добавить продукт
@endsection

@section('top')
	<h1>Добавляем продукт</h1>
@endsection


@section('content')
	<h1>Добавить</h1>
<!--	<p>Мои контакты - на этом сайте: <a href="//4846d.ru">4846d.ru</a>.</p> -->

	
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
			Продукт добавлен!
		</div>
	@endif
	
	
<!--  <form action="/contact/submit" method="post"> - это напрямую  -->
	  <form action="{{ route('form-contacts-handler') }}" method="post">  <!--  это при помощи имени обработчика, указанного в файле web.php  -->
	
		@csrf  <!--  Защищенный ключ - специфика Laravel  -->
		<div class="form-contacts">
			<h2>Форма добавления продукта:</h2>
			<div class="form-contacts" >
				<label for="NAME">Продукт: </label>
				<input type="text" name="NAME" value="" placeholder="Продукт..." id="NAME" />
			</div>
			
			<div class="form-contacts" >
				<label for="ARTICLE">Артикул: </label>
				<input type="text" name="ARTICLE" value="" placeholder="Артикул..." id="ARTICLE" />
			</div>
			
			<div class="form-contacts" >
				<label for="STATUS">Статус: </label>

				<select id="STATUS" name="STATUS">
				  <option value="available" selected="selected">available</option>
				  <option value="unavailable">unavailable</option>
				</select>
				
			</div>
			
			<div class="form-contacts" >
				<label for="Color">Цвет: </label>
				<input type="text" name="Color" value="" placeholder="Цвет..." id="Color" />
			</div>
			
			<div class="form-contacts" >
				<label for="Color">Размер: </label>
				<input type="text" name="Size" value="" placeholder="Размер..." id="Size" />
			</div>
			
			
			<button type="submit" class="btn-success">Добавить</button>
		
		</div>
		
		
	</form>

	
@endsection