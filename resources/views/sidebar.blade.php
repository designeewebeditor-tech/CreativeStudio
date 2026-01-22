<!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
            <section id="intro">
                <a href="{{route('design.all')}}" class="logo"><img src="{{ asset('images/dark-mode-logo-main-remove-bg.png') }}" alt="" /></a>
                <header>
                    <p>{{__('context.about_description')}}</p>
                </header>
            </section>

        <!-- Mini Posts -->
            <section>
                <div class="mini-posts">
                    @for ($i = 0; $i<$length; $i++)
                        <!-- Mini Post -->
                            <article class="mini-post">
                                <header>
                                    <h3><a href="{{ route('design.context', ['id' => $i]) }}">{{__('designs.title_'.$i)}}</a></h3>
                                </header>
                                <a href="{{ route('design.context', ['id' => $i]) }}" class="image"><img src="{{ asset('images/designs/design_'. $i .'.png') }}" alt="" /></a>
                            </article>
                    @endfor

                </div>
            </section>

        <!-- Posts List -->
            <section>
                <ul class="posts">
                    @for ($i = 0; $i<$length; $i++)
                        <li>
                            <article>
                                <header>
                                    <h3><a href="{{ route('design.context', ['id' => $i]) }}">{{__('designs.title_'.$i)}}</a></h3>
                                </header>
                                <a href="{{ route('design.context', ['id' => $i]) }}" class="image"><img src="{{ asset('images/designs/design_'. $i .'.png') }}" alt="" /></a>
                            </article>
                        </li>
                    @endfor
                </ul>
            </section>

        <!-- About -->
            <section class="blurb" id="about" >
                <h2>{{__('context.about')}}</h2>
                <pre class="hidden-context"> 
                    {{__('context.about_context')}}
                    
                
                    <svg class="small-svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M553.89 875.24c0.15-0.02 0.29-0.05 0.44-0.07l-0.19-0.19-0.25 0.26z"></path>
                            <path d="M877.72 658.29V109.71H292.58v109.71h-146.3v438.86H73.14v256h877.71v-256h-73.13z m-73.14-475.43v475.43H637.99c-25.34 43.54-71.99 73.14-126 73.14s-100.66-29.6-126-73.14h-20.28V182.86h438.87zM219.43 292.57h73.14v365.71h-73.14V292.57z m658.28 548.57H146.28V731.43h202.97c41.2 45.9 100.38 73.14 162.75 73.14 62.36 0 121.55-27.24 162.75-73.14h202.97v109.71z"></path>
                            <path d="M402.28 292.57h365.71v73.14H402.28zM402.28 438.86h365.71V512H402.28z"></path>
                        </g>
                    </svg> {{__('context.tax_info', ['tax_number' => $tax_number,])}}
                    <svg class="small-svg-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C14.1588 20.0658 10.9183 19.5829 7.6677 16.3323C4.41713 13.0817 3.93421 9.84122 4.00655 7.93309C4.04952 6.7996 4.7008 5.77423 5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617Z"></path>
                        </g>
                    </svg> {{__('context.phone_info', ['phone_number' => $phone,])}}
                    <svg class="small-svg-icon" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"></path>
                        </g>
                    </svg> {{__('context.address_info', ['address' => __('context.adddress'),])}}
                </pre>
                <ul class="actions">
                    <li><a class="button" id="about-context-btn">{{__('context.okay')}}</a></li>
                </ul>
            </section>

        <!-- Footer -->
            <footer id="footer">
                <h2>{{__('context.contact')}}</h2>
                <ul class="icons">

                    <!-- Twitter (X) -->
                    <li>
                        <a href="<?=$x?>" data-tooltip="X">
                            <svg class="styled-svg svg-fill" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M19.83 8.00001C19.83 8.17001 19.83 8.35001 19.83 8.52001C19.8393 10.0302 19.5487 11.5272 18.9751 12.9242C18.4014 14.3212 17.5562 15.5904 16.4883 16.6583C15.4204 17.7262 14.1512 18.5714 12.7542 19.1451C11.3572 19.7187 9.86017 20.0093 8.34999 20C6.15213 20.0064 3.9992 19.3779 2.14999 18.19C2.47999 18.19 2.78999 18.19 3.14999 18.19C4.96345 18.19 6.72433 17.5808 8.14999 16.46C7.30493 16.4524 6.48397 16.1774 5.80489 15.6744C5.12581 15.1714 4.62349 14.4662 4.36999 13.66C4.62464 13.7006 4.88213 13.7207 5.13999 13.72C5.49714 13.7174 5.85281 13.6738 6.19999 13.59C5.2965 13.4056 4.48448 12.9147 3.90135 12.2003C3.31822 11.486 2.99981 10.5921 2.99999 9.67001C3.55908 9.97841 4.18206 10.153 4.81999 10.18C4.25711 9.80767 3.79593 9.30089 3.47815 8.7055C3.16038 8.11011 2.99604 7.44489 2.99999 6.77001C3.00124 6.06749 3.18749 5.37769 3.53999 4.77001C4.55172 6.01766 5.81423 7.03889 7.24575 7.76757C8.67727 8.49625 10.2459 8.91613 11.85 9.00001C11.7865 8.69737 11.753 8.38922 11.75 8.08001C11.7239 7.25689 11.9526 6.44578 12.4047 5.75746C12.8569 5.06913 13.5104 4.53714 14.2762 4.23411C15.0419 3.93109 15.8826 3.87181 16.6833 4.06437C17.484 4.25693 18.2057 4.69195 18.75 5.31001C19.655 5.12822 20.5214 4.78981 21.31 4.31001C21.0088 5.24317 20.3754 6.0332 19.53 6.53001C20.3337 6.44316 21.1194 6.23408 21.86 5.91001C21.3116 6.71097 20.6361 7.41694 19.86 8.00001H19.83Z"></path>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <!-- Facebook -->
                    <li>
                        <a href="<?=$facebook?>" data-tooltip="Facebook">
                            <svg class="styled-svg svg-fill" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M14 9.296V7.152c0-.629.416-.776.712-.776h1.22V3H14.21c-2.152 0-2.639 1.611-2.639 2.639v3.657H10V12h1.571v9h3.428v-9h2.315l.343-2.704H14z"></path>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <!-- Instagram -->
                    <li>
                        <a href="<?=$instagram?>" data-tooltip="Instagram">
                            <svg class="styled-svg svg-fill" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 16a4 4 0 100-8 4 4 0 000 8zm0-6.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"></path>
                                    <path d="M17.333 4H6.667A2.667 2.667 0 004 6.667v10.666A2.667 2.667 0 006.667 20h10.666A2.667 2.667 0 0020 17.333V6.667A2.667 2.667 0 0017.333 4zM18.5 17.333a1.167 1.167 0 01-1.167 1.167H6.667a1.167 1.167 0 01-1.167-1.167V6.667a1.167 1.167 0 011.167-1.167h10.666a1.167 1.167 0 011.167 1.167v10.666z"></path>
                                    <circle cx="16.5" cy="7.5" r="1"></circle>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <!-- Phone -->
                    <li>
                        <a class="copy-event" onclick="setCopProperty(0, '<?=$phone?>')" data-tooltip="<?=$phone?>">
                            <svg class="styled-svg svg-fill" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C14.1588 20.0658 10.9183 19.5829 7.6677 16.3323C4.41713 13.0817 3.93421 9.84122 4.00655 7.93309C4.04952 6.7996 4.7008 5.77423 5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617Z"></path>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <!-- Email -->
                    <li>
                        <a class="copy-event" onclick="setCopProperty(1, '<?=$email?>')" data-tooltip="<?=$email?>">
                            <svg class="styled-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M4 7.00005L10.2426 12.2022C11.2426 13.0355 12.7574 13.0355 13.7574 12.2022L20 7.00005M5 18H19C20.1046 18 21 17.1046 21 16V8C21 6.89543 20.1046 6 19 6H5C3.89543 6 3 6.89543 3 8V16C3 17.1046 3.89543 18 5 18Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <!-- Address -->
                    <li>
                        <a class="copy-event" onclick="setCopProperty(2, '{{__('context.adddress')}}')" data-tooltip="{{__('context.adddress')}}">
                            <svg class="styled-svg svg-fill" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"></path>
                                </g>
                            </svg>
                        </a>
                        <!-- dfdf -->
                    </li>
                </ul>
                <div class="copyright">
                    &copy; <?=$title?>
                </div>
            </footer>
        </section>

    </section>
