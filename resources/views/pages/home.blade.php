@extends('layouts.main-layout')

@section('content')

    <a class="btn btn-primary" href="{{route('postcard.create')}}">Create new postcard</a>
    <postcards-component  user="{{Auth::check()}}" >

    </postcards-component>

@endsection