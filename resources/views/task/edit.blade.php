
@extends('layouts.header')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">RESTAURANTS EDIT</div>
<form method="POST" action="{{route('task.store')}}">
    Name: <input type="text" name="task_name">
    Description: <textarea name="task_description"></textarea>
    CompliteDate: <input type="date" name="task_complete_date">
    
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="task_name"  class="form-control" value="{{old('task_name',$task->name)}}">
        <small class="form-text text-muted">uzduoties pavadinimas.</small>
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="task_name"  class="task_description" value="{{old('task_description',$task->description)}}">
            <small class="form-text text-muted">uzduoties aprasymas.</small>
            </div>

            <div class="form-group">
                <label>CompliteDate</label>
                <input type="date" name="task_complete_date"  class="task_complete_date" value="{{old('task_complete_date',$task->complete_date)}}">
                <small class="form-text text-muted">uzduoties aprasymas.</small>
                </div>


    <select name="statuse_id">
        @foreach ($statuses as $statuse)
            <option value="{{$statuse->id}}">{{$statuse->name}} </option>
        @endforeach
    </select>
    @csrf
    <button class="mt-4 text-sm bg-red-500 hover:bg-red-700 text-white py-3 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">EDIT</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection 
 