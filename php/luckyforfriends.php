<!DOCTYPE html>
<?php
	include 'paths.php';
?>
<html>
<head>
	<title>How much lucky are you for your friends?</title>
	<meta property="fb:app_id" content="579755062222884" />
	<meta property="og:url" content="http://pajismile.in/php/luckyforfriends.php" />
	<meta property="og:type"   content="website" />
	<meta property="og:title"  content="How much lucky are you for your friends?" />
	<meta property="og:description" content="Being lucky for others is something a nice human being always want to be. Checkout how much lucky you are for your friends." />
	<meta property="og:image"  content="http://pajismile.in/images/luckyforfriends.gif" />
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
				<div class="h2 ">How much lucky are you for your friends?</div>
				<div class="fbapp-baba-pic">
					<img id="baba-pic" src="<?= $imagesPath ?>luckyforfriends.gif" width="400px" class="center-block img-responsive">								
				</div>
				<div class="container">
					<p>Being lucky for others is something a nice human being always want to be.</p><p> Checkout how much lucky you are for your friends.</p><br>
				</div>
				
				<div class="fbapp-button hidden-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="startFoodieApp();">Click here to check!
					</fb:login-button>
				</div>
				<div class="fbapp-button visible-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="startFoodieApp();">Click here to check!
					</fb:login-button>
				</div>
			</div>
			</div>
			<div class="col-md-3 hidden">
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
				$gameId = "5";
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
	        <h4 class="modal-title">How much lucky are you for your friends?</h4>
	      </div>
	      <div class="modal-body">
	        <button onclick="shareLuckyFiendsResults()" class="btn-facebook center-block"><img src="<?= $imagesPath ?>fb.png" width=17px;>&nbsp; Share with your friends</button>
	        <div class="result-placement">
	        	
	        </div>	

	      </div>
	    </div>

	  </div>
	</div>

<script type="text/javascript">
	window.type = <?= $gameId ?>;
</script>
</body>
</html>
