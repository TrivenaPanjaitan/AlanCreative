@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8" id="list-produk">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            @foreach ($productlist as $product)
                                <button class="card col-3 p-0 my-2 mx-3" style="">
                                    <img class="card-img-top p-0 m-0" src="{{ Storage::url($product->picture) }}"
                                        alt="{{ $product->name }}" style="height: 80px">
                                    <div class="card-body p-0 m-auto overflow-hidden" style="height: 1.3rem">
                                        <h5 class="card-title ps-6">{{ $product->name }}
                                        </h5>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            @foreach ($category as $ct)
                                <button class="card col-9 p-0 my-2" style="">
                                    <img class="card-img-top p-0 m-0" src="{{ Storage::url($ct->picture) }}"
                                        alt="{{ $ct->category }}" style="height: 80px">
                                    <div class="card-body p-0 m-auto overflow-hidden" style="height: 1.3rem">
                                        <h5 class="card-title ps-6">{{ $ct->category }}</h5>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="bill">
                <div id="header-bill" class="d-flex justify-content-between mb-2">
                    <h2 class="my-auto p-2 h-100 bg-primary"><i class="bi bi-person-circle"></i></h2>
                    <h2 class="text-center p-2 bg-secondary my-auto  w-100 h-100">New Customer</h2>
                    <h2 class="my-auto p-2 h-100 bg-primary"><i class="bi bi-list-ul"></i></h2>
                </div>
                <div class="">
                    <h5 class="text-center ps-6" style="font-size: 14px">Dine in
                        <a href="#">
                            <i class="bi bi-chevron-down"></i>
                        </a>
                    </h5>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-7">
                        <h5 class="text-primary" style="font-size: 14px">1</h5>
                        @foreach ($billdetails as $bd)
                            <p>{{ $bd->name }}</p>
                        @endforeach
                        <p>Sub Total:</p>
                        <p>Total:</p>
                    </div>
                    <div class="col-1">
                        <h5 style="font-size: 14px"><br></h5>
                        @foreach ($billdetails as $bd)
                            @if ($bd->qty == 1)
                                <p><br></p>
                            @else
                                <p>x{{ $bd->qty }}</p>
                            @endif
                        @endforeach
                    </div>

                    <div class="col-4">
                        <h5 class="text-primary" style="font-size: 14px">View Table</h5>
                        @foreach ($billdetails as $bd)
                            <p>Rp {{ $bd->price }}</p>
                        @endforeach
                        @foreach ($bill as $bills)
                            <p>Rp {{ $bills->subtotal }}</p>
                            <p>Rp {{ $bills->total }}</p>
                        @endforeach
                    </div>
                    <hr>
                </div>
                <div class="text-center">
                    <button class="btn my-0 py-0">Clear Sale</button>
                    <hr>
                </div>
                <div class="row mt-4 text-center">
                    <div class="col-6 mx-0">
                        <div class="row">
                            <button class="btn btn-info col-12 py-2 mx-0">
                                <h5>Save Bill</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-6 mx-0">
                        <div class="row">
                            <button class="btn btn-info col-12 py-2 mx-0">
                                <h5>Print Bill</h5>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <button class="btn btn-primary col-2 py-2"></button>
                    <button class="btn btn-primary col-10 py-2">
                        <h4>Charge Rp 104.000</h4>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
