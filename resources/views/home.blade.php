@extends('layouts.app')

@section('content')
<div id="BurgerManagementAppBody">
    <burger-management-app user="{{auth()->user()}}"></burger-management-app>
</div>

@endsection
