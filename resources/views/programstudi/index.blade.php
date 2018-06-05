@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Program Studi
			  	<div class="panel-title pull-right"><a href="{{ route('programstudis.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>NAMA PROGRAM</th>
					  <th>FASILITAS</th>
					  <th>INDUSTRI</th>
					  <th>STRUKTUR</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_program }}</td>
				    	<td>{{ $data->fasilitas_id }}</td>
				    	<td>{{ $data->industris_id }}</td>
				    	<td>{{ $data->strukturs_id }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('programstudis.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('programstudis.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('programstudis.destroy',$data->id) }}">
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