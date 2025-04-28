<form wire:submit.prevent="submit" class="w-full">
    {{-- TODO: dostylovat success --}}
    @if (session()->has('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex flex-col lg:flex-row gap-[20px] lg:gap-[40px] mb-[15px] lg:mb-[30px]">
        <div class="lg:w-1/2">
            <div class="mb-[15px]">
                <label for="name" class="block text-[14px] lg:text-[18px] font-bold mb-[5px] text-primary-black">{{ __('form.name') }}: <span class="text-[14px] lg:text-[18px] text-[#ef4444]">*</span></label>
                <input type="text" wire:model="name" id="name" class="w-full border border-primary-blue rounded px-[15px] px-[24px] py-[9px] text-[18px] lg:text-[24px] @error('name') border-[#ef4444] @enderror">
                @error('name') <span class="text-primary-black text-[14px] lg:text-[18px] text-right">{{ $message }}</span> @enderror
            </div>

            <div class="mb-[15px]">
                <label for="email" class="block text-[14px] lg:text-[18px] font-bold mb-[5px] text-primary-black">{{ __('form.email') }}: <span class="text-[14px] lg:text-[18px] text-[#ef4444]">*</span></label>
                <input type="email" wire:model="email" id="email" class="w-full border border-primary-blue rounded px-[15px] px-[24px] py-[9px] text-[18px] lg:text-[24px] @error('email') border-[#ef4444] @enderror">
                @error('email') <span class="text-primary-black text-[14px] lg:text-[18px] text-right">{{ $message }}</span> @enderror
            </div>

            <div class="">
                <label for="phone" class="block text-[14px] lg:text-[18px] font-bold mb-[5px] text-primary-black">{{ __('form.phone') }}:</label>
                <input type="tel" wire:model="phone" id="phone" class="w-full border border-primary-blue rounded px-[15px] px-[24px] py-[9px] text-[18px] lg:text-[24px] @error('phone') border-[#ef4444] @enderror">
                @error('phone') <span class="text-primary-black text-[14px] lg:text-[18px] text-right">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="lg:w-1/2">
            <div class="mb-[15px]">
                <label for="message" class="block text-[14px] lg:text-[18px] font-bold mb-[5px] text-primary-black">{{ __('form.message') }}: <span class="text-[14px] lg:text-[18px] text-[#ef4444]">*</span></label>
                <textarea wire:model="message" id="message" rows="6" class="w-full border border-primary-blue rounded px-[15px] px-[24px] py-[9px] text-[18px] lg:text-[24px] @error('message') border-[#ef4444] @enderror"></textarea>
                @error('message') <span class="text-primary-black text-[14px] lg:text-[18px] text-right">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <div class="mt-[20px] flex items-center justify-center mb-[30px] lg:mb-[60px]">
        <label class="flex items-center">
            <input type="checkbox" wire:model="terms" class="mr-[10px]">
            <span class="text-[14px] lg:text-[18px]">{{ __('form.terms') }} <a href="" class="text-[#ef4444] underline">{{ __('form.terms.link') }}</a>.</span>
        </label>
        @error('terms') <span class="block text-primary-black text-[14px] lg:text-[18px] text-center">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="lg:text-[24px] text-[18px] text-black font-semibold lg:py-[12px] py-[8px] lg:px-[30px] px-[15px] bg-primary-yellow block w-fit hover:bg-primary-blue hover:text-white transition-colors duration-200 mx-auto">
        {{ __('form.submit') }}
    </button>
</form>

