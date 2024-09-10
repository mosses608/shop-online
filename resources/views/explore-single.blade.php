@extends('layouts.main-layout')

@section('content')
<br><br><br><br>

<div class="left-block-builder">
    <div class="header-links">
        <a href="/explore">Home <i class="fa fa-angle-right"></i></a>
        <a href="#">
            @foreach($categories as $category)
            @if($category->id == $allproduct->category)
            {{$category->category_name}}
            @endif
            @endforeach
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="#">{{$allproduct->product_name}} <i class="fa fa-angle-right"></i></a>
        <a href="#">{{$allproduct->quantity}} Items</a>
    </div>
    <div class="main-body-container">
        <div class="left-side-mini-comp">
            <img src="{{asset('storage/' . $allproduct->pictures1)}}" alt="Image">
            @if($allproduct->pictures2)
            <img src="{{asset('storage/' . $allproduct->pictures2)}}" alt="Image">
            @endif
            @if($allproduct->pictures3 != '')
            <img src="{{asset('storage/' . $allproduct->pictures3)}}" alt="Image">
            @endif
            @if($allproduct->pictures4 != '')
            <video src="{{asset('storage/' . $allproduct->pictures4)}}"></video>
            @endif
        </div>
        <div class="right-mini-comp">
            <img src="{{asset('storage/' . $allproduct->pictures1)}}" alt="Image">
            @if($allproduct->pictures2)
            <img src="{{asset('storage/' . $allproduct->pictures2)}}" alt="Image">
            @endif
            @if($allproduct->pictures3 != '')
            <img src="{{asset('storage/' . $allproduct->pictures3)}}" alt="Image">
            @endif
        </div>
    </div>
</div>

