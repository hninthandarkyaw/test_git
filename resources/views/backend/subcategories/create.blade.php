@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategories Create Form</h1>
		
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			
		<div class="form-group row{{$errors->has('name')?'has-error':''}}">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="name">
					<span class="text-danger">{{$errors->first('name')}}</span>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Category</label>
				<div class="col-sm-10">
					<select class="form-control form-control-md" id="inputBrand" name="category_id">
						<optgroup label="Choose subcategory">
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

@endsection