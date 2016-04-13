<?php
defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Output as HTML5
$doc->setHtml5(true);

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}
// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie10-viewport-bug-workaround.css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css">
    <!--[if lt IE 9]>
		<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	
  </head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<nav>
						<jdoc:include type="modules" name="main-menu" />
					</nav>
				</div>
				<div class="col-md-4">
					<h3 class="text-muted">
						<a href="<?php echo $this->baseurl; ?>/">
							<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="logo" />
						</a>
					</h3>
				</div>
			</div>

		  <div class="row">
			<jdoc:include type="modules" name="slider" />
		  </div><hr>

		<jdoc:include type="message" />
		<jdoc:include type="component" />

		<div class="row">
			<div class="col-md-4">
				<h3>ћеню категорий</h3>
				<ul class="nav nav-pills nav-stacked">
					<jdoc:include type="modules" name="menu-category" />
				</ul>
			</div>
			<div class="col-md-8">
				<h3>–екомендуемые товары</h3>
				<div class="list-group">
					<jdoc:include type="modules" name="recommended-products" />
				</div>
				<h3>—писок категорий с картинками</h3>
				<div class="list-group">
					<jdoc:include type="modules" name="list-of-categories-with-pictures" />
				</div>
			</div>
		</div>

		<footer class="footer">
			<jdoc:include type="modules" name="footer" />
		</footer>

		</div> <!-- /container -->
	</body>
</html>