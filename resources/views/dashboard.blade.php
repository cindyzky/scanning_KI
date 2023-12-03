@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
@endsection

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
@endsection