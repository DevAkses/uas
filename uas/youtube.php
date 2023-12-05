<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
function youtube($url){
	$link=str_replace('http://www.youtube.com/watch?v=', '', $url);
	$link=str_replace('https://www.youtube.com/watch?v=', '', $link);
	$data='<object width="800" height="500" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
	<param name="src" value="http://www.youtube.com/v/'.$link.'" />
	</object>';
	return $data;
}
 
?>
<body>
    <?php
		echo youtube("https://www.youtube.com/watch?v=1V0WdTJMog8");
?>
</body>
</html>




