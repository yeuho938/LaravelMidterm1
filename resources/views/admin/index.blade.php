<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">
		<div class ="row">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">STT</th>
						<th scope="col">Name</th>
						<th scope="col">Image</th>
						<th scope="col">Typetour </th>
						<th scope="col">Shedule </th>
						<th scope="col">Depart </th>
						<th scope="col">Number </th>
						<th scope="col">Price </th>
					</tr>
				</thead>
				@foreach($tours as $tour)
				<tbody>
					<tr>
						<th scope="row"> {{$tour->id}}</th>
						<td>{{$tour->name}}</td>
						<td><img src="{{'/storage/'.$tour->image}}" width="150px" height="150px" ></td>
						<td>{{$tour->typetour}}</td>
						<td>{{$tour->schedule}}</td>
						<td>{{$tour->depart}}</td>
						<td>{{$tour->number}}</td>
						<td>{{$tour->getDisplayPrice()}}</td>
					</tr>			
				</tbody>
				@endforeach
			</table>
		</div>
	</div>
</body>
</html>