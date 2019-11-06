<?php 
  require_once 'init.php';
?>
<?php include 'header.php'; ?>
<h1>Đăng nhập</h1>
<?php if (isset($_POST['email']) && isset($_POST['password'])): ?>
<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
  $success = false;

  $user = findUserByEmail($email);

  if ($user && $user['status'] == 1 && password_verify($password, $user['password'])) {
    $success = true;
    $_SESSION['userId'] = $user['id'];
  }
?>
<?php if ($success): ?>
<?php header('Location: index.php'); ?>
<?php else: ?>
<div class="alert alert-danger" role="alert">
  Đăng nhập thất bại
</div>
<?php endif; ?>
<?php else: ?>
<form action="login.php" method="POST">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Tên đăng nhập">
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>
<?php endif; ?>
<?php include 'footer.php'; ?>
