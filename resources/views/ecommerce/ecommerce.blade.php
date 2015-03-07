@extends('layouts/ecommerce')
@section('content')
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			@include('ecommerce/partial/breadcrum')
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
			    @include('ecommerce/widget/lifetime_sales01')

				@include('ecommerce/widget/totalOrder')
				@include('ecommerce/widget/avgOrder')


			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Overview</span>
								<span class="caption-helper">weekly stats...</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="tabbable-line">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#overview_1" data-toggle="tab">
										Top Selling </a>
									</li>
									<li>
										<a href="#overview_2" data-toggle="tab">
										Most Viewed </a>
									</li>
									<li>
										<a href="#overview_3" data-toggle="tab">
										Customers </a>
									</li>
									<li class="dropdown">
										<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
										Orders <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Latest 10 Orders </a>
											</li>
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Pending Orders </a>
											</li>
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Completed Orders </a>
											</li>
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Rejected Orders </a>
											</li>
										</ul>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="overview_1">
										<div class="table-responsive">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th>
													 Product Name
												</th>
												<th>
													 Price
												</th>
												<th>
													 Sold
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="javascript:;">
													Apple iPhone 4s - 16GB - Black </a>
												</td>
												<td>
													 $625.50
												</td>
												<td>
													 809
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Samsung Galaxy S III SGH-I747 - 16GB </a>
												</td>
												<td>
													 $915.50
												</td>
												<td>
													 6709
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Motorola Droid 4 XT894 - 16GB - Black </a>
												</td>
												<td>
													 $878.50
												</td>
												<td>
													 784
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Regatta Luca 3 in 1 Jacket </a>
												</td>
												<td>
													 $25.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Samsung Galaxy Note 3 </a>
												</td>
												<td>
													 $925.50
												</td>
												<td>
													 21245
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Inoval Digital Pen </a>
												</td>
												<td>
													 $125.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Metronic - Responsive Admin + Frontend Theme </a>
												</td>
												<td>
													 $20.00
												</td>
												<td>
													 11190
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_2">
										<div class="table-responsive">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th>
													 Product Name
												</th>
												<th>
													 Price
												</th>
												<th>
													 Views
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="javascript:;">
													Metronic - Responsive Admin + Frontend Theme </a>
												</td>
												<td>
													 $20.00
												</td>
												<td>
													 11190
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Regatta Luca 3 in 1 Jacket </a>
												</td>
												<td>
													 $25.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Apple iPhone 4s - 16GB - Black </a>
												</td>
												<td>
													 $625.50
												</td>
												<td>
													 809
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Samsung Galaxy S III SGH-I747 - 16GB </a>
												</td>
												<td>
													 $915.50
												</td>
												<td>
													 6709
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Motorola Droid 4 XT894 - 16GB - Black </a>
												</td>
												<td>
													 $878.50
												</td>
												<td>
													 784
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Samsung Galaxy Note 3 </a>
												</td>
												<td>
													 $925.50
												</td>
												<td>
													 21245
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Inoval Digital Pen </a>
												</td>
												<td>
													 $125.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_3">
										<div class="table-responsive">
											<table class="table table-hover table-light">
											<thead>
											<tr>
												<th>
													 Customer Name
												</th>
												<th>
													 Total Orders
												</th>
												<th>
													 Total Amount
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="javascript:;">
													David Wilson </a>
												</td>
												<td>
													 3
												</td>
												<td>
													 $625.50
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Amanda Nilson </a>
												</td>
												<td>
													 4
												</td>
												<td>
													 $12625.50
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Jhon Doe </a>
												</td>
												<td>
													 2
												</td>
												<td>
													 $125.00
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Bill Chang </a>
												</td>
												<td>
													 45
												</td>
												<td>
													 $12,125.70
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Paul Strong </a>
												</td>
												<td>
													 1
												</td>
												<td>
													 $890.85
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Jane Hilson </a>
												</td>
												<td>
													 5
												</td>
												<td>
													 $239.85
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Patrick Walker </a>
												</td>
												<td>
													 2
												</td>
												<td>
													 $1239.85
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_4">
										<div class="table-responsive">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th>
													 Customer Name
												</th>
												<th>
													 Date
												</th>
												<th>
													 Amount
												</th>
												<th>
													 Status
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="javascript:;">
													David Wilson </a>
												</td>
												<td>
													 3 Jan, 2013
												</td>
												<td>
													 $625.50
												</td>
												<td>
													<span class="label label-sm label-warning">
													Pending </span>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Amanda Nilson </a>
												</td>
												<td>
													 13 Feb, 2013
												</td>
												<td>
													 $12625.50
												</td>
												<td>
													<span class="label label-sm label-warning">
													Pending </span>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Jhon Doe </a>
												</td>
												<td>
													 20 Mar, 2013
												</td>
												<td>
													 $125.00
												</td>
												<td>
													<span class="label label-sm label-success">
													Success </span>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Bill Chang </a>
												</td>
												<td>
													 29 May, 2013
												</td>
												<td>
													 $12,125.70
												</td>
												<td>
													<span class="label label-sm label-info">
													In Process </span>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Paul Strong </a>
												</td>
												<td>
													 1 Jun, 2013
												</td>
												<td>
													 $890.85
												</td>
												<td>
													<span class="label label-sm label-success">
													Success </span>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Jane Hilson </a>
												</td>
												<td>
													 5 Aug, 2013
												</td>
												<td>
													 $239.85
												</td>
												<td>
													<span class="label label-sm label-danger">
													Canceled </span>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:;">
													Patrick Walker </a>
												</td>
												<td>
													 6 Aug, 2013
												</td>
												<td>
													 $1239.85
												</td>
												<td>
													<span class="label label-sm label-success">
													Success </span>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title tabbable-line">
							<div class="caption">
								<i class="icon-share font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Revenue</span>
								<span class="caption-helper">weekly stats...</span>
							</div>
							<ul class="nav nav-tabs">
								<li>
									<a href="#portlet_tab2" data-toggle="tab" id="statistics_amounts_tab">
									Amounts </a>
								</li>
								<li class="active">
									<a href="#portlet_tab1" data-toggle="tab">
									Orders </a>
								</li>
							</ul>
						</div>
						<div class="portlet-body">
							<div class="tab-content">
								<div class="tab-pane active" id="portlet_tab1">
									<div id="statistics_1" class="chart">
									</div>
								</div>
								<div class="tab-pane" id="portlet_tab2">
									<div id="statistics_2" class="chart">
									</div>
								</div>
							</div>
							<div class="margin-top-20 no-margin no-border">
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-success uppercase">
										Revenue: </span>
										<h3>$1,234,112.20</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-info uppercase">
										Tax: </span>
										<h3>$134,90.10</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-danger uppercase">
										Shipment: </span>
										<h3>$1,134,90.10</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-warning uppercase">
										Orders: </span>
										<h3>235090</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
@endsection