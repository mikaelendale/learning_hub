@extends('layouts.master')
@section('breadcump')
    @component('components.breadcrumb')
          @slot('li_1')
              Dashboard
          @endslot
          @slot('title')
              Index
          @endslot
      @endcomponent
@endsection
@section('content')
    
@endsection