@extends('admin.admin-master')
@section('body')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Tag</h1>
        <a href="{{route('tag.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Manage Tag</a>
    </div>
</div>   

 <div class="card card-body mb-5">
    <div class="container">
      @if($message = Session::get('message'))
      <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       {{ $message}}
      </div>
      @endif
            
      <div class="container">
        <form class="" action="{{route('tag.store')}}" method="POST">
            @csrf
          <div class="form-group row">
             <label class="col-sm-2 col-form-label" for="Categories Name"> Tag Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Categories Name" placeholder="Category Name...." name="name">
              <span>{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
              </div>
         </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Description"> Description:</label>
            <div class="col-sm-10">          
              <textarea   id="Categories Description"class="form-control" rows="2" name="Description"> </textarea>
          
            </div>
        </div>
      
        <div class="form-group row ">        
          <div class=" col-sm-10">
            <button type="submit" class="btn btn-success">Create New Tag</button>
         </div>
        </div>
    </form>
    </div>
 </div> 

@endsection