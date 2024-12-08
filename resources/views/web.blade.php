<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>

    <livewire:form />

{{-- FIXME: spojit headers tak, aby se dobre zobrazovali na telefonu --}}
    <header class="h-[90px] bg-primary-black">
        <div class="container max-w-[1256px] mx-auto flex justify-end items-center px-6 space-x-4 h-full">
            <!-- Tlačítko 1 -->
            <button class="h-[54px] bg-[#D7DCEB] text-[24px] text-primary-black px-4 flex items-center justify-center rounded-btn border-2 border-transparent hover:border-primary-blue hover:ring-2 hover:ring-primary-blue focus:outline-none transition-all duration-300 ease-in-out">
                Online katalog / E-shop
            </button>

            <!-- Tlačítko 2 -->
            <button class="h-[54px] bg-[#D7DCEB] text-[24px] text-primary-black px-4 flex items-center justify-center rounded-btn border-2 border-transparent hover:border-primary-blue hover:ring-2 hover:ring-primary-blue focus:outline-none transition-all duration-300 ease-in-out">
                <span>Přihlásit</span>
                <svg class="ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0004 17.5002C11.0004 16.2116 11.3754 15.0105 12.0222 14.0002H4.25278C3.01076 14.0002 2.00391 15.007 2.00391 16.2491V17.169C2.00391 17.7411 2.18231 18.2989 2.51427 18.7648C4.05643 20.9292 6.5794 22.0013 10.0004 22.0013C10.9315 22.0013 11.7962 21.9219 12.5929 21.7626C11.6009 20.6215 11.0004 19.131 11.0004 17.5002ZM10.0004 2.00488C12.7618 2.00488 15.0004 4.24346 15.0004 7.00488C15.0004 9.76631 12.7618 12.0049 10.0004 12.0049C7.23894 12.0049 5.00036 9.76631 5.00036 7.00488C5.00036 4.24346 7.23894 2.00488 10.0004 2.00488ZM23.0004 17.5002C23.0004 20.5378 20.5379 23.0002 17.5004 23.0002C14.4628 23.0002 12.0004 20.5378 12.0004 17.5002C12.0004 14.4627 14.4628 12.0002 17.5004 12.0002C20.5379 12.0002 23.0004 14.4627 23.0004 17.5002ZM18.3539 14.6467C18.1587 14.4515 17.8421 14.4515 17.6468 14.6467C17.4516 14.842 17.4516 15.1586 17.6468 15.3538L19.2932 17.0002H15.0004C14.7242 17.0002 14.5004 17.2241 14.5004 17.5002C14.5004 17.7764 14.7242 18.0002 15.0004 18.0002H19.2933L17.6468 19.6467C17.4516 19.842 17.4516 20.1586 17.6468 20.3538C17.8421 20.5491 18.1587 20.5491 18.3539 20.3538L20.8539 17.8538C20.9071 17.8007 20.9458 17.7385 20.97 17.6723C20.9886 17.6214 20.9992 17.5666 21.0003 17.5095L21.0004 17.5002C21.0004 17.4231 20.9829 17.35 20.9517 17.2848C20.9364 17.2527 20.9175 17.2219 20.8949 17.1931C20.881 17.1753 20.8659 17.1584 20.8498 17.1426L18.3539 14.6467Z" fill="#212121" />
                </svg>
            </button>

            <div class="relative">
                <button id="languageButton" class="h-[54px] w-auto text-[24px] text-primary-grey flex items-center cursor-pointer px-4 bg-transparent focus:outline-none" onclick="toggleLanguageOptions()" aria-haspopup="listbox" aria-expanded="false">
                    <span class="mr-2">CZ</span>
                    <!-- Šipka -->
                    <svg id="dropdownArrow" class="w-4 h-4 text-primary-grey transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <ul id="languageOptions" class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-max bg-primary-black text-primary-grey text-[24px] rounded-btn shadow-none opacity-0 scale-95 transition-all duration-300 ease-in-out hidden" tabindex="-1" role="listbox" aria-labelledby="languageButton">
                    <li class="px-4 py-2 cursor-pointer hover:bg-primary-grey hover:text-white" role="option" onclick="selectLanguage('EN')">EN</li>
                    <li class="px-4 py-2 cursor-pointer hover:bg-primary-grey hover:text-white" role="option" onclick="selectLanguage('CZ')">CZ</li>
                </ul>
            </div>
        </div>
    </header>

    <header class="bg-transparent py-6">
        <div class="container max-w-[1256px] px-6 space-x-4 mx-auto flex justify-between items-center">
            <!-- Logo na levé straně -->
            <div class="logo">
                <img src="placeholder-logo.png" alt="Logo" class="h-10" />
            </div>

            <!-- Pravá strana s odkazy a dropdowny -->
            <nav class="flex items-center space-x-6">
                <!-- Kombobox O nás -->
                <div class="relative group">
                    <button id="about-btn" class="text-header-link-color text-[24px] flex items-center space-x-2 h-[54px]">
                        <span>O nás</span>
                        <svg id="about-arrow" class="w-6 h-6 transition-transform duration-300 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown -->
                    <div id="about-dropdown" class="absolute left-0 bg-primary-black shadow-md w-48 hidden opacity-0 scale-95 transition-all duration-300">
                        <ul>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#naše-firma" class="block px-4 py-2 text-[18px] text-white">Naše firma</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#galerie" class="block px-4 py-2 text-[18px] text-white">Galerie</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Hover čára pro O nás -->
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </div>

                <!-- Kombobox Produkty -->
                <div class="relative group">
                    <button id="products-btn" class="text-header-link-color text-[24px] flex items-center space-x-2 h-[54px]">
                        <span>Produkty</span>
                        <svg id="products-arrow" class="w-6 h-6 transition-transform duration-300 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown -->
                    <div id="products-dropdown" class="absolute left-0 bg-primary-black shadow-md w-48 hidden opacity-0 scale-95 transition-all duration-300">
                        <ul>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#soustruzne-dily" class="block px-4 py-2 text-[18px] text-white">Soustružné díly</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#tvarene-trubky" class="block px-4 py-2 text-[18px] text-white">Tvářené trubky</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#hydraulicka-sroubeni" class="block px-4 py-2 text-[18px] text-white">Hydraulická šroubení</a>
                            </li>
                            <li class="border-b-[1px] border-primary-blue hover:bg-[rgba(50,56,62,0.6)]">
                                <a href="#pneumatika" class="block px-4 py-2 text-[18px] text-white">Pneumatika</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Hover čára pro Produkty -->
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </div>




                <!-- Odkazy s hover efektem -->
                <a href="#ke-stazeni" class="text-header-link-color text-[24px] h-[54px] group relative flex items-center">
                    Ke stažení
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </a>
                <a href="/kariera" class="text-header-link-color text-[24px] h-[54px] group relative flex items-center">
                    Kariéra
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </a>
                <a href="#kontakt" class="text-header-link-color text-[24px] h-[54px] group relative flex items-center">
                    Kontakt
                    <span class="absolute bottom-0 left-0 w-full h-[5px] bg-primary-blue scale-x-0 group-hover:scale-x-100 transition-all duration-300"></span>
                </a>

            </nav>
        </div>

        <!-- Úvodní sekce pod hlavičkou -->
        <section class="container mx-auto mt-10 text-center">
            <p class="text-xl text-gray-500">Tento prostor bude obsahovat úvodní sekci s nějakým obsahem.</p>
        </section>
    </header>


    <footer class="bg-cover bg-center bg-no-repeat text-primary-black p-8 md:p-16" style="background-image: url('/path/to/placeholder.jpg');">
        <div class="flex justify-center mb-6">
            <img src="/path/to/logo.png" alt="Logo" class="w-24 md:w-32">
        </div>

        <div class="text-center text-lg md:text-2xl font-light mb-8">
            KNOMI spol. s r.o. | IČ: 46713603 |
            <a href="tel:+420483389336" class="hover:underline">+420 483 389 336</a> |
            <a href="mailto:info@knomi.cz" class="text-primary-blue underline">info@knomi.cz</a>
        </div>

        <div class="flex flex-col md:flex-row md:justify-center gap-10 md:gap-[130px] text-center md:text-left text-lg md:text-2xl font-light mb-8">
            <div>
                <div class=">Sídlo firmy:</div>
                <address class=" not-italic">
                    Roztylská 1860/1<br>
                    148 00 Praha 4 - Chodov
                    </address>
                </div>
                <div>
                    <div class=">Provozovna:</div>
                <address class=" not-italic">
                        Bratříkov 63<br>
                        468 21 Bratříkov
                        </address>
                    </div>
                </div>

                <div class="w-full h-[4px] bg-primary-black mb-11"></div>

                <div class="text-center mb-9">
                    <a href="https://randomlink.com" target="_blank" class="text-lg md:text-[24px] font-normal uppercase tracking-wider relative inline-block hover:scale-105 transition-transform">
                        DOTAČNÍ PROGRAMY
                        <span class="block w-full h-[4px] bg-primary-blue mt-2 hover:bg-primary-darkBlue transition-colors"></span>
                    </a>
                </div>
    </footer>

    <!-- Bottom Black Bar -->
    <div class="w-full h-[50px] md:h-[90px] bg-primary-black flex items-center justify-center">
        <span class="text-white text-base md:text-lg">© 2024</span>
    </div>
</body>
</html>
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

    function selectLanguage(language) {
        const button = document.getElementById('languageButton');
        const options = document.getElementById('languageOptions');
        const arrow = document.getElementById('dropdownArrow');

        button.querySelector('span').textContent = language; // Změní text tlačítka
        toggleLanguageOptions(); // Zavře dropdown
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

</script>
