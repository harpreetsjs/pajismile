<?php
	include 'paths.php';
	include 'games.php';
?>
<div class="container games-view">
	<div class="row clear-both">	
		<h3>You may also like</h3>
		<ul class="col-md-12">
			<?php foreach(array_reverse(getGames()) as $x => $value) { 
				if($value['id'] != $gameId ) {	
			?>
				<li class="col-xs-12 col-md-3 game-tile">			
						<a href="<?= $phpPath.''.$value['file']?>">											
							<img src="<?= $imagesPath .$value['image']?>" class="img-tile">	
							<h4><?php echo $value['caption']?></h4>				
						</a>
				</li>
			<?php }
			} ?>
		</ul>
</div>
</div>