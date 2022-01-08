
@extends('layouts.master')
@section('content')
<!-- Header-->
<header class="bg-5 py-5"><!--顏色-->
    <div class="container px-4 px-lg-5 my-5" >
        <div class="text-center ">
            <h1 class="display-4 fw-bolder">時尚拿著走-水壺購物網</h1>
            <p class="lead fw-normal  mb-0">「水壺」不單單只是裝水的容器而已，也是你生活中的一個小配件、時尚單品!</p>
        </div>
    </div>
</header>
<!-- Section-->

<section class="py-5">

    <div class="container px-4 px-lg-5 mt-5">

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($product as $products)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="images/{{$products->image}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$products->name}}</h5>
                            <!-- Product price-->
                            ${{$products->price}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">詳細內容</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection


