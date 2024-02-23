@extends('layouts.app')

@section('title', 'The Magical World Of Aromatic Tea')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex justify-between items-center gap-9 py-40">
                <div class="flex flex-col gap-12">
                    <div class="button-main justify-center items-center text-center mb-20">
                        <a class="button px-10 text-xl" href="#">Catalog</a>
                    </div>
                    <div class="flex gap-7 items-center justify-center">
                        <h1 class="text-7xl w-1/2">The Magical World Of Aromatic Tea</h1>
                        <p class="uppercase w-1/6 text-xs">Discover new flavors, relax and enjoy the aroma of tea with us.
                            Tea is more than a drink, is it a way to enjoy washing, and we are always ready to give you this joy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="py-24 bg-gray-800">
            <div class="flex justify-center items-center gap-7">
                <div class="flex items-start flex-col gap-12 w-8/12 ">
                    <div class="container flex flex-col gap-12 text-left">
                        <h1 class="text-5xl">About Us</h1>
                        <p class="text-xl text-left leading-relaxed">
                            China is the birthplace of tea and the cultural traditions associated
                            with drinking the tea leaf beverage. The custom of drinking tea in
                            China dates back more than a thousand years. Tea drinking keeps the
                            body invigorated and energized. Those tea products that you can buy
                            on the market or in the supermarket are only remotely related to real tea.
                            We sell affordable teas grown in the ecologically pure areas of mountainous
                            China. The foothills of Tibet with their subtropical and humid climate
                            are ideal for growing tea. Only here do tea bushes reach the size of
                            trees and live for hundreds of years. The buds and leaves of tea contain
                            the life energy "shen qi". Its concentrate in the form of a tea leaf drink
                            will fully reveal its properties to those who know how to brew Chinese tea properly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="py-24 bg-gray-800">
            <div class="flex flex-col justify-center items-center gap-7">
                <div class="container flex items-center justify-between">
                    <h1 class="text-5xl pb-10">Catalog</h1>
                    <a href="catalog.php" class="uppercase border-b">View All</a>
                </div>
                <div class="grid grid-cols-3 gap-24">
                    <a href="#" class="card">
                        <img src="/public/assets/images/catalog-1.jpg" alt="">
                        <p class="text-lg uppercase">White Tea</p>
                    </a>
                    <a href="#" class="card">
                        <img src="/public/assets/images/catalog-2.jpg" alt="">
                        <p class="text-lg uppercase">Black Tea</p>
                    </a>
                    <a href="#" class="card">
                        <img src="/public/assets/images/catalog-3.jpg" alt="">
                        <p class="text-lg uppercase">Green Tea</p>
                    </a>
                    <a href="#" class="card">
                        <img src="/public/assets/images/catalog-4.jpg" alt="">
                        <p class="text-lg uppercase">Red Tea</p>
                    </a>
                    <a href="#" class="card">
                        <img src="/public/assets/images/catalog-5.jpg" alt="">
                        <p class="text-lg uppercase">Puer</p>
                    </a>
                    <a href="#" class="card">
                        <img src="/public/assets/images/catalog-6.jpg" alt="">
                        <p class="text-lg uppercase">Yellow Tea</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
