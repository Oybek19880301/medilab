@extends('layouts.admin')
@section('content')
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Admin oynasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

  <div class="container">
    <h2 class="text-center">Mijozlar ta'surotlari oynasi</h2>
    <a href="/addtestimonial"><button class="btn btn-primary">Qo'shish</button></a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Ism Familiya</th>
          <th>Kasbi</th>
          <th>Rasm</th>
          <th>Mijozning ta'surotlari</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($testimonials as $item)  
        <tr>
          <td>{{$loop->index+1}}</td>
          <td>{{$item->name.' '.$item->surname}}</td>
          <td>{{$item->profession}}</td>
          <td>{{$item->text}}</td>
          <td><img src="{{asset($item->photo)}}" style="width: 100px; height: 60px;"></td>
          <td>
          <div class="btn-group">
               <form action="/edittestimonial" method="post">
                @csrf
                  <input type="hidden" name="id" value="{{$item->id}}"> 
                  <button type="submit" class="btn btn-primary">Tahrirlash</button>
               </form>   
               <form action="/deletetestimonial" method="post">
                @csrf
                  <input type="hidden" name="id" value="{{$item->id}}"> 
                  <button type="submit" class="btn btn-danger">O'chirish</button>
               </form>
          </div>
          </td>
        </tr>
      @endforeach  
      </tbody>
    </table>
  </div>

  </body>
  </html>
@endsection