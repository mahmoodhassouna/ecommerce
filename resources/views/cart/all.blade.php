
    
   
    @extends('layouts.table')

@section('content')  
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">السلة</h3>
                  <div class="pull-right box-tools row">
                 المجموع : {{ $total_price}}$

                
              </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>الاسم</th>
                        <th>سعر الوحدة</th>
                      
                        <th>الكمية</th>
                        <th>الصورة</th>
                        <th></th>
                       
                       
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $c)
                    <tr>
                    <td>{{$c->product->name}}</td>
                        <td>${{$c->product->price}}</td>
                       
                        <td>{{$c->Quantity}}</td>
                        <td> <img src="/{{$c->product->cover}}" alt=""height="50" style="width: 50px;"></td>
                        <td> <form method="post" action="/cart/{{$c->id}}">
           @csrf
           @method('DELETE')
     <button type="submit" onclick="return confirm('Are you sure to delete this course ?');" style="border: 0; background: none;">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </button>
  
    <a href="/cart/{{$c->id}}/edit"><i class="fa fa-edit"></i></a>
        
    </form></td>
                        
                      </tr>
                      @endforeach
                     
                    </tbody>
                  
                  </table>


                  <form id="data_form" method="post"action="/checkout">
                    @csrf
                    <input type="text" class="form-control col-3" id="exampleInputPassword1" placeholder="" name="address" required>
                    
                    <button type="submit" class="col-3" style="float: right;"><il class="fa fa-cart-plus"></il>checkout</button></p>
                  </form>
                </div>
               <!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
    
    @endsection
    