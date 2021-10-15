<div class="latest-products">
    <div class="container">
        <div class="row">
            @foreach($product as $product)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="/product/{{$product->id}}"><span class=""><img src="{{$product->cover}}"width="100%" height="172"/></span></a>
                        <div class="down-content">
                            <h4>{{$product->name}}</h4>
                            <h6>${{$product->price}}</h6>
                        <!-- <p>{{$product->desc}}</p> -->
                            <form id="data_form" method="post"action="/cart">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}"/>
                                <p><input type="number" id="pin" min="1"style="width: 3em"placeholder="الكمية"name="Quantity"
                                          value="1">
                                    <button type="submit" style="float: right;" ><il class="fa fa-cart-plus"></il> </button></p>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
