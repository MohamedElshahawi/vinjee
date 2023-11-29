@extends('dashboard.layouts.master')

@section('title')
Sizes
@endsection


@section('css')

@endsection






@section('content')



						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card custom-bdr">
									<div class="card-header"> Size Datatable

                                        <a style="float: right" href="{{ route('sizes.create') }}" class="btn btn-primary">
                                            Create New Size <i class="icon icon-create"></i>
                                            </a>
                                    </div>
									<div class="card-body">
										<table id="basicExample" class="table table-bordered">
											<thead>
												<tr>
                                                    <th>#</th>
													<th>Size</th>
													<th>Start date</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>

												@foreach($sizes as $size)
												<tr>
                                                    <td>{{ $i ++ }}</td>
													<td>{{ ucfirst($size->name) }}</td>

													<td>{{$size->created_at}}</td>
													<td>
                                                        <a href="{{ route('sizes.show',$size->id) }}" class="btn btn-orange btn-sm">
                                                            Show <i class="icon icon-drafts"></i>
                                                        </a>
                                                        <a href="{{ route('sizes.edit',$size->id) }}" class="btn btn-success btn-sm">
                                                            Edit <i class="icon icon-edit"></i>
                                                        </a>

                                                        {!! Form::open(['method' => 'DELETE','route' => ['sizes.destroy', $size->id],'style'=>'display:inline']) !!}
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


@endsection








@section('scripts')




@endsection
