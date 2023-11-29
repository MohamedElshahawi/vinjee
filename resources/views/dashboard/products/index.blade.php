@extends('dashboard.layouts.master')

@section('title')
Products
@endsection


@section('css')


@endsection






@section('content')




						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card custom-bdr">
									<div class="card-header">Products Datatable

                                        <a style="float: right" href="{{ route('products.create') }}" class="btn btn-primary">
                                            Create Product <i class="icon icon-create"></i>
                                            </a>
                                    </div>
									<div class="card-body">
										<table id="basicExample" class="table table-bordered">
											<thead>
												<tr>
                                                    <th>#</th>
													<th>Product Name</th>
													{{-- <th>Detail</th> --}}
													<th>Price</th>
                                                    <th>Category</th>
                                                    <th>Start Date</th>
													<th>Actions</th>

												</tr>
											</thead>
											<tbody>

												@foreach($products as $product)
												<tr>
                                                    <td>{{ $i ++ }}</td>
													<td>{{ ucfirst($product->name) }}</td>
                                                    {{-- <td>{{ $product->detail }}</td> --}}
													<td>${{ $product->price }}</td>
                                                    <td>{{ $product->getSubcategoryName() }}</td>
													<td>{{ $product->created_at }}</td>
													<td>
                                                        <a href="{{ route('products.show',$product->id) }}" class="btn btn-orange btn-sm">
                                                            Show <i class="icon icon-drafts"></i>
                                                        </a>
                                                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-success btn-sm">
                                                            Edit <i class="icon icon-edit"></i>
                                                        </a>

                                                        {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
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
