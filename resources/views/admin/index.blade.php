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
						<th scope="col"> Image</th>
						<th scope="col">Typetour </th>
						<th scope="col">Shedule </th>
						<th scope="col">Depart </th>
						<th scope="col">Number people </th>
                        <th scope="col">Price </th>
					</tr>
				</thead>
				@foreach($books as $book)
				<tbody>
					<tr>
						<th scope="row"> {{$book->id}}</th>
						<td>{{$book->title}}</td>
						<td>{{$book->getDisplayPrice()}}</td>
						<td>{{$book->author}}</td>
						<td>{{$book->release_year}}</td>
						<td>
							<form action='{{"/books/".$book->id}}' method ="POST">
								@csrf 
								@method("DELETE")
								<button type="submit" name ="delete" style="margin-left: 30px; border: 1px; background: orange; font-size: 17px;"> Delete </button>      
							</form>
						</td>
						<td>
							<a href="{{'/books/'.$book->id.'/edit'}}"> Edit</a>
						</td>
					</tr>			
				</tbody>
				@endforeach
			</table>
		</div>
	</div>
</body>
</html>