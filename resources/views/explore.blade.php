@extends('layouts.main-layout')

@section('content')
<br><br><br><br>

<div class="catalog-wrapper">
    <marquee behavior="smooth" direction="left">
    <div class="babay-class-container-md1">
        <a href="/explore">All</a>
        @foreach($categories as $category)
        <a href="/category/{{$category->category_name}}">{{$category->category_name}}</a>
        @endforeach
        <!-- <a href="#">Babies Fashion</a>
        <a href="#">Bags</a>
        <a href="#">Beauty & Personal Care</a>
        <a href="#">Books</a>
        <a href="#">Computers</a>
        <a href="#">Electronics</a>
        <a href="#">Ladies Fashion</a>
        <a href="#">Men's Fashions</a>
        <a href="#">Home & Kitchen</a>
        <a href="#">Shoes</a>
        <a href="#">Spare Parts</a>
        <a href="#">Sports & Outdoors</a>
        <a href="#">Software</a> -->
    </div>
    </marquee>
</div>
<div class="median-container-flip">
    <h1 id="all-category-wrapp"><a href="#"><strong>All Categories</strong></a></h1>
    <button class="cart-viewer"><a href="/my-carts"><i class="fa fa-shopping-cart"></i> <span>{{count($carts)}}</span>  </a></button>
    <div class="media-view-container">
        @foreach($exploreAllProducts as $allproduct)
        <div class="single-looper">
            <div class="minor-component">
                <a href="/explore-single/{{$allproduct->product_name}}"><img src="{{asset('storage/' . $allproduct->pictures1)}}" alt="Image" loading="lazy"></a>
                <button class="quick-look-eye"><a href="/explore-single/{{$allproduct->product_name}}"><i class="fa fa-eye"></i> Click To View {{$allproduct->product_name}}</a></button>
                <br>
                <div class="lower-section-mid">
                    <div class="upper-wrapper">
                        @if($allproduct->discount != '')
                        <span class="discount-viewer">
                            Deals | {{$allproduct->discount}}
                        </span>
                        @endif
                        <span class="product-name">
                            {{$allproduct->product_name}}
                        </span>
                        <span class="add-cart"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                    <span class="left-items">Only {{$allproduct->quantity}} left</span><br>
                    @if($nowDate == $allproduct->updated_at->format('Y-m-d'))
                    <span class="new-arrival">New Arrivals</span>
                    @endif
                    <br>
                    <div class="mid-bottom-viewer">
                        <span class="price-viewer">Tsh {{number_format($allproduct->unit_price,2)}}</span>
                        <span class="rate-product"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i></span>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <br><br>
    <center>
    <button class="view-all-products"><a href="/all-products"><i class="fa fa-eye"></i> View All</a></button>
    <div class="paginate-builder">
        {{$exploreAllProducts->links()}}
    </div>
    </center>

    <br>
    <div class="mi-level-class">
        <h1 id="all-category-wrapp"><a href="#"><strong>Baby's Fashions</strong></a></h1>
        <div class="baby-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 1)
            <div class="single-loop-container">
                <button class="prev" onclick="chaneSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="next" onclick="chaneSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>


    <div class="main-bag-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Bags</strong></a></h1>
        <div class="bag-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 2)
            <div class="bag-looper-container">
                <button class="previ" onclick="changeBagSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nexti" onclick="changeBagSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>

    <div class="main-beauty-care-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Beauty & Personal Care</strong></a></h1>
        <div class="beauty-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 3)
            <div class="care-looper-container">
                <button class="previ" onclick="changeBagSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nexti" onclick="changeBagSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>

    <div class="main-books-wrapper">
        <h1 id="all-category-wrapp"><a href="#"><strong>Books</strong></a></h1>
        <div class="book-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 4)
            <div class="book-looper-container">
                <button class="previ" onclick="changeCoSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nexti" onclick="changeCoSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>


    <div class="main-level-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Computers</strong></a></h1>
        <div class="comp-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 5)
            <div class="comp-looper-container">
                <button class="previ" onclick="changeCoSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nexti" onclick="changeCoSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>


    <div class="min-level-comp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Electronics</strong></a></h1>
        <div class="electronics-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 6)
            <div class="electr-looper-container">
                <button class="previ" onclick="changeToSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nexti" onclick="changeToSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>


    <div class="main-ladies-fash-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Ladie's Fashion</strong></a></h1>
        <div class="lady-fash-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 7)
            <div class="lady-fash-looper-container">
                <button class="previous" onclick="changeToSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nextious" onclick="changeToSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>

    <div class="main-men-fash-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Men's Fashion</strong></a></h1>
        <div class="men-fash-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 8)
            <div class="men-fash-looper-container">
                <button class="previous" onclick="changeMenSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nextious" onclick="changeMenSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>

    <div class="main-kitchen-home-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Kitchenware</strong></a></h1>
        <div class="kitc-hom-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 9)
            <div class="kitc-hom-looper-container">
                <button class="previous" onclick="changeKitSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nextious" onclick="changeKitSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>
    <div class="main-shoes-all-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Shoes</strong></a></h1>
        <div class="shoes-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 10)
            <div class="shoes-looper-container">
                <button class="previous" onclick="changeshoeSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nextious" onclick="changeshoeSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>
    
    <div class="main-spare-part-wrapp">
        <h1 id="all-category-wrapp"><a href="#"><strong>Spare Parts</strong></a></h1>
        <div class="spare-part-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 11)
            <div class="spare-looper-container">
                <button class="previous" onclick="changeshoeSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nextious" onclick="changeshoeSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>

    <div class="main-sports-outdoor-wrapper">
        <h1 id="all-category-wrapp"><a href="#"><strong>Spare Parts</strong></a></h1>
        <div class="sport-outdoor-category-container">
            @foreach($allproducts as $product)
            @if($product->category == 12)
            <div class="sportoutdoor-looper-container">
                <button class="previous" onclick="changeshoeSlide(-1)"><i class="fa fa-angle-left"></i></button>
                <button class="nextious" onclick="changeshoeSlide(1)"><i class="fa fa-angle-right"></i></button>
                <section>
                    <img src="{{asset('storage/' . $product->pictures1)}}" alt="Image">
                    <div class="mid-bottom-viewer" style="margin-top:3%;">
                        <span class="product-name">{{$product->product_name}}</span>
                        <span class="rate-product"><a href="/read-more/{{$product->id}}">Read &#8594;</a></span>
                    </div>
                </section>
            </div>
            @endif
            @endforeach
            <br><br><br>
        </div>
    </div>
<br><br>
@stop