
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$class_course['real_course_name']}}-课程章节</title>
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
    <style type="text/css">
        .moco-modal-info {
            font-size: 14px;
            line-height: 20px;
        }
    </style>





    <script type="text/javascript">
        var OP_CONFIG={"module":"class","page":"chapter","userInfo":{"uid":"4651600","nickname":"qq_echo_47","head":"http:\/\/img.mukewang.com\/user\/585e910d0001aec101000100-80-80.jpg","usertype":"1","roleid":0,"phone":""}};
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
                    <i class='sz-add-shopping-cart'></i>
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

<div class='course-infos-t'>
    <div id='Anchor'></div>
    <div class="comp-tab-t js-comp-tab">
        <ul class='clearfix'>
            <li class="comp-tab-item-first comp-tab-item ">
                <a href="{{url('home/class')}}?real_course_id={{$course_id}}">课程介绍</a>
            </li>
            <li class="comp-tab-item active">
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
            <li class="fixed-nav-item-first fixed-nav-item ml0 ">
                <a href="{{url('home/class')}}?real_course_id={{$course_id}}">课程介绍</a>
            </li>
            <li class="fixed-nav-item active">
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

            <a href='javascript:;' class='js-addcart addcart' data-cid='57' data-type='1'>
                <span class='line'></span>
                <i class='sz-add-shopping-cart'></i>
            </a>

        </div>
    </div>


    <div class="infolayout clearfix">
        <div class="w">
            <div class="comp-tabs-pannel class-tab-pannel course-cmt">
                <div class="w chapter-box">
                    <div class="comp-tabs-pannel  outline-list">
                        <ul class='chapter-ul'>
                            @foreach($chapter as $key => $value)
                        <li class="chapter clearfix">

                                    <div class="chapter-bd l">
                                        <h5 class="name">{{$value['real_chapter_number']}} {{$value['real_chapter_name']}}</h5>
                                        <p class="desc">{{$value['real_chapter_intro']}}</p>
                                    </div>
                        </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="chapter-update-state over" style='padding-left: 72px;line-height: 58px;border-bottom: 1px solid #eceef0;color: #93999f;'>本课程已完结</div>
                </div>
            </div>
            ﻿<div class="recommendcourse">
                <!-- 讲师 -->
                <div class="recom-box">
                    <h3 class="box-tit">讲师</h3>
                    <div class="box-bd">
                        <div class="tea-inst">
                            <div class="medias">
                                <a href="http://www.imooc.com/t/2917629" data-href="http://www.imooc.com/space/teacher/id/2917629" target="_blank">
                                    <img src="{{asset('home')}}/Picture/589ae8ef00012f9711081111-100-100.jpg" class="media" alt="">
                                    <span class="name">360李捷</span>
                                    <i class="ic sz-imooc"></i>
                                </a>
                                <span class="job">PHP开发工程师</span>
                            </div>
                            <p class="desc">资深金牌讲师，80后，搞IT的，但不想被IT搞，PHP高级工程师，有六年项目开发经验，多家知名上市培训机构金牌讲师，某知名互联网公司高级服务端工程师，对Linux、PHP、Lua、MySQL等都有着较深入的研究，一直致力于服务端程序的培训和开发。</p>
                        </div>
                    </div><!-- 讲师 end -->
                    <!-- 课前必学 -->
                    <div class="js-prelearn" data-id="57">

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

    <script src="{{asset('home')}}/Scripts/ssologin.js"></script>
    <script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>

    <script type="text/javascript" src="{{asset('home')}}/Scripts/require.js"></script>
    <script src='{{asset('home')}}/Scripts/jquery.min.js'></script>


    <script>
        requirejs.config({
            urlArgs:seajsTimestamp,
            baseUrl: '/static/module/',
            skipDataMain: true,
            waitSeconds: 0,
            paths: {
                lib: '/static/lib',
                jwplayer: '/static/lib/jwplayer/1.0.0/jwplayer.js',
                ide: '/static/lib/ide/dest/ide.min.js',
                juicer: '/static/lib/juicer/juicer.min.js',
                ace:'/static/lib/ace1.2.6/ace.js',
                autocomplete:'/static/lib/util/autocomplete.js',
                validate:'/static/lib/util/validate.js',
                placeholder:'/static/lib/util/placeholder.js',
                modalbutton:'/static/lib/util/modal.button.js',
                scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
                ueditor: '/static/lib/ueditor/ueditor.final.min.js',
                store: '/static/lib/store/store.min.js',
                pagination: '/static/lib/pagination/jquery.pagination.js',
                SyntaxHighlighter:'/static/lib/ueditor/third-party/SyntaxHighlighter/shCore.js',
                socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
                clipbord: '/static/lib/clipboard/dist/clipboard.min.js',
                swfobject: '/static/lib/swfobject/2.2/swfobject.min.js',
                jqueryValidate: '/static/lib/jquery-validate/jquery.validate.min.js'
            },
            shim: {
                'ide': {
                    exports: 'ide'
                },
                'swfobject': {
                    exports: 'swfobject'
                }
            }
        });
    </script>




    <script>/*RESOURCE_MAP*/</script>
    <script src='{{asset('home')}}/Scripts/jquery.fly.js'></script>
    <!--[if gte IE 9]><script src='{{asset('home')}}/Scripts/requestanimationframe.js'></script><![endif]-->
    <script data-entry="class/index">
        requirejs(['class/index'], function(){
        });
        (function(){
            var imgPic = 'http://szimg.mukewang.com/579190240001d51d05400300-280-160.jpg' || 'http://img.mukewang.com/static/img/common/logo.png',
                    text = '我正在参加@慕课网 的一门课程【' + '{{$class_course['real_course_name']}}' + '】，很不错哦！快来一起学习吧！', //节名称
                    url = 'http://coding.imooc.com' + window.location.pathname;

            window._bd_share_config = {
                "common": {
                    "bdUrl": url,
                    "bdSnsKey": {
                        'tsina':'2788596354'
                    },
                    "bdText": text,
                    "bdMini": "2",
                    "bdMiniList": false,
                    "bdPic": imgPic,
                    "bdStyle": "0",
                    "bdSize": "16"
                },
                "share": {}
            };
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
        })();
    </script>


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
																	<i>&yen;</i><b>268</b><i>.00</i>
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
