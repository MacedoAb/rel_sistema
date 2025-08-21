<?php 
$pag = 'home';

//verificar se ele tem a permissão de estar nessa página
if(@$home == 'ocultar'){
	echo "<script>window.location='../index.php'</script>";
	exit();
}
?>

<div class="mt-4 justify-content-between">

	<div class="row">
		<div class="col-xl-6 col-lg-12 col-md-6 col-xs-12">
			<div class="card sales-card">
				<div class="row">
					<div class="col-8">
						<div class="ps-4 pt-4 pe-3 pb-4">
							<div class="">
								<h6 class="mb-2 tx-12 ">Today Orders</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<h4 class="tx-20 font-weight-semibold mb-2">5,472</h4>
								</div>
								<p class="mb-0 tx-12 text-muted">Last week<i class="fa fa-caret-up mx-2 text-success"></i>
									<span class="text-success font-weight-semibold"> +427</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="circle-icon bg-primary-transparent text-center align-self-center overflow-hidden">
							<i class="fe fe-shopping-bag tx-16 text-primary"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12 col-md-6 col-xs-12">
			<div class="card sales-card">
				<div class="row">
					<div class="col-8">
						<div class="ps-4 pt-4 pe-3 pb-4">
							<div class="">
								<h6 class="mb-2 tx-12">Today Earnings</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<h4 class="tx-20 font-weight-semibold mb-2">$47,589</h4>
								</div>
								<p class="mb-0 tx-12 text-muted">Last week<i class="fa fa-caret-down mx-2 text-danger"></i>
									<span class="font-weight-semibold text-danger"> -453</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="circle-icon bg-info-transparent text-center align-self-center overflow-hidden">
							<i class="fe fe-dollar-sign tx-16 text-info"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12 col-md-6 col-xs-12">
			<div class="card sales-card">
				<div class="row">
					<div class="col-8">
						<div class="ps-4 pt-4 pe-3 pb-4">
							<div class="">
								<h6 class="mb-2 tx-12">Profit Gain</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<h4 class="tx-20 font-weight-semibold mb-2">$8,943</h4>
								</div>
								<p class="mb-0 tx-12 text-muted">Last week<i class="fa fa-caret-up mx-2 text-success"></i>
									<span class=" text-success font-weight-semibold"> +788</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="circle-icon bg-secondary-transparent text-center align-self-center overflow-hidden">
							<i class="fe fe-external-link tx-16 text-secondary"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12 col-md-6 col-xs-12">
			<div class="card sales-card">
				<div class="row">
					<div class="col-8">
						<div class="ps-4 pt-4 pe-3 pb-4">
							<div class="">
								<h6 class="mb-2 tx-12">Total Earnings</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<h4 class="tx-22 font-weight-semibold mb-2">$57.12M</h4>
								</div>
								<p class="mb-0 tx-12  text-muted">Last week<i class="fa fa-caret-down mx-2 text-danger"></i>
									<span class="text-danger font-weight-semibold"> -693</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="circle-icon bg-warning-transparent text-center align-self-center overflow-hidden">
							<i class="fe fe-credit-card tx-16 text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="card custom-card overflow-hidden">
		<div class="card-header border-bottom-0">
			<div>
				<h3 class="card-title mb-2 ">Project Budget</h3> <span class="d-block tx-12 mb-0 text-muted"></span>
			</div>
		</div>
		<div class="card-body">
			<div id="statistics1"></div>
		</div>
	</div>


</div>	






