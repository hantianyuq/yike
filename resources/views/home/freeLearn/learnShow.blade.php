
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
            <?php echo $course['course_name']?>_YI课网
    </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375" />
<meta property="wb:webmaster" content="c4f857219bfae3cb" />
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta http-equiv="Cache-Control" content="no-transform " />

<meta name="Keywords" content="" />

<meta name="description" content="" />



<link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />



<script type="text/javascript">

var OP_CONFIG={"module":"course","page":"learn"};
var isLogin = 0;
var is_choice = "";
var seajsTimestamp="v=2016022402352";
var _msg_unread = 0; 
var _not_unread = 0; 
var _cart_num = 0;
</script>




<link rel="stylesheet" href="{{asset('home')}}/Content/08babe285ec04043ba72015fae972d65.css" type="text/css" />
</head>
<body >

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="/" target="_self" class="hide-text" title="首页">慕课网</a></div>


        <button type="button" class="navbar-toggle visible-xs-block js-show-menu" >
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
                        <li class="set-btn visible-xs-block"><a href="/user/newlogin" target="_self">登录</a> / <a href="/user/newsignup" target="_self">注册</a></li>
                        
            <li>
                <a href="/course/list" class="active" target="_self">课程</a>
            </li>
            <li><a href="/course/program" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="http://coding.imooc.com" target="_self">实战</a>
            </li>
            <li><a href="/wenda"  target="_self">猿问</a></li>
            <li><a href="/article"  target="_self">手记</a></li>
            
        </ul>
                <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <!-- <span class="icon-shopping-cart js-endcart"></span> -->
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
                <a href="" target="_blank">react</a>
            </div>
            
            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger"      type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'>
                <!-- <i class='icon-search'></i> -->
            </div>
        </div>
    </div>
</div>

<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button  class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">

<div class="course-infos">
    <div class="w pr">
        <div class="path">  
            <a href="/course/list">课程</a>
                        <i class="path-split">\</i><a href="/course/list?c=be">后端开发</a>
                                    <i class="path-split">\</i><a href="/course/list?c=C+puls+puls">C++</a>
                        <i class="path-split">\</i><a href="/learn/342"><span>C++远征之起航篇</a></span>
        </div>
        <div class="hd clearfix">
            <h2 class="l"><?php echo $course['course_name']?></h2>
                    </div>

        <div class="statics clearfix">
                                    <!-- moco-btn l learn-btn green-btn -->
                        <div class="moco-btn l learn-btn green-btn red-btn"> 
                <a href="/video/6577" class="J-learn-course">开始学习</a>
                <em></em>
                <i class="follow-action js-follow-action"></i>
            </div>
                        
            
                        
            <div class="static-item l">
                <span class="meta">学习人数</span>
                <span class="meta-value js-learn-num"><?php echo $course['learn_num']?></span>
                            </div>
            <div class="static-item l">
                <span class="meta">难度级别</span>
                <span class="meta-value"><?php echo $course['course_rank']?></span>
                <em></em>
            </div>
            <div class="static-item l">
                <span class="meta">课程时长</span>
                <span class="meta-value"> 1小时 6分</span>
                <em></em>
            </div>
            <div class="static-item l score-btn">
                <span class="meta">综合评分</span>
                <span class="meta-value"><?php echo $course['integral']?></span>
                <em></em>
                
                                
                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="/coursescore/342" class="person-num">
                            <span class="person-num l">587人评价</span>
                        </a>
                                                    <a href="/coursescore/342?page=1" class="evaluation-btn r">查看评价</a>
                                                <div class="score-detail-box">
                            <div class="score-static-item">
                                <span class="meta-value">9.9</span>
                                <span class="meta">内容实用</span>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.6</span>
                                <span class="meta">简洁易懂</span>
                                <em></em>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.5</span>
                                <span class="meta">逻辑清晰</span>
                                <em></em>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
       <!--  <div class="extra">
            <div class="share-rl-tips share-posi js-share-statue">
                <span class="icon-drop_up share-triangle"></span>
                <span>分享即可 +</span><strong>1积分</strong>
            </div>
            <div class="share-action r bdsharebuttonbox">
                <a href="javascript:;" class="share wx js-share icon-share-weichat" data-cmd="weixin"></a>
                <a href="javascript:;" class="share qq js-share icon-share-qq" data-cmd="qzone"></a>
                <a href="javascript:;" class="share sina js-share icon-share-weibo" data-cmd="tsina"></a>
            </div>
        </div> -->
    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="Picture/570760430001d17606000338.jpg" alt="" style="display: none" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    </div>
    
        
</div>


