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
        <form action="/editdoctorcode" method="post" enctype="multipart/form-data">
          <input type="hidden"  name="id" value="{{$doctor->id}}">
          @csrf
          <div class="form-group">
            <label for="name">Ism :</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$doctor->name}}">
          </div>
          <div class="form-group">
            <label for="surname">Familiya :</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{$doctor->surname}}">
          </div> 
          <div class="form-group">
            <label for="direction">Yo'nalish:</label>
            <input type="text" class="form-control" id="direction" name="direction" value="{{$doctor->direction}}">
          </div>
          <div class="form-group">
            <label for="description">Shifokor haqida m'lumot:</label>
            <input type="text" class="form-control" id="description"name="description" value="{{$doctor->description}}">
          </div>
          <div class="form-group">
            <label for="telegram">Telegram:</label>
            <input type="text" class="form-control" id="telegram" name="telegram" value="{{$doctor->telegram}}">
          </div>
          <div class="form-group">
            <label for="fasebook">Fasebook:</label>
            <input type="text" class="form-control" id="fasebook" name="fasebook" value="{{$doctor->fasebook}}">
          </div>
          <div class="form-group">
            <label for="instagram">Instagram:</label>
            <input type="text" class="form-control" id="instagram" name="instagram" value="{{$doctor->instagram}}">
          </div>
          <div class="form-group">
            <label for="photo">Rasm:</label>
            <img src="{{asset($doctor->photo)}}" style="width: 100px; height: 60px;">
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
