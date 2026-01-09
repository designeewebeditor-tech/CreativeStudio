<!-- Main -->
    <div id="main">
        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="#">{{__('designs.title_'.$id)}}</a></h2>
                        <p>{{__('designs.header_'.$id)}}</p>
                    </div>
                </header>
                @if($image > 1)
                    <link rel="stylesheet" href="{{ asset('css/slider-style.css') }}">

                    <div class="slider-wrapper" id="main-slider">
                        <div class="slider-track" id="track">
                            @for($l=0; $l<$image; $l++)
                            <div class="image slide">
                                <img src="{{ asset('images/designs/design_'. $id .'_'. $l .'.png') }}" alt="" />
                            </div>
                            @endfor
                        </div>

                        <button onclick="move(-1)" class="nav-btn prev-btn" aria-label="Previous slide">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </button>
                        <button onclick="move(1)" class="nav-btn next-btn" aria-label="Next slide">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                        <div class="dot-container" id="dot-container"></div>
                    </div>
                @else
                <span class="image featured">
                    <img src="{{ asset('images/designs/design_'. $id .'_0.png') }}" alt="" />
                </span>
                @endif
                <p>{{__('designs.description_'.$id)}}</p>
            </article>
    </div>
@if($image > 1)<script src="{{ asset('js/slider.js') }}"></script>@endif
