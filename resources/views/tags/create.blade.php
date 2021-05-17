@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add Tag</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tags.store') }}">
          @csrf
          <div class="form-group">    
              <label for="tag_name">Tag Name</label>
              <input type="text" class="form-control" name="tag_name"/>
          </div>

          <div class="form-group">
              <label for="tag_color">Tag Color</label>
              <input type="text" class="form-control" name="tag_color"/>
          </div>

          <div class="form-group">
              <label for="category">Category</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          
         
                                   
          <button type="submit" class="btn btn-primary-outline">Add Tag</button>
      </form>
  </div>
</div>
</div>
@endsection