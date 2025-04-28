@extends('layout')

@section('content')
    @include('components.hero')

{{-- FIXME: nejdou otevrit obrazky --}}
<section id="prilohy" class="py-[40px] md:py-[60px] lg:py-[90px]">
    <div class="container max-w-[1256px] mx-auto px-6">
        <span class="lg:text-[36px] text-[24px] text-primary-black uppercase opacity-50 leading-none block">{{ __('homepage.downloads.subtitle') }}</span>

        <h2 class="lg:text-[36px] text-[24px] text-primary-black uppercase font-bold lg:py-[20px] py-[10px] lg:px-[10px] px-[5px] inline-block lg:border-b-[6px] border-b-[3px] border-primary-blue lg:mb-[60px] mb-[30px] lg:min-w-[220px] min-w-[140px] leading-[1.25]">{{ __('homepage.downloads.title') }}</h2>

        <div class="grid grid-cols-2 gap-[20px] md:grid-cols-4 lg:gap-[40px]">
            <a href="{{ route('downloads.file', '1. Povinná publicita - úspora energií.pdf') }}" target="_blank" class="group w-full h-[200px] border-[1px] border-primary-black hover:border-primary-blue transition-colors duration-200 text-center flex flex-col items-center justify-center gap-[20px] lg:gap-[30px]">
                <span class="text-[16px] lg:text-[18px] text-primary-black font-bold group-hover:text-primary-blue transition-colors duration-200">{{ __('homepage.downloads.file1') }}</span>

                <figure>
                    <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M7.5 38C7.5 45.071 7.5 48.6065 9.6967 50.8032C11.8934 53 15.4289 53 22.5 53H37.5C44.571 53 48.1065 53 50.3032 50.8032C52.5 48.6065 52.5 45.071 52.5 38" stroke="#32383E" stroke-opacity="0.5" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30 8V40.5M30 40.5L40 29.5625M30 40.5L20 29.5625" stroke="#32383E" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </figure>
            </a>

            <a href="{{ route('downloads.file', '2. publicita FVE.pdf') }}" target="_blank" class="group w-full h-[200px] border-[1px] border-primary-black hover:border-primary-blue transition-colors duration-200 text-center flex flex-col items-center justify-center gap-[20px] lg:gap-[30px]">
                <span class="text-[16px] lg:text-[18px] text-primary-black font-bold group-hover:text-primary-blue transition-colors duration-200">{{ __('homepage.downloads.file2') }}</span>

                <figure>
                    <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M7.5 38C7.5 45.071 7.5 48.6065 9.6967 50.8032C11.8934 53 15.4289 53 22.5 53H37.5C44.571 53 48.1065 53 50.3032 50.8032C52.5 48.6065 52.5 45.071 52.5 38" stroke="#32383E" stroke-opacity="0.5" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30 8V40.5M30 40.5L40 29.5625M30 40.5L20 29.5625" stroke="#32383E" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </figure>
            </a>

            <a href="{{ route('downloads.file', '3. Bezodkapová rychlospojka.png') }}" target="_blank" class="group w-full h-[200px] border-[1px] border-primary-black hover:border-primary-blue transition-colors duration-200 text-center flex flex-col items-center justify-center gap-[20px] lg:gap-[30px]">
                <span class="text-[16px] lg:text-[18px] text-primary-black font-bold group-hover:text-primary-blue transition-colors duration-200">{{ __('homepage.downloads.file3') }}</span>

                <figure>
                    <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M7.5 38C7.5 45.071 7.5 48.6065 9.6967 50.8032C11.8934 53 15.4289 53 22.5 53H37.5C44.571 53 48.1065 53 50.3032 50.8032C52.5 48.6065 52.5 45.071 52.5 38" stroke="#32383E" stroke-opacity="0.5" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30 8V40.5M30 40.5L40 29.5625M30 40.5L20 29.5625" stroke="#32383E" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </figure>
            </a>

            <a href="{{ route('downloads.file', '4. Zakladač.png') }}" target="_blank" class="group w-full h-[200px] border-[1px] border-primary-black hover:border-primary-blue transition-colors duration-200 text-center flex flex-col items-center justify-center gap-[20px] lg:gap-[30px]">
                <span class="text-[16px] lg:text-[18px] text-primary-black font-bold group-hover:text-primary-blue transition-colors duration-200">{{ __('homepage.downloads.file4') }}</span>

                <figure>
                    <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M7.5 38C7.5 45.071 7.5 48.6065 9.6967 50.8032C11.8934 53 15.4289 53 22.5 53H37.5C44.571 53 48.1065 53 50.3032 50.8032C52.5 48.6065 52.5 45.071 52.5 38" stroke="#32383E" stroke-opacity="0.5" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30 8V40.5M30 40.5L40 29.5625M30 40.5L20 29.5625" stroke="#32383E" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </figure>
            </a>

            <a href="{{ route('downloads.file', '5. Pickupy.png') }}" target="_blank" class="group w-full h-[200px] border-[1px] border-primary-black hover:border-primary-blue transition-colors duration-200 text-center flex flex-col items-center justify-center gap-[20px] lg:gap-[30px]">
                <span class="text-[16px] lg:text-[18px] text-primary-black font-bold group-hover:text-primary-blue transition-colors duration-200">{{ __('homepage.downloads.file4') }}</span>

                <figure>
                    <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M7.5 38C7.5 45.071 7.5 48.6065 9.6967 50.8032C11.8934 53 15.4289 53 22.5 53H37.5C44.571 53 48.1065 53 50.3032 50.8032C52.5 48.6065 52.5 45.071 52.5 38" stroke="#32383E" stroke-opacity="0.5" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30 8V40.5M30 40.5L40 29.5625M30 40.5L20 29.5625" stroke="#32383E" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </figure>
            </a>

            <a href="{{ route('downloads.file', '6 Inovace hydropnem.png') }}" target="_blank" class="group w-full h-[200px] border-[1px] border-primary-black hover:border-primary-blue transition-colors duration-200 text-center flex flex-col items-center justify-center gap-[20px] lg:gap-[30px]">
                <span class="text-[16px] lg:text-[18px] text-primary-black font-bold group-hover:text-primary-blue transition-colors duration-200">{{ __('homepage.downloads.file4') }}</span>

                <figure>
                    <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M7.5 38C7.5 45.071 7.5 48.6065 9.6967 50.8032C11.8934 53 15.4289 53 22.5 53H37.5C44.571 53 48.1065 53 50.3032 50.8032C52.5 48.6065 52.5 45.071 52.5 38" stroke="#32383E" stroke-opacity="0.5" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30 8V40.5M30 40.5L40 29.5625M30 40.5L20 29.5625" stroke="#32383E" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </figure>
            </a>
        </div>
    </div>
</section>
@endsection

