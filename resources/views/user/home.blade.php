<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >
	<style type="text/css">
		#display{
			display: grid;
			grid-template-columns: 350px 350px 350px;
			grid-gap: 30px;
			margin-left: 20%;
		}
	</style>
</head>
<body>
	@include('header\head')
	<div id ="display">
		@foreach($tourusers as $touruser)
		<div style=" padding: 20px;">
			<img src="{{'/storage/'.$touruser->image}}" width="300px" height="300px"></h2> 
            <span style="display: flex; font-size: 10px;"> <p style="background-color: pink; height: 30px; width: 140px; color: white" >{{$touruser->schedule}}</p> <p style="background-color: black;height: 30px; width: 140px; color: white; margin-left: 10px;">{{$touruser->typetour}}</p> </span>
            <p>{{$touruser->name}}</p>
            <p><i class="far fa-clock"></i>Lịch trình: {{$touruser->schedule}}</p>
            <p> <i class="far fa-calendar-check"></i>Khởi hành: {{$touruser->depart}}</p>
           <span style="display: flex;"> <p> <i class="fas fa-user"></i>Số chổ còn nhận: {{$touruser->number}}</p>  <p style="margin-left: 30px;font-size: 18px; color: pink">{{$touruser->getDisplayPrice()}} đ</p></span>
		</div>
		@endforeach
	</div>

	
</div>
</body>
</html>