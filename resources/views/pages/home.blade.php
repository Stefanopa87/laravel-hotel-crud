@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <h1 class="bg-info"> TUTTI I DIPENDENTI:</h1>

            <ul style="list-style: none">

                @foreach ($employees as $employee)
                <li>
                    <a href="{{route('employee', $employee -> id )}}">
                        [{{ $employee -> id }}]
                        {{ $employee -> firstname }}                       
                        {{ $employee -> lastname }}                       
                        {{ $employee -> role }}                       
                        {{ $employee -> ral }}   
                        
                        <a class="mx-2" href="{{ route('edit', $employee -> id) }}"> &#9998; </a>
                        <a class="mx-2" href="{{ route('destroy', $employee -> id) }}"> &#120; </a>
                    </a>
                </li>                    
                @endforeach

            </ul>
        </div>
    </div>
</div>
 
@endsection