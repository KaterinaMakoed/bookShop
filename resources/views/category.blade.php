@extends('layouts.app')

@section('content')
<div class="container">
  
<h2>Название категории</h2> <!-- взять из бд-->  

	<div class="row">
	

		@foreach($result as $one)
			<p>
				$one->name
			</p>


			<li><a href="{{url('genre/'.$one->id)}}">{{$one->name}}</a></li>
		@endforeach




	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория1</p>
	
	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория2</p>

	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория1</p>
	<div>
  
        
</div>
@endsection
