@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin oynasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6">
        <h2 class="text-center">Tahrirlash oynasi</h2>
        <form action="/editaboutcode" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="{{$about->id}}">
          @csrf
          <div class="form-group">
            <label for="title">Sarlavha:</label>
            <input type="text" class="form-control" id="title" placeholder="Nomini kiriting" name="title" value="{{$about->title}}">
          </div>
          <div class="form-group">
            <label for="text">Text:</label>
            <input type="text" class="form-control" id="text" placeholder="Textni kiriting" name="text" value="{{$about->text}}">
          </div>
          <div class="form-group">
            <label for="photo">Rasm:</label>
            <img src="{{asset($about->photo)}}" style="width: 100px; height: 60px;">
            <input type="file" class="form-control" id="photo" name="photo">
          </div>
          <button type="submit" class="btn btn-primary" id="button">Qo'shish</button>
        </form>
     </div>
<div class="col-3">    
</div>
</div>
</div>


</body>
</html>
@endsection


