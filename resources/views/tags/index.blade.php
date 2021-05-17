@extends('base')
<div>
    <a style="margin: 19px;" href="{{ route('tags.create')}}" class="btn btn-primary">New tag</a>
    </div>  
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Tags</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Tag Name</td>
          <td>Tag Color</td>
          <td>Category</td>
          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{$tag->id}}</td>
            <td>{{$tag->tag_name}}</td>
            <td>{{$tag->tag_color}}</td>
            <td>{{$tag->category}}</td>
            
            <td>
                <a href="{{ route('tags.edit',$tag->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('tags.destroy', $tag->id)}}" method="post">
                {{ csrf_field() }}
    {{ method_field('DELETE') }}
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection