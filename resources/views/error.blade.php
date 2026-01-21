<link rel="stylesheet" href="{{ asset('css/error-style.css') }}">

<section class="error-container">
    <main class="error-module">
        <span class="error-code" aria-hidden="true">404</span>

        <h1>{{__('context.error_head')}}</h1>
        <p>{{__('context.error_context')}}</p>

        <a class="button primary-button" id="back_home">
            <svg viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M1 6V15H6V11C6 9.89543 6.89543 9 8 9C9.10457 9 10 9.89543 10 11V15H15V6L8 0L1 6Z"></path> </g></svg>
            {{__('context.go_home')}}
        </a>
        <a class="button" onclick="window.history.back()" >{{__('context.go_back')}}</a>
        </div>
    </main>

</section>

