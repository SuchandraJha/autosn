
<html lang="en">
<head>
  <title>Automobile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

  <style>
  .outer {
    display: table;
    height: 100%;
    width: 100%;
    }

    .middle {
        display: table-cell;
        vertical-align: middle;
    }

    .inner {
        margin: auto;
        padding: auto;
        width: 100%; /*whatever width you want*/
    }

    .container {
        top: 0;
        width: 35em;
    }
  </style>
</head>


<body>
<div class="outer">
  <div class="middle">
    <div class="inner">
        <div class="container">
          <div class="tab-content">
            <div id="login" class="tab-pane fade in active">
              <h3 align=center>Login</h3><br>
                  <form action="checkUser.php" method="post">
                  <input type=hidden value="customers" name="id">
                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                      <p align=center class="text-danger"><kbd>Incorrect password</kbd></p>
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

</body>
</html>
