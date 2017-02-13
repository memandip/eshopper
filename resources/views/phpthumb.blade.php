<!DOCTYPE html>
<html>
<head>
	<title>PHP THUMB</title>
</head>
<body>

<?php

$img = Image::make('images/8.jpg');

// resize image instance
$img->resize(320, 240);
return Response::make($img, 200, ['Content-Type' => 'image/jpg']);
//$img->save(public_path().'/images/hop.jpg');

// insert a watermark
//$img->insert('public/watermark.png');

// save image in desired format
//$img->save('public/bar.jpg');

// require_once '../vendor/weotch/phpthumb/src/ThumbLib.inc.php';

// // $thumb = PhpThumbFactory::create('images/5.jpg');
// // $thumb->crop(100, 100, 300, 200);

// // $thumb->show();

// $fileData = file_get_contents('images/8.jpg');

// $thumb = PhpThumbFactory::create($fileData, array(), true);
// //$thumb->crop(100, 100, 300, 200);
// $thumb->adaptiveResize(250, 250)->createReflection(40, 40, 80, true, '#a4a4a4');
// // $thumb->resize(200, 200);
// // $thumb->resizePercent(200);
// // $thumb->rotateImageNDegrees(270);
// // $thumb->rotateImage('CW');
// // $thumb->save('images/5.jpg', 'png');

// // $imageAsString will contain the image data suitable for saving in a database.
// $imageAsString = $thumb->getImageAsString();

?>

<h2>Here's that data as an image:</h2>
<!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($imageAsString); ?>" /> -->

<img src="{{url('images/8.jpg')}}">

</body>
</html>