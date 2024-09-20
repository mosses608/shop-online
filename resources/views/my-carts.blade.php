@extends('layouts.main-layout')

@section('content')
<br><br><br><br>

<x-cart_message />

<div class="activ-viewer-blur"></div>

<div class="ajax-padd-wrapper">
    <div class="nav-controller">
        <a href="/explore"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i> <a href="/my-carts"><i class="fa fa-shopping-cart"></i> My Carts</a>
        <a href="#" class="paid-order-view"><i class="fa fa-eye"></i> Paid Orders</a>
    </div>
<h1 class="check-itm"><strong><i class="fa fa-check" style="color:green;"></i></strong>| <strong class="animate">Free Shipping offer for you...</strong></h1>
<br>
<div class="wrapper-tool-pad">
    <strong><h1 class="item-counter">All ({{count($carts)}}) Items</h1></strong>
    <hr>
    @foreach($carts as $mycart)
        <div class="minor-cart-loop" onclick="moreAboutFunct(event, {{$mycart->id}})">
            <img class="cart-image" src="{{ asset($mycart->selected_image) }}" alt="Cart Image">
            <div class="right-floated-cont">
                @foreach($products as $product)
                @if($product->product_id == $mycart->product_id)
                <strong><h2>Name: {{$product->product_name}}</h2></strong>
                @foreach($categories as $category)
                @if($category->id == $product->category)
                <p id="category" style="font-size:13px;">Category: {{$category->category_name}}</p>
                @endif
                @endforeach
                <p id="price-unit" style="font-size:13px;">Unit Price: <strong style="color:#B81D33;">Tsh {{number_format($product->unit_price,2)}}</strong></p>
                <p>
                    @if($product->quantity == 0)
                    <strong style="color:red;">All Most Sold Out</strong>
                    @else
                    <strong style="color:#B81D33;">{{$product->quantity}}</strong> left
                    @endif
                </p>
                <p id="discount-show" style="font-size:11px; font-style:italic; color:orangered;"><strong>With Discount (-5%)</strong></p>
                @endif
                @endforeach
            </div>
            <form action="/cart-delete/{{$mycart->id}}" method="POST" class="delete-cart">
                @method('DELETE')
                @csrf
                <button type="submit"><i class="fa fa-trash"></i></button>
            </form>
            
            <button type="button"class="quantity-added">Quantity: {{$mycart->quantity}}</button>
            <br><br>
        </div>

        <div class="single-viewer-loader" id="single-viewer-loader-{{$mycart->id}}">
            <img class="cart-image-loader" src="{{ asset($mycart->selected_image) }}" alt="Cart Image">
            <div class="bottom-loader">
            @foreach($products as $product)
            @if($product->product_id == $mycart->product_id)
            <strong><h2>Name: {{$product->product_name}}</h2></strong>
            @foreach($categories as $category)
            @if($category->id == $product->category)
            <p id="category" style="font-size:13px;">Category: {{$category->category_name}}</p>
            @endif
            @endforeach
            <p id="price-unit" style="font-size:13px;">Unit Price: <strong style="color:#B81D33;">Tsh {{number_format($product->unit_price,2)}}</strong></p>
            <p id="discount-show" style="font-size:11px; font-style:italic; color:orangered;"><strong>With Discount (-5%)</strong></p>
            @endif
            @endforeach
            <form action="/cart-delete/{{$mycart->id}}" method="POST" class="delete-cart-ajax">
                @method('DELETE')
                @csrf
                <button type="submit"><i class="fa fa-trash"></i> Remove</button>
            </form>
            <button class="close-btn" onclick="hideItems(event, {{$mycart->id}})">&times;</button>
            </div>
        </div>
    @endforeach

</div>

