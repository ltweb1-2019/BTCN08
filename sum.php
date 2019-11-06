<?php 
  require_once 'init.php';
  if (!$currentUser) {
    header('Location: index.php');
    exit();
  }
?>
<?php include 'header.php'; ?>
<h1>Tính tổng hai số</h1>
<?php if (isset($_POST['number1']) && isset($_POST['number2'])): ?>
<?php
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $sum = sum($number1, $number2);
?>
<div class="alert alert-primary" role="alert">
  Kết quả tổng hai số là <?php echo $number1; ?> và <?php echo $number2; ?> là <strong><?php echo $sum; ?></strong>
</div>
<?php else: ?>
<form action="sum.php" method="POST">
  <div class="form-group">
    <label for="number1">Số thứ nhất</label>
    <input type="text" class="form-control" id="number1" name="number1" placeholder="Điền số vào đây">
  </div>
  <div class="form-group">
    <label for="number2">Số thứ hai</label>
    <input type="text" class="form-control" id="number2" name="number2" placeholder="Điền số vào đây">
  </div>
  <button type="submit" class="btn btn-primary">Tính tổng</button>
</form>
<?php endif; ?>
<?php include 'footer.php'; ?>
