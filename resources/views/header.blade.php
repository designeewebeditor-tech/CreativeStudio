    <header id="header">
        <h1><a href="{{ route('design.all') }}" ><?=$title?></a></h1>
        <nav class="links">
            <ul>
                <li><a href="<?= $show ? route('design.all') : null ?>#intro">{{__('context.home')}}</a></li>
                <li><a href="<?= $show ? route('design.all') : null ?>#main">{{__('context.designs')}}</a></li>
                <li><a href="#about">{{__('context.about')}}</a></li>
                <li><a href="#footer">{{__('context.contact')}}</a></li>
            </ul>
        </nav>
        <nav class="main">
            <ul>
                @if(App::getLocale() != 'en')
                    <form id="form_en" action="{{ url( $show ? '/designs/'.$id : '/') }}" method="post">@csrf<input type="hidden" name="lang" value="en"></form>
                    <button onclick="languageForm('en')">EN</button>
                @endif

                @if(App::getLocale() != 'ru')
                    <form id="form_ru" action="{{ url( $show ? '/designs/'.$id : '/') }}" method="post">@csrf<input type="hidden" name="lang" value="ru"></form>
                    <button onclick="languageForm('ru')">RU</button>
                @endif

                @if(App::getLocale() != 'az')
                    <form id="form_az" action="{{ url( $show ? '/designs/'.$id : '/') }}" method="post">@csrf<input type="hidden" name="lang" value="az"></form>
                    <button onclick="languageForm('az')">AZ</button>
                @endif

                <li class="menu">
                    <!-- <svg
                        class="styled-svg-menu"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M4 6H20M4 12H20M4 18H20"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg> -->
                    <svg class="styled-svg-menu" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6H20M4 12H20M4 18H20"></path> 
                        </g>
                    </svg>
                </li>
            </ul>
        </nav>
    </header>
