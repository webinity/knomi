@extends('layout')

@section('content')
    @include('components.hero')

    <section>
        <div class="mx-auto flex items-center">
            <ul class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[1px] lg:gap-[4px] lg:py-[4px] py-[1px] product-nav">
                <li class="relative w-full">
                    <a href="/#soustruzne-dily" class="group">
                        <figure class="bg-[#717384]">
                            <img loading="lazy" src="{{url('/images/img_soustruzne_dily.webp')}}" srcset="{{url('/images/img_soustruzne_dily.webp')}} 1x, {{url('/images/img_soustruzne_dily@2x.webp')}} 2x" alt="{{ __('homepage.products.turned_parts') }}" class="w-full lg:h-[220px] h-[120px] object-cover group-hover:opacity-100 transition-opacity duration-200">
                        </figure>
                        <span class="absolute lg:bottom-[34px] bottom-[10px] w-[200px] left-0 bg-primary-black text-white text-center uppercase font-semibold text-[18px] lg:text-[16px] py-[4px] px-[10px] border-b-4 border-primary-blue">{{ __('homepage.products.turned_parts') }}</span>
                    </a>
                </li>
                <li class="relative w-full">
                    <a href="/#tvarene-trubky" class="group">
                        <figure class="bg-[#717384]">
                            <img loading="lazy" src="{{url('/images/img_trubky.webp')}}" srcset="{{url('/images/img_trubky.webp')}} 1x, {{url('/images/img_trubky@2x.webp')}} 2x" alt="{{ __('homepage.products.formed_tubes') }}" class="w-full lg:h-[220px] h-[120px] object-cover opacity-35 group-hover:opacity-100 transition-opacity duration-200">
                        </figure>
                        <span class="absolute lg:bottom-[34px] bottom-[10px] w-[200px] left-0 bg-primary-black text-white text-center lg:text-right uppercase font-semibold text-[18px] py-[4px] px-[10px] border-b-4 border-primary-blue">{{ __('homepage.products.formed_tubes') }}</span>
                    </a>
                </li>
                <li class="relative w-full">
                    <a href="/#hydraulicka-sroubeni" class="group">
                        <figure class="bg-[#717384]">
                            <img loading="lazy" src="{{url('/images/img_sroubeni.webp')}}" srcset="{{url('/images/img_sroubeni.webp')}} 1x, {{url('/images/img_sroubeni@2x.webp')}} 2x" alt="{{ __('homepage.products.hydraulic_fittings') }}" class="w-full lg:h-[220px] h-[120px] object-cover opacity-35 group-hover:opacity-100 transition-opacity duration-200">
                        </figure>
                        <span class="absolute lg:bottom-[34px] bottom-[10px] w-[200px] left-0 bg-primary-black text-white text-center uppercase font-semibold text-[18px] lg:text-[16px] py-[4px] px-[10px] border-b-4 border-primary-blue">{{ __('homepage.products.hydraulic_fittings') }}</span>
                    </a>
                </li>
                <li class="relative w-full">
                    <a href="/#pneumatika" class="group">
                        <figure class="bg-[#717384]">
                            <img loading="lazy" src="{{url('/images/img_pneumatika.webp')}}" srcset="{{url('/images/img_pneumatika.webp')}} 1x, {{url('/images/img_pneumatika@2x.webp')}} 2x" alt="{{ __('homepage.products.pneumatics') }}" class="w-full lg:h-[220px] h-[120px] object-cover opacity-35 group-hover:opacity-100 transition-opacity duration-200">
                        </figure>
                        <span class="absolute lg:bottom-[34px] bottom-[10px] w-[200px] left-0 bg-primary-black text-white text-center uppercase font-semibold text-[18px] lg:text-[16px] py-[4px] px-[10px] border-b-4 border-primary-blue">{{ __('homepage.products.pneumatics') }}</span>
                    </a>
                </li>
            </ul>
        </div>

        <x-product-section 
            id="soustruzne-dily"
            bg="{{url('/images/bg_soustruzne_dily.webp')}}"
            title="{{ __('homepage.products.turned_parts') }}"
            content="homepage.turned_parts.content"
            :gallery="['soustruzeni_1.webp', 'soustruzeni_2.webp', 'soustruzeni_3.webp', 'soustruzeni_4.webp', 'soustruzeni_5.webp', 'soustruzeni_6.webp', 'soustruzeni_7.webp', 'soustruzeni_7.webp', 'soustruzeni_7.webp']"
            class="product-section"
        />

        <x-product-section 
            id="tvarene-trubky"
            bg="{{url('/images/bg_tvarene_trubky.webp')}}"
            title="{{ __('homepage.products.formed_tubes') }}"
            content="homepage.turned_parts.content"
            :gallery="['trubky_1.webp', 'trubky_2.webp', 'trubky_3.webp', 'trubky_4.webp', 'trubky_5.webp', 'trubky_6.webp', 'trubky_7.webp']"
            class="hidden product-section"
        />

        <x-product-section 
            id="hydraulicka-sroubeni"
            bg="{{url('/images/bg_hydraulicka_sroubeni.webp')}}"
            title="{{ __('homepage.products.hydraulic_fittings') }}"
            content="homepage.turned_parts.content"
            :gallery="['hydraulika_1.webp', 'hydraulika_2.webp', 'hydraulika_3.webp', 'hydraulika_4.webp', 'hydraulika_5.webp', 'hydraulika_6.webp', 'hydraulika_7.webp', 'hydraulika_8.webp', 'hydraulika_9.webp', 'hydraulika_10.webp', 'hydraulika_11.webp', 'hydraulika_12.webp', 'hydraulika_13.webp']"
            class="hidden product-section"
        />

        <x-product-section 
            id="pneumatika"
            bg="{{url('/images/bg_pneumatika.webp')}}"
            title="{{ __('homepage.products.pneumatics') }}"
            content="homepage.turned_parts.content"
            :gallery="['pneumatika_1.webp', 'pneumatika_2.webp', 'pneumatika_3.webp', 'pneumatika_4.webp', 'pneumatika_5.webp']"
            class="hidden product-section"
        />
    </section>

    @include('components.features')

    <section id="nase-firma" class="py-[40px] md:py-[60px] lg:py-[90px]">
        <div class="container max-w-[1256px] mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-[40px]">
            <div class="w-full md:w-[50%]">
                <span class="lg:text-[36px] text-[24px] text-primary-black uppercase opacity-50 leading-none block">{{ __('homepage.about.subtitle') }}</span>
                
                <h2 class="lg:text-[36px] text-[24px] text-primary-black uppercase font-bold lg:py-[20px] py-[10px] lg:px-[10px] px-[5px] inline-block lg:border-b-[6px] border-b-[3px] border-primary-blue lg:mb-[30px] mb-[10px] lg:min-w-[220px] min-w-[140px] leading-[1.25]">{{ __('homepage.about.title') }}</h2>

                <p class="lg:text-[18px] text-[16px] font-bold text-primary-black">{{ __('homepage.about.content') }}</p>
            </div>

            <figure class="w-full md:w-[50%]">
                <img src="{{ asset('images/img_about_us.webp') }}" srcset="{{ asset('images/img_about_us.webp') }} 1x, {{ asset('images/img_about_us@2x.webp') }} 2x" loading="lazy" alt="{{ __('homepage.about.title') }}">
            </figure>
        </div>
    </section>
    
    <section class="py-[40px] md:py-[60px] lg:py-[90px] bg-primary-grey">
        <div class="container max-w-[1256px] mx-auto px-6 flex flex-col lg:flex-row items-center justify-between gap-[40px]">
            <div class="w-full md:w-[80%]">
                <p class="text-[24px] lg:text-[36px] text-primary-black font-semibold text-center lg:text-left">{{ __('homepage.cta.first') }}
                    <span class="block">{{ __('homepage.cta.second') }}</span>
                    <span class="block">{{ __('homepage.cta.third') }}</span>
                </p>
            </div>

            <div class="shrink-0">
                <a href="#kontakt" class="lg:text-[24px] text-[18px] text-black font-semibold lg:py-[12px] py-[8px] lg:px-[30px] px-[15px] bg-primary-yellow block w-fit hover:bg-primary-blue hover:text-white transition-colors duration-200">{{ __('homepage.cta.button') }}</a>
            </div>
        </div>
    </section>

    <section id="galerie" class="py-[40px] md:py-[60px] lg:py-[90px]">
        <div class="container max-w-[1256px] mx-auto px-6">
            <h2 class="lg:text-[36px] text-[24px] text-primary-black uppercase font-bold lg:py-[20px] py-[10px] lg:px-[10px] px-[5px] inline-block lg:border-b-[6px] border-b-[3px] border-primary-blue lg:mb-[60px] mb-[30px] lg:min-w-[220px] min-w-[140px] leading-[1.25]">{{ __('homepage.gallery.title') }}</h2>

            <figure class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[10px] md:gap-[20px] lg:gap-[50px]">
                <a data-fslightbox="gallery" href="{{url('/images/gallery_1.webp')}}" class="w-full h-[275px] bg-primary-grey border-2 border-primary-black lg:border-4 hover:border-primary-blue transition-colors duration-200">
                    <img src="{{url('/images/gallery_1.webp')}}" alt="Galerie" class="w-full h-full object-cover">
                </a>

                <a data-fslightbox="gallery" href="{{url('/images/gallery_2.webp')}}" class="w-full h-[275px] bg-primary-grey border-2 border-primary-black lg:border-4 hover:border-primary-blue transition-colors duration-200">
                    <img src="{{url('/images/gallery_2.webp')}}" alt="Galerie" class="w-full h-full object-cover">
                </a>

                <a data-fslightbox="gallery" href="{{url('/images/gallery_3.webp')}}" class="w-full h-[275px] bg-primary-grey border-2 border-primary-black lg:border-4 hover:border-primary-blue transition-colors duration-200">
                    <img src="{{url('/images/gallery_3.webp')}}" alt="Galerie" class="w-full h-full object-cover">
                </a>

                <a data-fslightbox="gallery" href="{{url('/images/gallery_4.jpg')}}" class="w-full h-[275px] bg-primary-grey border-2 border-primary-black lg:border-4 hover:border-primary-blue transition-colors duration-200">
                    <img src="{{url('/images/gallery_4.jpg')}}" alt="Galerie" class="w-full h-full object-cover">
                </a>

                <a data-fslightbox="gallery" href="{{url('/images/gallery_5.jpg')}}" class="w-full h-[275px] bg-primary-grey border-2 border-primary-black lg:border-4 hover:border-primary-blue transition-colors duration-200">
                    <img src="{{url('/images/gallery_5.jpg')}}" alt="Galerie" class="w-full h-full object-cover">
                </a>

                <a data-fslightbox="gallery" href="{{url('/images/gallery_6.jpg')}}" class="w-full h-[275px] bg-primary-grey border-2 border-primary-black lg:border-4 hover:border-primary-blue transition-colors duration-200">
                    <img src="{{url('/images/gallery_6.jpg')}}" alt="Galerie" class="w-full h-full object-cover">
                </a>
            </figure>
        </div>
    </section>

    <section class="py-[40px] md:py-[60px] lg:py-[90px] bg-primary-grey">
        <div class="container max-w-[1256px] mx-auto px-6 flex flex-col lg:flex-row items-center justify-between gap-[40px]">
            <div class="w-full md:w-[80%]">
                <p class="text-[24px] lg:text-[36px] text-primary-black font-semibold text-center lg:text-left">{{ __('homepage.cta.fourth') }}
                    <span class="block">{{ __('homepage.cta.fifth') }}</span>
                </p>
            </div>

            <div class="shrink-0">
                <a href="#kontakt" class="lg:text-[24px] text-[18px] text-black font-semibold lg:py-[12px] py-[8px] lg:px-[30px] px-[15px] bg-primary-yellow block w-fit hover:bg-primary-blue hover:text-white transition-colors duration-200">{{ __('homepage.cta.button') }}</a>
            </div>
        </div>
    </section>


    <section id="ke-stazeni" class="py-[40px] md:py-[60px] lg:py-[90px]">
        <div class="container max-w-[1256px] mx-auto px-6">
            <span class="lg:text-[36px] text-[24px] text-primary-black uppercase opacity-50 leading-none block">{{ __('homepage.downloads.subtitle') }}</span>
                
            <h2 class="lg:text-[36px] text-[24px] text-primary-black uppercase font-bold lg:py-[20px] py-[10px] lg:px-[10px] px-[5px] inline-block lg:border-b-[6px] border-b-[3px] border-primary-blue lg:mb-[60px] mb-[30px] lg:min-w-[220px] min-w-[140px] leading-[1.25]">{{ __('homepage.downloads.title') }}</h2>
            
            <div class="grid grid-cols-2 gap-[20px] md:grid-cols-4 lg:gap-[40px]">
                @for ($i = 1; $i <= 4; $i++)
                    <a href="#" class="group w-full h-[200px] border-[1px] border-primary-black hover:border-primary-blue transition-colors duration-200 text-center flex flex-col items-center justify-center gap-[20px] lg:gap-[30px]">
                        <span class="text-[16px] lg:text-[18px] text-primary-black font-bold group-hover:text-primary-blue transition-colors duration-200">{{ __('homepage.downloads.file') }} {{ $i }}</span>

                        <figure>
                            <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M7.5 38C7.5 45.071 7.5 48.6065 9.6967 50.8032C11.8934 53 15.4289 53 22.5 53H37.5C44.571 53 48.1065 53 50.3032 50.8032C52.5 48.6065 52.5 45.071 52.5 38" stroke="#32383E" stroke-opacity="0.5" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M30 8V40.5M30 40.5L40 29.5625M30 40.5L20 29.5625" stroke="#32383E" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                            
                        </figure>
                    </a>
                @endfor
            </div>
        </div>
    </section>

    @include('components.features')

    <section id="kontakt" class="py-[40px] md:py-[60px] lg:py-[90px] border-b-[10px] lg:border-b-[30px] border-primary-black">
        <div class="container max-w-[1256px] mx-auto px-6">
            <span class="lg:text-[36px] text-[24px] text-primary-black uppercase opacity-50 leading-none block">{{ __('homepage.contact.subtitle') }}</span>

            <h2 class="lg:text-[36px] text-[24px] text-primary-black uppercase font-bold lg:py-[20px] py-[10px] lg:px-[10px] px-[5px] inline-block lg:border-b-[6px] border-b-[3px] border-primary-blue lg:mb-[60px] mb-[30px] lg:min-w-[220px] min-w-[140px] leading-[1.25]">{{ __('homepage.contact.title') }}</h2>

            <div class="flex flex-col lg:flex-row gap-[40px]">
                <div class="lg:w-[50%]">
                    <div class="mb-[20px] lg:mb-[30px]">
                        <strong class="lg:text-[24px] text-[18px] text-primary-black font-bold mb-[10px] lg:mb-[15px] block">{{ __('homepage.contact.people.title') }}</strong>
                        <p class="lg:text-[18px] text-[16px] text-primary-black font-bold">{{ __('homepage.contact.people.name') }}, {{ __('homepage.contact.people.position') }}
                            <span class="block">+420 777 777 777</span>
                        </p>
                    </div>

                    <div class="mb-[20px] lg:mb-[30px]">
                        <strong class="lg:text-[24px] text-[18px] text-primary-black font-bold mb-[10px] lg:mb-[15px] block">{{ __('homepage.contact.email.title') }}</strong>
                        <p class="lg:text-[18px] text-[16px] text-primary-black font-bold"><a href="mailto:info@knomi.cz" class="hover:text-primary-blue transition-colors duration-200 underline">info@knomi.cz</a></p>
                    </div>

                    <div class="mb-[20px] lg:mb-[30px]">
                        <strong class="lg:text-[24px] text-[18px] text-primary-black font-bold mb-[10px] lg:mb-[15px] block">{{ __('homepage.contact.phone.title') }}</strong>
                        <p class="lg:text-[18px] text-[16px] text-primary-black font-bold"><a href="tel:+420 483 389 336" class="hover:text-primary-blue transition-colors duration-200 underline">+420 483 389 336</a></p>
                    </div>
                </div>

                <div class="lg:w-[50%] relative">
                    <div class="mb-[20px] lg:mb-[30px]">
                        <strong class="lg:text-[24px] text-[18px] text-primary-black font-bold mb-[10px] lg:mb-[15px] block">{{ __('homepage.contact.address.billing.title') }}</strong>
                        <p class="lg:text-[18px] text-[16px] text-primary-black font-bold">{{ __('homepage.contact.address.billing.street') }}
                            <span class="block">{{ __('homepage.contact.address.billing.city') }}</span>
                            <span class="block">{{ __('homepage.contact.address.billing.zip') }}</span>
                            <span class="block">{{ __('homepage.contact.address.billing.country') }}</span>
                            <br>
                            <span class="block">{{ __('homepage.contact.address.billing.ic') }}</span>
                            <span class="block">{{ __('homepage.contact.address.billing.dic') }}</span>
                        </p>
                    </div>

                    <div class="mb-[20px] lg:mb-[30px] relative z-10">
                        <strong class="lg:text-[24px] text-[18px] text-primary-black font-bold mb-[10px] lg:mb-[15px] block">{{ __('homepage.contact.address.operation.title') }}</strong>
                        <p class="lg:text-[18px] text-[16px] text-primary-black font-bold">{{ __('homepage.contact.address.operation.street') }}
                            <span class="block">{{ __('homepage.contact.address.operation.city') }}</span>
                            <span class="block">{{ __('homepage.contact.address.operation.zip') }}</span>
                        </p>
                    </div>

                    <img src="{{url('/images/img_map.webp')}}" srcset="{{url('/images/img_map.webp')}} 1x, {{url('/images/img_map@2x.webp')}} 2x" alt="" class="h-215 lg:absolute top-[80px] right-[-30px]" />
                </div>
            </div>

            <h2 class="lg:text-[36px] text-[24px] text-primary-black uppercase font-bold lg:py-[20px] py-[10px] lg:px-[10px] px-[5px] inline-block lg:border-b-[6px] border-b-[3px] border-primary-blue lg:mb-[60px] mb-[30px] lg:min-w-[220px] min-w-[140px] leading-[1.25]">{{ __('homepage.contact.form.title') }}</h2>

            <livewire:form />
        </div>
    </section>
@endsection

