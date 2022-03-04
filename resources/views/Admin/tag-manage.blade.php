@extends('admin.admin-master')
@section('body')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Tag</h1>
        <a href="{{route('tag.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Tag</a>
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
                        <h6 class="m-0 font-weight-bold text-primary">Manage Tag</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SL.NO</th>
                                        <th> Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($tags->count())
                                    @foreach($tags as $key => $tag)

                                    <tr>
                                        <td class="align-middle text-center">{{ $loop->iteration}}</td>
                                        <td class="align-middle text-center">{{$tag->name}}</td>
                                        <td  class="align-middle text-center">{{ substr($tag->Description, 0,15)}} ...</td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('tag.edit', [$tag->id])}}" class="btn btn-success">Edite</a>
                                            <a href="{{ route('tag.edit', [ $tag->id])}}" class="btn btn-danger">Delete</a>
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