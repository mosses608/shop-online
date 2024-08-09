<div class="side-main-navbar-wrapper-md5">
    <div class="dashboard-home">
        <a href="#"><span id="left-side-nav"><i class="fa fa-home"></i></span> <span id="middle-nav">Dashboard</span> <span class="right-nav"><i class="fa fa-angle-right"></i></span></a>
    </div><br>
    <div class="comment-manager">
        <a href="#"><span id="left-side-nav"><i class="fa fa-comments"></i></span> <span id="middle-nav">Comments</span> <span class="right-nav"><i class="fa fa-angle-right"></i></span></a>
    </div><br>
    <div class="profile-nav-manager">
        <a href="#"><span id="left-side-nav"><i class="fa fa-user"></i></span> <span id="middle-nav">Account Setting</span> <span class="right-nav"><i class="fa fa-angle-right"></i></span></a>
    </div><br>

    <div class="product-manager">
        <a href="#"><span id="left-side-nav"><i class="fa fa-store"></i></span> <span id="middle-nav">Product Manager</span> <span class="right-nav"><i class="fa fa-angle-down"></i></span></a>
    </div><br>
    <div class="hidden-product-closet" style="display:none;">
        <a href="#"><span id="left-side-nav"><i class="fa fa-angle-right"></i></span> <span id="middle-nav">Posts</span></a>
        <a href="#"><span id="left-side-nav"><i class="fa fa-angle-right"></i></span> <span id="middle-nav">Orders</span></a>
        <a href="#"><span id="left-side-nav"><i class="fa fa-angle-right"></i></span> <span id="middle-nav">Offers</span></a>
    </div>
    <div class="report-analytics-md5">
        <a href="#"><span id="left-side-nav"><i class="fa fa-bar-chart"></i></span> <span id="middle-nav">Generate Reports</span> <span class="right-nav"><i class="fa fa-angle-down"></i></span></a>
    </div><br>
    <div class="logout-side-nav">
        <form action="/invalidate" method="POST" class="logout-invalidate">
            @csrf
            <button type="submit"><span id="left-side-nav"><i class="fa fa-sign-out"></i></span> <span id="middle-nav">Sign Out</span></button>
        </form>
    </div>
</div>