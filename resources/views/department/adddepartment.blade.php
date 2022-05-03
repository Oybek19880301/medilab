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
        <h2 class="text-center">Qo'shish oynasi</h2>
        <form action="/adddepartmentcode" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Bo'lim nomi:</label>
            <input type="text" class="form-control" id="name" placeholder="Nomini kiriting" name="name">
          </div>
          <div class="form-group">
            <label for="description">Yozuv:</label>
            <input type="text" class="form-control" id="description" placeholder="Nomini kiriting" name="description">
          </div>
          <div class="form-group">
            <label for="text">Text:</label>
            <textarea type="text" class="form-control" id="text" placeholder="Textni kiriting" name="text"></textarea>
          </div>
          <div class="form-group">
            <label for="photo">Rasm:</label>
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
