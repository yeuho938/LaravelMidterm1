<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .box{
      width: 500px;
    }
  </style>
</head>
<body>
  <center>
    <h1 style="color: red;"> Add new tour</h1>
    <div class="box">
      <form class="form" method="POST" action="/tour/insert" enctype="multipart/form-data">
       @csrf
        @if ($errors->any())
       <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
       <div class="form-group">
        <label for="title" style="float: left; font-size: 18px;"> Name</label>
        <input type="text" class="form-control" name = "name" placeholder="Name">
         @error('name')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror 
      </div>
      <div class="form-group">
        <label for="name" style="float: left; font-size: 18px;"> Image</label>
        <input type="file" class="form-control" name = "image" placeholder="image">
         @error('image')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror 
      </div>
      <div class="form-group">
        <label for="author" style="float: left; font-size: 18px;"> Typetour</label>
        <input type="text" class="form-control" name = "typetour" placeholder="typetour">
         @error('typetour')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror 
      </div>
      <div class="form-group">
        <label for="author" style="float: left; font-size: 18px;"> Schedule</label>
        <input type="text" class="form-control" name = "schedule" placeholder="schedule">
         @error('schedule')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror 
      </div>
      <div class="form-group">
        <label for="author" style="float: left; font-size: 18px;"> Depart</label>
        <input type="date" class="form-control" name = "depart" placeholder="Depart">
         @error('depart')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror 
      </div>
      <div class="form-group">
        <label for="author" style="float: left; font-size: 18px;"> Number </label>
        <input type="text" class="form-control" name = "number" placeholder="Number">
         @error('number')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror 
      </div>
      <div class="form-group">
        <label for="author" style="float: left; font-size: 18px;"> Price</label>
        <input type="text" class="form-control" name = "price" placeholder="price">
         @error('price')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror 
      </div>
      <button type="submit" class="btn btn-default" style=" font-size: 18px; color:green ;"> Add</button>
    </form>
  </div>
</center>

</body>
</html>
