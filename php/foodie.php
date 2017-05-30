<!DOCTYPE html>
<?php
	include 'paths.php';
?>
<html>
<head>
	<title>What Indian food business you should start in US?</title>
	<meta property="fb:app_id" content="579755062222884" />
	<meta property="og:url" content="http://pajismile.in/php/foodie.php" />
	<meta property="og:type"   content="website" />
	<meta property="og:title"  content="Which Indian food business you should start in US?" />
	<meta property="og:description" content="Check out which Indian business you should start in USA" />
	<meta property="og:image"  content="http://pajismile.in/images/foodie.jpg" />
	<?php
		include 'htmlhead.php';
	?>
</head>
<body>
	<div id="foodie-app" class="fbapp-wrapper">
			<?php
				include 'header.php';
			?>
			<div class="col-md-9">
			<div id="fbapp-enter" class="container">
				<div class="h2 ">Which Indian food business you should start in US?</div>
				<div class="fbapp-baba-pic">
					<img id="baba-pic" src="<?= $imagesPath ?>foodie.jpg" width="400px" class="center-block img-responsive">								
				</div>
				<div class="fbapp-button hidden-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="startFoodieApp();">Which Indian food business you should start in US?
					</fb:login-button>
				</div>
				<div class="fbapp-button visible-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="startFoodieApp();">Click here to check
					</fb:login-button>
				</div>
			</div>
			</div>
			<div class="col-md-3">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- pajismile -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-8405904148610759"
					     data-ad-slot="8450965821"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
			</div>



			<?php
				$gameId = "3";
				include 'gamesview.php';	
				include 'footer.php';
			?>
	</div>
<!--Loading plugins in footeer -->
	<?php
		include 'footerplugin.php';
	?>
	<!-- Baba reply-->

<div id="baba-reply" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Which Indian food business you should start in US?</h4>
	      </div>
	      <div class="modal-body">
	        <button onclick="shareFoodieResults()" class="btn-facebook center-block"><img src="<?= $imagesPath ?>fb.png" width=17px;>&nbsp; Share with your friends</button>
	        <div class="result-placement">
	        	
	        </div>	

	      </div>
	    </div>

	  </div>
	</div>


</body>
</html>
