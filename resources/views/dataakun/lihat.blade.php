@extends('app')

@section('content')

<div class="col-sm-12">
								<div class="card-box">
									<div class="row">
										<div class="col-lg-12">
											<h4 class="m-t-0 header-title"><b>Data Akun Yang Terdaftar</b></h4>

											<div class="p-20">
												<table class="table m-0">

													<thead>
														<tr>
															<th>No.</th>
															<th>Nama Staff</th>
															<th>Username</th>
															<th>Hak Akses</th>
                              <th colspan="2">Edit</th>
														</tr>
													</thead>
													<tbody>
														@foreach ($user as $key => $value)
														<tr>
															<td>{{ $key+1 }}</td>
															<td>{{ $value->name }}</td>
															<td>{{ $value->username }}</td>
															<td>{{ $value->tipe }}</td>
															<td></td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>

										</div>

@endsection
