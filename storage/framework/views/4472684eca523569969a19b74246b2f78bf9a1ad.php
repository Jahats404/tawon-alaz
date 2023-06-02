<!doctype html>
<html lang="en">
<head>
  <title>Tawon Alaz</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="assets<?php echo e(('/css/login.css')); ?>" rel="stylesheet">
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <p class="text-center text-light" style="margin-top: -10px;">-Tawon Alaz-</p>
    <form action="<?php echo e(route('postlogin')); ?>" method="POST">
        <?php echo csrf_field(); ?>
      <div class="user-box">
        <input type="text" name="name" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <button type="submit">
      
        <span></span>
        <span></span>
        <span></span>
        <span></span>        
      
      submit
    </button>
    </form>
  </div>
</body>
</html>
<?php /**PATH /home/ikmalghz/Documents/tawon-alaz/tawon-alaz/resources/views/login.blade.php ENDPATH**/ ?>