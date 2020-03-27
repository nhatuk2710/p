@extends('admin.layout')
<div id="page-wrapper" class="col-lg-6">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sua Thong tin</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <a href="#">Dashboard</a>
                </ol>
            </div>
            <form action="{{url("admin/category/update",['id',$category->id])}}" method="post">
                @csrf
                <div class="form-group has-success">
                    <label for="ec-name" class="control-label"><p>Sua Danh Muc</p></label>
                    <input id="ec-name" name="category_name" type="text" value="{{$category->category_name}}"
                           class="form-control ec-name @if($errors->has("category_name"))is-invalid @endif">
                    <span class="help-block field-validation-valid"></span>
                    @if($errors->has("category_name"))
                        <p style="color:red">{{$errors->first("category_name")}}</p>
                    @endif
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">Gửi đi</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
