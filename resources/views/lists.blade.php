@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if(count($lists)!=0)
    @foreach ($lists as $list)
    <x-listing-comp :list="$list"/>
    @endforeach
    @else
    <h2>No List Found</h2>
    @endif
</div>
@endsection