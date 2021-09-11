<!DOCTYPE html>
<html>
<head>
  <title>M&R Services Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.footer{
     overflow: hidden;
     margin-top: 150px;
     background: #262626;
     color: #627482 !important;
     margin-bottom: 0;
     padding-bottom: 0;
     height: 300px;
}
.social {
     font-size: 21px !important
 }
</style>
</head>

<body>

<!----LoginForm&Logo---->

<div class="container-fluid" >
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <div>
          <img class="img-fluid" src="img/logo3.png" width="600" height="600">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-12">
      <div class="container vh-100">
  <div class="row justify-content-center h-100">
    <div class="card w-50 my-auto shadow">
      <div class="card-header text-center bg-dark text-white">
        <h4>M&R Services Login</h4>
      </div>
      <div class="card-body">
        <form action="loginCon.php" method="POST">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" class="form-control" name="email" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" />
          </div>
          <input type="submit" class="btn btn-dark w-100" value="Login" name="">
        </form>
      </div>
      <div class="card-footer text-right">
        <small>&copy; M&R Services</small>
      </div>
    </div>  
  </div>
</div>
    </div>
  </div>
</div>
