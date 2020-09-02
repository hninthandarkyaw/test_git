@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
		
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group row{{$errors->has('codeno')?'has-error':''}}">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Codeno</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="codeno" name="codeno">
					<span class="text-danger">{{$errors->first('codeno')}}</span>
				</div>
			</div>
			<div class="form-group row{{$errors->has('name')?'has-error':''}}">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="name">
					<span class="text-danger">{{$errors->first('name')}}</span>
				</div>
			</div>

			<div class="form-group row{{$errors->has('photo')?'has-error':''}}">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" id="file" name="photo" class="form-control">
				<span class="text-danger">{{$errors->first('photo')}}</span>
				</div>
			</div>
			<div class="form-group row{{$errors->has('price')?'has-error':''}}">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="price" name="price">
					<span class="text-danger">{{$errors->first('price')}}</span>
				</div>
			</div>
			<div class="form-group row{{$errors->has('dicount')?'has-error':''}}">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="discount" name="discount">
					<span class="text-danger">{{$errors->first('discount')}}</span>
				</div>
			</div>
			<div class="form-group row{{$errors->has('description')?'has-error':''}}">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea class="form-control" name=" description"></textarea>
					<span class="text-danger">{{$errors->first('description')}}</span>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Brand</label>
				<div class="col-sm-10">
					<select class="form-control form-control-md" id="inputBrand" name="brand">
						<optgroup label="Choose brand">
							@foreach($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Subcategory</label>
				<div class="col-sm-10">
					<select class="form-control form-control-md" id="inputBrand" name="subcategory">
						<optgroup label="Choose subcategory">
							@foreach($subcategories as $subcategory)
							<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
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