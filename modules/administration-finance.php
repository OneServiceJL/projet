<?php include 'includes_2/header.php'; ?>

<?php include 'includes_2/sidebar.php'; ?>

<?php include 'modal.php' ?>


<!-- Module Header -->

<div style="margin-top: 2.5em;" class="page-wrapper">
	<div class="content">
		<?php include 'includes_2/nav_menu.php'; ?>

		<!-- Chat Content-->
		<div class="container">
                <div class="content">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Administration & Finance</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Administration & Finance</li>
								</ul>
							</div>
						</div>
					</div>
	
					<!-- /Page Header -->
					
					
					<div class="row">
					
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Expence Income</div>
								</div>
								<div class="card-body">
									<div  id="chart-bar"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Expence Income</div>
								</div>
								<div class="card-body">
									<div id="chart-sracked"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Perfomance chart</div>
								</div>
								<div class="card-body">
									<div id="chart-pie"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">chart</div>
								</div>
								<div class="card-body">
									<div id="chart-donut"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
					</div>
				
				</div>			
            </div>
		<!-- /Chat Content-->
		
	</div>
</div>



        <!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>

        <!-- Chart JS -->
		<script src="assets/plugins/c3-chart/d3.v5.min.js"></script>
		<script src="assets/plugins/c3-chart/c3.min.js"></script>
		<script src="assets/plugins/c3-chart/chart-data.js"></script>
        

<?php include 'includes_2/footer.php'; ?>
