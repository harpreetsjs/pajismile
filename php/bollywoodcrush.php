<!DOCTYPE html>
<?php
	include 'paths.php';
?>
<html>
<head>
	<title>Which Bollywood celebrity is going to propose you?</title>
	<meta property="fb:app_id" content="579755062222884" />
	<meta property="og:url" content="http://pajismile.in/php/bollywoodcrush.php" />
	<meta property="og:type"   content="website" />
	<meta property="og:title"  content="Which Bollywood celebrity is going to propose you?" />
	<meta property="og:description" content="It's always a dream of a common person to date or marry some or the other bollywood celebrity. Check out your fortune which bollywood celebrity is going to propose you in near future" />
	<meta property="og:image"  content="http://pajismile.in/images/bollycrush-thumb.gif" />
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
				<div class="h2 ">Which Bollywood celebrity is going to propose you?</div>
				<div class="fbapp-baba-pic">
					<img id="baba-pic" src="<?= $imagesPath ?>bollycrush-thumb.gif" class="center-block img-responsive">								
				</div>
				<div class="container">
					<p>It's always a dream of a common person to date or marry some or the other bollywood celebrity.</p><p> Check out your fortune which bollywood celebrity is going to propose you in near future</p><br>
				</div>
				
				<div class="fbapp-button hidden-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="checkLoginState();">Click here to see
					</fb:login-button>
				</div>
				<div class="fbapp-button visible-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="checkLoginState();">Click here to see
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
				$gameId = "4";
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

<script type="text/javascript">
	window.type = <?= $gameId ?>;
</script>
</body>
</html>
