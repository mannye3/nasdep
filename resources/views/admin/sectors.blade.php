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
													<th>Industry</th>
													<th></th>

                                                    <th>Created At</th>
                                                    <th>Update At</th>
													<th></th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>


                                                
                                                @foreach  ($sectors as $sector)

												<tr>
													<td> {{ $loop->iteration }}</td>
                                                    <td>{{ $sector->name }}</td>
                                                    <td>{{ $sector->industry->name }}</td>
													<td></td>

                                                    <td>{{ $sector->created_at }}</td>
                                                    <td>{{$sector->updated_at }}</td>
													<td>
                                                    </td>



                                                    <td class="text-center">


                                                        <a href=""  data-toggle="modal" data-target="#ChangeanalystStatusModal-{{ $sector->id}}" class="fas fa-edit" title="Change Status"></a>&nbsp;


                                                        <a href=""  data-toggle="modal" data-target="#deleteanalystModal-{{ $sector->id}}" class="fas fa-trash-alt" title="Delete Account"></a>&nbsp;

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



           @foreach  ($sectors as $sector)
            <div class="modal fade" id="deleteanalystModal-{{ $sector->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">You are about to delete {{ $sector->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
               Are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <form method="POST" id="adminDeleteInvestor-{{ $sector->id}}"  action="{{ route('deletesector', $sector->id)}}">@csrf
                <button type="submit" class="btn btn-primary font-weight-bold">Yes, delete sector</button>
                </form>
            </div>
        </div>
    </div>
</div>
 @endforeach



            @foreach  ($sectors as $sector)

            <div class="modal fade" id="ChangeanalystStatusModal-{{ $sector->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit  {{ $sector->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form method="POST" id="adminStatusUserPost-{{ $sector->id}}"  action="{{ route('editsector', $sector->id)}}">@csrf
            <div class="modal-body">

                <div>

                    <div class="form-group">
                     <label>Email address <span class="text-danger">*</span></label>
                     <input type="text" class="form-control"  value="{{ $sector->name }}" name="name"/>
                    </div>



                    <div class="form-group">
                        <label>Select Industry <span class="text-danger">*</span></label>
                        <select name="industry_id" class="form-control" id="exampleSelect1">
                            @foreach($industries as $industry)
                            <option {{ ($industry->id) == $sector->industry_id ? 'selected' : '' }}  value="{{ $industry->id }}">
                                {{$industry->name }}</option>
                                @endforeach

                           </select>
                       </div>




                   </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary font-weight-bold">Submit</button>
                </form>
            </div>
            </div>
            </div>
            </div>
            @endforeach


                        @endsection
