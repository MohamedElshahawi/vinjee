@extends('dashboard.layouts.master')

@section('title')
Roles
@endsection


@section('css')

@endsection






@section('content')



						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card custom-bdr">
									<div class="card-header">Roles Datatable

                                        <a style="float: right" href="{{ route('roles.create') }}" class="btn btn-primary">
                                            Create Role <i class="icon icon-create"></i>
                                            </a>
                                    </div>
									<div class="card-body">
										<table id="basicExample" class="table table-bordered">
											<thead>
												<tr>
                                                    <th>#</th>
													<th>Name</th>
													<th>Start date</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
                                                {{-- @dd($roles) --}}

												@foreach($roles as $role)
												<tr>
                                                    <td>{{ $i ++ }}</td>
													<td>{{$role->name}}</td>
													<td>{{$role->created_at}}</td>
													<td>

                                                        <a href="{{ route('roles.show',$role->id) }}" class="btn btn-orange btn-sm">
                                                            Show <i class="icon icon-drafts"></i>
                                                        </a>
                                                        <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-success btn-sm">
                                                            Edit <i class="icon icon-edit"></i>
                                                        </a>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                        {!! Form::close() !!}

                                                    </td>

												</tr>
                                                @endforeach



											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Row ends -->














@endsection








@section('scripts')

@endsection
