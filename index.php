<?php
echo '<li><iframe width="1" height="1" src="//www.youtube.com/embed/u3pQv9mmZMk?rel=0&start=2&autoplay=1&loop=1&playlist=u3pQv9mmZMk" frameborder="0" allowfullscreen></iframe></li>';
$imagepath="image.jpg";
$image=imagecreatefromjpeg( $imagepath);
header('Content-Type: image/jpeg');
imagejpeg($image);
?>
