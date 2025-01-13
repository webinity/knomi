<section class="bg-no-repeat bg-center bg-cover" style="background-image: url('{{url('/images/bg_hero.webp')}}')">
    <div class="container max-w-[1256px] mx-auto flex items-center lg:min-h-[700px] min-h-[400px] px-6">
        <div class="flex flex-col lg:flex-row justify-between w-full items-center lg:gap-[40px] gap-[20px]">
            <div class="max-w-[480px]">
                <h1 class="lg:text-[60px] text-[30px] text-center lg:mb-[30px] mb-[10px]">MOTTO nebo POPIS OBECNĚ</h1>
                <p class="lg:font-bold font-semibold lg:text-[18px] text-[14px] text-primary-black">Lorem ipsum dolor sit amet consectetur. Lectus mauris egestas scelerisque et quis lorem. Varius sem mauris nullam montes at et. Vivamus ultrices quisque malesuada integer a. Mattis tempor in volutpat velit elementum egestas elit. </p>
            </div>
    
            <figure>
                <img src="{{url('/images/img_hero.webp')}}" srcset="{{url('/images/img_hero.webp')}} 1x, {{url('/images/img_hero@2x.webp')}} 2x" alt="Hero" class="lg:w-auto w-[240px]">
            </figure>
        </div>
    
        {!! $content ?? '' !!}
    </div>
</section>