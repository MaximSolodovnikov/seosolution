<?php
defined('_JEXEC') or die;
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
				<div class="header clearfix">
					<nav>
						<ul class="nav nav-pills pull-left">
							<jdoc:include type="modules" name="main-menu" />
						</ul>
					</nav>
					<h3 class="text-muted">
						<jdoc:include type="modules" name="logo" />
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
				<h3>Меню категорий</h3>
				<ul class="nav nav-pills nav-stacked">
					<jdoc:include type="modules" name="menu-category" />
				</ul>
			</div>
			<div class="col-md-8">
				<h3>Рекомендуемые товары</h3>
				<div class="list-group">
					<jdoc:include type="modules" name="recommended-products" />
				</div>
				<h3>Список категорий с картинками</h3>
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
