@extends('layouts.main')
@section('content')

<form method="POST" action="{{ route('update', $employee -> id) }}">
    @csrf
    @method('POST')
    <div class="form-group row">
        <label for="firstname" class="col-md-4 col-form-label text-md-right">NOME</label>
        <div class="col-md-6">
            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $employee -> firstname}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-md-4 col-form-label text-md-right">COGNOME</label>
        <div class="col-md-6">
            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $employee -> lastname}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="role" class="col-md-4 col-form-label text-md-right">RUOLO</label>
        <div class="col-md-6">
            <input id="role" type="text" class="form-control" name="role" value="{{ $employee -> role}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="ral" class="col-md-4 col-form-label text-md-right">RAL</label>
        <div class="col-md-6">
            <input id="ral" type="number" class="form-control" name="ral" value="{{ $employee -> ral}}">
        </div>
    </div>
    <div class="form-group row ">
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">
                UPDATE
            </button>
        </div>
    </div>
</form>
 
 @endsection