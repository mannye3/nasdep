@extends('layouts.account')

@section('content')
				<div class="col-lg-12 mb15">
					<div class="breadcrumb_content style2">
						<h2 class="breadcrumb_title float-left">Pools</h2>

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
									    	<th class="cartm_title">#</th>
									    	<th class="cartm_title">Name</th>
									    	<th class="cartm_title">EXP(Years)</th>
									    	<th class="cartm_title">Stage</th>
									    	<th class="cartm_title">Industry</th>
                                            <th class="cartm_title">Reg Date</th>
									    	<th class="cartm_title">Incubator</th>


									    </tr>
								  	</thead>
								  	<tbody class="table_body">
                                        @foreach  ($pools as $pool)
									    <tr>
									    	<td> {{ $loop->iteration }}</td>
                                            <td>{{ $pool->name }}</td>
									    	<td>{{ $pool->exp }}</td>
									    	<td>{{ $pool->growth_stage }}</td>
                                            <td>{{ $pool->industry->name }}</td>
									    	<td>{{ $pool->regdate }}</td>
									    	<td>{{ $pool->incubator->company->name }}</td>


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
