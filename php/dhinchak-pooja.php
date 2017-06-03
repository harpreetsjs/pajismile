<!DOCTYPE html>
<?php
	include 'paths.php';
?>
<html>
<head>
	<title>Which lines does Dhinchak Pooja wants to say to you?</title>
	<meta property="fb:app_id" content="579755062222884" />
	<meta property="og:url" content="http://pajismile.in/php/dhinchak-pooja.php" />
	<meta property="og:type"   content="website" />
	<meta property="og:title"  content="Which lines does Dhinchak Pooja wants to say to you?" />
	<meta property="og:description" content="Dhinchak Pooja: A look at the new Internet phenomenon of cringe-pop." />
	<meta property="og:image"  content="http://pajismile.in/images/dhinchak_pooja.jpg" />
	<?php
		include 'htmlhead.php';
		$gameId = "2";
	?>
</head>
<body>
	<div id="bab-app" class="fbapp-wrapper">
			<?php
				include 'header.php';
			?>
			<div class="col-md-9">
			<div id="fbapp-enter" class="container">
				<div class="h2 ">Which lines does Dhinchak Pooja wants to say to you?</div>
				<div class="fbapp-baba-pic">
					<img id="baba-pic" src="<?= $imagesPath ?>dhinchak_pooja.jpg" class="center-block img-responsive">								
				</div>
				<div class="fbapp-button hidden-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="checkLoginState(2);">Click here to ask Dhinchak Pooja
					</fb:login-button>
				</div>
				<div class="fbapp-button visible-xs">
					<fb:login-button scope="public_profile" data-size="xlarge"  onlogin="checkLoginState();">Ask Dhinchak Pooja
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
	        <h4 class="modal-title">Which lines does Dhinchak Pooja wants to say to you?</h4>
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
	window.type = 2;
</script>

</body>
</html>
