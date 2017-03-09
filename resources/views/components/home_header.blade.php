<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="/" target="_self" class="hide-text" title="首页">慕课网</a></div>


        <button type="button" class="navbar-toggle visible-xs-block js-show-menu" >
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
            <li class="set-btn visible-xs-block"><a href="/user/newlogin" target="_self">登录</a> / <a href="/user/newsignup" target="_self">注册</a></li>

            <li>
                <a href="/course/list"  target="_self">课程</a>
            </li>
            <li><a href="/course/program" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="http://coding.imooc.com" target="_self">实战</a>
            </li>
            <li><a href="{{url('home/answer')}}" class="active" target="_self">猿问</a></li>
            <li><a href="/article"  target="_self">手记</a></li>

        </ul>
        <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="icon-shopping-cart js-endcart"></span>
                        <span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                        <span>购物车</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"></div>
                </li>
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">登录</a>
                </li>
                <li class="header-signup">
                    <a href="#" id="js-signup-btn">注册</a>
                </li>
            </ul>
        </div>
        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="pa searchTags" >
                <a href="http://coding.imooc.com/class/83.html" target="_blank">react</a>
            </div>

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger"      type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='icon-search'></i></div>
        </div>
    </div>
</div>