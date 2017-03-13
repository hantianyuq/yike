<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="http://www.imooc.com/" target="_self" class="hide-text" title="首页">慕课网</a></div>

        <div class="l">
            <ul class="nav-item l">
                <li><a href="{{url('home/section/lists')}}" target="_self">课程</a></li>
                <li><a class='program-nav' href="http://www.imooc.com/course/program" target="_self">职业路径<i class="icn-new"></i></a></li>
                <li><a href="{{url('home/direction')}}" target="_self">实战</a></li>
                <li><a href="{{url('home/answer')}}" target="_self">猿问</a></li>
                <li><a href="http://www.imooc.com/article" target="_self">手记</a></li>

            </ul>
        </div>

        <div id="login-area">
            <ul class="clearfix logined">
                <li class="shop-cart" id="shop-cart">
                    <a href="{{url('home/pay/ShopShow')}}" class="shop-cart-icon" target="_blank">

                        <span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                        <span>购物车</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"></div>
                </li>

                @if(isset($_COOKIE['user']))
                    <?php $user = unserialize($_COOKIE['user'])?>
                    <li class="set_btn user-card-box"  id="header-user-card">
                        <a id="header-avator" class="user-card-item" action-type="my_menu"  href="http://www.imooc.com/u/4651600/plans" target="_self">
                            <img src='{{asset('home')}}{{$user['user_figurepath']}}' width='40' height='40' />
                            <i class="myspace_remind" style="display: none;"></i>
                            <span style="display: none;">动态提醒</span>
                        </a>
                        <div class="g-user-card">
                            <div class="card-inner">
                                <div class="card-top clearfix">
                                    <a href='http://www.imooc.com/u/4651600' class='l'>
                                        <img src="{{asset('home')}}{{$user['user_figurepath']}}" alt="{{$user['user_name']}}">
                                    </a>
                                    <div class="card-top-right-box l">
                                        <a href='http://www.imooc.com/u/4651600' class="name text-ellipsis">
                                            <span>{{$user['user_name']}}</span>
                                        </a>

                                        <div class="meta">
                                            <a href="http://www.imooc.com/u/4651600/experience">经验<b id="js-user-mp">12</b></a>
                                            <a href="http://www.imooc.com/u/4651600/credit">积分<b id="js-user-credit">0</b></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-center-box">
                                    <ul class="clearfix">
                                        <li class="l"><a href="http://www.imooc.com/u/4651600/courses" target="_blank"><span class="user-center-icon imv2-kecheng"></span>我的课程</a></li>
                                        <li class="l">
                                            <a href="http://order.imooc.com/myorder" target="_blank"><span class="user-center-icon imv2-receipt"></span>订单中心</a>
                                            <i id="js-usercard-coupon-icon"></i>
                                        </li>
                                        <li class="l"><a href="http://www.imooc.com/mall/index" target="_blank"><span class="user-center-icon imv2-score_shop"></span>积分商城</a></li>
                                        <li class="l"><a href="http://www.imooc.com/user/setbindsns" target="_blank"><span class="user-center-icon imv2-set_1"></span>个人设置</a></li>
                                    </ul>
                                </div>

                                <div class="card-history">
                                </div>

                                <div class="card-sets clearfix">
                                    <a href="{{url('home/loginout')}}" class="r">安全退出</a>
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                    <li class="header-signin">
                        <a href="javascript:void(0)" id="js-signin-btn">登录</a>
                    </li>
                    <li class="header-signup">
                        <a href="#" id="js-signup-btn">注册</a>
                    </li>
                @endif
            </ul>
        </div>

        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="pa searchTags js-searchtags" ></div>

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result"></ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='imv2-search'></i></div>
        </div>
    </div>
</div>