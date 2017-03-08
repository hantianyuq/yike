
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$class_course['real_course_name']}}视频教程-慕课网实战</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$class_course['real_course_intro']}}" />

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
        var OP_CONFIG={"module":"class","page":"index","userInfo":{"uid":"4651600","nickname":"qq_echo_47","head":"http:\/\/img.mukewang.com\/user\/585e910d0001aec101000100-80-80.jpg","usertype":"1","roleid":0,"phone":""}};
        OP_CONFIG.isLogin = 1;
        var isLogin = 1;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cartFlag = 0;
        var seajsTimestamp="v=20170223522";
    </script>



    <link rel="stylesheet" href="{{asset('home')}}/Content/ee00f328a696405bbb96b88e3f17b87b.css" type="text/css" />
</head>
<body >

@include("home.layouts.header")



<div class="course-class-infos ">
    <div class="w pr">
        <div class="path">
            <a href="/">实战</a>
            <i class="path-split">\</i><span>{{$class_course['real_course_name']}}</span>
        </div>

        <div class="extra">
            <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1439263858135">
                <a href="javascript:;" class="share wx js-share sz-weixin" data-cmd="weixin" title="分享到微信">
                </a>
                <a href="javascript:;" class="share qq js-share sz-qq" data-cmd="qzone" title="分享到QQ空间">
                </a>

                <a href="javascript:;" class="share sina js-share sz-weibo" data-cmd="tsina" title="分享到新浪微博">
                </a>
            </div>
        </div>

        <div class='info-warp tc'>



            <div class='hide'>
                <h1 class="l">{{$class_course['real_course_name']}}</h1>
            </div>


            <div class='tc'>
                <div class="statics clearfix">
                    <div class="static-item first">
                        <span class="meta">难度</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_level']}}</strong></span>
                    </div>
                    <div class="static-item static-time">
                        <span class="meta">时长</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_time']}}小时</strong></span>
                        <em></em>
                    </div>
                    <div class="static-item">
                        <span class="meta">学习人数</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_people_number']}}</strong></span>
                        <em></em>
                    </div>
                    <div class="static-item">
                        <span class="meta">评分</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_grade']}}分</strong></span>

                        <em></em>
                    </div>
                </div>
            </div>

            <div class="price-box">
				<span class="num clearfix">


					<span class="discount-price">
						<span class="baseline baseliner0">
						<span class="new-y">&yen;</span>
						<span class="cur-price"><b>{{$class_course['real_course_price']}}</b></span>
						</span>
					</span>


									</span>
            </div>

            <div class="clearfix btnwarp">
                <a href="javascript:;" class="js-buy-trigger buy-class-btn class-btn1" data-cid="57" data-pay="0" id="buy-trigger">
                    <span>立即购买</span>
                </a>

                <a href='javascript:;' class='js-addcart addcart' data-cid='57' data-type='1'>
                    <span class='line'></span>
                    <i class='sz-add-shopping-cart'>加入购物车</i>
                </a>

                <div class="preview-tip">
                </div>
            </div>
        </div>
    </div>

    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap" style="background-image:url({{asset('home')}}{{$class_course['real_course_picture']}})"></div>
    </div>
</div>
<script>
    $(".sz-add-shopping-cart").click(function(){
        var course_id = '{{$course_id}}';
        $.post("{{url('home/pay/shop')}}",{course_id:course_id,"_token":"{{csrf_token()}}"},function(data){
                var code = data.code;
                if(code == 0){
                    //未登录游客加入购物车
                    alert(data.content);
                }else if(code == 1){
                    //已经登录的用户加入购物车
                    alert(data.content);
                }else if(code ==2){
                    //用户的购物车中已经有此课程
                    alert(data.content);
                }
        },'json')
    })
