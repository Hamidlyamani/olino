@extends('master')
@section('main')
    <section class="shop_section layout_padding">
        <div class="container">
    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
            <div class="row">

                <x-product :products="$products" />



            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-2 py-4">

                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </section>
@endsection
