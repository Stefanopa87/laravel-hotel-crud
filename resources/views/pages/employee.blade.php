@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="bg-warning">DETTAGLI SINGOLO DIPENDENTE: </h1>
            <br>                       
            <h3> ID DIPENDENTE: [{{ $employees -> id }}] </h3>
            <br>
            <h3> NOME: {{ $employees -> firstname }} </h3>
            <h3> COGNOME: {{ $employees -> lastname }} </h3>
            <br>
            <h3> RUOLO: {{ $employees -> role }} </h3>
            <br>
            <h3> RAL: {{ $employees -> ral }} </h3>
            <br>
            <hr>
        </div>
    </div>
</div>
 
 @endsection