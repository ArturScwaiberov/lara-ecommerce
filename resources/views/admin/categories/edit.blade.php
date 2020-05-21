@extends('admin.categories.layout')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="float-left">
      <h2>Edit category</h2>
    </div>
    <div class="float-right">
      <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong>There were some problerms with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

<form action="{{ route('categories.update', $category->id) }}" method="post">
@csrf
@method('PUT')

<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Title:</strong>
      <input type="text" name="title" value="{{ $category->title }}" class="form-control" placeholder="Title">
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Short description:</strong>
      <textarea class="form-control" style="height: 150px" name="short_description" placeholder="Short description">{{ $category->short_description }}</textarea>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Description:</strong>
      <textarea class="form-control" style="height: 150px" name="description" placeholder="Description">{{ $category->description }}</textarea>
    </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Upload image:</strong>
        <input type="text" name="img_url" value="{{ $category->img_url }}" class="form-control" placeholder="Image">
    </div>
  </div>

  <div class="col-3 input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Is draft:</label>
    </div>
    <select class="custom-select" id="inputGroupSelect01" name="is_draft">
      <option @if ($category->is_draft === 1) selected @endif value=1>Yes</option>
      <option @if ($category->is_draft === 0) selected @endif value=0>No</option>
    </select>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</div>
</form>

@endsection