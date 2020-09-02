@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategories Edit Form</h1>
		
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="name" value="{{$subcategory->name}}">
				</div>
			</div>

		<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Category</label>
				<div class="col-sm-10">
					<select class="form-control form-control-md" id="inputBrand" name="category">
						<optgroup label="Choose category">
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

@endsection