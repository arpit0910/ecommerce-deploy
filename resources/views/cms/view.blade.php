@extends('layouts.main')
@section('content')
<!-- content @s -->
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title bg-light text-center p-3">{{ucfirst($cms->key)}}</h3>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        {!!ucfirst($cms->value)!!}
    </div>
</div><!-- .card-preview -->
<!-- content @s -->
@endsection