<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Brett's Code</title>
	</head>

	<body>

		<div>
			<h1>Brett's Code</h1>
			<?php
				function walk($arr)
				{
					foreach($arr as $var)
					{
						if(!is_array($var))
						{
							echo $var . "<br>";
							continue;
						}
						walk($var);
					}
					echo "Memory: " . memory_get_usage() . "<br>";
				}
				$superarray = array(1,2,3,array(4,5,6, array("one"=>"asdf", "two"=>"yuio", "three"=>"jkl;")));
				$time_start = microtime(true);
				walk($superarray);
				$time_end = microtime(true);
				$time = $time_end - $time_start;
				echo $time . " seconds <br>";
			?>
		</div>

	</body>
</html>
