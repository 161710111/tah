@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Eskul
			  	<div class="panel-title pull-right"><a class="btn btn-warning" href="#">Tambah</a>
			  	</div>
			  </div>

			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
			  		  <th>Foto </th>
					  <th>Paket </th>
					  <th>Tanggal </th>
					  <th>Waktu </th>
					  <th>Harga </th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($paket as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="max-height:60px; max-width: 60px; margin-top: 6px;"></td>
				    	<td>{{ $data->paket }}</td>
				    	<td>{{ $data->tanggal }}</td>
				    	<td>{{ $data->waktu }}</td>
				    	<td>{{ $data->harga }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('eskuls.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('eskuls.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('eskuls.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection