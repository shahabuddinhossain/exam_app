@extends('master.admin.master')

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <h4 class="text-center text-success">{{Session::get('message')}}</h4>

        {{--Data Table--}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Producs
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Sl.</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category_name}}</td>
                        <td>{{$product->brand_name}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <img src="{{asset($product->image)}}" alt="{{$product->name}}" width="50px" height="50px">
                        </td>
                        <td>{{$product->status==1?'Available':'Stock Out'}}</td>
                        <td>
                            <a href="{{route('update-status',['id'=>$product->id])}}">
                                <i class="fa fa-arrow-up fa-sm"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-edit fa-sm"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-trash fa-sm"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{--data Table--}}

    </div>
@endsection
