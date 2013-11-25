<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Kevin's Code</title>
	</head>

	<body>

		<div>
			<h1>Kevin's Code</h1>
			<?php
			$superarray = array(1, 2, 3, array(4, 5, 6, array("one" => "asdf", "two" => "yuio", "three" => "jkl;")));
			function b($s) {
				if (!is_array($s)) {
					echo $s . "<br />";
					return;
				}
				foreach ($s as $k => $v) {
					b($v);
				}
				echo "Memory: " . memory_get_usage() . "<br>";
			}
			$time_start = microtime(true);
			b($superarray);
			$time_end = microtime(true);
			$time = $time_end - $time_start;
			echo "<br />" . $time . " seconds <br>";
			?>
		</div>

	</body>
</html>