<div class="course-info-main clearfix w">
    <div class="content-wrap">
        <div class="content">
                        <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">简介：<?php echo $course['course_intro']?></p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu ">
    <ul class="course-menu clearfix">
        <li><a class="ui-tabs-active active" id="learnOn"  href="{{URL('learnShow')}}?id=<?php echo $course['course_id']?>"><span>章节</span></a></li>
        <li><a id="commentOn" class="" href="{{URL('home/Comment/show')}}?course_id=<?php echo $course['course_id']?>"><span>评论</span></a></li>
        <li><a id="qaOn" class="" href="{{URL('learnIssue')}}?id=<?php echo $course['course_id']?>"><span>问答</span></a></li>
        <li><a id="noteOn" class="" href="{{URL('learnNote')}}?id=<?php echo $course['course_id']?>"><span>笔记</span></a></li>
        <!--
        <li><a id="wikiOn" class="" href="/wiki/342">WIKI</a></li>
        -->
    </ul>
    
            </div>
<!-- 课程面板 -->
            <!-- 课程章节 -->
            <div class="mod-chapters">
                <?php foreach($section as $k=>$v){ ?>
                <div class="chapter chapter-active">
                    <!-- 章节标题 -->
                    <h3>
                        <span class=" js-close"></span>
                        <strong class='hide'>
                            <!-- <i class="icon-chapter"></i> -->
                            <?=$v['name'] ?>
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content"><?=$v['intro'] ?></div>
                                    </div>
                                </i>
                            </div>
                        </strong> 
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                        <ul class="video">
                        <?php foreach($v['child'] as $kk=>$vv){ ?>
                            <li data-media-id="6577">
                                <a href='/video/6577' class="J-media-item">
                                    <!-- <i class="icon-video type"></i> -->
                                        <?=$vv['chapter_name'] ?>            
                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                            </li>
                            <?php } ?>
                            <!-- <li data-media-id="6725">
                                <a href='/ceping/6725' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    1-2 练习
                                    <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                            <!-- </li> -->
                        </ul>
                                        <!-- 章节小节 end -->
                </div>  
                <?php } ?>
            </div>
        </div><!--content end-->

        <div class="aside r">
            <div class="bd">
    
        
                <div class="box mb40 js-usercard-box">
                <h4>讲师提示</h4>
                                <div class="teacher-info">
                    <a href="/u/1349694/courses?sort=publish" target="_blank" >
                        <img data-userid="1349694" class="js-usercard-dialog" src="Picture/550f82810001c44902200220-80-80.jpg" width="80" height="80">
                    </a>
                    <span class="tit">
                        <a href="/u/1349694/courses?sort=publish" target="_blank">james_yuan</a><i class="icon-imooc"></i>
                    </span>
                    <span class="job">学生</span>
                </div>
                    <div class="course-info-tip">
                    <dl class="first">
                        <dt>课程须知</dt>
                        <dd class="autowrap">本课程是C++初级课程
        在学习本课程之前需要熟练掌握C语言的基础语法</dd>
                    </dl>
                    <dl>
                        <dt>老师告诉你能学到什么？</dt>
                        <dd class="autowrap">1、C++语言新的数据类型
        2、C++语言新的输入输出方式
        3、C++语言的命名空间</dd>
                    </dl>
                    </div>
                </div>
    
            <div class="js-recom-box"></div>

            </div>        
        </div>
    </div>

    <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
</div>

</div>

<div id="footer" >
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
                        <li><a href="/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="/about/faq" target="_blank">常见问题</a></li>
                        <li> <a href="/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="/about/friendly" target="_blank">友情链接</a></li>
                       <!--  <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<div id="J_GotoTop" class="elevator">

    <a href="/user/feedback" class="elevator-msg" target="_blank">
        <i class="icon-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="/about/faq" class="elevator-faq" target="_blank">
        <i class="icon-ques"></i>
        <span class="">常见问题</span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="icon-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="icon-wxgzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="icon-up2"></i>
        <span class="">返回顶部</span>
    </a>
</div>



<!--script-->
<script src="{{asset('home')}}/Scipts/ssologin.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scipts/sea.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scipts/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>
<script src="{{asset('home')}}/js/jquery.js"></script>
<script>
    $(function(){
        $('.hide').click(function(){
            var _this = $(this);
            var str = $(this).parent().parent().attr('class');
            if(str == 'chapter chapter-active'){
                // alert(str);
                _this.parent().parent().attr('class','chapter');
            }else{
                _this.parent().parent().attr('class','chapter chapter-active');
            }
        })
    })
</script>
 

<script type="text/javascript">
  (function(){
    var imgPic = GC.course.pic || 'http://img.mukewang.com/static/img/common/logo.png',
        text = '我正在参加@慕课网  的一门课程【' + GC.course.name + '】，很不错哦！快来一起学习吧！', //节名称
        url = 'http://www.imooc.com' + window.location.pathname;

    window._bd_share_config = {
        "common": {
            "bdUrl": url,
            "bdSnsKey": {
              'tsina':'2254855082'
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
    setTimeout(function(){
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
        },1000)

  })();
</script>
<div class="mask"></div>


<div style="display: none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
(function (d) {
window.bd_cpro_rtid="rHT4P1c";
var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
})(document);
</script>
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div>
</body>
</html>
