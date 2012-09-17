<?php require('_CONFIG.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?php echo $TITLE . '-' . $PAGE_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo $KEYWORDS; ?>">
    <meta name="author" content="<?php echo $TITLE; ?>">

	<link rel="stylesheet" href="js/leaflet.css" />
	<!--[if lte IE 8]>
	 <link rel="stylesheet" href="js/leaflet.ie.css" />
	<![endif]-->
    <link href="assets/bootstrap.gracepoint.less" rel="stylesheet/less">

</head>

<?php // $PAGE_ID is defined above call to _header.php ?>

<body id="<?php echo $PAGE_ID; ?>">

	<div id="outer">
	
	<!-- HEADER -->
		<div id="height-restriction" class="container">
			<div id="nav-bar">
				<div id="border">
					<div class="row">
						<div class="span12">
							<div class="row">
								<div class="span3">
									<a class="brand" href="index.php">
										<div id="gp-smallLogo">
										</div>	
									</a>	
								</div>
								
								<div class="span9">
									<div class="navLinks">
										<a id="nav-about" href="about.php">About Us</a>
										<a id="nav-time-location" href="time-location.php">Time &amp; Location</a>
										<a id="nav-events" href="events.php">Recent Events</a>
									</div>	
								</div>

							</div>	
						</div> 
					</div> <!-- /.row -->
				</div>
			</div><!--  /#navbar -->	
		</div><!-- /.container -->
	<!-- /HEADER -->
	
	<?php 
	if ($UPDATE_MSG) { 
		$alert_type = 'alert-info';
		if ($PAGE_ID == 'events') $alert_type = 'alert-success';
	?>
		<div class="container">
			<div class="alert <?php echo $alert_type; ?>">
				<strong>Special Announcement:</strong> <?php echo $UPDATE_MSG; ?>
			</div> <!-- /.alert -->
		</div>
	<?php } ?>
	