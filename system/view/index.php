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
			<input type="text" class="form-control" data-mask="aaaa999999aa9" placeholder="Enter your phone #">
			<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Password generator<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<div class="content-group">
										<h6 class="text-semibold">Checker inside label</h6>
										<p class="content-group-sm">Password checker is attached to the label, which appears below the input field. Empty label is hidden, if you add any text inside label, it'll stay visible.</p>

										<div class="form-group">
											<div class="label-indicator">
												<input type="text" class="form-control" placeholder="Enter your password">
												<span class="label label-block password-indicator-label" style="background-color: rgb(59, 164, 206); color: rgb(255, 255, 255);">Good</span>
											</div>
										</div>

										<button type="button" class="btn btn-info generate-label">Generate 12 characters password</button>
									</div>
								</div>

								<div class="col-md-4">
									<div class="content-group">
										<h6 class="text-semibold">Label inside input</h6>
										<p class="content-group-sm">Rules are the same as for password checker inside label, but this one has absolute position and placed inside <code>form-group</code>. Empty label is also hidden.</p>

										<div class="form-group">
											<div class="label-indicator-absolute">
												<input type="text" class="form-control" placeholder="Enter your password">
												<span class="label password-indicator-label-absolute" style="background-color: rgb(59, 164, 206); color: rgb(255, 255, 255);">Good</span>
											</div>
										</div>

										<button type="button" class="btn btn-info generate-label-absolute">Generate 10 characters password</button>
									</div>
								</div>

								<div class="col-md-4">
									<div class="content-group">
										<h6 class="text-semibold">Label inside addon</h6>
										<p class="content-group-sm">In this example password checker appears as <code>input-group-addon</code>. Note: addon must have any text or icon since group addon has table layout.</p>

										<div class="form-group">
											<div class="input-group group-indicator">
												<input type="text" class="form-control" placeholder="Enter your password">
												<span class="input-group-addon password-indicator-group" style="background-color: rgb(235, 127, 94); border-color: rgb(235, 127, 94); color: rgb(255, 255, 255);">Normal</span>
											</div>
										</div>

										<button type="button" class="btn btn-info generate-group">Generate 8 characters password</button>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
	</div>
	<!-- /dashboard content -->
</div>
<!-- /main content -->
<?php add_footer(); ?>
TOAR100694SE4