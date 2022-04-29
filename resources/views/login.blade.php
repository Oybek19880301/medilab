<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login va parol oynasi</title>
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
        <h2 class="text-center">Login va parol oynasi</h2>
        <form action="/checklogin" method="post">
          @csrf
          @if(session()->has('error')) 
            <div class="alert alert-danger"> 
                {{ session()->get('error') }} 
            </div> 
          @endif
          @if(session()->has('xabar')) 
            <div class="alert alert-success"> 
                {{ session()->get('xabar') }} 
            </div> 
          @endif
          <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" id="login" placeholder="Loginni kiriting" name="login" oninput="display(this.value)">
          </div>
          <div class="form-group">
            <label for="password">Parol:</label>
            <input type="password" class="form-control" id="password" placeholder="Parolni kiritng" name="password">
          </div>
          <button type="submit" class="btn btn-primary" id="button">Kiritish</button>
        </form>
</div>
<div class="col-3">
      
</div>
</div>
</div>
</body>
</html>
