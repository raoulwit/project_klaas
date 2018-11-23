@extends('layout')

@section('content')

<div class="field">

  <div class="control">

    @foreach($projects as $project)

     <a href="/projects/{{ $project->id }}">
       {{ $project->title }}
     </a>
     <br>

   @endforeach

  </div>

</div>

@endsection
