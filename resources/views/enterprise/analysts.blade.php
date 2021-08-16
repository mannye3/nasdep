@extends('layouts.account')

@section('content')
				<div class="col-lg-12 mb15">
					<div class="breadcrumb_content style2">
						<h2 class="breadcrumb_title float-left">Analyst Companies</h2>

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
									    	<th class="cartm_title">ENTERPRISES</th>
									    	<th class="cartm_title">OPERATIONAL COUNTRIES</th>
									    	<th class="cartm_title">LOCATION</th>

									    </tr>
								  	</thead>
								  	<tbody class="table_body">
                                        @foreach  ($analysts as $analyst)
									    <tr>
									    	<td><img src="{{ $analyst->company->logo }}" height="50px"></td>
									    		<td>{{ $analyst->company->name }}</td>


									    	<td>{{ $analyst->company->ind_exp }}</td>
									    	<td>{{ $analyst->company->enterprise->count() }}</td>
									    	<td>{{ $analyst->company->country->name }}</td>
									    	<td>{{ $analyst->company->state->name }}</td>

									    </tr>



                                        @endforeach
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
