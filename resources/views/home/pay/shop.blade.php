
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>购物车_慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />

    <script type="text/javascript">
        var OP_CONFIG = {"module":"pay","page":"cart","userInfo":{"uid":"4651600","nickname":"qq_echo_47","head":"http:\/\/img.mukewang.com\/user\/585e910d0001aec101000100-80-80.jpg","usertype":"1","roleid":0,"phone":""}};
        OP_CONFIG.isLogin = 1;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
        var requirejsTimestamp="v=201702231";
    </script>



    <!--imooc-->

    <!--/imooc-->




    <link rel="stylesheet" href="{{asset('home')}}/Content/f35fdf538549447f841a1ee364ed6eaa.css" type="text/css" />
</head>

<body>

@include("home.layouts.header")
<div class='body-main'>


    <div class='cart-header'>
        <div class='cart-header-warp clearfix'>
            <div class='cart-title left clearfix'>
                <h1 class='left'>我的购物车</h1>

                <div class='left js-number-box-cart'>
                    共<span class='js-coures-num'>0</span>门，已选择<span class='js-choice-num'>0</span>门
                </div>

            </div>
            <div class='right'>

                <div class='clearfix'>
                    <span class='left'><a class='js-myorderbtn' href='/myorder'>我的订单历史</a></span>
                    <span class='left num js-order-num' style='display: none;'>0</span>
                </div>

            </div>
        </div>
    </div>


    <div class='cart-body' id='cartBody'>
        <div class='cart-body-title clearfix'>
            <div class='item-1 l'>
                <input type="checkbox" name="" id="">
                <span class='c-93999f'>全选</span>
            </div>

            <div class='item-2 l'>
                <span class='c-4d555d'>课程</span>
            </div>

            <div class='item-3 l'>
                <span class='c-4d555d'>金额</span>
            </div>

            <div class='item-4 l'>
                <span class='c-4d555d'>操作</span>
            </div>
        </div>
	<textarea class="storageCart" style="display:none">
		[
					{"goods_id":"105","type":"1","type_id":"75","status":"1","price":"149.00","ios_price":"153.00","service_lifetime":0,"open_discount":"0","discount_start_time":"1480348800","discount_end_time":"1480348800","discount_price":"0.00","code_white_list":10001,"code":0,"pay_price":"149.00"}

				]
	</textarea>
        <div id='js-cart-body-table' class='cart-body-table'>
            <div class='item clearfix js-item-cart js-each-75' data-type='1' data-typeid='75' data-goodsid="105" data-price="149.00">
                <div class='item-1'>
                    <input type="checkbox" name="" id="">
                </div>

                <div class='item-2 clearfix'>
                    <a href="http://coding.imooc.com/class/75.html" target="_blank">
                        <img src='' width='160' height='90' class='left' />
                    </a>
                    <dl class='left'>
                        <a href="http://coding.imooc.com/class/75.html" target="_blank"><dt></dt></a>
                    </dl>
                </div>

                <div class='item-3'>
                    <div class='price clearfix'>
                        <em>￥</em>
                        <span>149.00</span>
                    </div>
                </div>

                <div class='item-4'>
                    <i class="imv2-close js-close-cart close"></i>
                </div>
            </div>
            <div id='Anchor'></div>
            <div class='cart-body-bot js-cart-body-bot'>
                <div class='clearfix cart-body-bot-box'>


                    <div class='right'>
                        <ul class='clearfix'>
                            <li class='li-2'>
                                <div class='topdiv'>总计金额：</div>
                                <div class='price price-red clearfix'>
                                    <em>￥</em>
                                    <span class='jsAltogether'>0</span>
                                </div>
                            </li>

                            <li class='li-3'>
                                <span class='btn js-go-confrim'>去结算</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>


<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973"  target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="http://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://class.imooc.com/user/faq" target="_blank">常见问题</a></li>
                        <li> <a href="http://class.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>

<div id="J_GotoTop" class="elevator">
    <a href="/user/feedback" class="elevator-msg" target="_blank">
        <i class="imv2-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="http://www.imooc.com/about/faq" class="elevator-faq" target="_blank">
        <i class="imv2-help_outline"></i>
        <span class="">常见问题</span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="imv2-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="imv2-weixigzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="imv2-arrow2_u"></i>
        <span class="">返回顶部</span>
    </a>
</div>



<script type="text/javascript" src="{{asset('home')}}/Scripts/require.js"></script>
<script src='{{asset('home')}}/Scripts/jquery.min.js'></script>
<script src="{{asset('home')}}/Scripts/ssologin.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>





<script>/*RESOURCE_MAP*/</script>
<script data-entry="pay/cart/index">
    requirejs(['pay/cart/index']);
</script>



<div style="display: none">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?613bf05434ed4b759c19cea36f7193a0";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>
</body>
</html>