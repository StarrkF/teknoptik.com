@extends('admin.index')
@section('css')
<style>
    /* .note-toolbar{
        background-color: white;
    }
    .note-editing-area{
        border: 2px solid white;
        background: #0F2027;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .note-dropwon-menu{
        background-color: white;
        color:black;
    } */
</style>
@endsection
@section('content')
<form action="{{route('admin.update.page',[$page->menu->link,$page->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card">
    <div class="card-body">
        <div class="card-title"> Contets</div>
        <hr>
            <div class="row">
            
            <input type="hidden" name="menuid" value="{{$page->menu->id}}">
            <input type="hidden" name="catid" value="{{$page->catid}}">
            <div class="form-group col-12">
                <label for="title">Title</label>
                <input type="text" class="form-control" required id="title" name="title" value="{{$page->title}}">
            </div>
    

            <div class="form-group col-12 col-md-4">
                <label for="desc">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{$page->desc}}">
            </div>
    
            <div class="form-group col-12 col-md-4">
                <label for="key">Key</label>
                <input type="text" class="form-control" id="key" name="key" value="{{$page->key}}">
            </div>

            <div class="form-group col-12 col-md-4">
                <label for="number">Number</label>
                <input type="number" class="form-control" required id="number" value="{{$page->number}}" required name="number">
            </div>

            <div class="form-group col-12 col-md-7">
                <label for="content">Content</label>
                <textarea name="content" id="ckeditor">{{$page->content}}</textarea>
            </div>
            <div class="form-group col-12 col-md-5">
                <label for="imageUpload">Image</label>
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url({{ asset($page->image) }});"></div>
                    </div>
                </div>
            </div> 
        </div>
     </div>
     <div class="card-footer">
        <button type="submit" class="btn btn-lg btn-light float-right">Save</button>
     </div>
</div>
</form>
@endsection
