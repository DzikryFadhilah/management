@extends('app')

@section('content')

<div class="col-sm-12">
								<div class="card-box">
									<div class="row">
										<div class="col-lg-12">
											<h4 class="m-t-0 header-title"><b>Data Penyewa</b></h4>

											<div class="p-20">
												<table class="table m-0">

													<thead>
														<tr>
															<th>No.</th>
															<th>Nama Perusahaan</th>
															<th>Nama Direktur</th>
															<th>Fasilitas</th>
                              <th colspan="2">Edit</th>

														</tr>
													</thead>
													<tbody>
														<tr>
                              <?php $i=1;?>
                              @foreach ($data as $key)

                              <td class="text-center"><?php echo $i; $i++;?></td>
															<td>{{$key->nama_perusahaan}}</td>
															<td>{{$key->nama_direktur}}</td>
															<td>{{$key->fasilitas}}</td>

                              <td class="text-center"><a href="{{route('edit_data',$key->id)}}">Edit</a></td>
                              <td class="text-center"><a href="{{route('delete_data',$key->id)}}">Delete</a></td>
														</tr>
                            @endforeach
													</tbody>
												</table>
											</div>

										</div>

@endsection
