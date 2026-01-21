<?php
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="<?=App::getLocale()?>">
    @include('head')
    <body  class="<?php echo $show ? 'single' : null; ?>">
        @if($error)
            @include('error')
        @endif

        <!-- Menu -->
            <section id="menu">
                @include('menu')
            </section>

        <!-- Wrapper -->
            <div id="wrapper">
                @include('header')

                    <!-- Main -->
                        @include($show ? 'design' : 'designs')

                    <!-- Sidebar -->
                        @include('sidebar')

                @include('footer')
            </div>
    </body>
    @include('script')
    <script src="{{ asset('js/script.js') }}"></script>
</html>
