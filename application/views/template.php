<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>IPTV</title>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images/icon/favicon.png'); ?>"> -->


    <?php echo $include; ?>

</head>

<body class="theme-dark">
	<?php echo $header; ?>

	<div id="container" class="fixed-header sidebar-closed">
		<?php echo $navigation; ?>
		<!-- <div id="navigation">
		</div> -->
		<div id="content">
			<div class="container" style="position:relative;">
				<!--=== Page Content ===-->
				<?php echo $content; ?>
			</div>
			<!-- /.container -->
		</div>
	</div>
</body>
</html>