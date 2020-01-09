<?php
	error_reporting(0);
	//error_reporting(E_ALL);   // COMMENT FOR PRODUCTION CODE!

  defined( '_JEXEC' ) or die( 'Restricted access' ); // no direct access
  
  $this->setGenerator(null); // Removes the CMS name and version information
  
  if ($this->countModules( 'contact-us')) {
    include('my_includes/contact_validate.inc.php');    
  }

  // Gets rid of 'Home' in the browser page title
  $menuItemId = JRequest::getInt('Itemid');
  if ($menuItemId == 101) $this->setTitle('Witness Protection Agency - Kenya');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <jdoc:include type="head" />
  <link href="<?php echo $this->baseurl?>/templates/<?php echo $this->template ?>/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="header">
    <div id="logo">  
      <h1>WPA <span>- KENYA</span></h1>
      <h2>Witness Protection Agency - Kenya</h2>
    </div><!-- /logo -->
    <div id="search">
      <jdoc:include type="modules" name="search" style="none" />
    </div><!-- /search -->
    <div id="menu">
      <jdoc:include type="modules" name="menu" style="none" />
    </div><!-- /menu -->
  </div><!-- /header -->
  <div id="main">
    <div id="sidebar">
      <div id="partners">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
      <![endif]-->
        <h2><span>OUR PARTNERS</span></h2>
        <p><a href="stakeholders/government"><img src="templates/wpa/images/partner_1_small.jpg" alt="" title="Ministry of Finance" /></a></p>
        <p><a href="stakeholders/commissions"><img src="templates/wpa/images/partner_2_small.jpg" alt="" title="The Kenya National Commission on Human Rights" /></a></p>
        <p><a href="stakeholders/security"><img src="templates/wpa/images/partner_3_small.jpg" alt="" title="National Security and Intelligence Service" /></a></p>
        <p class="last"><a href="stakeholders/security"><img src="templates/wpa/images/partner_4_small.jpg" alt="" title="Kenya Prisons Sevices" /></a></p>
      </div><!-- /partners -->
      <div id="gallery">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
      <![endif]-->
        <h2><span>PHOTO GALLERY</span></h2>
        <p><a href="resources/photo-gallery"><img src="templates/wpa/images/gallery_small.jpg" alt="" /></a></p>
      </div><!-- /gallery -->
      <div id="slideshow-mission-vision">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
      <![endif]-->
      <?php if (!$this->countModules( 'contact-us')) : ?>
        <div id="slides-mv" data-cycle-slides="> div">
          <jdoc:include type="modules" name="slideshow-mission-vision" style="none" />
        </div><!-- /slides-mv -->

      <?php else: ?>        
          <jdoc:include type="modules" name="location-map" style="none" />        
      <?php endif; ?>
      </div><!-- /slideshow-mission-vision -->
    </div><!-- /sidebar -->
  <?php if ($this->countModules( 'slideshow' )) : ?>
    <div id="slideshow">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
        <![endif]-->
      <div id="slides"><!-- <div id="slides" data-cycle-slides="> p"> -->
        <jdoc:include type="modules" name="slideshow" style="none" />
      </div><!-- /slides -->
    </div><!-- /slideshow -->
    <div id="events">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
      <![endif]-->
      <div class="content-area-wrapper">
        <div id="tab1" class="content-area">

          <div class="tab-bar">
            <ul>
              <li class="one"><a href="#tab1">UPDATES</a></li>
              <li class="two"><a href="#tab2">FUNCTIONS</a></li>
              <li class="three"><a href="#tab3">FAQs</a></li>
            </ul>
          </div><!-- /tab-bar -->
          <div class="events-list">
            <jdoc:include type="modules" name="new-events" style="none" />
          </div><!-- /events-list -->
          <p class="view-all"><a href="updates/">View More Updates</a></p>   
        </div><!-- /tab1 -->
        <div id="tab2" class="content-area">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
      <![endif]-->
          <div class="tab-bar">
            <ul>
              <li class="one"><a href="#tab1">UPDATES</a></li>
              <li class="two"><a href="#tab2">FUNCTIONS</a></li>
              <li class="three"><a href="#tab3">FAQs</a></li>
            </ul>
          </div><!-- /tab-bar -->
          <div class="functions-list">
            <jdoc:include type="modules" name="functions" style="none" />
          </div><!-- /functions-list -->
          <p class="view-all"><a href="about-us/functions-powers">Read More</a></p>
        </div><!-- /tab2 -->
        <div id="tab3" class="content-area">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
      <![endif]-->
          <div class="tab-bar">
            <ul>
              <li class="one"><a href="#tab1">UPDATES</a></li>
              <li class="two"><a href="#tab2">FUNCTIONS</a></li>
              <li class="three"><a href="#tab3">FAQs</a></li>
            </ul>
          </div><!-- /tab-bar -->
          <div class="faq-list">
            <jdoc:include type="modules" name="faqs" style="none" />
          </div><!-- /faq-list -->
          <p class="view-all"><a href="resources/faqs">View More FAQs</a></p>
        </div><!-- /tab3 -->      
      </div><!-- /content-area-wrapper -->        
    </div><!-- /events -->
    <div id="downloads">
      <!--[if lt IE 9]> 
        <div class="ie-top-left-corner"></div>
        <div class="ie-top-right-corner"></div>
        <div class="ie-bottom-right-corner"></div>
        <div class="ie-bottom-left-corner"></div>
      <![endif]-->
      <h2>Downloads</h2>
      <p><a href="images/downloads/forms/FORM%20A.pdf">Form A</a></p>
      <p><a href="images/downloads/forms/FORM%20B.pdf">Form B</a></p>
      <p class="last"><a href="images/downloads/forms/FORM%20C.pdf">Form C</a></p>
    </div><!-- /downloads -->
  <?php endif; ?>
  <?php if (!$this->countModules( 'slideshow' )) : ?>
    <!--[if lt IE 9]>
      <div id="content-body-wrapper">
      <div class="ie-top-left-corner"></div>
      <div class="ie-top-right-corner"></div>
      <div class="ie-bottom-right-corner"></div>
      <div class="ie-bottom-left-corner"></div>
    <![endif]--> 
    <div id="content-body">
      <div class="content-area">
          <jdoc:include type="modules" name="contact-us" style="none" />
          <jdoc:include type="component" />
          <?php
            if ($this->countModules( 'contact-us')) {
              include('my_includes/contact_form.inc.php');   
            }
          ?>
      </div><!-- /content-area -->
    </div><!-- /content-body -->
    <!--[if lt IE 9]>
      </div>
    <![endif]--> 
   
  <?php endif; ?>
  </div><!-- /main -->
  <div id="footer">
    <div id="social"><!--
      <p>FOLLOW US</p>
      <ul>
        <li><a href="#">Twitter</a></li>
        <li class="facebook"><a href="#">Facebook</a></li>
        <li class="youtube"><a href="#">YouTube</a></li>
      </ul> -->
    </div><!-- /social -->
    <div id="address">
      <h5>WPA</h5>
      <h6>Witness Protection Agency</h6>      
      <ul class="one">
        <li>P.O. Box 28801-00100</li>
        <li>Nairobi, Kenya</li>
        <li><strong>Liaison office</strong></li>
        <li>Milimani Law Courts,</li>
        <li>4th Floor, Room 413</li>
      </ul>
      <ul class="two">
        <li><a href="<?php echo $this->baseurl?>/">Home</a></li>
        <li><a href="about-us/background/who-we-are">About Us</a></li>
        <li><a href="programme/admission">Programmes</a></li>
        <li><a href="resources/careers">Resources</a></li>
        <li><a href="contact-us">Contact Us</a></li>
      </ul>
      <ul>
        <li><a href="credits">Credits</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Sitemap</a></li>
      </ul>
    </div><!-- /address -->
    <div id="copyright">
      <p>Copyright &copy; 2013 - 2016 Witness Protection Agency.  All Rights Reserved.</p>
      <p class="two"><span>Site by&nbsp;</span><a href="http://www.kelstra.com/">Kelstra Technologies</a></p>
    </div><!-- /copyright -->
  </div><!-- /footer -->

  <script src="templates/wpa/js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="templates/wpa/js/jquery.cycle2.min.js" type="text/javascript"></script>
  <script src="templates/wpa/js/wpa.js" type="text/javascript"></script>

</body>

</html>
<!--
Web Developer : George Okello
Year : 2013 - 2016
-->