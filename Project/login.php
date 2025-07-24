<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"&quot; rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body style="background-color: #838d9cff;">

  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-6 col-lg-5 col-xl-4">
        <div class="bg-white p-4 p-md-5 rounded shadow">
          <h3 class="text-center mb-4">Login</h3>
          <form action="check_login.php" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username"
                required>
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password"
                required>
              <label for="floatingPassword">Password</label>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js&quot;
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q crossorigin="anonymous">
  </script>
</body>

</html>