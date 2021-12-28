@extends('test.layouts.app')

@section('breadcrumb')
	<!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="left-content">
			<h4 class="content-title mb-2">Hi, welcome back!</h4>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page">Analytics &amp; Monitoring</li>
				</ol>
			</nav>
		</div>
	</div>
	<!-- breadcrumb -->
@endsection

@section('main-content')
	<div class="row row-sm">
		<div class="col-lg-8">
			<div class="row row-sm">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-body iconfont text-left">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-3">Today Orders</h4>
								<div class="card-options ml-auto">
									<div class="btn-group ml-5 mb-0">
										<a class="btn-link option-dots" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false" href="#"><i
												class="fe fe-more-vertical tx-gray-500"></i></a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add
												New</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View
												all new tab</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-edit mr-2"></i>Edit Card</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-settings mr-2"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex mb-0">
								<div class="">
									<h4 class="mb-1 font-weight-bold">5,74.12</h4>
									<p class="mb-2 tx-12 text-muted"><i
											class="fas fa-arrow-circle-up text-success"></i> Compared to Last
										week</p>
								</div>
								<div class="card-chart bg-primary-transparent brround ml-auto mt-0">
									<i class="typcn typcn-shopping-cart text-primary tx-24"></i>
								</div>
							</div>
							<div class="progress progress-sm mt-2 bg-primary-transparent">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
									class="progress-bar bg-primary wd-70p" role="progressbar"></div>
							</div>
							<small class="mb-0 text-muted">Monthly<span
									class="float-right text-muted mg-t-2">70%</span></small>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-body iconfont text-left">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-3">Today Earnings</h4>
								<div class="card-options ml-auto">
									<div class="btn-group ml-5 mb-0">
										<a class="btn-link option-dots" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false" href="#"><i
												class="fe fe-more-vertical tx-gray-500"></i></a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add
												New</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View
												all new tab</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-edit mr-2"></i>Edit Card</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-settings mr-2"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex mb-0">
								<div class="">
									<h4 class="mb-1 font-weight-bold">$1,230.17</h4>
									<p class="mb-2 tx-12 text-muted"><i
											class="fas fa-arrow-circle-down text-danger"></i> Compared to Last
										week</p>
								</div>
								<div class="card-chart bg-warning-transparent brround ml-auto mt-0">
									<i class="typcn typcn-chart-line-outline text-warning tx-24"></i>
								</div>
							</div>

							<div class="progress progress-sm mt-2 bg-warning-transparent">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
									class="progress-bar bg-warning wd-50p" role="progressbar"></div>
							</div>
							<small class="mb-0  text-muted">Monthly<span
									class="float-right text-muted mg-t-2">50%</span></small>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-body iconfont text-left">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-3">Total Earning</h4>
								<div class="card-options ml-auto">
									<div class="btn-group ml-5 mb-0">
										<a class="btn-link option-dots" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false" href="#"><i
												class="fe fe-more-vertical tx-gray-500"></i></a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add
												New</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View
												all new tab</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-edit mr-2"></i>Edit Card</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-settings mr-2"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex mb-0">
								<div class="">
									<h4 class="mb-1   font-weight-bold">$7,125.70</h4>
									<p class="mb-2 tx-12 text-muted"><i
											class="fas fa-arrow-circle-up text-success"></i> Compared to Last
										week</p>
								</div>
								<div class="card-chart bg-info-transparent brround ml-auto mt-0">
									<i class="typcn typcn-chart-bar-outline text-info tx-20"></i>
								</div>
							</div>
							<div class="progress progress-sm mt-2">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
									class="progress-bar bg-info wd-60p" role="progressbar"></div>
							</div>
							<small class="mb-0  text-muted">Monthly<span
									class="float-right text-muted mg-t-2">60%</span></small>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-body iconfont text-left">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-3">Products Sold</h4>
								<div class="card-options ml-auto">
									<div class="btn-group ml-5 mb-0">
										<a class="btn-link option-dots" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false" href="#"><i
												class="fe fe-more-vertical tx-gray-500"></i></a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add
												New</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View
												all new tab</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-edit mr-2"></i>Edit Card</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-settings mr-2"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex mb-0">
								<div class="">
									<h4 class="mb-1 font-weight-bold">36,457</h4>
									<p class="mb-2 tx-12 text-muted"><i
											class="fas fa-arrow-circle-down text-success"></i> Compared to Last
										week</p>
								</div>
								<div class="card-chart bg-danger-transparent brround ml-auto mt-0">
									<i class="typcn typcn-briefcase text-danger tx-24"></i>
								</div>
							</div>
							<div class="progress progress-sm mt-2">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
									class="progress-bar bg-danger wd-40p" role="progressbar"></div>
							</div>
							<small class="mb-0  text-muted">Monthly<span
									class="float-right text-muted mg-t-2">40%</span></small>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="card overflow-hidden">
						<div class="card-header bg-transparent pd-b-0 pd-t-30 bd-b-0">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-10">Website overview</h4>
								<div class="card-options ml-auto">
									<div class="btn-group ml-5 mb-0">
										<a class="btn-link option-dots" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false" href="#"><i
												class="fe fe-more-vertical tx-gray-500"></i></a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add
												New</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View
												all new tab</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-edit mr-2"></i>Edit Card</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-settings mr-2"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
							<p class="tx-12 text-muted mb-0">session by country mean that the user is from the
								stated country or that the session. <a href="#">Learn more</a></p>
						</div>
						<div class="card-body pb-0 pd-t-10">
							<div class="sales-flot overflow-hidden">
								<div id="chart" class="BarChartShadow ht-200"></div>
							</div>
						</div>
						<div class="card-body border-top-0 pd-t-10">
							<div class="row row-sm">
								<div class="col-xl-7 col-lg-7 mx-auto d-block">
									<div class="progress mg-b-10 rounded-20">
										<div class="progress-bar ht-25 wd-50p bg-success tx-14"
											role="progressbar" aria-valuenow="50" aria-valuemin="0"
											aria-valuemax="100">Online Revenue</div>
										<div class="progress-bar ht-25 wd-50p bg-primary tx-14"
											role="progressbar" aria-valuenow="50" aria-valuemin="0"
											aria-valuemax="100">Offline Revenue</div>
									</div>
									<div class="row mb-0">
										<div class="col-6">
											<div class="media text-center">
												<div class="media-body">
													<h4 class="tx-22 font-weight-bold mb-1 ">13,375</h4>
													<span><strong class="tx-success">10.5%</strong><span
															class="text-muted tx-12 ml-1"> of 20,000
															Total</span></span>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="media text-center">
												<div class="media-body">
													<h4 class="tx-22 font-weight-bold mb-1">16,625</h4>
													<span><strong class="tx-danger">89.5%</strong><span
															class="text-muted tx-12 ml-1"> of 20,000
															Total</span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="card">
						<div class="card-header bg-transparent pd-b-0 pd-t-30 bd-b-0">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-10">Total Earnings</h4>
								<div class="card-options ml-auto">
									<div class="btn-group ml-5 mb-0">
										<a class="btn-link option-dots" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false" href="#"><i
												class="fe fe-more-vertical tx-gray-500"></i></a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add
												New</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View
												all new tab</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-edit mr-2"></i>Edit Card</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-settings mr-2"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
							<p class="tx-12 text-muted mb-0">session by country mean that the user is from the
								stated country or that the session. <a href="#">Learn more</a></p>
						</div>
						<div class="card-body pt-0">
							<div class="Analytics-chart-styles">
								<div id="chart2" class="BarChartShadow apexcharts-height"></div>
								<div class="feature widget-2 text-center mt-0">
									<i
										class="ti-stats-up project bg-primary-transparent mx-auto text-primary mb-3"></i>
									<h6 class="mg-b-5">Today Earnings</h6>
									<h3 class="mb-0">$34,56,786</h3>
								</div>
							</div>
							<div class="mg-t-0">
								<div class="row">
									<div class="col-6 text-center">
										<div class="mb-1 d-flex">
											<div class="ht-10 wd-20 bg-primary mt-1 mr-2 rounded-5"></div>
											Traveling
										</div>
									</div>
									<div class="col-6 text-center">
										<div class="mb-1 d-flex">
											<div class="ht-10 wd-20 bg-success mt-1 mr-2 rounded-5"></div>
											Pressentation
										</div>
									</div>
									<div class="col-6 text-center">
										<div class="mb-1 d-flex">
											<div class="ht-10 wd-20 bg-warning mt-1 mr-2 rounded-5"></div>
											Business
										</div>
									</div>
									<div class="col-6 text-center">
										<div class="mb-1 d-flex">
											<div class="ht-10 wd-20 bg-info mt-1 mr-2 rounded-5"></div> Others
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="card latest-tasks">
						<div class="">
							<div class="d-flex justify-content-between pl-4 pt-4 pr-4">
								<h4 class="card-title mg-b-10">Latest Task</h4>
								<div class="card-options ml-auto">
									<div class="btn-group ml-5 mb-0">
										<a class="btn-link option-dots" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false" href="#"><i
												class="fe fe-more-vertical tx-gray-500"></i></a>
										<div class="dropdown-menu dropdown-menu-right shadow">
											<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add
												New</a>
											<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View
												all new tab</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-edit mr-2"></i>Edit Card</a>
											<a class="dropdown-item" href="#"><i
													class="fe fe-settings mr-2"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
							<div class="">
								<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold"
									role="tablist">
									<li class="nav-item">
										<a class="nav-link active show" data-toggle="tab" href="#tasktab-1"
											role="tab" aria-selected="false">
											Today
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tasktab-2" role="tab"
											aria-selected="false">
											Week
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tasktab-3" role="tab"
											aria-selected="true">
											Month
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-body pt-3">
							<div class="tab-content">
								<div class="tab-pane fade active show" id="tasktab-1" role="tabpanel">
									<div class="">
										<div class="tasks">
											<div class=" task-line primary">
												<a href="#" class="span">
													XML Import & Export
												</a>
												<div class="time">
													12:00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input checked
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line pink">
												<a href="#" class="span">
													Database Optimization
												</a>
												<div class="time">
													02:13 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line success">
												<a href="#" class="span">
													Create Wireframes
												</a>
												<div class="time">
													06:20 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line warning">
												<a href="#" class="span">
													Develop MVP
												</a>
												<div class="time">
													10: 00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line teal">
												<a href="#" class="span">
													Design Evommerce
												</a>
												<div class="time">
													10: 00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks mb-0">
											<div class="task-line danger">
												<a href="#" class="span">
													Database Optimization
												</a>
												<div class="time">
													02:13 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tasktab-2" role="tabpanel">
									<div class="">
										<div class="tasks">
											<div class=" task-line teal">
												<a href="#" class="span">
													Management meeting
												</a>
												<div class="time">
													06:30 AM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line danger">
												<a href="#" class="span">
													Connect API to pages
												</a>
												<div class="time">
													08:00 AM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line purple">
												<a href="#" class="span">
													Icon change in Redesign App
												</a>
												<div class="time">
													11:20 AM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line warning">
												<a href="#" class="span">
													Test new features in tablets
												</a>
												<div class="time">
													02: 00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line success">
												<a href="#" class="span">
													Design Logo
												</a>
												<div class="time">
													04: 00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks mb-0">
											<div class="task-line pink">
												<a href="#" class="span">
													Connect API to pages
												</a>
												<div class="time">
													08:00 AM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tasktab-3" role="tabpanel">
									<div class="">
										<div class="tasks">
											<div class=" task-line info">
												<a href="#" class="span">
													Design a Landing Page
												</a>
												<div class="time">
													06:12 AM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line danger">
												<a href="#" class="span">
													Food Delivery Mobile Application
												</a>
												<div class="time">
													3:00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line warning">
												<a href="#" class="span">
													Export Database values
												</a>
												<div class="time">
													03:20 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line pink">
												<a href="#" class="span">
													Write Simple Python Script
												</a>
												<div class="time">
													04: 00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks">
											<div class="task-line success">
												<a href="#" class="span">
													Write Simple Anugalr Program
												</a>
												<div class="time">
													05: 00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
										<div class="tasks mb-0">
											<div class="task-line info">
												<a href="#" class="span">
													Food Delivery Mobile Application
												</a>
												<div class="time">
													3:00 PM
												</div>
											</div>
											<label class="checkbox">
												<span class="check-box">
													<span class="ckbox"><input
															type="checkbox"><span></span></span>
												</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body pd-20">
					<div class="card shadow mg-b-20 rounded-10 text-white account-background">
						<div class="card-body pd-b-10">
							<p class="mg-b-0">Your Account Balance</p>
							<h2 class="tx-40">$34,56,908</h2>
							<p class="mg-b-0 mg-t-20">Your Account Number</p>
							<div class="row row-sm">
								<div class="col-12 d-flex">
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<div class="tx-30 mg-l-5">*</div>
									<h4 class="mb-0 text-white-8 mg-t-5 mg-l-5">3547</h4>
								</div>
							</div>
						</div>
					</div>
					<h5 class="card-title mg-b-5">Recent Transactions</h5>
					<p class="tx-gray-800 mg-b-0 mg-t-20">Today</p>
					<div class="d-flex mg-t-20">
						<div class="feature mt-0 mb-0 mg-r-10">
							<i class="fe fe-arrow-up-right project bg-danger-transparent text-danger"></i>
						</div>
						<div class="mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">To Daniel Bella</h5>
							<small class="tx-gray-800">Debited</small>
						</div>
						<div class="ml-auto text-right mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">-$32,456</h5>
						</div>
					</div>
					<div class="d-flex mg-t-15">
						<div class="feature mt-0 mb-0 mg-r-10">
							<i class="fe fe-arrow-down-left project bg-primary-transparent text-primary"></i>
						</div>
						<div class="mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">From Daniel Bella</h5>
							<small class="tx-gray-800">Credited</small>
						</div>
						<div class="ml-auto text-right mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">+$54,675</h5>
						</div>
					</div>
					<div class="d-flex mg-t-15 pd-b-15 border-bottom">
						<div class="feature mt-0 mb-0 mg-r-10">
							<i class="fe fe-arrow-down-left project bg-primary-transparent text-primary"></i>
						</div>
						<div class="mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">From Lily Spon</h5>
							<small class="tx-gray-800">Credited</small>
						</div>
						<div class="ml-auto text-right mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">+$6,789</h5>
						</div>
					</div>
					<p class="tx-gray-800 mg-b-0 mg-t-20">Yesterday</p>
					<div class="d-flex mg-t-20">
						<div class="feature mt-0 mb-0 mg-r-10">
							<i class="fe fe-arrow-up-right project bg-danger-transparent text-danger"></i>
						</div>
						<div class="mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">To Monty Mary</h5>
							<small class="tx-gray-800">Debited</small>
						</div>
						<div class="ml-auto text-right mg-t-5">
							<h5 class="tx-14 mg-b-0 font-weight-bold">-$64,567</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body pd-20">
					<div class="">
						<h5 class="card-title mg-b-5">General Statistics</h5>
						<p class="tx-12 text-muted mb-0">session by country mean that the user</p>
						<h6 class="mg-t-20">Revenue <a class="text-right float-right tx-12 tx-gray-800"
								href="#">Details <i class="fas fa-angle-right"></i></a></h6>
						<h2 class="tx-40 mg-b-0">$32,89,098</h2>
						<p class="mb-2 tx-12 text-muted"><i class="fas fa-arrow-circle-down text-success"></i>
							Compared to Last week</p>
						<h6 class="mg-t-20">Current activity</h6>
						<div class="progress mg-b-10">
							<div class="progress-bar progress-bar-lg wd-30p bg-success" role="progressbar"
								aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">30%</div>
							<div class="progress-bar progress-bar-lg wd-40p bg-primary" role="progressbar"
								aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">40%</div>
							<div class="progress-bar progress-bar-lg wd-15p bg-info" role="progressbar"
								aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">15%</div>
							<div class="progress-bar progress-bar-lg wd-15p bg-danger" role="progressbar"
								aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">15%</div>
						</div>
						<div class="row row-sm mg-t-20">
							<div class="col">
								<div class="mb-1 d-flex">
									<div class="ht-10 wd-10 bg-success mt-1 mr-2 brround"></div>Sales
								</div>
							</div>
							<div class="col col-auto">
								<h6 class="mb-0"><b>56,765</b></h6>
							</div>
						</div>
						<div class="row row-sm mg-t-10">
							<div class="col">
								<div class="mb-1 d-flex">
									<div class="ht-10 wd-10 bg-primary mt-1 mr-2 brround"></div>Orders
								</div>
							</div>
							<div class="col col-auto">
								<h6 class="mb-0"><b>1,23,453</b></h6>
							</div>
						</div>
						<div class="row row-sm mg-t-10">
							<div class="col">
								<div class="mb-1 d-flex">
									<div class="ht-10 wd-10 bg-info mt-1 mr-2 brround"></div>products Sold
								</div>
							</div>
							<div class="col col-auto">
								<h6 class="mb-0"><b>34,67,786</b></h6>
							</div>
						</div>
						<div class="row row-sm mg-t-10">
							<div class="col">
								<div class="mb-1 d-flex">
									<div class="ht-10 wd-10 bg-danger mt-1 mr-2 brround"></div>Profit
								</div>
							</div>
							<div class="col col-auto">
								<h6 class="mb-0"><b>$54,876</b></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body pd-20">
					<div class="">
						<h5 class="card-title mg-b-5">All Projects</h5>
						<p class="tx-12 text-muted mb-0">session by country mean that the user</p>
						<div class="d-flex mg-t-25">
							<div class="chart-circle chart-circle-sm ml-0 mr-3" data-value="0.65"
								data-thickness="10" data-color="#5066e0"><canvas width="140"
									height="140"></canvas>
								<div class="chart-circle-value">
									<div class="tx-14 font-weight-bold">65%</div>
								</div>
							</div>
							<div class="mg-t-10">
								<h5 class="tx-16 mg-b-0 font-weight-bold">Project 01</h5>
								<small>Client: Tracy Lindahl</small>
							</div>
							<div class="ml-auto text-right mg-t-10">
								<h5 class="tx-16 mg-b-0 font-weight-bold">$76,43,890</h5>
								<small class="text-danger">40%</small>
							</div>
						</div>
						<div class="d-flex mg-t-20">
							<div class="chart-circle chart-circle-sm ml-0 mr-3" data-value="0.65"
								data-thickness="10" data-color="#ff8c00"><canvas width="140"
									height="140"></canvas>
								<div class="chart-circle-value">
									<div class="tx-14 font-weight-bold">65%</div>
								</div>
							</div>
							<div class="mg-t-10">
								<h5 class="tx-16 mg-b-0 font-weight-bold">Project 02</h5>
								<small>Client: Breana Millis</small>
							</div>
							<div class="ml-auto text-right mg-t-10">
								<h5 class="tx-16 mg-b-0 font-weight-bold">$34,56,780</h5>
								<small class="text-danger">40%</small>
							</div>
						</div>
						<div class="d-flex mg-t-20">
							<div class="chart-circle chart-circle-sm ml-0 mr-3" data-value="0.65"
								data-thickness="10" data-color="#00d48f"><canvas width="140"
									height="140"></canvas>
								<div class="chart-circle-value">
									<div class="tx-14 font-weight-bold">65%</div>
								</div>
							</div>
							<div class="mg-t-10">
								<h5 class="tx-16 mg-b-0 font-weight-bold">Project 03</h5>
								<small>Client: An Tramel</small>
							</div>
							<div class="ml-auto text-right mg-t-10">
								<h5 class="tx-16 mg-b-0 font-weight-bold">$45,89,908</h5>
								<small class="text-danger">40%</small>
							</div>
						</div>
						<a class="btn btn-light btn-block mg-t-20" href="#"><i class="fe fe-plus"></i> Add New
							Project</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row row-sm">
		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header pb-0 pd-t-25">
					<div class="d-flex justify-content-between">
						<h3 class="card-title mb-0">Best Sellers</h3>
						<div class="card-options ml-auto">
							<div class="btn-group ml-5 mb-0">
								<a class="btn-link option-dots" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false" href="#"><i
										class="fe fe-more-vertical tx-gray-500"></i></a>
								<div class="dropdown-menu shadow">
									<a class="dropdown-item" href="#"><i class="fe fe-plus mr-2"></i>Add New</a>
									<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View all new
										tab</a>
									<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i>Edit
										Card</a>
									<a class="dropdown-item" href="#"><i class="fe fe-settings mr-2"></i>
										Settings</a>
								</div>
							</div>
						</div>
					</div>
					<p class="tx-12 text-muted mb-0">session by country mean that the user is from the stated
						country or that the session. <a href="#">Learn more</a></p>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="example1" class="table table-striped table-bordered text-nowrap"
							style="width:100%">
							<thead>
								<tr class="bold">
									<th class="border-bottom-0">Seller </th>
									<th class="border-bottom-0">Total Sales</th>
									<th class="border-bottom-0">Active Stocks</th>
									<th class="border-bottom-0">Category</th>
									<th class="border-bottom-0">Revenue</th>
									<th class="text-center border-bottom-0">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="font-weight-bold">
										<div class="d-flex"><span class="avatar avatar-sm brround">S</span><span
												class="mg-l-10 mg-t-7">SREE Enrprices</span></div>
									</td>
									<td>20,125</td>
									<td>10513.00</td>
									<td>Watch</td>
									<td class="font-weight-bold">$13,206</td>
									<td><i class="fa fa-caret-up text-danger mr-1"></i>.01%</td>
								</tr>
								<tr>
									<td class="font-weight-bold">
										<div class="d-flex"><span
												class="avatar avatar-sm brround bg-success">G</span><span
												class="mg-l-10 mg-t-7">Granite Cake</span></div>
									</td>
									<td>1,250,103</td>
									<td>425.25</td>
									<td>Medical</td>
									<td class="font-weight-bold">$21,762</td>
									<td><i class="fa fa-caret-down text-success mr-1"></i>.05%</td>
								</tr>
								<tr>
									<td class="font-weight-bold">
										<div class="d-flex"><span
												class="avatar avatar-sm brround bg-secondary">G</span><span
												class="mg-l-10 mg-t-7">GOODS Best</span></div>
									</td>
									<td>425.25</td>
									<td>1.2029</td>
									<td>Cake</td>
									<td class="font-weight-bold">$42,282</td>
									<td><i class="fa fa-caret-down text-success mr-1"></i>.05%</td>
								</tr>
								<tr>
									<td class="font-weight-bold">
										<div class="d-flex"><span
												class="avatar avatar-sm brround bg-info">M</span><span
												class="mg-l-10 mg-t-7">Multi Shop</span></div>
									</td>
									<td>28,470</td>
									<td>1547.67</td>
									<td>Elactronics</td>
									<td class="font-weight-bold">$86,334</td>
									<td><i class="fa fa-caret-up text-danger mr-1"></i>.01%</td>
								</tr>
								<tr>
									<td class="font-weight-bold">
										<div class="d-flex"><span
												class="avatar avatar-sm brround bg-warning">S</span><span
												class="mg-l-10 mg-t-7">Sagar Limited</span></div>
									</td>
									<td>24,983</td>
									<td>723.48</td>
									<td>Mobile</td>
									<td class="font-weight-bold">$24,983</td>
									<td><i class="fa fa-caret-down text-success mr-1"></i>.05%</td>
								</tr>
								<tr>
									<td class="font-weight-bold">
										<div class="d-flex"><span
												class="avatar avatar-sm brround bg-success">I</span><span
												class="mg-l-10 mg-t-7">Indo Allinone</span></div>
									</td>
									<td>81,865</td>
									<td>149.18</td>
									<td>Fashion</td>
									<td class="font-weight-bold">$86,334</td>
									<td><i class="fa fa-caret-down text-success mr-1"></i>.05%</td>
								</tr>
								<tr>
									<td class="font-weight-bold">
										<div class="d-flex"><span
												class="avatar avatar-sm brround bg-danger">S</span><span
												class="mg-l-10 mg-t-7">Spark Limited</span></div>
									</td>
									<td>32,309</td>
									<td>149.18</td>
									<td>Gift</td>
									<td class="font-weight-bold">$25,000</td>
									<td><i class="fa fa-caret-up text-danger mr-1"></i>.01%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection