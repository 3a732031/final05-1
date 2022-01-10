@extends('layouts.master')
@section('content')
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form action="/cart/store" method="post">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="users_id" value="{{$name}}">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="10%" style="text-align: center">圖片</th>
                            <th width="10%" style="text-align: center">名稱</th>
                            <th width="10%" style="text-align: center">價格</th>
                            <th width="10%" style="text-align: center">類型</th>
                            <th width="10%" style="text-align: center">數量</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($product as $product)
                            <tr>
                                <td style="text-align: center;line-height:100px;">
                                    <img class="" src="{{ url($product->image) }}" style="width:100px;height:100px" >&nbsp&nbsp
                                </td>
                                <td style="text-align: center;line-height:100px; width: 30%;">
                                    {{$product->name}}
                                </td>
                                <td style="text-align: center;line-height:100px;">
                                    ${{$product->price}}
                                </td>
                                <td style="text-align: center;line-height:100px;">
                                    {{$product->ctg}}
                                </td>
                                <td style="text-align: center;vertical-align: middle;">
                                    <input style="width: 50%;" type="number" name="amount" min="1" max="99" value="1">
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div style="text-align:center">
                        <a class="btn btn-sm btn-danger" href="{{route('product')}}">取消</a>
                        &emsp;&emsp;<button type="submit" class="btn btn-sm btn-primary" name="products_id" value="{{$product->id}}">加入購物車</button>
                    </div>
</form>
            </div>
        </div>
    </div>
<br><br><br><br>
@endsection
