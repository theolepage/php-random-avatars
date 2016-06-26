<?php
require 'randomAvatarsGenerator.php';
$avatar = new RandomAvatars();
$avatar->generate();
$avatar->draw();
$avatar->saveImage('generated', 'avatar.png');
?>

<!DOCTYPE html>
<html>
<head>
	<title>randomAvatarsGenerator</title>
	<style type="text/css">
		body {
			background: #283644;
			margin: 0;
		}
		img.avatar {
			position: absolute;
    		top: 50%;
    		left: 50%;
    		transform: translateX(-50%) translateY(-50%);
		}
	</style>
</head>
<body>
	
	<?php $avatar->show('<img alt="avatar" class="avatar">'); ?>

</body>
</html>