<div id="main">
    @for ($i = 0; $i<$length; $i++)
        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="{{ route('design.context', ['id' => $i]) }}" >{{__('designs.title_'.$i)}}</a></h2>
                        <p>{{__('designs.header_'.$i)}}</p>
                    </div>
                </header>
                <a href="{{ route('design.context', ['id' => $i]) }}" class="image featured"><img src="{{ asset('images/designs/design_'. $i .'.png') }}" alt="" /></a>
                <p>{{__('designs.description_'.$i)}}</p>
                <footer>
                    <ul class="actions">
                        <li><a href="{{ route('design.context', ['id' => $i]) }}" class="button large">{{__('context.learn')}}</a></li>
                    </ul>
                </footer>
            </article>
    @endfor
</div>
