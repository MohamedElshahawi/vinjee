@extends('dashboard.layouts.master')

@section('title')
Sub Categories
@endsection


@section('css')

@endsection






@section('content')



						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card custom-bdr">
									<div class="card-header">Sub Categories Datatable

                                        <a style="float: right" href="{{ route('subcategories.create') }}" class="btn btn-primary">
                                            Create Sub Category <i class="icon icon-create"></i>
                                            </a>
                                    </div>
									<div class="card-body">
										<table id="basicExample" class="table table-bordered">
											<thead>
												<tr>
                                                    <th>#</th>
													<th>Category</th>
													<th>Start date</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>

												@foreach($subcategories as $subcategory)
												<tr>
                                                    <td>{{ $i ++ }}</td>
													<td>{{ ucfirst($subcategory->name) }}</td>

													<td>{{$subcategory->created_at}}</td>
													<td>
                                                        <a href="{{ route('subcategories.show',$subcategory->id) }}" class="btn btn-orange btn-sm">
                                                            Show <i class="icon icon-drafts"></i>
                                                        </a>
                                                        <a href="{{ route('subcategories.edit',$subcategory->id) }}" class="btn btn-success btn-sm">
                                                            Edit <i class="icon icon-edit"></i>
                                                        </a>

                                                        {!! Form::open(['method' => 'DELETE','route' => ['subcategories.destroy', $subcategory->id],'style'=>'display:inline']) !!}
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
