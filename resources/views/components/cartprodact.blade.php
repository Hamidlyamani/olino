
    <div class="item1" data-item-id="{{ $prodects->product['id']  }}">
        <div class="close1">
            <!-- Remove-Item -->
            <div class="alert-close1"> <i class="fa-solid fa-xmark"></i></div>
            <!-- //Remove-Item -->
            <div class="image1">
                <img src="images/{{$prodects->product['image_name'] }}" alt="item1">
            </div>
            <div class="title1">
                <p>{{$prodects->product['name'] }}</i></p>
            </div>
            <div class="quantity1">
                {{$prodects['quantity'] }}
                
            </div>
            <div class="price1">
                <p>{{$prodects->product['price'] }} </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

