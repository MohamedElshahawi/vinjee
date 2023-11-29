@extends('dashboard.layouts.master')

@section('title')
Users
@endsection


@section('css')

@endsection






@section('content')



						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card custom-bdr">
									<div class="card-header">Users Datatable

                                        <a style="float: right" href="{{ route('users.create') }}" class="btn btn-primary">
                                            Create User <i class="icon icon-create"></i>
                                            </a>
                                    </div>
									<div class="card-body">
										<table id="basicExample" class="table table-bordered">
											<thead>
												<tr>
                                                    <th>#</th>
													<th>Name</th>
													<th>Email</th>
													<th>Role</th>
													<th>Status</th>
													<th>Start date</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>

												@foreach($data as $user)
												<tr>
                                                    <td>{{ $i ++ }}</td>
													<td>{{ ucfirst($user->name) }}</td>
													<td>{{$user->email}}</td>
													<td>{{  $user->getRoleNames() [0]}}</td>
													<td>
                                                        <label class="label btn-sm btn-primary btn-rounded">Active</label>
                                                    </td>
													<td>{{$user->created_at}}</td>
													<td>
                                                        <a href="{{ route('users.show',$user->id) }}" class="btn btn-orange btn-sm">
                                                            Show <i class="icon icon-drafts"></i>
                                                        </a>
                                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success btn-sm">
                                                            Edit <i class="icon icon-edit"></i>
                                                        </a>

                                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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










                                                        {{-- <button type="button" class="btn btn-orange btn-sm">Edit <i class="icon icon-edit"></i></button> --}}
                                                        {{-- <button type="button" class="btn btn-success btn-sm">Show <i class="icon icon-drafts"></i></button> --}}
                                                        {{-- <button type="button" class="btn btn-danger btn-sm">Delete <i class="icon icon-trash"></i></button> --}}



@endsection








@section('scripts')

@endsection
