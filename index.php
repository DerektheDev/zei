<?php include('header.php'); ?>





<div id="content">

	<div id="slider">
		
		<div id="num_container">
			<ul>
				<li id="num1" class="num"><p>1</p></li>
				<li id="num2" class="num"><p>2</p></li>
				<li id="num3" class="num"><p>3</p></li>
				<li id="num4" class="num"><p>4</p></li>
				<li id="num5" class="num"><p>5</p></li>
			</ul>
		</div>
		
		<div id="slide1" class="slide">
			<img src="images/bcc500.jpg" alt="Bloomington Country Club" />
		</div>
		<div id="slide2" class="slide">
			<img src="images/hccedcenter500.jpg" alt="HCC Community Education Center" />
		</div>
		<div id="slide3" class="slide">
			<img src="images/fourseasons500.jpg" alt="Four Seasons" />
		</div>
		<div id="slide4" class="slide">
			<img src="images/isualumni500.jpg" alt="ISU Alumni Center" />
		</div>
		<div id="slide5" class="slide">
			<img src="images/fivepoints500.jpg" alt="Five Points Washington" />
		</div>
		
		
	</div>
	    
	<div id="content_area">
		<h2>Who we are</h2>  
		<p>Zeller Electric, Inc. was founded in 1979 by brothers Jon and David Zeller. Our mission is to provide excellent services with honesty and integrity. Despite all the changes in the construction industry over the years, Zeller Electric, Inc. remains dedicated to its mission, basing success on reputation rather than profit margin.</p><br />
		<p>As a member of local unions #34 and #197 (representing Peoria and Bloomington/Normal), we employ approximately thirty inside electrical journeymen and apprentices and we service all of Central Illinois.</p>
	</div><!-- content_area --> 
	
	<div id="showcase">    
		<h2>Project Showcase</h2>
		<div id="Commercial" class="thumbnail">
			<a href="<?php echo $root; ?>/showcase/commercial.php">
				<img src="images/commercial_thumb.jpg" />
				<h5>Commercial</h5>
			</a>
		</div>
		<div id="Residential" class="thumbnail">
			<a href="<?php echo $root; ?>/showcase/residential.php">
				<img src="http://placehold.it/175x175" />
				<h5>Residential</h5>
			</a>
		</div>
		<div id="Agricultural" class="thumbnail">
			<a href="<?php echo $root; ?>/showcase/agricultural.php">
				<img src="images/ag_thumb.jpg" />
				<h5>Agricultural</h5>
			</a>
		</div>
		<div id="Design-build" class="thumbnail">
			<a href="<?php echo $root; ?>/showcase/design-build.php">
				<img src="images/design_thumb.jpg" />
				<h5>Design/Build</h5>
			</a>
		</div>
		<div id="Data-comm" class="thumbnail">
			<a href="#">
				<img src="images/data_thumb.jpg" />
				<h5>Data Comm</h5>
			</a>
		</div>
	</div> <!--end showcase-->
</div> <!--end content-->





<?php include('footer.php'); ?>