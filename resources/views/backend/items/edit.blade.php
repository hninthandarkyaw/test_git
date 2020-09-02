@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
		
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Codeno</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="codeno" name="codeno" value="{{$item->codeno}}" readonly="readonly">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="name" value="{{$item->name}}">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Photo</label>
				<img src="{{asset($item->photo)}}" class="img-fluid w-25">
				<input type="hidden" name="oldphoto" value="{{$item->photo}} ">
				<div class="col-sm-10">
					<input type="file" id="file" name="photo">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="price" name="price" value="{{$item->price}}" >
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="discount" name="discount" value="{{$item->discount}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea class="form-control" name=" description">{{$item->description}}</textarea>
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
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

@endsection