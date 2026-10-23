@extends('layouts.app')

@section('title', 'Semua Mainan')

@section('content')
<div class="container mt-4">
    <h1 class="mb-3">Semua Mainan</h1>

    <form method="GET" action="{{ route('toys.index') }}" class="row g-2 mb-4">
        <div class="col-md-5">
            <input type="search" name="q" class="form-control" placeholder="Cari nama mainan" value="{{ request('q') }}">
        </div>
        <div class="col-md-4">
            <select name="category" class="form-select">
                <option value="">Semua kategori</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat }}" @selected(request('category') === $cat)>{{ $cat }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 d-grid">
            <button class="btn btn-danger" type="submit">Terapkan</button>
        </div>
    </form>

    <div class="row g-4">
        @forelse ($toys as $toy)
            @include('partials.toy-card', ['toy' => $toy])
        @empty
            <div class="col-12">
                <div class="alert alert-warning">Tidak ada mainan yang cocok.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection