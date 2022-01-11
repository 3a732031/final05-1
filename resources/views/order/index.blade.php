@extends('layouts.master')

@section('title','訂單紀錄')

@section('content')

    <!-- Page Header -->
    <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto">
                    <div class="page-heading">
                        <br><h2 style="color: black">訂單紀錄</h2>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">

                @csrf
                @if(count($orders)>0)

                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="15%" style="text-align: center">訂單編號</th>
                            <th width="20%" style="text-align: center">訂單時間</th>
                            <th width="25%" style="text-align: center">總金額</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)

                            <tr>
                                <td style="text-align: center">
                                    {{$order->id}}
                                </td>
                                <td style="text-align: center">
                                    {{$order->date}}<br>
                                </td>
                                <td style="text-align: center">
                                    {{($order->sum)}}
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                @else
                    <div style="text-align: center">
                        <div class="title-box">
                            <h2>您尚未訂購過任何商品</h2>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <br><br><br><br><br>
@endsection