</script>
<div class='course-infos-t'>
    <div id='Anchor'></div>
    <div class="comp-tab-t js-comp-tab">
        <ul class='clearfix'>
            <li class="comp-tab-item-first comp-tab-item active">
                <a href="{{url('home/class')}}?real_course_id={{$course_id}}">课程介绍</a>
            </li>
            <li class="comp-tab-item ">
                <a href="{{url('home/class/chapter')}}?real_course_id={{$course_id}}">课程章节</a>
            </li>
            <li class="comp-tab-item ">
                <a href="{{url('home/class/commit')}}?real_course_id={{$course_id}}">用户评价</a>
                <span>50</span>
            </li>
        </ul>
    </div>

    <div class='js-fixed course-fixed-nav hide'>
        <h3 class='fixed-course-name' title='{{$class_course['real_course_name']}}'>{{$class_course['real_course_name']}}</h3>

        <ul class='fixed-nav clearfix'>
            <li class="fixed-nav-item-first fixed-nav-item ml0 active">
                <a href="{{asset('class')}}?real_course_id={{$course_id}}">课程介绍</a>
            </li>
            <li class="fixed-nav-item ">
                <a href="{{url('home/class/chapter')}}?real_course_id={{$course_id}}">课程章节</a>
            </li>
            <li class="fixed-nav-item ">
                <a href="{{url('home/commit')}}?real_course_id={{$course_id}}">用户评价</a>
                <a href="{{url('home/commit')}}?real_course_id={{$course_id}}"><span>50</span></a>
            </li>

        </ul>

        <div class="goumai">
            <a href="javascript:;" class="js-buy-trigger fixed-nav-btn fixed-btn1" data-cid="57" data-pay="0" id="buy-trigger">
                <span>立即购买</span>
            </a>


        </div>
    </div>

    <div class="info-video" style="display: block; background-image: url({{asset('home')}}/Images/5791903e0001862809000500.jpg);">

        <div class='info-name'>{{$class_course['real_course_name']}}</div>
        <div class='info-desc'>{{$class_course['real_course_intro']}}</div>


        <div class="js-video-btn video-btn">
            <i class="sz-play"></i>
        </div>


        <div class="comp-tabs-pannel" style='display: none;' data-purl="http://szimg.mukewang.com/5791903e0001862809000500.jpg" data-vurl="http://szv1.mukewang.com/md5/9c802769-fd95-4657-aeed-e3b7c98b1f66/H.mp4" id="js-video-content">
            <div class="desc-short">
                <a href="javascript:void(0);" class="js-close-video close-video sz-close-h"></a>
                <div class="video-container" id="video-container"></div>
            </div>
        </div>
    </div>
</div>

<div class="infolayout clearfix">




    <div class="envir-box" id="Envir">
        <h1>环境参数</h1>
        <div class="detail-box">
            <ul class="clearfix">
                <li class="l ">
                    <span class="detail-tag">框架</span>
                    <i class="triangle"></i>
                    <span class="detail">YII2.0</span>
                </li>
                <li class="l ">
                    <span class="detail-tag">开发工具</span>
                    <i class="triangle"></i>
                    <span class="detail">Sublime/PhpStorm</span>
                </li>
                <li class="l ">
                    <span class="detail-tag">技术语言</span>
                    <i class="triangle"></i>
                    <span class="detail">PHP5.4.0</span>
                </li>
                <li class="l ">
                    <span class="detail-tag">数据库</span>
                    <i class="triangle"></i>
                    <span class="detail">Mysql5.6</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="preconsultation" id="Prchor">
        <div class="w question-input">
            <input type="text" placeholder="输入你的课程咨询问题" class="input-block js-inputcont" data-can-search="true" data-pagesize="6">
            <div class="question-btn js-question-btn" data-cid="57">提问</div>
        </div>
        <div class="w question-contain js-load-prelist" data-cid="57">
            <ul class="prebox question-content">
                <li>
                    <div class="left-hand fl">
                        <div class="hand-block js-praise" data-advid="57">
                            <i class="sz-thumb"></i>
                            <br>
                            <span class="hand-number">5</span>
                        </div>
                    </div>
                    <div class="mid-detail fl">
                        <h3 class="question-title">
                            <a href="/class/consult/detail/57.html" title="是b2b2c的教程吗？有提到怎么优化商城的细节不？">是b2b2c的教程吗？有提到怎么优化商城的细节不？</a>
                        </h3>
                        <div class="answer-content">
                            <p>这门课是带领大家开发一个类似京东的B2C电商网站，会带领大家完成电商网站的核心模块开发。如果我没有理解错，您是想问课程是否涉及到电商网站性能优化吧，李捷老师会在近期推出一门专门面向电商网站性能优化的课程。对于电商网站开发涉及较少的小伙伴，还是推荐先学习本门课程。祝您学习愉快。</p>
                        </div>
                    </div>
                    <div class="right-date fl">2016-11-11</div>
                </li>
            </ul>
        </div>
    </div>

    <div class="w info-recommendcourse js-prelearn" data-id="57">

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
                        <li> <a href="http://coding.imooc.com/user/faq" target="_blank">常见问题</a></li>
                        <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                        <!-- <li><a href="http://www.imooc.com/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<div id="J_GotoTop" class="elevator">

    <a href="/user/feedback" class="elevator-msg"  target="_blank" >
        <i class="sz-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="/user/faq" class="elevator-faq"  target="_blank" >
        <i class="sz-help_outline"></i>
        <span class="">常见问题</span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="sz-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="sz-weixigzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="sz-arrow-up"></i>
        <span class="">返回顶部</span>
    </a>
