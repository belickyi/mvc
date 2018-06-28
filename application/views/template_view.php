<? session_start(); 
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
} else {

}

?>
<!DOCTYPE html>
<!--
Name       : OnlinePrint
Description: OnlinePrint is web application for calculate printing order.
Version    : 1.0

Modified by Belickyi Anton
https://github.com/Belickyi
-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1180">
    <title>Типография онлайн "Online print"</title>
    <!--css-->
    <link rel="stylesheet" href="css/style.min.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="http://onlineprintpro.ru/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://onlineprintpro.ru/favicon.ico" type="image/x-icon" />
    <!-- animate css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>
	<body class="body">
		<!--header-->
    <?php include 'application/views/blocks/header.php';?>
		<!--content-->
    <div class="content">
			<?php include 'application/views/content/'.$content_view; ?>
		</div>
		<!-- footer-->
		<?php include 'application/views/blocks/footer.php';?>
		<!--scripts-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/calculator.js"></script>
    <script src="js/basket.js"></script>
    <script src="js/form.js"></script>
    <script src="js/wow.min.js"></script>
	</body>
</html>