<div class="left-container-wrapper">
    <strong><h1 id="order-summary-coun">{{__('Order Summary')}}</h1></strong><hr>
    <div class="main-order-items">
        <table class="scrollable-view">
            <tr class="tr-th">
                <th>S/N</th>
                <th>Item Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
            @php
                $totalQuantity = 0;
                $totalPrice = 0;
            @endphp

            @foreach($allcarts as $mycart)
            <tr class="tr-td">
                <td>{{$mycart->id}}</td>
                <td>
                @foreach($products as $product)
                @if($product->product_id == $mycart->product_id)
                {{$product->product_name}}
                @endif
                @endforeach
                </td>
                <td>{{number_format($mycart->price,2)}}</td>
                <td>{{$mycart->quantity}}</td>
                <td>{{number_format($mycart->quantity * $mycart->price ,2)}}</td>
            </tr>

            @php
            $totalQuantity += $mycart->quantity;
            $totalPrice += $mycart->quantity * $mycart->price;
            @endphp

            @endforeach
            <tr class="second-tr-td">
            <td><strong>Totals</strong></td>
            <td></td>
            <td></td>
            <td><strong>{{$totalQuantity}}</strong></td>
            <td><strong>Tsh {{number_format($totalPrice, 2)}}</strong></td>
            </tr>
        </table>
    </div><br>

    <button type="button" class="submit-order-btn-checkout" onclick="showPaymentFrom(event)"><i class="fab fa-stripe" style="color:orange; font-size:20px;"></i> <strong>Checkout <i class="fa fa-dollar"></i> {{number_format($totalPrice/2750,2)}}</strong></button><br><br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <div class="container" style="margin-left:10%;">

    <div class="complete-order-ajax">
    <div class="col-md-1 col-md-offset-0">
        <div class="panel panel-default credit-card-box">
            <div class="panel-heading display-tablee" >
                <p>You need to pay <strong><i class="fa fa-dollar"></i> {{number_format($totalPrice/2750, 2)}}</strong></p>
            </div>
            <div class="panel-body">

                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif

                <form 
                role="form" 
                action="{{ route('stripe.post') }}" 
                method="POST" 
                class="require-validation"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form">
                @csrf

                <div class='form-row row'>
                <div class='col-xs-12 form-group required'>
                    <label class='control-label'>Name on Card</label>
                    <input class='form-control' size='4' type='text'>
                </div>
                </div>

                <div class='form-row row'>
                <div class='col-xs-12 form-group card required'>
                    <label class='control-label'>Card Number</label>
                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                </div>
                </div>

                <div class='form-row-rower row'>
                <div class='col-xs-12 col-md-4 form-group cvc required'>
                    <label class='control-label'>CVC</label>
                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                </div>
                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Month</label>
                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                </div>
                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Year</label>
                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='number'>
                </div>
                <input type="hidden" name="amount" id="" value="{{$totalPrice/2750}}">
                </div>

                <div class='form-row row'>
                <div class='col-xs-12 form-group required'>
                    <!-- <label class='control-label'>Name</label> -->
                    <input class='form-control' name='customerPhone' size='4' type='hidden' value="0710066540" required>
                </div>
                </div>

                <div class='form-row row'>
                <div class='col-md-12 error form-group hidden'>
                    <div class='alert-danger alert'>Please correct the errors and try again.</div>
                </div>
                </div>

                <div class="row-btn">
                <div class="col-xs-101">
                    <button class="btnn-submit btn-primary btn-lg btn-block" type="submit">Pay Now <i class="fa fa-dollar"></i> {{number_format($totalPrice/2750, 2)}}</button>
                </div>
                </div>
                </form>

                    </div>
                </div>        
            </div>
            </div>

            </div>


            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

            <script type="text/javascript">

            $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
            });

            if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                    
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
            }

            });
            </script>
<br>
    <button class="azam-payout"><img src="{{asset('assets/images/azampay.png')}}" alt=""> <div class="div"><strong>Checkout Tsh {{number_format($totalPrice,2)}}</strong></div></button>
<br><br>
    <form action="/paypal-checkout" method="POST" class="pay-pal-pay">
        @csrf
        <input type="hidden" name="amount" id="" value="{{$totalPrice/2750}}">
        <!-- <input type="hidden" name="phoneNumber" id="" value="0710066540"> -->
        <button class="paypal-payout"><i class="fab fa-paypal" style="font-size:20px;"></i> <strong>Checkout <i class="fa fa-dollar"></i> {{number_format($totalPrice/2750,2)}}</strong></button>
    </form>
    
</div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.moreAboutFunct = function(event, cartId){
            event.preventDefault();
            const hiddenClass = document.getElementById(`single-viewer-loader-${cartId}`);
            hiddenClass.style.display='block';
            document.querySelector('.activ-viewer-blur').style.display='block';
        }
        window.hideItems = function(event, cartId){
            const hiddenClass = document.getElementById(`single-viewer-loader-${cartId}`);
            hiddenClass.style.display='none';
            document.querySelector('.activ-viewer-blur').style.display='none';
        }
        window.showPaymentFrom = function(event){
            event.preventDefault();
            const hiddenPayForm = document.querySelector('.complete-order-ajax');
            hiddenPayForm.classList.toggle('active');
        }
    });
</script>

@stop