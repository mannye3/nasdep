@extends('layouts.account')

@section('content')
				<div class="col-lg-12 mb15">
					<div class="breadcrumb_content style2">
						<h2 class="breadcrumb_title float-left">Incubator Companies</h2>

					</div>
				</div>
			</div>
			<div class="my_listings">
				<div class="row">

					<div class="col-lg-12 mt25">
						<div class="">
							<form action="#">
								  <table id="default-datatable" class="display table  table-bordered responsive">
								  	<thead>
									    <tr class="carttable_row">
									    	<th class=""></th>
									    	<th class="">Name</th>
									    	<th class="">EXP(Years)</th>
									    	<th class="">Growth Preferences</th>
									    	<th class="">Industry Preferences</th>
									    	<th class="">Operational Countries</th>
									    	<th class="">Enterprises</th>
									    	<th class="">Alumini</th>


									    </tr>
								  	</thead>
								  	<tbody class="table_body">
                                        @foreach  ($incubators as $incubator)
									    <tr>
									    	<td><img src="{{ $incubator->company->logo }}" height="50px"></td>
									    	<td>{{ $incubator->company->name }}</td>
									    	<td>{{ $incubator->company->ind_exp }}</td>
									    	<td></td>
									    	<td>{{ $incubator->company->industry->name }}</td>
									    	<td>{{ $incubator->company->country->name }}</td>
									    	<td>{{ $incubator->enterprise->count() }}</td>
													<td>{{ $incubator->pool->count() }}</td>


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
