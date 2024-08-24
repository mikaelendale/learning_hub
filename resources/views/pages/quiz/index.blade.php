@extends('layouts.master')
@section('head')
    Courses
@endsection
@section('breadcump')
    @component('components.breadcrumb')
        @slot('title')
            Level
        @endslot
        @slot('subtitle')
            Index
            @slot('li_1')
                Level
            @endslot
        @endslot
    @endcomponent
@endsection

@section('content')

@endsection