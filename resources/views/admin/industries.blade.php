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


                                                {{ $i=0 }}
                                                @foreach  ($industry as $industries)
                                                {{ $i++ }}
												<tr>
													<td>  {{ $i }}</td>
                                                    <td>{{ $industries->name }}</td>
                                                    <td>{{ $industries->desc }}</td>
													<td></td>

                                                    <td>{{$industries->created_at }}</td>
                                                    <td>{{$industries->updated_at }}</td>
													<td>
                                                    </td>



                                                    <td class="text-center">


                                                        <a href=""  data-toggle="modal" data-target="#ChangeanalystStatusModal-{{ $industries->id}}" class="fas fa-edit" title="Change Status"></a>&nbsp;


                                                        <a href=""  data-toggle="modal" data-target="#deleteanalystModal-{{ $industries->id}}" class="fas fa-trash-alt" title="Delete Account"></a>&nbsp;

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



           @foreach  ($industry as $industries)
            <div class="modal fade" id="deleteanalystModal-{{ $industries->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">You are about to delete {{ $industries->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
               Are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <form method="POST" id="adminDeleteInvestor-{{ $industries->id}}"  action="{{ route('deleteindustry', $industries->id)}}">@csrf
                <button type="submit" class="btn btn-primary font-weight-bold">Yes, delete industries</button>
                </form>
            </div>
        </div>
    </div>
</div>
 @endforeach



            @foreach  ($industry as $industries)

            <div class="modal fade" id="ChangeanalystStatusModal-{{ $industries->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit  {{ $industries->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form method="POST" id="adminStatusUserPost-{{ $industries->id}}"  action="{{ route('editindustry', $industries->id)}}">@csrf
            <div class="modal-body">

                <div>

                    <div class="form-group">
                     <label>Name <span class="text-danger">*</span></label>
                     <input type="text" class="form-control"  value="{{ $industries->name }}" name="name"/>
                    </div>



                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <textarea class="form-control"  name="desc">{{ $industries->desc }} </textarea>

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
