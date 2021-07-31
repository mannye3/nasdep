@extends('layouts.adminaccount')

@section('content')
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Subheader-->
                        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <!--begin::Page Heading-->
                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <!--begin::Page Title-->
                                        <h5 class="text-dark font-weight-bold my-1 mr-5">ALL PARTICIPANTS</h5>
                                        <!--end::Page Title-->
                                        <!--begin::Breadcrumb-->

                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Page Heading-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->

                            </div>
                        </div>
                        <!--end::Subheader-->
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container">


                                <!--begin::Notice-->

                                <!--end::Notice-->
                                <!--begin::Card-->
                                <div class="card card-custom">

                                    <div class="card-header py-3">

                                        @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success')}}
                                        </div>

                                        @endif



                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                            <li>{{ $error}}</li>
                                                @endforeach
                                            </ul>

                                        </div>

                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <!--begin: Datatable-->

                                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Exp</th>
													<th>Stage</th>
                                                    <th>Industry</th>
                                                    <th>Reg Date</th>
                                                    <th>Incubator</th>

                                                    <th>Created At</th>
                                                    <th>Update At</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>


                                              
                                                @foreach  ($pools as $pool)

												<tr>
													<td>  {{ $loop->iteration }}</td>
													<td>{{ $pool->name }}</td>
													<td>{{ $pool->exp }}</td>
													<td>{{ $pool->growth_stage }}</td>
                                                    <td>{{ $pool->industry->name }}</td>
                                                    <td>{{ $pool->regdate }}</td>
                                                    <td>{{ $pool->incubator->company->name }}</td>

                                                    <td>{{ $pool->created_at }}</td>
                                                    <td>{{$pool->updated_at }}</td>
													<td>
                                                        @if($pool->suspended == 0)
                                                        <span class="label label-lg label-light-success label-inline font-weight-bold py-4">Active</span>

                                                        @endif

                                                        @if($pool->suspended == 1)
                                                        <span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Disabled</span>

                                                        @endif
                                                    </td>



                                                    <td class="text-center">
                                                        <a href="{{ route('adminViewPool', $pool->id)}}" class="fa fa-search" title="View account"></a>&nbsp;

                                                        <a href=""  data-toggle="modal" data-target="#ChangeinvestorStatusModal-{{ $pool->id}}" class="fas fa-adjust" title="Change Status"></a>&nbsp;


                                                        <a href=""  data-toggle="modal" data-target="#deleteinvestorModal-{{ $pool->id}}" class="fas fa-trash-alt" title="Delete Account"></a>&nbsp;

                                                     </td>
												</tr>
                                                @endforeach
											</tbody>
										</table>

                                        <!--end: Datatable-->
                                    </div>
                                </div>
                                <!--end::Card-->
                                <!--begin::Card-->

                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>




                        {{-- @foreach  ($investors as $investor)
            <div class="modal fade" id="deleteinvestorModal-{{ $investor->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">You are about to delete {{ $investor->company->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
               Are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <form method="POST" id="adminDeleteInvestor-{{ $investor->id}}"  action="{{ route('adminDeleteInvestor', $investor->id)}}">@csrf
                <button type="submit" class="btn btn-primary font-weight-bold">Yes, delete account</button>
                </form>
            </div>
        </div>
    </div>
</div>
 @endforeach



            @foreach  ($investors as $investor)

            <div class="modal fade" id="ChangeinvestorStatusModal-{{ $investor->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">You are about to change  {{ $investor->company->name}} status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form method="POST" id="adminStatusUserPost-{{ $investor->id}}"  action="{{ route('statusInvetors', $investor->id)}}">@csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleSelect1">Change Status
                    <span class="text-danger">*</span></label>
                    <select class="form-control" id="exampleSelect1" name="suspended">
                        <option value="0">Enable</option>
                        <option value="1">Disable</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary font-weight-bold">Yes, change status</button>
                </form>
            </div>
            </div>
            </div>
            </div>
            @endforeach --}}


                        @endsection
