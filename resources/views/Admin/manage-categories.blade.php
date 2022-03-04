@extends('admin.admin-master')
@section('body')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Categories</h1>
        <a href="{{route('add-categories')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Category</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 container">
        <div class="card card-body rounded-0">
            <div class="container">
                @if($message = Session::get('message'))
                <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ $message}}
                </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Categories</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SL.NO</th>
                                        <th>Categories Image</th>
                                        <th> Name</th>
                                        <th>Description</th>
                                        <th> Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($categories->count())
                                    @foreach($categories as $key => $category)

                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>
                                            <img src="{{ asset($category->image) }}" class="img-fluid " width="70px" height="70px" alt="">
                                        </td>
                                        <td>{{$category->name}}</td>
                                        <td>{{ substr($category->Description, 0,15)}} ...</td>
                                        <td>{{$category->status}}</td>
                                        <td>
                                            <a href="{{ route('edit-category', [ 'id' => $category->id])}}" class="btn btn-success">Edite</a>
                                            <a href="{{ route('edit-category', [ 'id' => $category->id])}}" class="btn btn-danger">Delete</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="p-5">
                                            <h5 class="text-center p-5">No categories found.</h5>
                                        </td>
                                    </tr>
                                    @endif

                                </tbody>

                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        </div>

    </div>
    @endsection