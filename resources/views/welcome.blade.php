<x-app-layout>
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 ">

            <div class="flex justify-center md:justify-end text-6xl ">
                <img src="{{ asset('images/image1.webp') }}" class="max-w-sm w-9/12 " alt="">
            </div>

            <div class="flex justify-center md:justify-start md:order-first items-center ">

                <div class="flex-col items-center text-center md:text-start pt-5 pb-10 px-2">




                    <h2 class="text-6xl mt-10 font-bold dark:text-white">{{ __('ক্যানভা প্রো কিনুন ') }}
                    </h2>
                    <p class="text-base ml-1 text-gray-900 dark:text-white">
                        {{ __('মাত্র ৩৫ টাকা') }}
                    </p>
                    <div class="rating text-yellow-500 my-2 ">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= 4)
                                <x-svg.star-solid class="w-4 h-4 inline" />
                            @else
                                <x-svg.star-outlined class="w-4 h-4 inline" />
                            @endif
                        @endfor
                        <span
                            class="bg-blue-100 text-blue-800 text-xs  px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">{{ round(4, 2) }}</span>

                        <a href="#"
                            class="ml-3 text-sm font-medium text-primary-600 hover:text-primary-500">{{ 4 }}
                            {{ __('Reviews') }}</a>
                    </div>


                    <button
                        class="mt-2 border shadow-lg border-primary-500 rounded px-10 py-2 hover:bg-primary-400 hover:text-white inline-flex gap-2">
                        <x-svg.cart class="w-5 h-5" />{{ __('কিনুন') }}</button>





                </div>



            </div>


        </div>
    </div>

    <section class="container mx-auto px-2">

        <div class="mt-5 border-t border-b dark:border-gray-700 py-2">
            <div class="grid grid-cols-2 gap-1 md:block md:space-y-1">

                <a type="button" href="#description"
                    class="rounded border dark:border-gray-700 hover:bg-orange-400 dark:hover:bg-orange-500 hover:text-white dark:hover:text-white  px-4 py-1.5 bg-white dark:bg-gray-800 inline-block shadow transition-all font-medium text-sm text-gray-700 dark:text-gray-200">
                    {{ __('Description') }}
                </a>
                <a type="button" href="#reviews"
                    class="rounded border dark:border-gray-700 hover:bg-orange-400 dark:hover:bg-orange-500 hover:text-white dark:hover:text-white  px-4 py-1.5 bg-white dark:bg-gray-800 inline-block shadow transition-all font-medium text-sm text-gray-700 dark:text-gray-200">
                    {{ __('Reviews') }}
                </a>




            </div>

        </div>

        <div class="my-6 space-y-8 ">
            <div id="description">
                <h4 class="text-base font-bold">{{ __('Description') }}</h4>
                <div class="format   dark:format-invert max-w-none format-a:text-blue-600 ">

                    {!! $product->long_description !!}
                </div>
            </div>
            <div id="reviews">
                <livewire:shop.product-reviews :product="$product" />
            </div>


        </div>

    </section>


</x-app-layout>
