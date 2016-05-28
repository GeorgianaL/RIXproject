@foreach ($videos as $video)
    <div class="cart-item">
        <div class="cart-header">
            <a href="/video/{{ $video['id'] }}"><p class="text-center">{{ $video['name'] }}</p></a>
        </div>
        <div class="cart-body">
            <div class="cart-picture">
                {!! $video['embed'] !!}
            </div>
        </div>
        <div class="cart-footer">
            <div class="option">
                <button class="animated-like"><span data-id="{{ $video['id'] }}">Like</span></button>
            </div>
        </div>
    </div>
@endforeach