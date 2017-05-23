<!-- http://demo.interface.club/limitless/layout_1/LTR/default/form_controls_extended.html-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="system/src/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="system/src/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="system/src/css/core.css" rel="stylesheet" type="text/css">
	<link href="system/src/css/components.css" rel="stylesheet" type="text/css">
	<link href="system/src/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<!-- Core JS files -->
	<script type="text/javascript" src="system/src/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="system/src/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="system/src/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="system/src/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/forms/inputs/autosize.min.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/forms/inputs/formatter.min.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/forms/inputs/passy.js"></script>
	<script type="text/javascript" src="system/src/js/plugins/forms/inputs/maxlength.min.js"></script>

	<script type="text/javascript" src="system/src/js/core/app.js"></script>
	<script type="text/javascript" src="system/src/js/pages/form_controls_extended.js"></script>
	<!-- /theme JS files -->
</head>

<body class="navbar-top pace-done">


<!-- Main navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom headroom--not-bottom headroom-top-pinned headroom--top">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?php echo $_SERVER["REQUEST_URI"] ?>">180 DEVEX</a>

		<ul class="nav navbar-nav visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="system/src/images/placeholder.jpg" alt="">
					<span>Alexander Aceves</span>
					<i class="caret"></i>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#"><i class="icon-user-plus"></i>Mi Perfil</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-cog5"></i> Configuración</a></li>
					<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>