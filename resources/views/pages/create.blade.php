@extends('layouts.main')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('store') }}">

                @csrf
                @method('POST')
                
                 <div class="form-group row">
                    <label for="firstname" class="col-md-4 col-form-label text-md-right">NOME</label>
                    <div class="col-md-6">
                        <input id="firstname" type="text" class="form-control" name="firstname" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-right">COGNOME</label>
                    <div class="col-md-6">
                        <input id="lastname" type="text" class="form-control" name="lastname" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">RUOLO</label>
                    <div class="col-md-6">
                        <input id="role" type="date" class="form-control" name="role" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ral" class="col-md-4 col-form-label text-md-right">RAL</label>
                    <div class="col-md-6">
                        <input id="ral" type="number" class="form-control" name="ral" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 text-center">
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
 @endsection