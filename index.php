<?php include('header.php'); ?>

<div class="row-fluid">
  <div class="span12">
    <div id="slider" class="row-fluid">
      <!--
      <div id="num_container">
        <ul>
          <li id="num1" class="num"><p>1</p></li>
          <li id="num2" class="num"><p>2</p></li>
          <li id="num3" class="num"><p>3</p></li>
          <li id="num4" class="num"><p>4</p></li>
          <li id="num5" class="num"><p>5</p></li>
        </ul>
      </div>
      -->
      <div class="row-fluid">
        <div id="slide1" class="slide">
          <div class="row-fluid">
            <img src="images/hccedcenter500.jpg" alt="HCC Community Education Center" class="span12"/>
          </div>
        </div>
        <div id="slide2" class="slide">
          <div class="row-fluid">
            <img src="images/fourseasons500.jpg" alt="Four Seasons" class="span12"/>
          </div>
        </div>
        <div id="slide3" class="slide">
          <div class="row-fluid">
            <img src="images/isualumni500.jpg" alt="ISU Alumni Center" class="span12"/>
          </div>
        </div>
        <div id="slide4" class="slide">
          <div class="row-fluid">
            <img src="images/fivepoints500.jpg" alt="Five Points Washington" class="span12"/>
          </div>
        </div>
        <div id="slide5" class="slide">
          <div class="row-fluid">
            <img src="images/autohaus500.jpg" alt="Autohaus of Peoria" class="span12"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="content_area">
  <h2>Who we are</h2>  
  <p>
    Zeller Electric, Inc. was founded in 1979 by brothers Jon and David Zeller. Our mission is to provide excellent services with honesty and integrity. Despite all the changes in the construction industry over the years, Zeller Electric, Inc. remains dedicated to its mission, basing success on reputation rather than profit margin.
  </p>
  <br />
  <p>
    As a member of local unions #34 and #197 (representing Peoria and Bloomington/Normal), we employ approximately thirty inside electrical journeymen and apprentices and we service all of Central Illinois.
  </p>
</div><!-- content_area --> 

<div class="row-fluid">
  <div class="span12">
    <div id="showcase">
      <h2>Project Showcase</h2>
      
      <div class="row-fluid">
        <div id="Commercial" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/commercial.php" class="row-fluid">
            <img src="images/commercial_thumb.jpg" class="span12" />
          </a>
          <h5>Commercial</h5>
        </div>
        
        <div id="Residential" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/residential.php" class="row-fluid">
            <img src="http://placehold.it/175x175" class="span12" />
          </a>
          <h5>Residential</h5>
        </div>
        
        <div id="Agricultural" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/agricultural.php" class="row-fluid">
            <img src="images/ag_thumb.jpg" class="span12" />
          </a>
          <h5>Agricultural</h5>
        </div>
      </div>
      
      <div class="row-fluid">
        <div id="Design-build" class="thumbnail span4">
          <a href="<?php echo $root; ?>/showcase/design-build.php" class="row-fluid">
            <img src="images/design_thumb.jpg" class="span12" />
          </a>
          <h5>Design/Build</h5>
        </div>
        
        <div id="Data-comm" class="thumbnail span4">
          <a href="#" class="row-fluid">
            <img src="images/data_thumbclass="span12" .jpg" />
          </a>
          <h5>Data Comm</h5>
        </div>
      </div>
    </div>
  </div>
</div> <!--end showcase-->

<?php include('footer.php'); ?>