@extends('layouts.master')

@section('title','結帳')

@section('content')

    <!-- Page Header -->
    <header class="masthead" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto">
                    <div class="page-heading">
                        <br><h2 style="color: black">結帳</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">

                <form action="/cart/clear" method="post" role="form">
                    @method('POST')
                    @csrf

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="10%" style="text-align: center">圖片</th>
                            <th width="30%" style="text-align: center">名稱</th>
                            <th width="10%" style="text-align: center">價格</th>
                            <th width="10%" style="text-align: center">數量</th>
                            <th width="10%" style="text-align: center">小計</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($carts as $cart)
                            <br>
                            <tr>
                                <td style="text-align: center;line-height:100px;vertical-align: middle">
                                    <img class="" src="{{ url($cart->image) }}" style="width:100px;height:100px" >&nbsp&nbsp
                                </td>
                                <td style="text-align: center;line-height:100px;">
                                    {{$cart->name}}
                                </td>
                                <td style="text-align: center;line-height:100px;">
                                    ${{$cart->price}}
                                </td>
                                <td style="text-align: center;vertical-align: middle">
                                    {{$cart->amount}}
                                </td>
                                <td style="text-align: center;vertical-align: middle">
                                    ${{($cart->amount)*($cart->price)}}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div style="text-align:right">
                        <b>總計：<u>${{$total}}</u></b>
                    </div>
                    <BR>

                    <div style="text-align:center">
                        <a class="btn btn-sm btn-primary" href="{{route('cart.end')}}">送出訂單</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<br><br>
@endsection
