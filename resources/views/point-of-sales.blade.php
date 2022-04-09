@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8" id="list-produk">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            @foreach ($productlist as $product)
                                <div class="card col-3 p-0 my-2 mx-3 text-center" style="">
                                    <img class="card-img-top p-0 m-0" src="{{ Storage::url($product->picture) }}"
                                        alt="{{ $product->name }}" style="height: 80px">
                                    <div class="card-body p-0 overflow-hidden" style="height: 1.3rem">
                                        <h5 class="card-title ps-6">{{ $product->name }}
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            @foreach ($category as $ct)
                                <div class="card col-9 p-0 my-2 text-center" style="">
                                    <img class="card-img-top p-0 m-0" src="{{ Storage::url($ct->picture) }}"
                                        alt="{{ $ct->category }}" style="height: 80px">
                                    <div class="card-body p-0 overflow-hidden" style="height: 1.3rem">
                                        <h5 class="card-title ps-6">{{ $ct->category }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="bill">
                <div id="header-bill">
                    <h2 class="text-center">New Customer</h2>
                </div>
                <div class="">
                    <h5 class="text-center">Dine in</h5>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-7">
                        <h5>1</h5>
                        <p>Cah Tauge</p>
                        <p>Gurame Asam Manis</p>
                        <p>Nasi Putih</p>
                        <p>Es Jeruk Nipis</p>
                        <p>Sub Total:</p>
                        <p>Total:</p>
                    </div>
                    <div class="col-1">
                        <h5><br></h5>
                        <p><br></p>
                        <p><br></p>
                        <p>x2</p>
                        <p>x2</p>
                        <p><br></p>
                        <p><br></p>
                    </div>

                    <div class="col-4">
                        <h5>View Table</h5>
                        <p>Rp 15.000</p>
                        <p>Rp 69.000</p>
                        <p>Rp 0</p>
                        <p>Rp 20.000</p>
                        <P>Rp 104.000</P>
                        <p>Rp 104.000</p>
                    </div>
                    <hr>
                </div>
                <div class="mb-5">
                    <p class="text-center">Clear Sale</p>
                    <hr>
                </div>
                <div class="row text-center">
                    <div class="col-6 mx-0">
                        <div class="row">
                            <button class="col-12 py-2 mx-0">
                                <h5>Save Bill</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-6 mx-0">
                        <div class="row">
                            <button class="col-12 py-2 mx-0">
                                <h5>Print Bill</h5>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <button class="col-2 py-2"></button>
                    <button class="col-10 py-2">
                        <h4>Charge Rp 104.000</h4>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
