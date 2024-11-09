<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css'])
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <h1 class="text-3xl font-bold underline bg-primary-yellow">
        Hello world!
    </h1>
    <footer class="bg-cover bg-center bg-no-repeat text-primary-black p-8 md:p-16" style="background-image: url('/path/to/placeholder.jpg');">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="/path/to/logo.png" alt="Logo" class="w-24 md:w-32">
        </div>

        <!-- Contact Info -->
        <div class="text-center text-lg md:text-2xl font-light mb-8">
            KNOMI spol. s r.o. | IČ: 46713603 |
            <a href="tel:+420483389336" class="hover:underline">+420 483 389 336</a> |
            <a href="mailto:info@knomi.cz" class="text-primary-blue underline">info@knomi.cz</a>
        </div>

        <!-- Address Sections -->
        <div class="flex flex-col md:flex-row md:justify-center gap-10 md:gap-[130px] text-center md:text-left text-lg md:text-2xl font-light mb-8">
            <div>
                <div class="font-semibold">Sídlo firmy:</div>
                <address class="not-italic">
                    Roztylská 1860/1<br>
                    148 00 Praha 4 - Chodov
                </address>
            </div>
            <div>
                <div class="font-semibold">Provozovna:</div>
                <address class="not-italic">
                    Bratříkov 63<br>
                    468 21 Bratříkov
                </address>
            </div>
        </div>

        <!-- Divider Line -->
        <div class="w-full h-[4px] bg-primary-black mb-11"></div>

        <!-- Funding Programs Link -->
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
