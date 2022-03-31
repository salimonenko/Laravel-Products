<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title-block')</title>
		<link href="{{ URL::asset('/css/app.css') }}   " rel="stylesheet">
	</head>
    <body>	
	
@auth
         Вы просматриваете страницу с правами администратора <!--  Это видит только админ  -->
@endauth

	
		@yield('top')
		
		<div class="content">
			@include('inc.aside')
		
			@include('inc.right')
		
			@yield('h2-block')
		@yield('content')
		
		</div>
		
		<div class="footer">
			<div class="footer-1">Дизайн адаптивный вплоть до ширины экрана 200рх</div>
			
			<div class="footer-2">Copyright &copy;&nbsp;Салимоненко Д.А. 2021-{{ date('Y') }}</div>
			
		</div>
		
		
		
    </body>
</html>
