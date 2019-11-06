<?php 
  require_once 'init.php';
?>
<?php include 'header.php'; ?>
<h1>Kích hoạt tài khoản</h1>
<?php if (isset($_GET['code'])): ?>
<?php
  $code = $_GET['code'];
  $success = false;

  $success = activateUser($code);
?>
<?php if ($success): ?>
<?php header('Location: login.php'); ?>
<?php else: ?>
<div class="alert alert-danger" role="alert">
  Kích hoạt tài khoản thất bại
</div>
<?php endif; ?>
<?php else: ?>
<form method="GET">
  <div class="form-group">
    <label for="code">Mã kích hoạt</label>
    <input type="text" class="form-control" id="code" name="code" placeholder="Mã kích hoạt">
  </div>
  <button type="submit" class="btn btn-primary">Kích hoạt tài khoản</button>
</form>
<?php endif; ?>
<?php include 'footer.php'; ?>
