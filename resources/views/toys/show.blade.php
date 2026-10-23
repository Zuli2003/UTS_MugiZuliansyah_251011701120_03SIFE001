@extends('layouts.app')

@section('title', $toy->name)

@section('content')
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('toys.index') }}">Mainan</a></li>
            <li class="breadcrumb-item active">{{ $toy->name }}</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-md-5">
            <div class="toy-card">
                <img src="{{ $toy->image_url }}" class="w-100" alt="{{ $toy->name }}">
            </div>
        </div>
        <div class="col-md-7">
            <span class="badge bg-primary fs-6">{{ $toy->category }}</span>
            <h1 class="mt-2">{{ $toy->name }}</h1>
            <p class="price fs-3">{{ $toy->price_rp }}</p>
            <p><strong>Usia:</strong> {{ $toy->age_group }}</p>
            <h5>Deskripsi</h5>
            <p>{{ $toy->description }}</p>
            <a href="{{ route('toys.index') }}" class="btn btn-outline-primary">Kembali</a>
        </div>
    </div>

    @if ($related->isNotEmpty())
        <h2 class="mt-5 mb-3">Mainan serupa</h2>
        <div class="row g-4">
            @foreach ($related as $item)
                @include('partials.toy-card', ['toy' => $item])
            @endforeach
        </div>
    @endif
</div>
@endsection