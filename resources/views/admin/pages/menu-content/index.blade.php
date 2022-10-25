@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
      <h2>{{ucFirst($menu->name)}}</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="card-title">{{$menu->category->name}} <small>{{$menu->catid==1 ? "(Only the last record will appear)" : ""}}</small></div>
            </div>
            <div class="col-6 text-right">
                <button data-toggle="modal" data-target="#modalInsert" class="btn btn-light">Add Content</button>
            </div>
            @include('admin.pages.menu-content.insert')
        </div>
        @include('admin.pages.modals.ok-modal')
        <hr>
        <div class="table-responsive">
        <table class="table table-hover table-image">
           <thead>
             <tr>
               <th scope="col">Image</th>
               <th scope="col">Number</th>
               <th scope="col">Title</th>
               <th scope="col">Content</th>
               <th scope="col">Status</th>
               <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($pages as $page)
               <tr>
                   <td><img src="{{ asset($page->image) }}" class="img-width rounded border border-dark"></td>
                   <td>{{$page->number}}</td>
                   <td>{{$page->title}}</td>
                   <td>{!! Str::length(strip_tags($page->content))>50 ?  Str::substr(strip_tags($page->content), 0,50)."..." : $page->content !!}</td>
                   <td>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input status" {{$page->status==1 ? 'checked' : ''}} id="stat{{$page->id}}" value="{{$page->id}}">
                      <label class="custom-control-label" for="stat{{$page->id}}"></label>
                    </div> 
                   </td>
                   <td>
                       <a href="{{route('admin.show.page',[$menu->link,$page->id])}}" class="btn btn-outline-success"><i class="icon-pencil font-weight-bold"></i></a>
                       <a href="{{route('admin.delete.page',[$menu->link,$page->id])}}" class="btn btn-outline-danger"><i class="icon-trash font-weight-bold"></i></a>
                   </td>
                </tr>
               @endforeach
             
           </tbody>
         </table>
        </div>
     </div>
</div>
@endsection
@section('js')
<script>

function showModal()
{
  $('#okModal').modal('show')
  setTimeout(() => {
    $('#okModal').modal('hide')
  }, 2000);
}

  $('.status').change(function(){
    var id= $(this).val();
    if($(this).prop('checked'))
    {
      
      $.ajax({
                type:'POST',
                url:'/status/{{$menu->link}}/'+id,
                data:{
                    _token:'{{ csrf_token() }}',
                    status:1
                },
                success:function(res){
                  showModal();
                  console.log(res);
                }
      });
    }
    else
    {
      $.ajax({
        type:'POST',
        url:'/status/{{$menu->link}}/'+id,
        data:{
            _token:'{{ csrf_token() }}',
            status:0
        },
        success:function(res){
          showModal();
          console.log(res);
        }

      });
    }
  });
</script>

@endsection