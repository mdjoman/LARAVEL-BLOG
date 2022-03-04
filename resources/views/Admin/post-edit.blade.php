@extends('admin.admin-master')
@section('body')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Edit Post</h3>
                            <a href="{{ route('post.destroy') }}" class="btn btn-primary"> <i class="fas fa-trash"> Post Delete</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-12  col-md-12 ">
                                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="title">Post Title:</label>
                                            <div class="col-sm-10">
                                                <input type="name" name="title" value="{{ $post->Post_Titale }}" class="form-control" placeholder="Enter title">
                                              
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="image">Choose Category:</label>
                                            <div class="custom-file col-sm-10">
                                                <select name="category" id="category" class="form-control">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" @if($post->category_id == $category->id) selected @endif> {{ $category->name }} </option>
                                                @endforeach
                                                </select>
                                               
                                            </div>
                                            <div class="form-group row ">
                                                <label class="col-sm-2 col-form-label mt-4 " for="image">Fetures Image:</label>
                                                <div class="custom-file col-sm-10 mt-4 ">
                                                    <input type="file" name="image" class="custom-file-input" id="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label mt-3">Choose Post Tags:</label>
                                                <div class=" d-flex flex-wrap col-sm-10 mt-4">
                                                @foreach($tags as $tag) 
                                                <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                    <input class="custom-control-input" name="tag_id[]" type="checkbox" id="tag{{ $tag->id}}" value="{{ $tag->id }}"
                                                    @foreach($post->tag_id as $tag)
                                                        @if($tag->id == $tag->id) checked @endif
                                                    @endforeach >
                                                    <label for="tag{{ $tag->id}}" class="custom-control-label">{{ $tag->name }}</label>
                                                </div>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label mb-3" for="Description"> Publication status:</label>
                                            <div class="col-sm-10">
                                                <div class="form-check-inline ">
                                                    <label class="form-check-label "><input type="radio" name="status"{{ $product->status == 'Published' ? 'checked' : '' }} value=" Published"> Published</label>
                                              
                                                </div>
                                                <div class="form-check-inline ">
                                                    <label class="form-check-label"> <input type="radio" name="status"{{ $product->status == 'Unpublished' ? 'checked' : '' }} value=" Unpublished"> Unpublished</label>
                                          
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Poat Description:</label>
                                                <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description">{{ $post->sdescription }}</textarea>
                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label " for="exampleInputPassword1">Short Description:</label>
                                                <div class="col-sm-10">
                                                <textarea name="sdescription" rows="2" class="form-control" placeholder="Enter description">{{ $post->ldescription  }}</textarea>
                                                <span>{{ $errors->has('sdescription') ? $errors->first('sdescription') : ''}}</span>
                                            </div>
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