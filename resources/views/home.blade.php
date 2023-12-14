@extends('layouts.main')

<head>
    <title>SPBE Kota Tasikmalaya | Home </title>
</head>
@section('container')
    <!-- <h1 class="row d-flex justify-content-center align-items-center">Halaman Home</h1> -->
    <div class="row d-flex justify-content-center align-items-center" style="height: 50vh">
        <div class="col-12 col-lg-6">

            <img src="{{ asset('img/background.png') }}" alt="" class="img-fluid bg-home mx-auto ">
        </div>
        <div class="col-12 col-lg-6">
            <form class="d-flex" action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control " placeholder="Cari data..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- <input class="form-control me-2" type="search" placeholder="Cari data..." aria-label="Search"> --}}
<!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
