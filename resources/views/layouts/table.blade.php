@extends('layouts.site')
@section('content')
    <div class="box">

        <div class="box-body">
            <br>
            <h4> Total amount:   {{$total_price=\App\Cart::where('customer_id' ,  Auth::id())->sum('total_price')}} $</h4>
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>

                    <th>Total</th>
                    <th>Action</th>


                </tr>
                </thead>
                <tbody>
                @foreach($cart as $c)
                    <tr>
                        <td>{{returnproductname($c->product_id)}}</td>
                        <td>${{$c->price}}</td>

                        <td>{{$c->Quantity}}</td>
                        <td>{{$c->total_price}}</td>
                        <td><form method="post" action="/cart/{{$c->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure to delete this product ?');" style="border: 0; background: none;">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>



                            </form></td>


                    </tr>
                @endforeach

                </tbody>

            </table>



            <form id="data_form" method="post"action="/checkout">
                @csrf
{{--                <input type="text" class="form-control col-3" id="exampleInputPassword1" placeholder="" name="address" required>--}}

                <button type="submit" class="col-3" style="float: right;"><il class="fa fa-cart-plus"></il><a target="_blank" href="https://www.paypal.com/il/signin?locale.x=en_IL">checkout</a></button></p>
            </form>
            <br><br>
        </div>
        <!-- /.box-body -->
    </div><!-- /.box -->
    </div><!-- /.col -->
    </div><!-- /.row -->

@stop

