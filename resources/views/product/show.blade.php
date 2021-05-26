@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper card">
            <div class="row mx-1 mx-lg-5">
                <div class="col-12 col-lg-4">
                    <img src="{{ asset($product->image ?? 'img/product_img.png') }}" style="max-width: inherit" alt="">
{{--                    TODO: Move element style to css--}}
                </div>
                <div class="col-12 col-lg-8">
                    <h2 class="m-lg-3">{{ $product->name }}</h2>
                    <div class="my-lg-3">{{--  Spacer  --}}&nbsp;&nbsp;</div>
                    <x-table.details class="m-1 m-lg-4"
                                     tdClass="p-1 px-3"
                                     :model="$product"
                                     :properties="[
                                     'brand',
                                     'price',
                                     'Stock' => 'in_stock', //Remap a name, so it's not just title case of the property
                                     'description'
                                    ]"
                    />
                    <a href="{{ route('order.create', [$product]) }}" class="btn btn-success">Place order</a>
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('product.edit', [$product]) }}" class="btn btn-warning">Edit</a>
                        <x-button.magic class="btn btn-danger" :route="route('product.destroy', [$product])" method="delete" confirm="Are you sure you wish to delete this item?">Delete</x-button.magic>
                    @endif
                </div>
            </div>
            <div class="row mx-1 mx-lg-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad dignissimos dolore error et, facere maiores nesciunt nulla possimus quam rem! Ad blanditiis dolorem earum ex possimus sapiente veritatis.
            </div>
        </div>
    </div>
@endsection
