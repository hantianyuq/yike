<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>确认订单_慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />
    <script type="text/javascript" src="{{asset('home')}}/Scripts/jquery.stellar.min.js"></script>
    <script src="{{asset('home')}}/Scripts/ssologin.js"></script>
    <script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>
    <script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
    <script src='{{asset('home')}}/Scripts/jquery.min.js'></script>
    <style type="text/css">
        .moco-modal-info {
            font-size: 14px;
            line-height: 20px;
        }
    </style>

    <script type="text/javascript">
        var OP_CONFIG = {"module":"pay","page":"confirm","userInfo":{"uid":"4651600","nickname":"qq_echo_47","head":"http:\/\/img.mukewang.com\/user\/585e910d0001aec101000100-80-80.jpg","usertype":"1","roleid":0,"phone":""}};
        OP_CONFIG.isLogin = 1;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
        var requirejsTimestamp="v=201702231";
    </script>



    <!--imooc-->

    <!--/imooc-->




    <link rel="stylesheet" href="{{asset('home')}}/Content/be5099c96b744735922f3e55902c09b0.css" type="text/css" />
</head>

<body>

@include("home.layouts.header")

<div class='body-main'>


    <div class='cart-header'>
        <div class='cart-header-warp clearfix'>
            <div class='cart-title left clearfix'>
                <h1 class='left'>确认订单</h1>



            </div>
            <div class='right'>



            </div>
        </div>
    </div>


    <div class='cart-body' id='cartBody'>
        <div class="title-box clearfix">
            <p class='l goods-info-title'>商品信息</p>
            <a href="/user/feedback" target="_blank" class="r">我有疑问，需要反馈？</a>
        </div>

	<textarea class="storageCart" style="display:none">
		[
					{"goods_id":"131","type":"1","type_id":"83","status":"1","service_lifetime":90,"code":0,"pay_price":"199.00"}
						
				]
	</textarea>
        <div class="detail-box">
            <ul>
                @foreach($course as $key => $value)
                <li class="clearfix js-item-cart" data-type="1" data-typeid="83" data-goodsid="131">
                    <!-- 判断类型 -->
                    <a href="http://coding.imooc.com/class/83.html" target="_blank"><img src="{{asset('home')}}{{$value['real_course_thum']}}" alt="" class="l"></a>
                    <div class="text-info-box l">
                        <a href="http://coding.imooc.com/class/83.html" target="_blank"><p class="info-title">{{$value['real_course_name']}}</p></a>
                        <p class="info-del">赠送90天的慕课云服务
                            <a href="http://coding.imooc.com/user/faqdetail?column_id=4&id=13" class="desc-href" target="_blank">什么是云服务？</a>
                        </p>
                    </div>
                    <p class="info-price l"><em>￥</em><span class="course_price">{{$value['real_course_price']}}</span></p>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="coupons-box">
            <div class="coupon-title-box clearfix">
                <p class="coupon-title l">
                    使用优惠券
                    <i class="imv2-arrow2_d js-more-coupon-btn js-close">下拉</i>
                </p>
                <a href="http://www.imooc.com/about/faq?t=6&id=18" target="_blank" class="r">什么是优惠券？</a>
            </div>

            <div class="coupon-del-box"  style="display: none;">
                <!-- 可用优惠券 -->
                <!-- 不可用优惠券 -->
                <!-- 无优惠券时 -->
                <p class="no-coupons">暂无可用优惠券</p>
            </div>
            <script>
                $(".js-close").click(function(){
                    if($(".coupon-del-box").css('display') == 'none'){
                        $(".coupon-del-box").show();
                    }else{
                        $(".coupon-del-box").hide();
                    }
                })

            </script>
        </div>
        <div class="pay-box clearfix">
            <div class="goods-total-price-box clearfix">
                <p class="r rw price-num"><em>￥</em><span id="js-actual-price"></span></p>
                <p class="r price-text">共<span class="course_number"></span>件商品，商品总金额：</p>
            </div>
            <div class="pay-price-box clearfix">
                <p class="r rw price"><em>￥</em><span id="js-pay-price">

						</span></p>
                <p class="r price-text">应付：</p>
            </div>
            <div class="pay-account-box clearfix">
                <p class="pay-account r">购买账号：<span>qq_echo_47</span></p>
            </div>
            <a href="javascript:void(0);" class="r moco-btn moco-btn-red submit-btn js-pay-submit">提交订单</a>
        </div>
        <div class='clearfix'>
            <div class='bot-right r'>
                <i class='imv2-checkbox check js-agreement-check'></i>
                <span>我已经阅读并同意</span>
                <a target="_blank" href='http://coding.imooc.com/user/faqdetail?column_id=1&id=9'>《用户付费协议》</a>
            </div>
        </div>
    </div>
</div>
<script>
    var size = $(".js-item-cart").size();
    $(".course_number").html(size);
    var sum = 0;
    for(var i = 0;i<size;i++){
        var price = parseInt($(".course_price").eq(i).html());
        sum=parseInt(sum)+price;
    }
    $("#js-actual-price").html(sum+".00");
    $("#js-pay-price").html(sum+".00");
</script>

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
@include('home.layouts.signin')


<script type="text/javascript" src="{{asset('home')}}/Scripts/require.js"></script>
<script src='{{asset('home')}}/Scripts/jquery.min.js'></script>
<script src="{{asset('home')}}/Scripts/ssologin.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>
<script>
    requirejs.config({
        urlArgs: requirejsTimestamp,
        baseUrl: '/static/module/',
        skipDataMain: true,
        waitSeconds: 0,
        paths: {
            lib: '/static/lib',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            store: '/static/lib/store/store.min.js',
            ueditor: '/static/lib/ueditor/ueditor.final.min.js',
            moco: '/static/moco/v1.0/dist/js/moco.min.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            juicer: '/static/lib/juicer/juicer.min.js',
            ace: '/static/lib/ace/src-min-noconflict/ace.js',
            //ace: '/static/lib/ace/src/ace.js',
            pagination: '/static/lib/pagination/jquery.pagination.js',
            swfobject: '/static/lib/swfobject/2.2/swfobject.min.js',
            uploader: '/static/lib/webuploader/0.1.5/webuploader.js',

            jwplayer: '/static/lib/jwplayer/1.0.0/jwplayer.js',
            ide: '/static/lib/ide/dest/ide.min.js',
            autocomplete:'/static/lib/util/autocomplete.js',
            validate:'/static/lib/util/validate.js',
            placeholder:'/static/lib/util/placeholder.js',
            modalbutton:'/static/lib/util/modal.button.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            SyntaxHighlighter:'/static/lib/ueditor/third-party/SyntaxHighlighter/shCore.js',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            clipbord: '/static/lib/clipboard/dist/clipboard.min.js',
            jqueryValidate: '/static/lib/jquery-validate/jquery.validate.min.js'
        },
        shim: {
            'swfobject': {
                exports: 'swfobject'
            }
        }
    });
</script>





<script>/*RESOURCE_MAP*/</script>
<script data-entry="pay/confirm/js/index">
    requirejs(['pay/confirm/js/index']);
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