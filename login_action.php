<?php ob_start(); ?>
<!-- <?php header("Location: ./adminlte/pages/tables/simple.html");?> -->
<?php header("Location: ./table.html");?>
<?php ob_end_flush(); ?>
Welcome <?php echo $_POST["email"]; ?><br>
Your pwd is: <?php echo $_POST["password"]; ?>
<!-- header("Location: simple.html"); -->
<!-- exit; -->