<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sandboxy :: Misc</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles --> 
		<link href="../css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<link href="../css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="../assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">		
		
		<script type="text/javascript">
			function colorCheck(id){
				id.value=='Enter a new task...'? id.style.color = 'green' : id.style.color = 'red';
			}
		</script>
	</head>

	<body onload="colorCheck(id)">

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="/sandboxy">Sandboxy - PHP, Javascript, HTML5/CSS3 Playground</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li>
								<a href="/sandboxy">Welcome</a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									PHP - OPP
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="/sandboxy/php-opp/#objects">Objects</a>
									</li>
									<li>
										<a href="/sandboxy/php-opp/#patterns">Patterns</a>
									</li>
									<li>
										<a href="/sandboxy/php-opp/#practice">Practice</a>
									</li>
									<li class="divider"></li>
									<li class="nav-header">More Stuff</li>
									<li>
										<a href="#">Extras</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="/sandboxy/chosen">Chosen</a>
							</li>
							<li class="active">
								<a href="/sandboxy/misc">Misc</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">

			<div class="page-header">
				<h1>Misc. <small>Random Bits and Pieces</small></h1>
			</div>
			
			<section id="competition">
				<h2>Competition</h2>
				<ul class="nav nav-pills">
					<li>
						<a href="/sandboxy/misc/brett.php">Brett's Code</a>
					</li>
					<li>
						<a href="/sandboxy/misc/kevin.php">Kevin's Code</a>
					</li>
				</ul>
			</section>
			
			<hr>
			
			<section id="form-color-behavior">
				<h2>Form Color Behavior</h2>
				<p>
					<textarea style="color:green;" onkeyup="this.style.color=(this.value.length>10)?'red':'green';">'.$task.'</textarea>
					<textarea onblur="this.value='Enter a new task...')?'#A7A7A7':'initial'" rows="4" cols="50" id="position'.$i.'" class="taskbox">'.$task.'</textarea>
					
					<textarea onblur="colorCheck(this)" rows="4" cols="50" id="id" class="position'.$i.' taskbox"></textarea>
				</p>
			</section>
			
			
		</div>
		<!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../js/jquery-1.7.2.min.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-transition.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-alert.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-modal.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-dropdown.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-scrollspy.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-tab.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-tooltip.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-popover.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-button.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-collapse.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-carousel.js"></script>
		<script src="../js/bootstrap/bootstrap-plugins/bootstrap-typeahead.js"></script>

	</body>
</html>
