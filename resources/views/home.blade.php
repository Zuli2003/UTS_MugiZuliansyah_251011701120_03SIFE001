@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero py-5">
    <div class="container py-4">
        <h1 class="fw-bold display-5">Mainan seru untuk setiap usia kecil.</h1>
        <p class="fs-5">Boneka, puzzle, kendaraan, sampai mainan edukasi.</p>
        <a href="{{ route('toys.index') }}" class="btn btn-danger btn-lg">Lihat semua mainan</a>
    </div>
</section>

<section class="container mt-5">
    <h2>Kategori</h2>
    <div class="d-flex flex-wrap gap-2">
        @foreach ($categories as $cat)
            <a href="{{ route('toys.index', ['category' => $cat]) }}" class="btn btn-outline-primary">{{ $cat }}</a>
        @endforeach
    </div>
</section>

<section class="container mt-5">
    <h2 class="mb-3">Mainan pilihan</h2>
    <div class="row g-4">
        @foreach ($featured as $toy)
            @include('partials.toy-card', ['toy' => $toy])
        @endforeach
    </div>
</section>
@endsection