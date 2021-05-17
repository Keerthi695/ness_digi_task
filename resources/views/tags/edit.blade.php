@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Tag</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('tags.update', $tag->id) }}">
           
            <div class="form-group">

                <label for="tag_name">Tag Name:</label>
                <input type="text" class="form-control" name="tag_name" value={{ $tag->tag_name }} />
            </div>

            <div class="form-group">
                <label for="tag_color">Tag Color:</label>
                <input type="text" class="form-control" name="tag_color" value={{ $tag->tag_color }} />
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" name="category" value={{ $tag->category }} />
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection