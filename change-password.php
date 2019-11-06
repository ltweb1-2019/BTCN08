<?php 
  require_once 'init.php';
  if (!$currentUser) {
    header('Location: index.php');
    exit();
  }
?>
<?php include 'header.php'; ?>
<h1>Đổi mật khẩu</h1>
<?php if (isset($_POST['currentPassword']) && isset($_POST['password'])): ?>
<?php
  $password = $_POST['password'];
  $currentPassword = $_POST['currentPassword'];
  
  $success = false;

  if (password_verify($currentPassword, $currentUser['password'])) {
    updateUserPassword($currentUser['id'], $password);
    $success = true;
  }
?>
<?php if ($success): ?>
<?php header('Location: index.php'); ?>
<?php else: ?>
<div class="alert alert-danger" role="alert">
  Đổi mật khẩu thất bại
</div>
<?php endif; ?>
<?php else: ?>
<form action="change-password.php" method="POST">
  <div class="form-group">
    <label for="currentPassword">Mật khẩu hiện tại</label>
    <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Mật khẩu hiện tại">
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu mới</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu mới">
  </div>
  <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
</form>
<?php endif; ?>
<?php include 'footer.php'; ?>
