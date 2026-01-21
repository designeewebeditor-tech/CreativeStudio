<!-- Main -->
    <div id="main">
        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a>{{__('designs.title_'.$id)}}</a></h2>
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

                <footer>
                    <!-- Post Actions -->
                    <ul class="icons user-actions">
                        <li data-tooltip="{{__('context.likes')}}">
                            <a class="user-like <?php if(in_array(__('designs.title_'.$id), session()->get('user.likes'))){ ?> clicked <?php } ?>" onclick="addLike()">
                                <code><?=count($data["likes"])?></code>
                                <svg viewBox="0 0 32 32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.019,12c0,-0.552 -0.447,-1 -1,-1l-5,0c-0.552,0 -1,0.448 -1,1l0,15c0,0.552 0.448,1 1,1l5,-0c0.553,0 1,-0.448 1,-1l0,-15Z"></path><path d="M16.948,5.936l-3.841,7.614c-0.07,0.139 -0.107,0.294 -0.107,0.45l0,11c0,0.266 0.106,0.521 0.295,0.709l2.009,2c0.188,0.186 0.441,0.291 0.706,0.291l6.351,-0c1.43,-0 2.661,-1.009 2.941,-2.411l2.204,-11.01c0.177,-0.882 -0.052,-1.797 -0.622,-2.492c-0.571,-0.695 -1.423,-1.098 -2.322,-1.097l-2.962,0.003l1.021,-3.105c0.504,-1.533 -0.331,-3.185 -1.864,-3.689c-0.049,-0.016 -0.098,-0.032 -0.147,-0.049c-1.507,-0.495 -3.129,0.303 -3.662,1.786Zm-0,0l-0.001,0.004l0.001,-0.004l-0,0Z"></path></g></svg>
                            </a>
                        </li>
                        <li onclick="setComments(<?=$id?>)" data-tooltip="{{__('context.comments')}}">
                            <a>
                                <svg class="styled-svg svg-fill" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill-rule="evenodd" clip-rule="evenodd" d="M60,0H16c-2.211,0-4,1.789-4,4v4h38c3.438,0,6,2.656,6,6v22h4 c2.211,0,4-1.789,4-4V4C64,1.789,62.211,0,60,0z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M50,10H4c-2.211,0-4,1.789-4,4v30c0,2.211,1.789,4,4,4h7 c0.553,0,1,0.447,1,1v11c0,1.617,0.973,3.078,2.469,3.695C14.965,63.902,15.484,64,16,64c1.039,0,2.062-0.406,2.828-1.172 l14.156-14.156c0,0,0.516-0.672,1.672-0.672S50,48,50,48c2.211,0,4-1.789,4-4V14C54,11.791,52.209,10,50,10z M13,22h13 c0.553,0,1,0.447,1,1s-0.447,1-1,1H13c-0.553,0-1-0.447-1-1S12.447,22,13,22z M34,36H13c-0.553,0-1-0.447-1-1s0.447-1,1-1h21 c0.553,0,1,0.447,1,1S34.553,36,34,36z M41,30H13c-0.553,0-1-0.447-1-1s0.447-1,1-1h28c0.553,0,1,0.447,1,1S41.553,30,41,30z"></path> </g> </g></svg>
                            </a>
                        </li>
                    </ul>
                    <div class="comments" id="comments-<?=$id?>">
                        <div class="comment-content-new set-comment-content hidden-comments">
                            <label>
                                <input id="new-username" oninput="commentInputListener()" placeholder="{{__('context.username')}}" value="{{session()->get('username')}}" type="text">
                                <input id="new-comment" oninput="commentInputListener()" placeholder="{{__('context.comment_value')}}" type="text">
                                <svg class="add-comment-btn" onclick="addComment()" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12.75 9C12.75 8.58579 12.4142 8.25 12 8.25C11.5858 8.25 11.25 8.58579 11.25 9L11.25 11.25H9C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75H11.25V15C11.25 15.4142 11.5858 15.75 12 15.75C12.4142 15.75 12.75 15.4142 12.75 15L12.75 12.75H15C15.4142 12.75 15.75 12.4142 15.75 12C15.75 11.5858 15.4142 11.25 15 11.25H12.75V9Z"></path>
                                    </g>
                                </svg>
                            </label>
                        </div>
                        @if(!empty(session()->get('user.comments')[__('designs.title_'.$id)]))
                            @foreach(array_reverse(session()->get('user.comments')[__('designs.title_'.$id)]) as $comment)
                            <div class="comment-content set-comment-content hidden-comments">
                                    <pre><strong class="author-name"><?=$comment["username"]?></strong><?=$comment["comment"]?></pre>
                                    <h4 class="time-stamp"><?=$comment["date"]?></h4>
                            </div>
                            @endforeach
                        @endif
                        @foreach(array_reverse($data["comments"]) as $comment)
                        <div class="comment-content set-comment-content hidden-comments">
                                <pre><strong class="author-name"><?=$comment["username"]?></strong><?=$comment["comment"]?></pre>
                                <h4 class="time-stamp"><?=$comment["date"]?></h4>
                        </div>
                        @endforeach
                    </div>
                </footer>
            </article>
    </div>
    @if($image > 1)<script src="{{ asset('js/slider.js') }}"></script>@endif
