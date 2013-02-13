<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Test</title>
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
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="/sandboxy">Sandboxy - PHP, Javascript, HTML5/CSS3 Playground</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active">
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
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">

			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#object-basics" data-toggle="tab">Object Basics</a>
					</li>
					<li>
						<a href="#advanced-features" data-toggle="tab">Advanced Features</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="object-basics" class="tab-pane active">
						<h4>Our Very First Object</h4>
						<p>
							Below is the actual output of our very first object
						</p>
						<pre>
							class shopProduct {
								public $title = "default product";
								public $producerMainName = "main name";
								public $producerFirstName = "first name";
								public $price = 0;
								
								function __construct($title, $firstName, $mainName, $price) {
									$this->title = $title;
									$this->producerFirstName = $firstName;
									$this->producerMainName = $mainName;
									$this->price = $price;
								}
							
								function getProducer() {
									return "{$this->producerFirstName}".
										   " {$this->producerMainName}";
								}
							}	
								
							$product1 = new shopProduct("My Antonia", "Willa", "Cather", 5.99);
							$product2 = new shopProduct();
							
							print "author: {$product1->getProducer()}\n";
						</pre>
						<h4>Output:</h4>
						<?php
							class shopProduct {
								public $title = "default product";
								public $producerMainName = "main name";
								public $producerFirstName = "first name";
								public $price = 0;
								
								function __construct($title, $firstName, $mainName, $price) {
									$this->title = $title;
									$this->producerFirstName = $firstName;
									$this->producerMainName = $mainName;
									$this->price = $price;
								}
							
								function getProducer() {
									return "{$this->producerFirstName}".
										   " {$this->producerMainName}";
								}
							}	
								
							$product1 = new shopProduct("My Antonia", "Willa", "Cather", 5.99);
							$product2 = new shopProduct();
							
							print "author: {$product1->getProducer()}\n";
							
							// print '<br />';
// 							
// 							
							// $fname = "Taylor";
							// $lname = "Pennock";
// 							
							// $username_partial = substr($fname, 0, 2);
							// $username = $username_partial.$lname;
							// echo 'First Name: '.$fname;
							// print "<br />";
							// echo 'Last Name: '.$lname;
							// print "<br />";
							// echo 'Username: '.$username;
							
							
						?>
					</div>
					<div id="advanced-features" class="tab-pane">
						<h4>Advanced Features</h4>
						<p>
							and so on ...
						</p>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.tabbable -->
			
			<!-- <div class="tabbable">
				<ul id="prosTab" class="nav nav-tabs">
	           		<li class="active"> <a href="#protoss" data-toggle="tab">Protoss</a></li>
	           		<li><a href="#zerg" data-toggle="tab">Zerg</a></li>
	           		<li><a href="#terran" data-toggle="tab">Terran</a></li>
	           	</ul>
				<div class="tab-content">
					<div id="protoss" class="tab-pane active">
						<ul id="protossPros" class="nav nav-pills">
							<li class="active">
								<a href="#huk" data-toggle="tab">Huk</a>
							</li>
							<li>
								<a href="#pro2" data-toggle="tab">Pro 2</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="huk" class="tab-pane active">
								<p>HUK!</p>
							</div>
							<div id="pro2" class="tab-pane">
								<p>Pro 2</p>
							</div>
						</div>
					</div>
					<div id="zerg" class="tab-pane"><p>Idra</p></div>
					<div id="terran" class="tab-pane"><p>MKP</p></div>
				</div>
			</div> -->	

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
