@extends('layouts.dashboard')

@section('style')
@endsection

@section('sidebar')
<li>
    <a href="{{ url('/staff') }}">
        <span><i class="fa fa-user"></i></span>
        <span>Staff</span>
    </a>
</li>
<li class="active">
    <a href="{{ url('/products') }}">
        <span><i class="fa fa-dropbox"></i></span>
        <span>Products</span>
    </a>
</li>
<li>
    <a href="{{ url('/sales') }}">
        <span><i class="fa fa-bar-chart"></i></span>
        <span>Sales Report</span>
    </a>
</li>
@endsection

@section('panel-title')
<span><i class="fa fa-dropbox"></i></span>
Products
@endsection

@section('content')
<p>{{$company}}</p>
@endsection

@section('scripts')
@endsection