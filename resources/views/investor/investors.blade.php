@extends('layouts.account')

@section('content')
				<div class="col-lg-12 mb15">
					<div class="breadcrumb_content style2">
						<h2 class="breadcrumb_title float-left">Investor Companies</h2>

					</div>
				</div>
			</div>
			<div class="my_listings">
				<div class="row">

					<div class="col-lg-12 mt25">
						<div class="">


							<form action="#">
							  <table id="default-datatable" class="display table  table-bordered">
								  	<thead>
									    <tr class="carttable_row">
									    	<th class="cartm_title"></th>
									    	<th class="cartm_title">Name</th>
									    	<th class="cartm_title">EXP(Years)</th>
									    	<th class="cartm_title">Industry Preferences</th>
									    	<th class="cartm_title">Sector Preferences</th>
									    	<th class="cartm_title">Operational Countries</th>
                                            <th class="cartm_title">Location</th>

									    </tr>
								  	</thead>
								  	<tbody class="table_body">
									    <tr>
									    	<td><img src="https://www.nasdep.com/img/sankore.png" alt="s1.png"></td>
                                            <td>EDC SECURITIES LTD</td>
									    	<td>25</td>
									    	<td>Transportation</td>
									    	<td>Transportation</td>
									    	<td>Nigeria</td>
                                            <td>Lagos</td>

									    </tr>

								  	</tbody>
								</table>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


    @endsection
