@extends('layouts.header')

@section('content')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">TASK LIST</div>
              <div class="card-body">
@foreach ($tasks as $task)
  <a href="{{route('task.edit',[$task])}}">{{$task->name}} {!!$task->description!!} {{$task->complete_date}} </a>
  <form method="POST" action="{{route('task.destroy', [$task])}}">
    @csrf
    <button class="mt-4 text-sm bg-red-500 hover:bg-red-700 text-white py-3 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">DELETE</button>
   </form>
  <br>
@endforeach
</div>
</div>
</div>
</div>
</div>
@endsection



