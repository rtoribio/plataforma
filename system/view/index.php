<?php add_header('Inicio'); ?>
<!-- /main navbar -->
<div class="page-container">
	<!-- Page content -->
	<div class="page-content">
		<!-- Main sidebar -->
		<div class="sidebar sidebar-main sidebar-default">
			<?php include 'common/sidebar.php'; ?>
		</div>	
		<!-- Main content -->
		<div class="content-wrapper">
			<?php include 'common/navbar.php'; ?>
			<input type="text" class="form-control" data-mask="aaaa999999aa9" data-mask="aaa999999aa9" placeholder="Enter your phone #">
			<button type="button" class="btn btn-default btn-ladda btn-ladda-spinner ladda-button" data-style="expand-right" data-spinner-color="#333" data-spinner-size="20"><span class="ladda-label">Spinner</span><span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div></button>
		</div>
	</div>
	<!-- /dashboard content -->
</div>
<!-- /main content -->
<?php add_footer(); ?>
TOAR100694SE4