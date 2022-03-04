@extends('admin.admin-master')
@section('body')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Create Post</h3>
                            <a href="{{ route('post.index') }}" class="btn btn-primary">Manage Posts</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        @if($message = Session::get('message'))
                        <div class="alert alert-warning alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ $message}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12 col-lg-12  col-md-12 ">
                                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="title">Post Title:</label>
                                            <div class="col-sm-10">
                                                <input type="name" name="Post_Titale" value="{{ old('title') }}" class="form-control" placeholder="Enter title">
                                                <span class="text-danger">{{ $errors->has('Post_Titale') ? $errors->first('Post_Titale') : ''}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="image">Choose Category:</label>
                                            <div class="custom-file col-sm-10">
                                                <select name="category_id" id="category" class="form-control">
                                                    <option value="" style="display: none" selected>Select Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="col-sm-2 col-form-label mt-4 " for="Image">Fetures Image:</label>
                                                <div class="custom-file col-sm-10 mt-4 ">
                                                    <input type="file" name="Image" class="form-control" id="Image">
                                                    <span class="text-danger">{{ $errors->has('Image') ? $errors->first('Image') : ''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label mt-3">Choose Post Tags:</label>
                                                <div class=" d-flex flex-wrap col-sm-10 mt-4">
                                                    @foreach($tags as $tag)
                                                    <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                        <input class="custom-control-input" name="tag_id[]" type="checkbox" id="tag{{ $tag->id}}" value="{{ $tag->id }}">
                                                        <label for="tag{{ $tag->id}}" class="custom-control-label">{{ $tag->name }}</label>
                                                        <span class="text-danger">{{ $errors->has('tag_id') ? $errors->first('tag_id') : ''}}</span>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label mb-3" for="Description"> Publication status:</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check-inline ">
                                                        <label class="form-check-label "><input type="radio" name="status" value=" Published"> Published</label>
                                                        <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ''}}</span>
                                                    </div>
                                                    <div class="form-check-inline ">
                                                        <label class="form-check-label"> <input type="radio" name="status" value=" Unpublished"> Unpublished</label>
                                                        <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ''}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label " for="exampleInputPassword1">Short Description:</label>
                                                <div class="col-sm-10">
                                                    <textarea name="sdescription" rows="2" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
                                                    <span class="text-danger">{{ $errors->has('sdescription') ? $errors->first('sdescription') : ''}}</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Poat Description:</label>
                                        <textarea name="ldescription" id="description" rows="4" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
                                        <span class="text-danger">{{ $errors->has('ldescription') ? $errors->first('ldescription') : ''}}</span>
                                    </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-lg btn-primary">Create New Post</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('/') }}admin-style/sumarnote/summernote-bs4.min.css">
@endsection

@section('script')
<script src="{{ asset('/') }}admin-style/sumarnote/summernote-bs4.min.js"></script>
<script>
    $('#description').summernote({
        placeholder: 'write your blog post details.....',
        tabsize: 2,
        height: 300
    });
</script>
@endsection