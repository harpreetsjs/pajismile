<!DOCTYPE html>
<?php
	include 'paths.php';
?>
<html>
<head>

	<?php
		include 'htmlhead.php';
	?>
	<script type="text/javascript" src="<?= $jsPath ?>profilepic.js"></script>
</head>
<body>
	
		<div class="fbapp-button hidden-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="checkstate();">Click here to ask Om Swami Baba
					</fb:login-button>
				</div>
		
	<?php
		include 'footer.php';
	?>
<!--Loading plugins in footer -->
	<?php
		include 'footerplugin.php';
	?>
	<!-- Baba reply-->


</body>
</html>
