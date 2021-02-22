
@extends('layout.layout')

@section('content')
    <h1>Add New Client</h1>
    <hr>
     <form action="/tasks" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Client name</label>
        <input type="text" class="form-control" id="clientName"  name="name">
      </div>
      <div class="form-group">
        <label for="description">Client City</label>
        <input type="text" class="form-control" id="clientCity" name="description">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection