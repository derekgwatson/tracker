@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
<img src="uploads/{{ Session::get('file') }}">
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> we have a problem:
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">

<div class="col-md-6">
<input type="file" name="file" class="form-control">
</div>

<div class="col-md-6">
<button type="submit" class="btn btn-success">Upload</button>
</div>

</div>
</form>

</div>
</div>
</div>
@endsection
