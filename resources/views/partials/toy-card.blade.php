<div class="col-6 col-md-4 col-lg-3">
    <div class="toy-card h-100 d-flex flex-column">
        <a href="{{ route('toys.show', $toy) }}">
            <img src="{{ $toy->image_url }}" class="w-100" alt="{{ $toy->name }}">
        </a>
        <div class="p-3 d-flex flex-column flex-grow-1">
            <div class="mb-2">
                <span class="badge bg-primary">{{ $toy->category }}</span>
                <span class="badge bg-success">{{ $toy->age_group }}</span>
            </div>
            <h5>{{ $toy->name }}</h5>
            <p class="price">{{ $toy->price_rp }}</p>
            <a href="{{ route('toys.show', $toy) }}" class="btn btn-outline-primary btn-sm mt-auto">Lihat detail</a>
        </div>
    </div>
</div>