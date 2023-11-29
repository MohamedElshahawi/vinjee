@extends('dashboard.layouts.master')

@section('title')
Categories
@endsection


@section('css')

@endsection






@section('content')



						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card custom-bdr">
									<div class="card-header">Categories Datatable

                                        <a style="float: right" href="{{ route('categories.create') }}" class="btn btn-primary">
                                            Create Category <i class="icon icon-create"></i>
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
                                                {{-- @dd($categories) --}}

												@foreach($categories as $category)
												<tr>
                                                    <td>{{ $i ++ }}</td>
													<td>{{$category->name}}</td>
													<td>{{$category->created_at}}</td>
													<td>

                                                        <a href="{{ route('categories.show',$category->id) }}" class="btn btn-orange btn-sm">
                                                            Show <i class="icon icon-drafts"></i>
                                                        </a>
                                                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-success btn-sm">
                                                            Edit <i class="icon icon-edit"></i>
                                                        </a>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                        {!! Form::close() !!}

                                                    </td>

												</tr>
                                                @endforeach
@endsection






@section('scripts')

@endsection
