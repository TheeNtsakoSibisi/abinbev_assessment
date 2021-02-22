@extends('layout.layout')

@section('content')
    <h1>Edit Client</h1>
    <hr>
     <form action="{{url('tasks', [$client->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Client Name</label>
        <input type="text" value="{{$client->name}}" class="form-control" id="clientName"  name="name" >
      </div>
      <div class="form-group">
        <label for="description">Client City</label>
        <input type="text" value="{{$client->city_id}}" class="form-control" id="clientCity" name="description" >
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