@extends('layouts.app')

@section('content')
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-content">
<div class="panel panel-heading">
<h1 class="panel-title">Bienbenido {{ auth()->usuario()->nombre}}</h1>

</div>
</div>
</div>



@endsection