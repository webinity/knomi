@props(['id', 'title', 'content', 'gallery', 'bg'])

<div {{ $attributes->merge(['id' => $id]) }}>
    <div class="bg-no-repeat bg-center bg-cover py-[56px] overflow-hidden" style="background-image: url('{{url('/images/bg_hero_reverse.webp')}}')">
        <div class="relative">
            <div class="container max-w-[1256px] mx-auto px-6 flex flex-col lg:block">
                <div class="lg:w-[calc(50%-45px)] lg:p-[40px] p-[20px] lg:order-none order-2 text-white text-[18px] lg:text-[24px] font-bold bg-no-repeat bg-center bg-cover product-content" style="background-image: url('{{ $bg }}')">
                    <div class="flex flex-col gap-[15px] lg:gap-[30px]">
                        {!! $content !!}
                    </div>

                    <a href="#kontakt" class="lg:text-[24px] text-[18px] text-black font-semibold lg:py-[12px] py-[8px] lg:px-[30px] px-[15px] bg-primary-yellow text-primary-black lg:mt-[40px] mt-[20px] mx-auto block w-fit hover:bg-primary-blue hover:text-white transition-colors duration-200">Kontaktujte nás</a>
                </div>
    
                <div class="lg:absolute bottom-[40px] right-0 w-full lg:w-[50%] bg-primary-black lg:px-[40px] px-[20px] lg:py-[30px] py-[10px] lg:mr-[-45px] border-b-4 border-primary-blue mb-[20px] order-1 lg:order-none">
                    <h2 class="lg:text-[50px] text-[30px] text-white uppercase font-semibold leading-none">{{ $title }}</h2>
                </div>
            </div>
        </div>

        <div class="container max-w-[1336px] mx-auto mt-[56px]">
            <div class="swiper-container px-[64px] relative">
                <div class="swiper">        
                    <div class="swiper-wrapper">
                        @foreach($gallery as $image)
                        <div class="swiper-slide">
                            <img src="{{url('/images/' . $image)}}" alt="{{ $title }}" class="w-full h-[220px] object-cover">
                        </div>
                        @endforeach
                    </div>
    
                    <div class="swiper-pagination"></div>
                </div>
    
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>