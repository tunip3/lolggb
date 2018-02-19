<?php
$imagepath="image.jpg";
$image=imagecreatefromjpeg( $imagepath);
header('Content-Type: image/jpeg');
imagejpeg($image);
?>
