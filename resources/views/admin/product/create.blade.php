@extends('admin.layouts.master')

@section('title', '新增文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增商品 <small>請輸入新增的商品內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 商品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>  <strong>警告！</strong> 請確認新增內容：
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/product/store" method="POST" role="form">
            @method('POST')
            @csrf
            <!--名稱-->
                <div class="form-group">
                    <label for="name">產品名稱：</label>
                    <input id="name" name="name" class="form-control" placeholder="請輸入產品名稱">
                </div>
                <!--類型-->
                <div class="form-group">
                    <label for="ctg">類型：</label>
                    <select id="ctg" name="ctg" class="form-control" >
                        <option value="一般水壺">一般水壺</option>
                        <option value="運動水壺">運動水壺</option>
                        <option value="保溫杯">保溫杯</option>
                        <option value="太空壺">太空壺</option>
                    </select>
                </div>
                <!--價格-->
                <div class="form-group">
                    <label for="price">價格：</label>
                    <input id="price" name="price" class="form-control" placeholder="請輸入商品價格" >
                </div>
                <!--庫存量-->
                <div class="form-group">
                    <label for="invt">庫存量：</label>
                    <input id="invt" name="invt" class="form-control" placeholder="請輸入庫存量" >
                </div>
                <!--顏色-->
                <div class="form-group">
                    <label for="capacity">顏色：</label>
                    <input id="color" name="color" class="form-control" placeholder="請輸入產品顏色" >
                </div>
                <!--圖片位置-->
                <div class="form-group">
                    <label for="capacity">圖片位置：</label>
                    <input id="image" name="image" class="form-control" placeholder="請輸入產品圖片位置" >
                </div>
                <!--狀態-->
                <div class="form-group">
                    <label for="status">狀態：</label>
                    <select id="status" name="status" class="form-control" >
                        <option value="已上架">已上架</option>
                        <option value="未上架">未上架</option>
                    </select>
                </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
