@extends('layout.master')
@section('title')


     Best Marketer | Home

    @endsection
@section('styles')
    <style>
        .quantity {
            float: left;
            margin-right: 15px;
            background-color: #eee;
            position: relative;
            width: 80px;
            overflow: hidden
        }

        .quantity input {
            margin: 0;
            text-align: center;
            width: 15px;
            height: 15px;
            padding: 0;
            float: right;
            color: #000;
            font-size: 20px;
            border: 0;
            outline: 0;
            background-color: #F6F6F6
        }

        .quantity input.qty {
            position: relative;
            border: 0;
            width: 100%;
            height: 40px;
            padding: 10px 25px 10px 10px;
            text-align: center;
            font-weight: 400;
            font-size: 15px;
            border-radius: 0;
            background-clip: padding-box
        }

        .quantity .minus, .quantity .plus {
            line-height: 0;
            background-clip: padding-box;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-background-size: 6px 30px;
            -moz-background-size: 6px 30px;
            color: #bbb;
            font-size: 20px;
            position: absolute;
            height: 50%;
            border: 0;
            right: 0;
            padding: 0;
            width: 25px;
            z-index: 3
        }

        .quantity .minus:hover, .quantity .plus:hover {
            background-color: #dad8da
        }

        .quantity .minus {
            bottom: 0
        }
        .shopping-cart {
            margin-top: 20px;
        }
    </style>
    @endsection

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-responsive" src="{{asset('images/image1.jpg')}}" alt="prewiew" width="120" height="80">
        </div>
        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h4 class="product-name"><strong>Bajaj</strong></h4>
            <h4>
                <small>5000 km</small><br>
                <small>Colombo</small>
            </h4>
        </div>
        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                <h6><strong>Rs 150000</strong></h6>
            </div>

            <div class="col-2 col-sm-2 col-md-2 text-right">
                <button type="button" class="btn btn-success">
                    Buy me
                </button>
            </div>
        </div>
    </div>
    <hr>
    <!-- END PRODUCT -->
    <!-- PRODUCT -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-responsive" src="{{asset('images/image2.jpg')}}" alt="prewiew" width="120" height="80">
        </div>
        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h4 class="product-name"><strong>Honda</strong></h4>
            <h4>
                <small>5000 km</small><br>
                <small>Galle</small>
            </h4>
        </div>
        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                <h6><strong>Rs 150000</strong></h6>
            </div>

            <div class="col-2 col-sm-2 col-md-2 text-right">
                <button type="button" class="btn btn-success">Buy me</button>
            </div>
        </div>
    </div>
    <hr>
    <!-- END PRODUCT -->
    <div class="row" style="margin-top: 20px;">
        <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-responsive" src="{{asset('images/image1.jpg')}}" alt="prewiew" width="120" height="80">
        </div>
        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h4 class="product-name"><strong>Bajaj</strong></h4>
            <h4>
                <small>5000 km</small><br>
                <small>Colombo</small>
            </h4>
        </div>
        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                <h6><strong>Rs 150000</strong></h6>
            </div>

            <div class="col-2 col-sm-2 col-md-2 text-right">
                <button type="button" class="btn btn-success">
                    Buy me
                </button>
            </div>
        </div>
    </div>
    <hr>
    <!-- END PRODUCT -->
    <!-- PRODUCT -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-responsive" src="{{asset('images/image2.jpg')}}" alt="prewiew" width="120" height="80">
        </div>
        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h4 class="product-name"><strong>Honda</strong></h4>
            <h4>
                <small>5000 km</small><br>
                <small>Galle</small>
            </h4>
        </div>
        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                <h6><strong>Rs 150000</strong></h6>
            </div>

            <div class="col-2 col-sm-2 col-md-2 text-right">
                <button type="button" class="btn btn-success">
                    Buy me
                </button>
            </div>
        </div>
    </div>
    <hr>
    <!-- END PRODUCT -->
    <div class="row" style="margin-top: 20px;">
        <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-responsive" src="{{asset('images/image1.jpg')}}" alt="prewiew" width="120" height="80">
        </div>
        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h4 class="product-name"><strong>Bajaj</strong></h4>
            <h4>
                <small>5000 km</small><br>
                <small>Colombo</small>
            </h4>
        </div>
        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                <h6><strong>Rs 150000</strong></h6>
            </div>

            <div class="col-2 col-sm-2 col-md-2 text-right">
                <button type="button" class="btn btn-success">
                    Buy me
                </button>
            </div>
        </div>
    </div>
    <hr>
    <!-- END PRODUCT -->
    <!-- PRODUCT -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-responsive" src="{{asset('images/image1.jpg')}}" alt="prewiew" width="120" height="80">
        </div>
        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h4 class="product-name"><strong>Honda</strong></h4>
            <h4>
                <small>5000 km</small><br>
                <small>Galle</small>
            </h4>
        </div>
        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                <h6><strong>Rs 150000</strong></h6>
            </div>

            <div class="col-2 col-sm-2 col-md-2 text-right">
                <button type="button" class="btn btn-success">
                    Buy me
                </button>
            </div>
        </div>
    </div>
    <hr>
    <!-- END PRODUCT -->
@endsection