@extends('master.admin.master')

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add Product Form</li>
        </ol>

        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" name="name" required>
            </div>

            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" name="category_name" class="form-control" id="categoryName" required>
            </div>

            <div class="mb-3">
                <label for="brandName" class="form-label">Brand Name</label>
                <input type="text" name="brand_name" class="form-control" id="brandName" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Product Image</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection

