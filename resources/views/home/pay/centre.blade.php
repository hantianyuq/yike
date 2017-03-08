
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>支付中心_慕课网</title>
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

    <script type="text/javascript">
        var OP_CONFIG = {"module":"pay","page":"cashier","userInfo":{"uid":"4651600","nickname":"qq_echo_47","head":"http:\/\/img.mukewang.com\/user\/585e910d0001aec101000100-80-80.jpg","usertype":"1","roleid":0,"phone":""}};
        OP_CONFIG.isLogin = 1;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
        var requirejsTimestamp="v=201702231";
    </script>



    <!--imooc-->

    <!--/imooc-->




    <link rel="stylesheet" href="{{asset('home')}}/Content/dbb456119dae4a38b0aa5462d5338e00.css" type="text/css" />
</head>

<body>

@include('home.layouts.header')

<div class='body-main'>


    <div class='cart-header'>
        <div class='cart-header-warp clearfix'>
            <div class='cart-title left clearfix'>
                <h1 class='left'>支付中心</h1>

            </div>
            <div class='right'>

            </div>
        </div>
    </div>


    <div class='cart-body'>
        <div class='cart-body-title'>

            <div class='clearfix'>
                <div class='left trade-title'>
                    <span class='order'>订单：</span><span class='num'>1703031322349292</span>
                </div>
                <div class='right'>
                    <a href='javascript:;' class='js-toggle-detai'>详情</a>
                </div>
            </div>

            <ul class='js-itemUl item-ul'>

                <li class='item clearfix' data-cid='$info.type_id'>

                    <div class='item-left left clearfix'>
                        <a href="http://coding.imooc.com/class/83.html" target="_blank"><img src='{{asset('home')}}/Picture/58a68f000001262805400300-160-90.jpg' width='160' height='90' class='left' /></a>

                        <dl class='left'>

                            <a href="http://coding.imooc.com/class/83.html" target="_blank">
                                <dt>React.js入门与实战   开发适配PC及移动端新闻头条平台</dt>
                            </a>
                            <dd>
                                赠送90天的慕课云服务
                                <a href="http://coding.imooc.com/user/faqdetail?column_id=4&id=13" class="desc-href" target="_blank">什么是云服务？</a>
                            </dd>

                        </dl>
                    </div>

                    <div class='item-right right'>
                        <div class='price clearfix'>
                            <span class="price-text">实付金额：</span>
                            <em>￥</em>
                            <span>199.00</span>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <div class='pay-method'>
            <h2 class='pay-method-title'>支付方式</h2>
            <ul class='clearfix js-pay-method'>
                <li class='alipay active' data-type='1'>

                    <div class='bottomright'>
                        <div class='triangle'></div>
                        <i class='imv2-check'></i>
                    </div>
                </li>
                <li class='wxpay' data-type='2'>

                    <div class='bottomright'>
                        <div class='triangle'></div>
                        <i class='imv2-check'></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class='pay-summary clearfix'>
            <div class='warning'>
                <i class='imv2-error_c'></i>
                <span>请在 <b>23小时57分钟</b> 以内支付完成，如未完成此订单将自动关闭。需重新购买！</span>
            </div>

            <div class='summary'>

                <!--
                <div class='clearfix prefer'></div>
                    <span class='label'>活动优惠：</span>
                    <span class='price'>
                        <em>￥</em>
                        <span>0.00</span>
                    </span>
                </div>
                -->
                <div class='clearfix total'>
                    <span class='label'>应付金额：</span>
				<span class='price'>
					<em>￥</em>
					<span>199.00</span>
				</span>
                </div>

                <div class='submit-warp clearfix'>
                    <span data-ordernum='1703031322349292' class='pay-summary-submit js-pay-submit'>立即支付</span>
                </div>

                <div class='clearfix feedback-href'>
                    <a target="_blank" href='/user/feedback'>我有疑问，需要反馈？</a>
                </div>

            </div>
        </div>
    </div>
    <!-- </div> -->

    <input type='hidden' id='jsPrice' value='199.00'>




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
<script data-entry="pay/center/index">
    requirejs(['pay/center/index']);
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