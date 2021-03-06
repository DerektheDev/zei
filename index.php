<?php include('header.php'); ?>

<!-- Carousel
================================================== -->
<div class="row-fluid pull-right hidden-phone">
  <div class="span12">
    <div id="zeller-carousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="zeller-carousel" data-slide-to="0" class="active"></li>
        <li data-target="zeller-carousel" data-slide-to="1"></li>
        <li data-target="zeller-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/fourseasons500.jpg" alt="Four Seasons" class="span12" />
          <div class="carousel-caption">
            <p class="lead">Four Seasons II</p>
          </div>
        </div>
        <div class="item">
          <img src="images/hccedcenter500.jpg" alt="Heartland Community College Community Education Center" id="mainimage" class="span12" />     
          <div class="carousel-caption">
            <p class="lead">Heartland Community College Community Education Center</p>
          </div>
        </div>
        <div class="item">
          <img src="images/bcc500.jpg" alt="Bloomington Country Club" title="Bloomington Country Club 1st Floor Renovations" id="mainimage" class="span12" />
          <div class="carousel-caption">
            <p class="lead">Bloomington Country Club</p>
          </div>
        </div>
      </div>
      <div class="left" href="#zeller-carousel" data-slide="prev">
        <i id="left-arrow" class="slider-arrow fa fa-chevron-circle-left"></i>
      </div>
      <div class="right" href="#zeller-carousel" data-slide="next">
        <i id="right-arrow" class="slider-arrow fa fa-chevron-circle-right"></i>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">

<div class="row-fluid">

  <article id="content_area" class="index-content span10 offset1">
    <h2 class="visible-desktop">Trusted advisors—superior service.</h2>  
    
    <div class="hidden-desktop">
      <aside class="span12 center tagline">
        <h3 style="text-align: left;">Trusted advisors &ndash; <br class="visible-phone" />
			superior service.</h3>
      </aside>
      
    </div>
    
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
          <a href="<?php echo $root; ?>/showcase.php?t=sc_commercial" class="row-fluid">
            <img src="images/home_thumbs/commercial_thumb.jpg" alt="Showcase - Commercial" class="span12" />
            <h5>Commercial</h5>
          </a>
        </div>
        
        <div id="Residential" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase.php?t=sc_residential" class="row-fluid">
            <img src="images/home_thumbs/residential_thumb.jpg" alt="Showcase - Residential" class="span12" />
            <h5>Residential</h5>
          </a>
        </div>
        
		<div id="Industrial" class="thumbnail span4">
		    <a href="<?php echo $root; ?>/showcase.php?t=sc_industrial" class="row-fluid">
		      <img src="images/home_thumbs/industrial_thumb.jpg" alt="Showcase - Industrial" class="span12" />
          <h5>Industrial</h5>
		    </a>
		  </div>
		</div>

      <div class="row-fluid">
       <div id="Agricultural" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase.php?t=sc_agricultural" class="row-fluid">
            <img src="images/home_thumbs/ag_thumb.jpg" alt="Showcase - Agricultural" class="span12" />
            <h5>Agricultural</h5>
          </a>
       </div>
      
        <div id="Design-build" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase.php?t=sc_design_build" class="row-fluid">
            <img src="images/home_thumbs/design-build_thumb.jpg" alt="Showcase - Design/Build" class="span12" />
            <h5>Design/Build</h5>
          </a>
      </div>
        
      <div id="Data-comm" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase.php?t=sc_data_communication" class="row-fluid">
            <img src="images/home_thumbs/data-comm_thumb.jpg" alt="Showcase - Data Communication" class="span12" />
            <h5>Data Comm</h5>
          </a>
      </div>
      
      </div>
    </div>
  </div>
</nav> <!--end showcase-->

<?php include('footer.php'); ?>