<div class="right-side-bar-main">
    <div class="headet-describ">
        <span class="id-head"><i class="fa fa-check"></i> Free Shipping offer for you...</span>
        <span class="special-off">SpeciaL Offer</span><br><br>
    </div>
    <div class="minor-classic">
        <p>Product Id: <strong class="product-id">{{$allproduct->product_id}}</strong> <span class="copy-icon"><i class="fas fa-copy"></i></span></p>
        <p>Product Name: {{$allproduct->product_name}}</p>
        <p>Description: {{$allproduct->description}}</p>
        <p>Product Cost: <strong>Tsh {{number_format($allproduct->unit_price,2)}}/piece</strong></p>
    </div>
    <br>

    <form method="POST" action="/carts" class="main-viewer-imploder" id="main-viewer-imploder">
        @csrf
        <div class="popUp-Viewer">{{$allproduct->product_name}} <i class="fa fa-angle-down"></i></div>
        
        <div class="product-00">
            <img src="{{ asset('storage/' . $allproduct->pictures1) }}" alt="{{ $allproduct->product_name }}" 
            class="clickable-image" data-product-id="{{ $allproduct->product_id }}" data-image="{{ asset('storage/' . $allproduct->pictures1) }}" data-price="{{$allproduct->price}}">
        </div>
        
        <div class="product-00">
            <img src="{{ asset('storage/' . $allproduct->pictures2) }}" alt="{{ $allproduct->product_name }}" 
            class="clickable-image" data-product-id="{{ $allproduct->product_id }}" data-image="{{ asset('storage/' . $allproduct->pictures2) }}" data-price="{{$allproduct->price}}">
        </div>
        
        <div class="product-00">
            <img src="{{ asset('storage/' . $allproduct->pictures3) }}" alt="{{ $allproduct->product_name }}" 
            class="clickable-image" data-product-id="{{ $allproduct->product_id }}" data-image="{{ asset('storage/' . $allproduct->pictures3) }}" data-price="{{$allproduct->price}}">
        </div>

        <input type="hidden" name="customer_name" value="Mohammed" id="customer_name">
        <input type="hidden" name="product_id" value="{{$allproduct->product_id}}" id="productInput">
        <input type="hidden" name="selected_image" id="selectedImage">
        <input type="hidden" name="price" id="priceInput">

        <div class="slector-opt-v">
            <label for="">Quantity <span>(Only {{$allproduct->quantity}} available)</span></label><br>
            <select name="quantity" class="selector-quantity">
                @for ($i = 1; $i <= 100; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div><br>

        <center><button type="submit" class="submit-cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</button></center>
    </form>
</div>

<div class="line-breaker-comp">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<center>
    <div class="comment-body-min">
    <button class="comment-btn" onclick="showCommentForm(event)"><i class="fa fa-comments"></i> Leave Comment <i class="fa fa-angle-down"></i></button>
    <x-success_comment />
        <form action="/comments" method="POST" class="comment-wrapp hidden">
            @csrf
            <input type="hidden" name="product_id" id="" value="{{$allproduct->product_id}}">
            <input type="hidden" name="region" id="" value="Tanzania">
            <input type="hidden" name="profile" id="" value="">
            <label for="">Rate Product</label>
            <select name="rate" id="">
                <option value="">--rate this product--</option>
                @for($i=1; $i<=5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select><br>
            @error('rate')
            <span>{{ $message }}</span>
            @enderror
            <br>
            <label for="">Comment Product</label>
            <textarea name="comment" id="" placeholder="Leave a comment here!"></textarea><br>
            @error('comment')
            <span>{{ $message }}</span>
            <br>
            @enderror
            <button type="submit" class="submit-btn-comment"><i class="fa fa-paper-plane"></i> Send</button> 
            <button type="button" class="closeForm" onclick="closeForm(event)">&times;</button>
        </form>
        @foreach($comments as $comment)
        @if($comment->product_id == $allproduct->product_id)
        <div class="data-builder-main">
            <img src="{{asset('assets/images/profile.png')}}" alt="Image">
            <div class="data-holder">
                <p><strong>From:</strong> {{$comment->region}}</p><br>
                <p style="font-style:italic;"><strong>Comment:</strong> {{$comment->comment}}...</p><br>
                <p><strong>Date:</strong> {{$comment->created_at}}</p><br><br>
            </div>
            <br><br><br>
        </div>
        @endif
        @endforeach
    </div>
 
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            window.showCommentForm = function(event){
                event.preventDefault();
                const commentForm = document.querySelector('.comment-wrapp');
                commentForm.style.display='block';
            }

            window.closeForm = function(event){
                event.preventDefault();
                const commentForm = document.querySelector('.comment-wrapp');
                commentForm.style.display='none';
            }
        });
    </script>

    <div class="owner-container-ajax">
        <div class="image0-viewer"> 
            <img src="{{asset('assets/images/profile.png')}}" alt="Profile">
        </div>
        <div class="right-component">
            <h1>
                @foreach($users as $user)
                @if($user->id == $allproduct->company_id)
                {{$user->company_name}}
                @endif
                @endforeach
            </h1>
            <h2>{{__('100K Followers')}}</h2>
            <h3>
                @foreach($users as $user)
                @if($user->id == $allproduct->company_id)
                <p><i class="fa fa-phone" style="color:green;"></i> {{$user->contact}}</p>
                <p><i class="fa fa-map-marker" style="color:#0000FF;"></i> {{$user->region}}</p>
                @endif
                @endforeach
            </h3>
            <h4><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i></h4>
            <form action="/followers" method="POST" class="follow-account">
                @csrf
                <input type="hidden" name="account" id="" value="{{$allproduct->company_id}}">
                <input type="hidden" name="customer_email" id="" value="mohammeddungumalo@gmail.com">
                <button type="submit" class="submit-follower">Follow</button>
            </form>
            <br>
        </div>
    </div>
</center>
<div class="centered-ajaxowrapper">
<center><h1 class="latest-viewed-product">Latest Viewed Products</h1></center>
<br><br>
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
</div>

    <script>
        let exploreIndex = 0;
        exploreSlider();

        function exploreSlider(){
            let exploreSlides = document.querySelectorAll('.right-mini-comp img');
            for (let i = 0; i < exploreSlides.length; i++) {
                exploreSlides[i].style.display='none';
            }
            exploreIndex++;
            if(exploreIndex > exploreSlides.length){
                exploreIndex = 1;
            }
            exploreSlides[exploreIndex - 1].style.display='block';
            setTimeout(exploreSlider,8000);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.clickable-image');

        images.forEach(image => {
            image.addEventListener('click', function () {

                images.forEach(img => img.classList.remove('selected-image'));

                this.classList.add('selected-image');

                const selectedImage = this.getAttribute('data-image');
                document.getElementById('selectedImage').value = selectedImage;

                const productId = this.getAttribute('data-product-id');
                document.getElementById('productInput').value = productId;

                const price = this.getAttribute('data-price');
                document.getElementById('priceInput').value = price;
            });
        });
    });

    </script>
<br><br>
@stop