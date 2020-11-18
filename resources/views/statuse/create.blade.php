@extends('layouts.header')
@section('content')
    <div class="md:px-32 py-8 w-full">
      <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
          <tbody class="text-gray-700">
<form method="POST" action="{{route('statuse.store')}}">
    Name: <input type="text" name="statuse_name"value="{{old('statuse_name')}}" placeholder="Enter a title">
    @csrf
    <button class="mt-4 text-sm bg-red-500 hover:bg-red-700 text-white py-3 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">ADD</button>
 </form>
</div>
</div>
</div>
</div>
</div>    
@endsection 
 
 