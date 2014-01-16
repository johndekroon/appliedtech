<div class="jumbotron">
<?php
$start = rand(0,2);
		
		
				
		$arrayPlaces = array("Bibliotheek", "New Yorker", "Febo");
		$arrayLinks = array("http://www.postzegelblog.nl/wordpress/wp-content/uploads/2011/01/Almere-bibliotheek-2.jpg","http://2.bp.blogspot.com/_NWp2AmXK99s/TPS0O2YXO5I/AAAAAAAAABo/AX_ccR60vdo/s1600/P1010003.JPG","http://www.febodelekkerste.nl/vestigingen/images/opt/fu_image_160_w457_h333.jpg");
		$arrayMaps = array ('<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=bibliotheek+almere&amp;aq=&amp;sll=52.371368,5.221446&amp;sspn=0.01259,0.033023&amp;num=10&amp;ie=UTF8&amp;hq=bibliotheek+almere&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=4331307299482052396&amp;ll=52.373922,5.218849&amp;spn=0.012576,0.027466&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.nl/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=bibliotheek+almere&amp;aq=&amp;sll=52.371368,5.221446&amp;sspn=0.01259,0.033023&amp;num=10&amp;ie=UTF8&amp;hq=bibliotheek+almere&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=4331307299482052396&amp;ll=52.373922,5.218849&amp;spn=0.012576,0.027466&amp;z=15&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>','<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/maps?q=new+yorker+almere&amp;ie=UTF8&amp;hq=new+yorker&amp;hnear=Almere,+Flevoland&amp;t=m&amp;fll=52.371165,5.221151&amp;fspn=0.003147,0.008256&amp;st=113109590755634326600&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=52.371853,5.219836&amp;spn=0.003144,0.006866&amp;z=17&amp;output=embed"></iframe><br /><small><a href="https://maps.google.nl/maps?q=new+yorker+almere&amp;ie=UTF8&amp;hq=new+yorker&amp;hnear=Almere,+Flevoland&amp;t=m&amp;fll=52.371165,5.221151&amp;fspn=0.003147,0.008256&amp;st=113109590755634326600&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=52.371853,5.219836&amp;spn=0.003144,0.006866&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>','<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=febo+almere&amp;aq=&amp;sll=52.371424,5.22099&amp;sspn=0.003147,0.008256&amp;ie=UTF8&amp;hq=febo&amp;hnear=Almere,+Flevoland&amp;t=m&amp;ll=52.372835,5.219579&amp;spn=0.006288,0.013733&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.nl/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=febo+almere&amp;aq=&amp;sll=52.371424,5.22099&amp;sspn=0.003147,0.008256&amp;ie=UTF8&amp;hq=febo&amp;hnear=Almere,+Flevoland&amp;t=m&amp;ll=52.372835,5.219579&amp;spn=0.006288,0.013733&amp;z=16" style="color:#0000FF;text-align:left"></a></small>');
	?>
	<h1>Navigeer naar</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mollis diam vitae ullamcorper congue. Cras faucibus nisl feugiat aliquet dapibus. Praesent sollicitudin odio at lectus vulputate, nec sagittis lorem scelerisque. </p>			
		<div class="row">
			<div class="col-md-4">
				<p>
					<h3><?php echo $arrayPlaces[$start];?></h3>
					<img src="<?php echo $arrayLinks[$start];?>" height='250' width='250' class="img-responsive" />
					<br />
					<br />
					<a class="btn btn-primary btn-lg" role="button" href="<?=site_url("proto/navigate");?>">Andere locatie</a>
				</p>
			</div>
			<?php echo $arrayMaps[$start]; ?>
				</p>
			</div>
		</div>
	</div>
