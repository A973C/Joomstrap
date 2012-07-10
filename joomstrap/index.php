<?php  
/*------------------------------------------------------------------------
# author    A973C
# copyright Copyright © 2012 a973c.com. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.a973c.com
-------------------------------------------------------------------------*/

defined( '_JEXEC' ) or die; 
$doc = JFactory::getDocument();
$user =& JFactory::getUser();
 $config =& JFactory::getConfig();
 $tpath = "/templates/joomstrap";
$this->setGenerator(null);
// load sheets and scripts
//$doc->addStyleSheet($tpath.'/css/template.css.php');
 $doc->addScript($tpath.'/js/modernizr.js'); // <- this script must be in the head
// unset scripts, put them into /js/template.js.php to minify http requests
unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-core.js']);
unset($doc->_scripts[$this->baseurl.'/media/system/js/core.js']);
unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);
?>
<!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->
<head>
  <script type="text/javascript" src="/templates/joomstrap/js/jquery.js"></script>
  <script type="text/javascript" src="/templates/joomstrap/js/bootstrap.js"></script>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /> <!-- mobile viewport -->  
  <link rel="stylesheet" href="/templates/joomstrap/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/templates/joomstrap/css/bootstrap-responsive.css" type="text/css" />
  <link rel="stylesheet" media="only screen and (max-width: 768px)" href="templates/joomstrap/css/tablet.css" type="text/css" />
  <link rel="stylesheet" media="only screen and (min-width: 320px) and (max-width: 480px)" href="/templates/joomstrap/css/phone.css" type="text/css" />
  <!--[if IEMobile]><link rel="stylesheet" media="screen" href="<?php echo $tpath; ?>/css/phone.css" type="text/css" /><![endif]--> <!-- iemobile -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/apple-touch-icon-57x57.png"> <!-- iphone, ipod, android -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/apple-touch-icon-72x72.png"> <!-- ipad -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/apple-touch-icon-114x114.png"> <!-- iphone retina -->
  <!--[if lte IE 8]>
    <style> 
      {behavior:url(<?php echo $tpath; ?>/js/PIE.htc);}
    </style>
  <![endif]-->
</head>

<body style="padding-bottom: 40px;padding-top: 60px;">
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
		  <div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
			  </a>
			  <a class="brand" href="/"><jdoc:include type="modules" name="logo" /></a>
			  <div class="nav-collapse"><jdoc:include type="modules" name="menu" /></div>
			  <jdoc:include type="modules" name="login" /> 
		  </div>
	  </div>
	</div>
	
	<div class="container">
		<?php if ($this->countModules('breadcrumbs')): ?>
			<jdoc:include type="modules" name="breadcrumbs" />
		<?php endif; ?>
		<?php if ($this->countModules('maintop')): ?>
			<div class="hero-unit">
				<jdoc:include type="modules" name="maintop" />
			</div>
		<?php endif; ?>
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		<div class="row" style="margin-top:30px;">
			<jdoc:include type="modules" name="bottom-1" />
		</div>
		<div class="row" style="margin-top:30px;">
			<jdoc:include type="modules" name="bottom-2" />
		</div>
		<div class="row" style="margin-top:30px;">
			<jdoc:include type="modules" name="bottom-3"/>
		</div>
		<?php if ($this->countModules('footer')): ?>
			<hr>
			<footer>
				<p><jdoc:include type="modules" name="footer" /></p>
			</footer>
		<?php endif; ?>
	</div>
	<jdoc:include type="modules" name="debug" />
</body>

</html>

