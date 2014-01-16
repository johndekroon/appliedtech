<div class="jumbotron">
		<?php 
		
		$start = 1;
		$next = 2;
		$end = 3;
		While($start == $next || $start == $end || $next == $end){
		
		}
				
		$arrayPlaces = array("Bibliotheek", "New Yorker", "Febo", "Poolcentrum Fats", "Bioscoop");
		$arrayLinks = array("http://www.postzegelblog.nl/wordpress/wp-content/uploads/2011/01/Almere-bibliotheek-2.jpg","http://2.bp.blogspot.com/_NWp2AmXK99s/TPS0O2YXO5I/AAAAAAAAABo/AX_ccR60vdo/s1600/P1010003.JPG","http://www.febodelekkerste.nl/vestigingen/images/opt/fu_image_160_w457_h333.jpg","http://93.187.218.10/uploads/lG/xn/lGxnBw2axPeZejMs1GKeIQ/foto-152.jpg?w=427;h=285","http://static.panoramio.com/photos/large/4400777.jpg");
		$arrayComments = array("Ga naar de Bibliotheek en zoek een boek uit over uw favoriete hobby","Ga naar de new Yorker en zoek een leuke shirt uit","Ga naar de Febo voor een verfrissende drankje of snack","Ga naar het poolcentrum en ga een potje poolen","Ga naar de bioscoop en zoek een leuke film uit voor een andere avond");
		?>
		
		<div class="row">
			<div class="col-md-4">
				<p>
					<h3><?php echo $arrayPlaces[$start];?></h3>
					<img src="<?php echo $arrayLinks[$start];?>" height='250' width='250' class="img-responsive" />
					<p><?php echo $arrayComments[$start];?></p>
					<a class="btn btn-primary btn-lg" role="button" href="<?=site_url("proto/navigate");?>">Navigatie</a>
				</p>
			</div>
			<div class="col-md-4">
				<p>
					<h3><?php echo $arrayPlaces[$next];?></h3>
					<img src="<?php echo $arrayLinks[$next];?>" height='250' width='250' class="img-responsive" />
					<p><?php echo $arrayComments[$next];?></p>
					<a class="btn btn-primary btn-lg" role="button" href="<?=site_url("proto/navigate");?>">Navigatie</a>
				</p>
			</div>
			<div class="col-md-4">
				<p>
					<h3><?php echo $arrayPlaces[$end];?></h3>
					<img src="<?php echo $arrayLinks[$end];?>" height='250' width='250' class="img-responsive" />
					<p><?php echo $arrayComments[$end];?></p>
					<a class="btn btn-primary btn-lg" role="button" href="<?=site_url("proto/navigate");?>">Navigatie</a>
				</p>
			</div>
			
		</div>
		<br />
		<br />
		<a class="btn btn-primary btn-lg" role="button" href="<?=site_url("proto/randomRoute");?>">Volgende route</a>
	</div>
