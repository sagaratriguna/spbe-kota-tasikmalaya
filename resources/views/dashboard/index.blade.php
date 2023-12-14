@extends('dashboard.layouts.main')

@section('container')
    <div style="min-height: 93vh" class="position-relative">
        <div class="pt-3 col-12">
            <h2 class="border-bottom border-2">Welcome back, {{ auth()->user()->name }}</h2>
        </div>
    </div>
    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="405"></canvas> -->
@endsection
