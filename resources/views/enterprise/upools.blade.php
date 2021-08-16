@extends('layouts.account')

@section('content')
				<div class="col-lg-12 mb15">
					<div class="breadcrumb_content style2">
						<h2 class="breadcrumb_title float-left">Unverified  Pools</h2>

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
                                            <th class="cartm_title">TOI</th>
									    	<th class="cartm_title">TOF</th>
                                            <th class="cartm_title">TLA</th>
                                            <th class="cartm_title">Turnover</th>
                                            <th class="cartm_title">Amount</th>


									    </tr>
								  	</thead>
								  	<tbody class="table_body">
                                        @foreach  ($upools as $upool)
									    <tr>
									    	<td> {{ $loop->iteration }}</td>
                                            <td>{{ $upool->name }}</td>
									    	<td>{{ $upool->exp }}</td>
									    	<td>{{ $upool->growth_stage }}</td>
                                            <td>{{ $upool->industry->name }}</td>
									    	<td>{{ $upool->toi }}</td>
									    	<td>{{ $upool->tof }}</td>
                                            <td>{{ $upool->ylaf }}</td>
                                            <td> <?php echo  number_format($upool->ylaf_turnover) ?></td>

                                            <td> <?php echo  number_format($upool->amount) ?></td>



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
