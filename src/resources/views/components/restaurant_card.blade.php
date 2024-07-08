<!-- resources/views/components/restaurant_card.blade.php -->
<div class="col-md-3">
    <div class="card mb-4">
        <img src="{{ $restaurant->image }}" class="card-img-top" alt="{{ $restaurant->name }} Image">
        <div class="card-body">
            <h5 class="card-title">{{ $restaurant->name }}</h5>
            <p class="card-text">ジャンル: {{ $restaurant->genre }}</p>
            <p class="card-text">エリア: {{ $restaurant->area }}</p>
            <a href="{{ route('restaurants.detail', $restaurant->id) }}" class="btn btn-primary">詳細を見る</a>
            <!-- お気に入りボタンのフォーム -->
            @auth
            <form action="{{ route('favorite.toggle', $restaurant->id) }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-secondary">
                    @if($restaurant->favoritedBy->contains(Auth::user()))
                        <i class="fas fa-heart" style="color: red;"></i>
                    @else
                        <i class="far fa-heart"></i>
                    @endif
                </button>
            </form>
            @endauth
        </div>
    </div>
</div>
