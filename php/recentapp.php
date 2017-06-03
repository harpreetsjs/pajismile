<?php 
	include 'paths.php';
	include 'games.php';
?>
<aside class="recent-app col-md-3">
	<h2>Games by Paji	</h2>
		<ul>
		<?php foreach(array_reverse(getGames()) as $x => $value) { ?>
			<li class="col-md-12">
				<div class="app-container">				
					<a href="<?= $phpPath.''.$value['file']?>">											
						<img src="<?= $imagesPath .$value['image']?>" class="img-tile">	
						<h4><?php echo $value['caption']?></h4>				
					</a>	
				</div>	
			</li>
		<?php } ?>	
		</ul>		
</aside>
