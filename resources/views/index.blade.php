@extends('layouts.home-layout')

@section('content')
<br><br><br><br>
<center>
    <div class="top-nav-bar-md5">
        <a href="/explore"><i class="fas fa-play"></i> Get Started</a>
        <a href="#"><i class="fas fa-question-circle"></i> Help Center</a>
        <a href="#" class="category-all-md5" onclick="showCategoryelect()"><i class="fas fa-list"></i> All Categories</a>
        <a href="#"><i class="fa fa-star"></i> Trendings</a>
    </div>
    <div class="container-wrapper">
        <img src="{{asset('assets/images/image-bviewer.jpg')}}" alt="Image">
        <img src="{{asset('assets/images/image-aviewer.jpg')}}" alt="Image">
        <img src="{{asset('assets/images/image-cviewer.jpg')}}" alt="Image">
        <div class="buttn-controll-builder">
            <button class="prev" onclick="changeSlide(-1)">&#8592;</button>
            <button class="next" onclick="changeSlide(1)">&#8594;</button>
        </div>
    </div>
</center>
<h1 id="message-pop-md5">Let's Experience <br> Fast, Safe & Secure <br> Shoppings with <br> Kakala <i class="fas fa-circle icon-dot" style="font-size:16px"></i> <i class="fas fa-circle icon-dot" style="font-size:16px"></i> <i class="fas fa-circle icon-dot" style="font-size:16px"></i> <i class="fas fa-circle icon-dot" style="font-size:16px"></i> </h1>


<div class="category-all-component">
    <a href="/explore">All</a>
    <a href="#">Baby</a>
    <a href="#">Beauty & Personal Care</a>
    <a href="#">Books</a>
    <a href="#">Boys Fashions</a>
    <a href="#">Computers</a>
    <a href="#">Electronics</a>
    <a href="#">Girls Fashion</a>
    <a href="#">Home & Kitchen</a>
    <a href="#">Sports & Outdoors</a>
    <a href="#">Software</a>
</div>

<br>
<center>
<div class="comment-body-wrapper">
    <img src="{{asset('assets/images/image-aviewer.jpg')}}" alt="">  <br> <span><strong>{{__('Mohammed')}}</strong> <br> <strong>{{__('Kakala CEO')}}</strong></span>
    <p>Impedit reprehenderit consectetur quos adipisci nulla, officia nihil dolore necessitatibus eaque labore id accusantium corporis culpa. Dolore sed molestias aspernatur quidem minima.</p>
    <br><br>
    <button class="prevShow" onclick="showSlide(-1)">&#8592;</button>
    <button class="nextShow" onclick="showSlide(1)">&#8594;</button>
    <br>
</div>
<br><br>
</center>
@stop