</div>

@include("home.layouts.signin");



<script type="text/javascript" src="{{asset('home')}}/Scripts/require.js"></script>

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
<script src='{{asset("home")}}/Scripts/jquery.fly.js'></script>
<!--[if gte IE 9]><script src='{{asset("home")}}/Scripts/requestanimationframe.js'></script><![endif]-->
{{--<script data-entry="class/index">--}}
    {{--requirejs(['class/index'], function(){--}}
    {{--});--}}
    {{--(function(){--}}
        {{--var imgPic = 'http://szimg.mukewang.com/579190240001d51d05400300-280-160.jpg' || 'http://img.mukewang.com/static/img/common/logo.png',--}}
                {{--text = '我正在参加@慕课网 的一门课程【' + '{{$class_course['real_course_name']}}' + '】，很不错哦！快来一起学习吧！', //节名称--}}
                {{--url = 'http://coding.imooc.com' + window.location.pathname;--}}

        {{--window._bd_share_config = {--}}
            {{--"common": {--}}
                {{--"bdUrl": url,--}}
                {{--"bdSnsKey": {--}}
                    {{--'tsina':'2788596354'--}}
                {{--},--}}
                {{--"bdText": text,--}}
                {{--"bdMini": "2",--}}
                {{--"bdMiniList": false,--}}
                {{--"bdPic": imgPic,--}}
                {{--"bdStyle": "0",--}}
                {{--"bdSize": "16"--}}
            {{--},--}}
            {{--"share": {}--}}
        {{--};--}}
        {{--with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];--}}
    {{--})();--}}
{{--</script>--}}


<div class="comp-modal-overlay"></div>
<div class="modal modal-buy" id="before-buy-modal">
    <div class="inner">
        <div class="header">
            <strong class="tit">购买课程</strong>
            <a href="javascript:;" class="help">帮助？</a>
        </div>
        <div class="content">
            <div class="infos">
                <span class="name">{{$class_course['real_course_name']}}</span>
                <span class="price">
																	<i>&yen;</i><b>{{$class_course['real_course_price']}}</b><i></i>
								</span>
                <span class="deadline">

                    随课免费赠送<b>90天</b>慕课云服务 <a target="_blank" href="/user/faqdetail?column_id=4&id=13"><span>什么是云服务？</span></a>

					                </span>
            </div>
        </div>
        <div class="footer">
            <a href="javascript:;" class="cancel-btn" rel="modal:close">取消</a>
            <a data-href="/pay/buynow/cid/57" href='javascript:;' class="go-pay-btn">去支付</a>
        </div>
    </div>
</div>

<div style="display: none">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?c1c5f01e0fc4d75fd5cbb16f2e713d56";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>

</body>
</html>
