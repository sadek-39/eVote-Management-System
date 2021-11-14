@include('layout.page-head')
@include('layout.page-header')
@include('layout.page-sidebar')

	<!-- dashboard -->
	<main id="dashboard">
		<div class="container-fluid">
			<h3 class="fs-3 fw-normal mb-4">Dashboard</h3>
			<div class="row">
				<div class="col-xxl-10">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="all-pervading-widget bg-cyan d-flex align-items-center gap-3 rounded is-drop-shadow p-4 mb-4">
								<div class="widget-icon bg-white p-2 rounded flex-shrink-0">
									<i class="bi bi-person text-dark fs-2"></i>
								</div>
								<div class="widget-content flex-grow-1">
									<h4 class="text-light mb-0">1000</h4>
									<p class="text-light fw-normal mb-0">
										<small>Online Voter</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="all-pervading-widget bg-success d-flex align-items-center gap-3 rounded is-drop-shadow p-4 mb-4">
								<div class="widget-icon bg-white p-2 rounded flex-shrink-0">
									<i class="bi bi-person-badge text-dark fs-2"></i>
								</div>
								<div class="widget-content flex-grow-1">
									<h4 class="text-light mb-0">1200</h4>
									<p class="text-light fw-normal mb-0">
										<small>Offline Voter</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="all-pervading-widget bg-danger d-flex align-items-center gap-3 rounded is-drop-shadow p-4 mb-4">
								<div class="widget-icon bg-white p-2 rounded flex-shrink-0">
									<i class="bi bi-people text-dark fs-2"></i>
								</div>
								<div class="widget-content flex-grow-1">
									<h4 class="text-light mb-0">2200</h4>
									<p class="text-light fw-normal mb-0">
										<small>Total Voter</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="all-pervading-widget bg-dark d-flex align-items-center gap-3 rounded is-drop-shadow p-4 mb-4">
								<div class="widget-icon bg-white p-2 rounded flex-shrink-0">
									<i class="bi bi-person-check-fill text-dark fs-2"></i>
								</div>
								<div class="widget-content flex-grow-1">
									<h4 class="text-light mb-0">800</h4>
									<p class="text-light fw-normal mb-0">
										<small>Online CheckIn</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="all-pervading-widget bg-info d-flex align-items-center gap-3 rounded is-drop-shadow p-4 mb-4">
								<div class="widget-icon bg-white p-2 rounded flex-shrink-0">
									<i class="bi bi-person-lines-fill text-dark fs-2"></i>
								</div>
								<div class="widget-content flex-grow-1">
									<h4 class="text-light mb-0">1200</h4>
									<p class="text-light fw-normal mb-0">
										<small>Offline CheckIn</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="all-pervading-widget bg-secondary d-flex align-items-center gap-3 rounded is-drop-shadow p-4 mb-4">
								<div class="widget-icon bg-white p-2 rounded flex-shrink-0">
									<i class="bi bi-app-indicator text-dark fs-2"></i>
								</div>
								<div class="widget-content flex-grow-1">
									<h4 class="text-light mb-0">1700</h4>
									<p class="text-light fw-normal mb-0">
										<small>Total Cast</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- dashboard -->

    @include('layout.page-tail')

