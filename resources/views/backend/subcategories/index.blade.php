@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategoy List</h1>
		<a href="{{route('subcategories.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Now</a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1;@endphp
				@foreach($subcategories as $subcategory)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$subcategory->name}}</td>
		
					
					<td><a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-danger">Edit</button></a>
						<a href="#" class="btn btn-success">Delete</button></a>
						<a href="#" class="btn btn-primary">Detail</button></a></td>
					</tr>
					@endforeach 
				</tbody>
			</table>
		</div>
	</div>
</div>
</div> 

@endsection