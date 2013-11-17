<?php include('header.php'); ?>

<!--<div class="row-fluid pull-left hidden-phone">
  <div class="span12">
    <figure id="slider" class="row-fluid">
      
      <nav id="">
        <a id="left-arrow"  class="slider-arrow">
          <i class='icon-chevron-sign-left'></i>
        </a>
        <a id="right-arrow" class="slider-arrow">
          <i class='icon-chevron-sign-right'></i>
        </a>
      </nav>

      <div id="num_container" class="pull-right">
        <ul>
          <li id="num1" class="num current_num" num='1'><p>1</p></li>
          <li id="num2" class="num" num='2'><p>2</p></li>
          <li id="num3" class="num" num='3'><p>3</p></li>
          <li id="num4" class="num" num='4'><p>4</p></li>
          <li id="num5" class="num" num='5'><p>5</p></li>
          <li id="num6" class="num" num='6'><p>6</p></li>
        </ul>
      </div>
      
      <div class="row-fluid">
        <div id="slide1" class="slide current_slide">
          <div class="row-fluid">
        		<figure><img src="images/bcc500.jpg" alt="Bloomington Country Club" title="Bloomington Country Club 1st Floor Renovations" class="span12" /><figcaption class="slide-caption">Bloomington Country Club 1st Floor Renovation</figcaption></figure>
          </div>
        </div>
        
        <div id="slide2" class="slide">
          <div class="row-fluid">
            <figure><img src="images/fourseasons500.jpg" alt="Four Seasons" class="span12"/><figcaption class="slide-caption">Four Seasons II</figcaption></figure>
          </div>
        </div>
        <div id="slide3" class="slide">
        	<div class="row-fluid">
            <figure><img src="images/hccedcenter500.jpg" alt="HCC Community Education Center" class="span12"/><figcaption class="slide-caption">Heartland Community College Education Center</figcaption></figure>      
        	</div>
        </div>
        <div id="slide4" class="slide">
          <div class="row-fluid">
            <figure><img src="images/isualumni500.jpg" alt="ISU Alumni Center" class="span12"/><figcaption class="slide-caption">ISU Alumni Center</figcaption></figure>
          </div>
        </div>
        <div id="slide5" class="slide">
          <div class="row-fluid">
            <figure><img src="images/fivepoints500.jpg" alt="Five Points Washington" class="span12"/><figcaption class="slide-caption">Five Points Washington</figcaption></figure>
          </div>
        </div>
        <div id="slide6" class="slide">
          <div class="row-fluid">
            <figure><img src="images/autohaus500.jpg" alt="Autohaus of Peoria" class="span12"/><figcaption class="slide-caption">Autohaus of Peoria</figcaption></figure>
          </div>
        </div>
        <div class="slide_breaker">
          <div class="row-fluid">
            <img src="images/hccedcenter500.jpg" alt="HCC Community Education Center" class="span12" style="visibility:hidden;" />
          </div>
        </div>
      </div>
    </figure>
  </div>
</div>-->

<!-- Carousel
================================================== -->
<div class="row-fluid pull-right hidden-phone">
  <div class="span12">
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
		<img src="images/fourseasons500.jpg" alt="Four Seasons" />      
		<div class="container">
        <div class="carousel-caption">
          <p class="lead">Four Seaons II</p>
        </div>
      </div>
    </div>
    <div class="item">
		<img src="images/hccedcenter500.jpg" alt="HCC Community Education Center" />     
		 <div class="container">
        <div class="carousel-caption">
          <p class="lead">HCC Community Education Center</p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/bcc500.jpg" alt="Bloomington Country Club" title="Bloomington Country Club 1st Floor Renovations" />
      <div class="container">
        <div class="carousel-caption">
          <p class="lead">Bloomington Country Club</p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>
</div><!-- /.carousel -->

<div class="container-fluid">

<div class="row-fluid">
<div class="span1">
&nbsp;
</div>

<article id="content_area" class="index-content span10">
  <h2>Trusted advisors—superior service.</h2>  
  <p class="body-text">Zeller Electric is a local, family-owned company that has served Central Illinois’ electrical service, design, and installation needs for 35 years. Our team works hard to stay current on advances in the industry through ongoing training and educational opportunities, so our customers directly benefit from the best innovative and customized solutions. But we don’t just deliver practical and efficient systems—we also provide the quality service our customers deserve.</p> 
  <p class="body-text">Dedication, honesty, and integrity are traits that are important to us, and we look forward to sharing these values—and our expertise—with you. Call us today for all your electrical contracting needs!</p>
  <hr class="hr-style" />
</article><!-- content_area --> 

</div>

	
	<div class="span1">
&nbsp;
	</div>

<nav id="showcase">
  <div class="row-fluid">
    <div class="span12">
      <h2 class="hidden-tablet">Project Showcase</h2>
      
      <div class="row-fluid">
        <div id="Commercial" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/commercial.php" class="row-fluid">
            <img src="images/home_thumbs/commercial_thumb.jpg" class="span12" />
          </a>
          <h5>Commercial</h5>
        </div>
        
        <div id="Residential" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/residential.php" class="row-fluid">
            <img src="http://placehold.it/175x75" class="span12" />
          </a>
          <h5>Residential</h5>
        </div>
        
		<div id="Industrial" class="thumbnail span4">
		    <a href="<?php echo $root; ?>/showcase/industrial.php" class="row-fluid">
		      <img src="http://placehold.it/175x75" class="span12" />
		    </a>
		    <h5>Industrial</h5>
		  </div>
		</div>

      <div class="row-fluid">
       <div id="Agricultural" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/agricultural.php" class="row-fluid">
            <img src="images/home_thumbs/ag_thumb.jpg" class="span12" />
          </a>
          <h5>Agricultural</h5>
       </div>
      
        <div id="Design-build" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/design-build.php" class="row-fluid">
            <img src="images/home_thumbs/design_thumb.jpg" class="span12" />
          </a>
          <h5>Design/Build</h5>
      </div>
        
      <div id="Data-comm" class="thumbnail span4">
          <a href="#" class="row-fluid">
            <img src="images/home_thumbs/data_thumb.jpg" class="span12" />
          </a>
          <h5>Data Comm</h5>
      </div>
      
      </div>
    </div>
  </div>
</nav> <!--end showcase-->

<?php include('footer.php'); ?>