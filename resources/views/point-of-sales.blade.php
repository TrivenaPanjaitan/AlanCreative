@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8" id="productlist">
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
            @foreach ($bill as $bills)
                <input id="billtotal" name="billtotal" value="{{ $bills->total }}" style="display: none">
            @endforeach
            <div class="col-md-4">
                <div class="row">
                    <iframe id="frameBill" name="frameBill" src="/bill" class="mx-0 px-0"
                        style="width:100%; height:29.60em"></iframe>
                </div>

                <div class="text-center">
                    <button class="btn my-0 py-0">Clear Sale</button>
                    <hr />
                </div>

                <div id="save-print-charge"></div>
            </div>
        </div>
    @endsection
