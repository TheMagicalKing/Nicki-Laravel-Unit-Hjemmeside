this is the index blade, this blade will be where everyone arrives
@extends('unit.layout')
 
@section('content')
    
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('unit.leadership') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    
@endsection