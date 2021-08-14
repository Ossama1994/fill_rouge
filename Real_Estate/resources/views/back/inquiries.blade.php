@extends('back.index')
@section('main')

        @isset($enquiries)
        <x-back.inquiries :enquiries=$enquiries />   
        @endisset

@endsection