@extends('back.index')
@section('main')
    @isset($cities)
     <x-back.city :cities=$cities />   
    @endisset
@endsection