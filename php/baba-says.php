<!DOCTYPE html>
<?php
	include 'paths.php';
?>
<html>
<head>
	<title>What Om Swami Baba's Divya Drishti know's about you?</title>
	<meta property="fb:app_id" content="579755062222884" />
	<meta property="og:url" content="http://pajismile.in/php/baba-says.php" />
	<meta property="og:type"   content="website" />
	<meta property="og:title"  content="What Om Swami Baba's Divya Drishti know's about you?" />
	<meta property="og:description" content="Om Swami is a social, religious and political leader. He has a PhD in astrology. He also claims of devoting his life to serving the country and its people." />
	<meta property="og:image"  content="http://pajismile.in/images/baba.jpg" />
	<?php
		include 'htmlhead.php';
	?>
</head>
<body>
	<div id="bab-app" class="fbapp-wrapper">
			<?php
				include 'header.php';
			?>
			<div class="col-md-9">
			<div id="fbapp-enter" class="container">
				<div class="h2 ">What Om Swami Baba's Divya Drishti know's about you?</div>
				<div class="fbapp-baba-pic">
					<img id="baba-pic" src="<?= $imagesPath ?>baba.jpg" class="center-block img-responsive">								
				</div>
				<div class="fbapp-button hidden-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="checkLoginState();">Click here to ask Om Swami Baba
					</fb:login-button>
				</div>
				<div class="fbapp-button visible-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="checkLoginState();">Click to ask Baba ji
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
	        <h4 class="modal-title">What Om Swami Baba's Divya Drishti know's about you?</h4>
	      </div>
	      <div class="modal-body">
	        <button onclick="shareResults()" class="btn-facebook"><img src="<?= $imagesPath ?>fb.png" width=17px;>&nbsp; Share with your friends</button>
	        <div class="result-placement">
	        	
	        </div>	

	      </div>
	    </div>

	  </div>
	</div>


</body>
</html>
