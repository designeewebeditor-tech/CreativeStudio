<!-- Links -->
    <section>
        <ul class="links">
            <li>
                <a href="<?= $show ? route('design.all') : null ?>#intro">
                    <h3>{{__('context.home')}}</h3>
                </a>
            </li>
            <li>
                <a href="<?= $show ? route('design.all') : null ?>#main">
                    <h3>{{__('context.designs')}}</h3>
                </a>
            </li>
            <li>
                <a href="#about">
                    <h3>{{__('context.about')}}</h3>
                </a>
            </li>
            <li>
                <a href="#footer">
                    <h3>{{__('context.contact')}}</h3>
                </a>
            </li>
        </ul>
    </section>
