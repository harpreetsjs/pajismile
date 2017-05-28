<!DOCTYPE html>
<html>
<head>
	<title>pajismile.in</title>
	<meta property="fb:app_id" content="579755062222884" />
	<meta property="og:url" content="http://pajismile.in" />
	<meta property="og:type"   content="website" />
	<meta property="og:title"  content="Funny games" />
	<meta property="og:description" content="pajismile.in aims for creating games that are funny." />
	<meta property="og:image"  content="http://pajismile.in/images/pajiogbanner1.gif" />
	<?php
		include 'php/htmlhead.php';
	?>
</head>
<body>
	<div id="home-page" class="fbapp-wrapper">
			<?php
				include 'php/header.php';
			?>
			<?php
				/*include 'php/banner.php';*/
			?>
			<?php
				include 'php/recentapp.php';
			?>
			<?php
				include 'php/funnymessages.php';
			?>
			<?php
				include 'php/youtube.php';
			?>
			<?php
				include 'php/footer.php';
			?>
	</div>
<!--Loading plugins in footeer -->
	<?php
		include '/php/footerplugin.php';
	?>
</body>
</html>
