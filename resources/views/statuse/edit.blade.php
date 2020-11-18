@extends('layouts.header')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">STATUSE EDIT</div>
 <form method="POST" action="{{route('statuse.update',[$statuse->id])}}">
 <div class="form-group">
    <label>Name</label>
    <input type="text" name="statuse_name"  class="form-control" value="{{old('statuse_name',$statuse->name)}}">
    <small class="form-text text-muted">Statuso pavadinimas.</small>
    </div>
    @csrf
    <button class="mt-4 text-sm bg-red-500 hover:bg-red-700 text-white py-3 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">EDIT</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection 