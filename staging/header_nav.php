<div class="row-fluid">
  <div class="padded span12">
    <a href='<?php echo $root; ?>/' class="span5">
      <div class="row-fluid">
        <img src='<?php echo $root; ?>/images/zeller_logo.png' class='span12' alt="Zeller Electric" />
      </div>
    </a>
    <nav class="span7 hidden-phone">
      <div class="row-fluid">
        <ul class="dropdown pull-right desktop-nav">
          <!-- <li><a href="<?php echo $root; ?>/">Home</a></li> -->
          <li>
            <a href="#showcase">Showcase</a>
            <ul class="top-of-stack">
              <li><a href="<?php echo $root; ?>/showcase/commercial.php">Commercial</a></li>
              <li><a href="<?php echo $root; ?>/showcase/residential.php">Residential</a></li>
              <li><a href="<?php echo $root; ?>/showcase/industrial.php">Industrial</a></li>
              <li><a href="<?php echo $root; ?>/showcase/agricultural.php">Agricultural</a></li>
              <li><a href="<?php echo $root; ?>/showcase/design-build.php">Design/Build</a></li>
              <li><a href="#">Data Communication</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $root; ?>/about.php">About Us</a></li>
          <br class="visible-tablet" />
          <li><a href="<?php echo $root; ?>/affiliations.php">Affiliations</a></li>
          <li><a href="<?php echo $root; ?>/contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="row-fluid visible-desktop">
        <div class="tagline pull-right" />
          Providing excellent service with honesty<br />
          and integrity since 1979.
        </div>
      </div>
    </nav>
  </div>
</div>
<div class="row-fluid">
  <div class="row-fluid hidden-desktop">
    <aside class="span12 center tagline">
      Providing excellent service<br class="visible-phone" />
      with honesty and integrity<br class="visible-phone" />
      since 1979.
    </aside>
  </div>
</div>
<?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?>
  <br />
  <div class="row-fluid center visible-phone" id="call-us-cta">
    <a href="tel:3092632353"><i class="fa fa-phone-square fa-5x"></i></a>
  </div>
  <aside class="visible-phone center" id="call-us-cta">
    <p class="body-text">Call us to see how we can work<br />
    together on your next project.</p>
    <a href="tel:3092632353">
      <h3>(309)263-2353</h3>
    </a>
  </aside>
<?php } ?>

<nav class="row-fluid visible-phone center">
  <ul id="phone-nav" class="span12">
    <li><a href="#showcase">Showcase</a></li>
    <li><a href="<?php echo $root; ?>/about.php">About Us</a></li>
    <li><a href="<?php echo $root; ?>/affiliations.php">Affiliations</a></li>
    <li><a href="<?php echo $root; ?>/contact.php">Contact Us</a></li>	
  </ul>
</nav>
