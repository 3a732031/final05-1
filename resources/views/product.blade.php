
@extends('layouts.master')
@section('content')
    <!-- Section-->

    <section class="py-5 bg-3">

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @foreach ($product as $products)
                    @if($products->status=='已上架')
                    <div class="col mb-5">
                        <div class="card h-100  bg-4">
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
                    @endif
                @endforeach

            </div>
        </div>
        <div class="pagination justify-content-center">
            {{$product->links()}}
        </div>
    </section>



@endsection
