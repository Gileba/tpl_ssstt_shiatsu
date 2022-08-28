<?php
	defined('_JEXEC') or die('Restricted access');

	$app      	= JFactory::getApplication();
	$doc      	= JFactory::getDocument();
	$menu 		= $app->getMenu();
	$params	  	= $app->getTemplate(true)->params;
	$config 	= JFactory::getConfig();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:regular,italic,700,700italic" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div id="container">
			<div id="wrapper">
				<div class="offcanvas"><jdoc:include type="modules" name="offcanvas" /></div>
				<div class="row" id="title">
					<div class="col-12 col-s-12 col-m-12 col-p-0"><jdoc:include type="modules" name="title" style="html5" /></div>
				</div>
				<div class="row" id="nav">
					<div class="col-12 col-s-12 col-m-12 col-p-0"><jdoc:include type="modules" name="nav" style="html5"  /></div>
				</div>
				<div class="row" id="header">
					<div class="col-12 col-s-12 col-m-12 col-p-0"><jdoc:include type="modules" name="header" style="html5"  /></div>
				</div>
				<div class="row" id="main">
					<div class="col-12 col-s-12 col-m-12" id="component_wrapper">
						<div id="messages"><jdoc:include type="message" /></div>
						<div id="component"><jdoc:include type="component" /></div>
					</div>
				</div>
				<div class="row" id="footer">
					<div class="col-12 col-s-12 col-m-12"><jdoc:include type="modules" name="footer" style="html5"  /></div>
				</div>
			</div>
		</div>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/hamburger.js"></script>
	</body>
</html>
