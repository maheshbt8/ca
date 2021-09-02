<!doctype html>
<html lang="en">
<?php $folder = $this->router->fetch_class();?>
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
      <?php include_once('topcss.php');?>
		
		<title><?php echo $page_title;?>-CA</title>

		<link rel="icon" type="image/png" href="<?php echo base_url();?>front-end/img/favicon.png">
	</head>
	
	<body>
		<!-- Start Preloader Area -->
       <!--  <div class="preloader-area">
            <div class="lds-hourglass"></div>
        </div> -->
        <!-- End Preloader Area -->

<?php include_once('header.php');?>

	<?php include 'ca-app/mypages/'.strtolower($folder).'/'.$page_name.'.php';?>

<?php include_once('footer.php');?>

		<!-- Back Top top -->
        <div class="back-to-top">Top</div>
        <!-- End Back Top top -->
         
<?php include_once('scripts.php');?>

	</body>
</html>