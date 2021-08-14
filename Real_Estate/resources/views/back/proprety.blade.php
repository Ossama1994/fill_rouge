@extends('back.index')
@section('main')
    @isset($propreties)
     <x-back.proprety :propreties=$propreties />   
    @endisset
@endsection