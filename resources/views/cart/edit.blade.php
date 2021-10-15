
@extends('layouts.table')

@section('content')

<div class="container">
   



<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">واجهة التعديل </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" action="/cart/{{$cart->id}}">
                @csrf
				@method('PUT')
                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">اسم المنتج</label>
                      <input value="{{$cart->product_price}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="product_price">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">سعر المنتج</label>
                      <input value="{{$cart->product_name}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="product_name">
                    </div> 
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">الكمية</label>
                      <input value="{{$cart->Quantity}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="Quantity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">الصورة</label>
                      <input value="{{$cart->image}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="image">
                    </div>
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                </form>
              </div>
              </div>
              
@endsection