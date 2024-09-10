@extends('layouts.business-layout')

@section('content')

<br><br><br><br>

<x-success_login />

<center>
    @if(Auth::guard('web')->user()->verified == 1)
    <div class="side-main-navbar-wrapper-md5">
        <div class="dashboard-home">
            <a href="#"><i class="fa fa-home"></i> Dashboard <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="comment-manager">
            <a href="#"><i class="fa fa-comments"></i> Comments <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="profile-nav-manager">
            <a href="#"><i class="fa fa-cog"></i> Account Setting <i class="fa fa-angle-right"></i></a>
        </div>

        <div class="product-manager">
            <a href="#"><i class="fa fa-store"></i> Product Manager <i class="fa fa-angle-down"></i></a>
        
        <div class="hidden-product-closet">
            <a href="post-product"></span> <span id="middle-nav"> Post Product</span> <span id="left-side-nav"><i class="fa fa-angle-right"></i></a>
            <a href="#"><span id="middle-nav"> View Orders</span> <span id="left-side-nav"><i class="fa fa-angle-right"></i></span> </a>
            <a href="#"><span id="middle-nav"> New Offers</span> <span id="left-side-nav"><i class="fa fa-angle-right"></i></span> </a>
        </div>
        </div>
        <div class="report-analytics-md5">
            <a href="#"><i class="fa fa-bar-chart"></i> Generate Reports <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="logout-side-nav">
            <form action="/auth/invalidate" method="POST" class="logout-invalidate">
                @csrf
                <button type="submit"><i class="fa fa-sign-out"></i> Sign Out</button>
            </form>
        </div>
        <br><br>
    </div>
    @else
    <div class="not-verified-flash">
        <p><strong>{{__('Account not verified yet by admin, please wait or contact admin for verification!')}}</strong></p>
    </div>
    @endif
</center>


@stop