<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Knomi</title>

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=source-sans-pro:400,600,700" rel="stylesheet" />
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>

    <header class="bg-transparent fixed lg:absolute w-full z-50 overflow-y-auto h-[60px] lg:h-min top-0 lg:overflow-y-visible">
        <div class="h-[90px] bg-primary-black lg:border-b-[4px] border-white hidden lg:block">
            <div class="container max-w-[1256px] mx-auto flex justify-end items-center px-6 space-x-4 h-full">
                <!-- Tlačítko 1 -->
                <button class="bg-[#D7DCEB] lg:text-[24px] text-[18px] text-primary-black py-[8px] px-[16px] lg:py-[12px] lg:px-[24px] flex items-center justify-center rounded-btn border-2 border-transparent hover:border-primary-blue hover:ring-2 hover:ring-primary-blue focus:outline-none transition-all duration-300 ease-in-out leading-[1.25] font-semibold">
                    {{ __('header.catalog') }}
                </button>
    
                <!-- Tlačítko 2 -->
                <button class="bg-[#D7DCEB] lg:text-[24px] text-[18px] text-primary-black py-[8px] px-[16px] lg:py-[12px] lg:px-[24px] flex items-center justify-center rounded-btn border-2 border-transparent hover:border-primary-blue hover:ring-2 hover:ring-primary-blue focus:outline-none transition-all duration-300 ease-in-out leading-[1.25] font-semibold">
                    <span>{{ __('header.login') }}</span>
                    <svg class="ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.0004 17.5002C11.0004 16.2116 11.3754 15.0105 12.0222 14.0002H4.25278C3.01076 14.0002 2.00391 15.007 2.00391 16.2491V17.169C2.00391 17.7411 2.18231 18.2989 2.51427 18.7648C4.05643 20.9292 6.5794 22.0013 10.0004 22.0013C10.9315 22.0013 11.7962 21.9219 12.5929 21.7626C11.6009 20.6215 11.0004 19.131 11.0004 17.5002ZM10.0004 2.00488C12.7618 2.00488 15.0004 4.24346 15.0004 7.00488C15.0004 9.76631 12.7618 12.0049 10.0004 12.0049C7.23894 12.0049 5.00036 9.76631 5.00036 7.00488C5.00036 4.24346 7.23894 2.00488 10.0004 2.00488ZM23.0004 17.5002C23.0004 20.5378 20.5379 23.0002 17.5004 23.0002C14.4628 23.0002 12.0004 20.5378 12.0004 17.5002C12.0004 14.4627 14.4628 12.0002 17.5004 12.0002C20.5379 12.0002 23.0004 14.4627 23.0004 17.5002ZM18.3539 14.6467C18.1587 14.4515 17.8421 14.4515 17.6468 14.6467C17.4516 14.842 17.4516 15.1586 17.6468 15.3538L19.2932 17.0002H15.0004C14.7242 17.0002 14.5004 17.2241 14.5004 17.5002C14.5004 17.7764 14.7242 18.0002 15.0004 18.0002H19.2933L17.6468 19.6467C17.4516 19.842 17.4516 20.1586 17.6468 20.3538C17.8421 20.5491 18.1587 20.5491 18.3539 20.3538L20.8539 17.8538C20.9071 17.8007 20.9458 17.7385 20.97 17.6723C20.9886 17.6214 20.9992 17.5666 21.0003 17.5095L21.0004 17.5002C21.0004 17.4231 20.9829 17.35 20.9517 17.2848C20.9364 17.2527 20.9175 17.2219 20.8949 17.1931C20.881 17.1753 20.8659 17.1584 20.8498 17.1426L18.3539 14.6467Z" fill="#212121" />
                    </svg>
                </button>
    
                <div class="relative z-50">
                    <button id="languageButton" class="h-[54px] w-auto text-[24px] text-primary-grey flex items-center cursor-pointer px-4 bg-transparent focus:outline-none" onclick="toggleLanguageOptions()" aria-haspopup="listbox" aria-expanded="false">
                        <span class="mr-2">{{ app()->getLocale() == 'cs' ? 'CZ' : 'EN' }}</span>
                        <!-- Šipka -->
                        <svg id="dropdownArrow" class="w-4 h-4 text-primary-grey transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
    
                    <!-- Dropdown -->
                    <ul id="languageOptions" class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-max bg-primary-black text-primary-grey text-[24px] rounded-btn shadow-none opacity-0 scale-95 transition-all duration-300 ease-in-out hidden" tabindex="-1" role="listbox" aria-labelledby="languageButton">
                        <li class="px-4 py-2 cursor-pointer hover:bg-primary-grey hover:text-white" role="option"><a href="{{ language_switch_url('en') }}">EN</a></li>
                        <li class="px-4 py-2 cursor-pointer hover:bg-primary-grey hover:text-white" role="option"><a href="{{ language_switch_url('cs') }}">CZ</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container max-w-[1256px] px-6 mx-auto flex justify-between items-center py-[10px]">
            <!-- Logo na levé straně -->
            <div class="hidden lg:flex">
                <img src="{{url('/images/logo.svg')}}" alt="Logo Knomi" class="h-78" />
            </div>

            <!-- Pravá strana s odkazy a dropdowny -->
            <nav class="hidden lg:flex items-center space-x-6 font-semibold">
                <!-- Kombobox O nás -->
                <div class="relative group">
                    <button id="about-btn" class="text-header-link-color text-[24px] flex items-center space-x-2 h-[54px]">
                        <span>{{ __('header.nav.about') }}</span>
                        <svg id="about-arrow" class="w-6 h-6 transition-transform duration-300 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown -->
                    <div id="about-dropdown" class="absolute left-0 bg-primary-black shadow-md w-48 hidden opacity-0 scale-95 transition-all duration-300">
                        <ul>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#nase-firma" class="block px-4 py-2 text-[18px] text-white">{{ __('homepage.about.subtitle') }}</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#galerie" class="block px-4 py-2 text-[18px] text-white">{{ __('homepage.gallery.title') }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Hover čára pro O nás -->
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </div>

                <!-- Kombobox Produkty -->
                <div class="relative group">
                    <button id="products-btn" class="text-header-link-color text-[24px] flex items-center space-x-2 h-[54px]">
                        <span>{{ __('header.nav.products') }}</span>
                        <svg id="products-arrow" class="w-6 h-6 transition-transform duration-300 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown -->
                    <div id="products-dropdown" class="absolute left-0 bg-primary-black shadow-md w-48 hidden opacity-0 scale-95 transition-all duration-300">
                        <ul class="product-nav">
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#soustruzne-dily" class="block px-4 py-2 text-[18px] text-white">{{ __('homepage.products.turned_parts') }}</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#tvarene-trubky" class="block px-4 py-2 text-[18px] text-white">{{ __('homepage.products.formed_tubes') }}</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#hydraulicka-sroubeni" class="block px-4 py-2 text-[18px] text-white">{{ __('homepage.products.hydraulic_fittings') }}</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#pneumatika" class="block px-4 py-2 text-[18px] text-white">{{ __('homepage.products.pneumatics') }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Hover čára pro Produkty -->
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </div>

                <!-- Odkazy s hover efektem -->
                <a href="#ke-stazeni" class="text-header-link-color text-[24px] h-[54px] group relative flex items-center">
                    {{ __('header.nav.downloads') }}
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </a>
                <a href="/kariera" class="text-header-link-color text-[24px] h-[54px] group relative flex items-center">
                    {{ __('header.nav.career') }}
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </a>
                <a href="#kontakt" class="text-header-link-color text-[24px] h-[54px] group relative flex items-center">
                    {{ __('header.nav.contact') }}
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </a>

            </nav>

            <!-- Mobilní menu -->
            <div id="mobile-menu" class="absolute lg:hidden w-full l-0 m-0 top-0 left-0 m-[0px !important] bg-primary-black"> 
                <!-- Horní část s tlačítkem zavřít -->
                <div class="h-[60px] lg:border-b-[4px] border-white flex justify-between items-center px-6">
                    <img src="{{url('/images/logo.svg')}}" alt="Logo Knomi" class="h-8 filter invert" />
                    <button onclick="toggleMobileMenu()" class="text-white p-2 mr-[-12px]">
                        <svg class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>

                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Obsah mobilního menu -->
                <div class="menu-content flex-1 overflow-y-auto px-6 py-8 hidden">
                    <nav class="space-y-6">
                        <!-- O nás -->
                        <div class="relative">
                            <button onclick="toggleMobileSubmenu('mobile-about-menu')" class="w-full text-white text-[24px] flex justify-between items-center">
                                <span>{{ __('header.nav.about') }}</span>
                                <svg class="w-6 h-6 transform transition-transform" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div id="mobile-about-menu" class="hidden mt-4 ml-4 space-y-4">
                                <a href="#nase-firma" class="block text-white text-[20px]">{{ __('homepage.about.subtitle') }}</a>
                                <a href="#galerie" class="block text-white text-[20px]">{{ __('homepage.gallery.title') }}</a>
                            </div>
                        </div>

                        <!-- Produkty -->
                        <div class="relative">
                            <button onclick="toggleMobileSubmenu('mobile-products-menu')" class="w-full text-white text-[24px] flex justify-between items-center">
                                <span>{{ __('header.nav.products') }}</span>
                                <svg class="w-6 h-6 transform transition-transform" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div id="mobile-products-menu" class="hidden mt-4 ml-4 space-y-4 product-nav">
                                <a href="#soustruzne-dily" class="block text-white text-[20px]">{{ __('homepage.products.turned_parts') }}</a>
                                <a href="#tvarene-trubky" class="block text-white text-[20px]">{{ __('homepage.products.formed_tubes') }}</a>
                                <a href="#hydraulicka-sroubeni" class="block text-white text-[20px]">{{ __('homepage.products.hydraulic_fittings') }}</a>
                                <a href="#pneumatika" class="block text-white text-[20px]">{{ __('homepage.products.pneumatics') }}</a>
                            </div>
                        </div>

                        <!-- Ostatní odkazy -->
                        <a href="#ke-stazeni" class="block text-white text-[24px]">{{ __('header.nav.downloads') }}</a>
                        <a href="/kariera" class="block text-white text-[24px]">{{ __('header.nav.career') }}</a>
                        <a href="#kontakt" class="block text-white text-[24px]">{{ __('header.nav.contact') }}</a>

                        <!-- Tlačítka -->
                        <div class="pt-8 space-y-4">
                            <button class="w-full bg-[#D7DCEB] text-[18px] text-primary-black py-[12px] px-[24px] rounded-btn">
                                {{ __('header.catalog') }}
                            </button>
                            <button class="w-full bg-[#D7DCEB] text-[18px] text-primary-black py-[12px] px-[24px] rounded-btn flex items-center justify-center">
                                <span>{{ __('header.login') }}</span>
                                <svg class="ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0004 17.5002C11.0004 16.2116 11.3754 15.0105 12.0222 14.0002H4.25278C3.01076 14.0002 2.00391 15.007 2.00391 16.2491V17.169C2.00391 17.7411 2.18231 18.2989 2.51427 18.7648C4.05643 20.9292 6.5794 22.0013 10.0004 22.0013C10.9315 22.0013 11.7962 21.9219 12.5929 21.7626C11.6009 20.6215 11.0004 19.131 11.0004 17.5002ZM10.0004 2.00488C12.7618 2.00488 15.0004 4.24346 15.0004 7.00488C15.0004 9.76631 12.7618 12.0049 10.0004 12.0049C7.23894 12.0049 5.00036 9.76631 5.00036 7.00488C5.00036 4.24346 7.23894 2.00488 10.0004 2.00488ZM23.0004 17.5002C23.0004 20.5378 20.5379 23.0002 17.5004 23.0002C14.4628 23.0002 12.0004 20.5378 12.0004 17.5002C12.0004 14.4627 14.4628 12.0002 17.5004 12.0002C20.5379 12.0002 23.0004 14.4627 23.0004 17.5002ZM18.3539 14.6467C18.1587 14.4515 17.8421 14.4515 17.6468 14.6467C17.4516 14.842 17.4516 15.1586 17.6468 15.3538L19.2932 17.0002H15.0004C14.7242 17.0002 14.5004 17.2241 14.5004 17.5002C14.5004 17.7764 14.7242 18.0002 15.0004 18.0002H19.2933L17.6468 19.6467C17.4516 19.842 17.4516 20.1586 17.6468 20.3538C17.8421 20.5491 18.1587 20.5491 18.3539 20.3538L20.8539 17.8538C20.9071 17.8007 20.9458 17.7385 20.97 17.6723C20.9886 17.6214 20.9992 17.5666 21.0003 17.5095L21.0004 17.5002C21.0004 17.4231 20.9829 17.35 20.9517 17.2848C20.9364 17.2527 20.9175 17.2219 20.8949 17.1931C20.881 17.1753 20.8659 17.1584 20.8498 17.1426L18.3539 14.6467Z" fill="#212121" />
                                </svg>
                            </button>
                        </div>

                        <!-- Language switcher pro mobil -->
                        <div class="pt-4">
                            <div class="flex justify-center space-x-4">
                                <button class="text-white text-[20px] px-4 py-2 {{ app()->getLocale() == 'cs' ? 'font-bold' : '' }}"><a href="{{ language_switch_url('cs') }}">CZ</a></button>
                                <button class="text-white text-[20px] px-4 py-2 {{ app()->getLocale() == 'en' ? 'font-bold' : '' }}"><a href="{{ language_switch_url('en') }}">EN</a></button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mt-[60px] lg:mt-[90px]">
        @yield('content')
    </main>

    <footer class="bg-cover bg-center bg-no-repeat text-primary-black py-[40px] md:py-[60px] lg:py-[90px] my-[2px]"  style="background-image: url('{{url('/images/bg_hero.webp')}}')">
        <div class="container max-w-[1256px] mx-auto px-6">
            <div class="flex justify-center mb-[30px] lg:mb-[60px]">
                <img src="{{url('/images/logo.svg')}}" alt="Logo Knomi" class="h-78" />
            </div>
    
            <div class="text-center text-[20px] lg:text-[28px] font-light mb-8">
                <strong class="font-semibold">KNOMI spol. s r.o.</strong> | IČ: 46713603 |
                <a href="tel:+420483389336" class="hover:underline">+420 483 389 336</a> |
                <a href="mailto:info@knomi.cz" class="text-primary-blue underline">info@knomi.cz</a>
            </div>
    
            <div class="flex flex-col md:flex-row md:justify-center gap-10 md:gap-[130px] text-center md:text-left text-[20px] lg:text-[28px] font-light mb-[30px] lg:mb-[60px]">
                <div>
                    <div class="font-semibold">{{ __('footer.billing.title') }}:</div>
                    <address class=" not-italic">
                    {{ __('homepage.contact.address.billing.street') }}<br>
                    {{ __('homepage.contact.address.billing.zip') }} {{ __('homepage.contact.address.billing.city') }}
                    </address>
                </div>
                <div>
                    <div class="font-semibold">{{ __('footer.operation.title') }}:</div>
                    <address class=" not-italic">
                        {{ __('homepage.contact.address.operation.street') }}<br>
                        {{ __('homepage.contact.address.operation.zip') }} {{ __('homepage.contact.address.operation.city') }}
                        </address>
                </div>
            </div>
    
            <div class="w-full h-[4px] bg-primary-black mb-[20px] lg:mb-[40px]"></div>
    
            <div class="text-center">
                <a href="https://randomlink.com" target="_blank" class="text-lg md:text-[24px] font-normal uppercase tracking-wider relative inline-block hover:scale-105 transition-transform">
                    {{ __('footer.programs.title') }}
                    <span class="block w-full h-[4px] bg-primary-blue mt-2 hover:bg-primary-darkBlue transition-colors"></span>
                </a>
            </div> 
        </div>
    </footer>

    <!-- Bottom Black Bar -->
    <div class="w-full h-[50px] md:h-[90px] bg-primary-black flex items-center justify-center">
        <span class="text-white text-[18px] lg:text-[24px]">© {{ date('Y') }}</span>
    </div>

    @vite('resources/js/fslightbox.js')

    <script>
        function toggleLanguageOptions() {
            const options = document.getElementById('languageOptions');
            const arrow = document.getElementById('dropdownArrow');
            const isHidden = options.classList.contains('hidden');

            if (isHidden) {
                // Zobrazit dropdown s animací
                options.classList.remove('hidden');
                requestAnimationFrame(() => {
                    options.classList.remove('opacity-0', 'scale-95');
                    options.classList.add('opacity-100', 'scale-100');
                });
                arrow.style.transform = 'rotate(180deg)';
            } else {
                // Skrýt dropdown s animací
                options.classList.remove('opacity-100', 'scale-100');
                options.classList.add('opacity-0', 'scale-95');
                arrow.style.transform = 'rotate(0deg)';

                // Počkejte na konec animace a skryjte dropdown
                setTimeout(() => {
                    if (options.classList.contains('opacity-0')) {
                        options.classList.add('hidden');
                    }
                }, 300); // Stejné trvání jako `duration-300`
            }
        }

        window.addEventListener('click', (e) => {
            const combobox = document.getElementById('languageButton');
            const options = document.getElementById('languageOptions');
            const arrow = document.getElementById('dropdownArrow');

            if (!combobox.contains(e.target) && !options.contains(e.target)) {
                options.classList.remove('opacity-100', 'scale-100');
                options.classList.add('opacity-0', 'scale-95');
                arrow.style.transform = 'rotate(0deg)';

                setTimeout(() => {
                    if (options.classList.contains('opacity-0')) {
                        options.classList.add('hidden');
                    }
                }, 300);
            }
        });

        let lastOpenedDropdown = null; // Ukládáme referenci na poslední otevřený dropdown

        // Funkce pro otevření/zavření dropdownu a otáčení šipky s animací
        function toggleDropdown(buttonId, arrowId, dropdownId) {
            const button = document.getElementById(buttonId);
            const arrow = document.getElementById(arrowId);
            const dropdown = document.getElementById(dropdownId);
            const isHidden = dropdown.classList.contains('hidden');

            // Pokud je nějaký dropdown otevřený, zavřeme ho
            if (lastOpenedDropdown && lastOpenedDropdown !== dropdown) {
                // Zavřít předchozí otevřený dropdown
                const lastArrow = lastOpenedDropdown.previousElementSibling.querySelector('svg');
                lastOpenedDropdown.classList.remove('opacity-100', 'scale-100');
                lastOpenedDropdown.classList.add('opacity-0', 'scale-95');
                lastOpenedDropdown.classList.add('hidden');
                if (lastArrow) {
                    lastArrow.classList.remove('rotate-180');
                }
            }

            // Otevření/zavření aktuálního dropdownu
            if (isHidden) {
                // Zobrazit dropdown s animací
                dropdown.classList.remove('hidden');
                requestAnimationFrame(() => {
                    dropdown.classList.remove('opacity-0', 'scale-95');
                    dropdown.classList.add('opacity-100', 'scale-100');
                });
                arrow.classList.add('rotate-180');
                lastOpenedDropdown = dropdown; // Uložit tento dropdown jako poslední otevřený
            } else {
                // Skrýt dropdown s animací
                dropdown.classList.remove('opacity-100', 'scale-100');
                dropdown.classList.add('opacity-0', 'scale-95');
                arrow.classList.remove('rotate-180');

                // Počkejte na konec animace a skryjte dropdown
                setTimeout(() => {
                    if (dropdown.classList.contains('opacity-0')) {
                        dropdown.classList.add('hidden');
                    }
                }, 300); // Stejné trvání jako `duration-300`
            }
        }

        // Přidání event listenerů pro každý dropdown
        document.getElementById('about-btn').addEventListener('click', function() {
            toggleDropdown('about-btn', 'about-arrow', 'about-dropdown');
        });
        document.getElementById('products-btn').addEventListener('click', function() {
            toggleDropdown('products-btn', 'products-arrow', 'products-dropdown');
        });

        var swiper = new Swiper(".swiper", {
            direction: "horizontal",
            loop: true,
            slidesPerView: 1,
            spaceBetween: 4,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        function toggleMobileMenu() {
            const mobileMenu = document.querySelector('.menu-content');
            const isOpen = !mobileMenu.classList.contains('hidden');
            const menuButton = document.getElementById('menuButton');
            const header = document.querySelector('header');

            if (isOpen) {
                // Zavřít menu
                mobileMenu.classList.add('hidden');
                header.classList.remove('h-[100vh]');
                header.classList.add('h-[60px]');
            } else {
                // Otevřít menu
                mobileMenu.classList.remove('hidden');
                header.classList.remove('h-[60px]');
                header.classList.add('h-[100vh]');
            }
        }

        function toggleMobileSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            const button = submenu.previousElementSibling;
            const arrow = button.querySelector('svg');
            
            if (submenu.classList.contains('hidden')) {
                submenu.classList.remove('hidden');
                arrow.classList.add('rotate-180');
            } else {
                submenu.classList.add('hidden');
                arrow.classList.remove('rotate-180');
            }
        }

        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({});
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Získání všech odkazů v menu-content
            const menuLinks = document.querySelector('.menu-content').getElementsByTagName('a');
            
            // Přidání event listeneru na každý odkaz
            Array.from(menuLinks).forEach(link => {
                link.addEventListener('click', function() {
                    const mobileMenu = document.querySelector('.menu-content');
                    const header = document.querySelector('header');
                    
                    // Zavřít menu
                    mobileMenu.classList.add('hidden');
                    header.classList.remove('h-[100vh]');
                    header.classList.add('h-[60px]');
                });
            });

            // Získání všech odkazů v navigaci produktů
            const productLinks = document.querySelectorAll('.product-nav a');
            
            // Získání všech sekcí produktů
            const productSections = document.querySelectorAll('.product-section');
            
            // Přidání click event listeneru na každý odkaz
            productLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Získání ID cílové sekce z href atributu
                    const targetId = this.getAttribute('href').substring(1);
                    const navImages = document.querySelectorAll('.product-nav img');
                    
                    // Skrytí všech sekcí
                    productSections.forEach(section => {
                        section.classList.add('hidden');
                    });

                    navImages.forEach(image => {
                        image.classList.add('opacity-35');
                    });

                    this.querySelector('img').classList.remove('opacity-35');
                    
                    // Zobrazení cílové sekce
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.classList.remove('hidden');
                        scrollToSection(targetId);
                    }
                });
            });
        });
    </script>

</body>
</html>