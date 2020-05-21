@extends('admin.pages.layout')

@section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="float-left">
          <h2>Add new Page</h2>
        </div>
        <div class="float-right"><a href="{{ route('pages.index') }}" class="btn btn-primary">Back</a></div>
      </div>
    </div> 

    @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There is some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif

    <form action="{{ route('pages.store') }}" method="post">
    @csrf 
 
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Title:</strong>
              <input type="text" name="title" class="form-control" placeholder="Title">
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Content:</strong>
              <textarea class="form-control" style="height:150px" name="content" placeholder="Content"></textarea>
          </div>
      </div>

      <div class="col-3 input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Is draft:</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="is_draft">
            <option selected value=1>Yes (Default)</option>
            <option value=0>No</option>
          </select>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    </form>

@endsection