<div class="row row-sm">
	<div class="col-sm-12 col-lg-12 col-xl-6 col-xxl-3">
		<div class="card">
			<div class="card-header pb-3">
				<h3 class="card-title mb-2">SALES ACTIVITY</h3>
			</div>
			<div class="card-body p-0 customers mt-1">
				<div class="country-card pt-0">
					<div class="mb-4">
						<div class="d-flex">
							<span class="tx-13 font-weight-semibold">India</span>
							<div class="ms-auto"><span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span><span class="number-font">$32,879</span> (65%)</div>
						</div>
						<div class="progress ht-8 br-5 mt-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 60%"></div>
						</div>
					</div>
					<div class="mb-4">
						<div class="d-flex mb-1">
							<span class="tx-13 font-weight-semibold">Russia</span>
							<div class="ms-auto"><span class="text-info mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$22,710</span> (55%)</div>
						</div>
						<div class="progress ht-8 br-5 mt-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 50%"></div>
						</div>
					</div>
					<div class="mb-4">
						<div class="d-flex">
							<span class="tx-13 font-weight-semibold">Canada</span>
							<div class="ms-auto"><span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span><span class="number-font">$56,291</span> (69%)</div>
						</div>
						<div class="progress ht-8 br-5 mt-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 80%"></div>
						</div>
					</div>
					<div class="mb-4">
						<div class="d-flex">
							<span class="tx-13 font-weight-semibold">Brazil</span>
							<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$34,209</span> (60%)</div>
						</div>
						<div class="progress ht-8 br-5 mt-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"></div>
						</div>
					</div>
					<div class="mb-4">
						<div class="d-flex">
							<span class="tx-13 font-weight-semibold">United States</span>
							<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$45,870</span> (86%)</div>
						</div>
						<div class="progress ht-8 br-5 mt-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 80%"></div>
						</div>
					</div>
					<div class="mb-4">
						<div class="d-flex">
							<span class="tx-13 font-weight-semibold">Germany</span>
							<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$67,357</span> (73%)</div>
						</div>
						<div class="progress ht-8 br-5 mt-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 70%"></div>
						</div>
					</div>
					<div class="mb-0">
						<div class="d-flex">
							<span class="tx-13 font-weight-semibold">U.A.E</span>
							<div class="ms-auto"><span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span><span class="number-font">$56,291</span> (69%)</div>
						</div>
						<div class="progress ht-8 br-5 mt-2">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-purpple" style="width: 80%"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>



	<div class="col-xl-6 col-xxl-3 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header pb-0">
				<h3 class="card-title mb-2">Weekly Visitors</h3>
			</div>
			<div class="card-body pb-0">
				<div class="row mb-4">
					<div class="col-6">
						<div class="text-muted tx-12 text-center mb-2">Average Male Visitors</div>
						<div class="d-flex justify-content-center align-items-center">
							<span class="me-3 tx-26 font-weight-semibold">2,132</span>
							<span class="text-success font-weight-semibold"><i class="fa fa-caret-up me-2"></i>0.23%</span>
						</div>
					</div>
					<div class="col-6">
						<div class="text-muted tx-12 text-center mb-2">Average Female Visitors</div>
						<div class="d-flex justify-content-center align-items-center">
							<span class="me-3 tx-26 font-weight-semibold">1,053</span>
							<span class="text-danger font-weight-semibold"><i class="fa fa-caret-down me-2"></i>0.11%</span>
						</div>
					</div>
				</div>
				<div id="Viewers"></div>
			</div>
		</div>
	</div>

</div>




<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
	<div class="row">
		<div class="col-sm-12 col-lg-12 col-xl-12">
			<div class="card custom-card overflow-hidden">
				<div class="card-header border-bottom-0 d-flex">
					<h3 class="card-title mb-2 ">Sales Activity</h3>
					
				</div>
				<div class="card-body">
					<div class="row mb-2 ps-lg-5">
						<div class="col-xl-3 col-lg-3 col-md-6 col-6">
							<p class="mb-1">Total Sales</p>
							<h5 class="mb-1">$52,618</h5>
							<p class="tx-11 text-muted">This month<span class="text-success ms-2"><i class="fa fa-caret-up me-2"></i><span class="badge bg-success text-white tx-11">0.9%</span></span></p>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-6">
							<p class=" mb-1">Total Sales</p>
							<h5 class="mb-1">$11,197</h5>
							<p class="tx-11 text-muted">This Week<span class="text-danger ms-2"><i class="fa fa-caret-down me-2"></i><span class="badge bg-danger text-white tx-11">0.15%</span></span></p>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-6">
							<p class=" mb-1">Total Sales</p>
							<h5 class="mb-1">$1,143</h5>
							<p class="tx-11 text-muted">Today<span class="text-success ms-2"><i class="fa fa-caret-up me-2"></i><span class="badge bg-success text-white tx-11">0.11%</span></span></p>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-6">
							<p class=" mb-1">Total Sales</p>
							<h5 class="mb-1">$1,143</h5>
							<p class="tx-11 text-muted">Today<span class="text-success ms-2"><i class="fa fa-caret-up me-2"></i><span class="badge bg-success text-white tx-11">0.11%</span></span></p>
						</div>
					</div>
					<div id="statistics2"></div>
				</div>
			</div>
		</div>

	</div>
</div>