
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
PS入门教程——新手过招_学习笔记_慕课网
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375" />
<meta property="wb:webmaster" content="c4f857219bfae3cb" />
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta http-equiv="Cache-Control" content="no-transform " />

<meta name="Keywords" content="" />


<meta name="Description" content="慕课网推出的PS入门教程，PS入门学习必备课程，本课程将带你从PS的基本界面开始熟悉，ps入门课程主要分为三个章节，ps基本工具，ps选择与变形，ps色彩调整，通过小案例来学习简单的工具，终极目标就是先揭开PS的面纱，让你掌握PS的基本用法。"/>








<link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />




<script type="text/javascript">

var OP_CONFIG={"module":"course","page":"note","userInfo":{"uid":4911548}};
var isLogin = 1;
var is_choice = "";
var seajsTimestamp="v=2017022402353";
var _msg_unread = 0; 
var _not_unread = 0; 
var _cart_num = 0;
</script>








<script>
/*学习页通用配置*/
var GC = {
  course: {
    id: 139,
    name: 'PS入门教程——新手过招',
    pic: '',
    video_url: ''
  },
  classmates: 20 // 你的同学一页显示数量
};


</script>
<script>

var hasLearn;
    hasLearn = 0;

</script>




<link rel="stylesheet" href="{{asset('home')}}/Content/528263838f50485eac974749734fbe89.css" type="text/css" />
</head>
<body >

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="/" target="_self" class="hide-text" title="首页">慕课网</a></div>


        <button type="button" class="navbar-toggle visible-xs-block js-show-menu" >
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
                        <li class="set-btn visible-xs-block js-header-avator"><a href="/u/4911548" target="_self"><img width="40" height="40"></a></li>
                        
            <li>
                <a href="/course/list"  target="_self">课程</a>
            </li>
            <li><a href="/course/program" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="http://coding.imooc.com" target="_self">实战</a>
            </li>
            <li><a href="/wenda"  target="_self">猿问</a></li>
            <li><a href="/article"  target="_self">手记</a></li>
                                            <li class="visible-xs-block"><a href="/user/setprofile" target="_self">我的设置</a></li>
                <li class="visible-xs-block"><a href="/passport/user/logout?referer=http://www.imooc.com" target="_self">退出</a></li>
            
        </ul>
                <div id="login-area">
            <ul class="clearfix logined">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="icon-shopping-cart js-endcart"></span>
                        <span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                        <span>购物车</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"></div>
                </li>
                
                <li class='remind_warp'>
                    <i class="msg_remind"></i>
                    <a target="_blank" href='/u/4911548/notices'>
                        <i class='icon-notifi'></i>
                        <!-- <span class="msg_icon" style="display: none;"></span> -->
                    </a>
                </li>
        	   
                <li class="set_btn user-card-box" id='header-user-card'>
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu"  href="/u/4911548" target="_self">
                        <img width="40" height="40">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card"></div>
                </li>
            </ul>
        </div>
                <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
                            <div class="pa searchTags" >
                                    <a href="http://class.imooc.com/sc/17" target="_blank">安卓网络</a>
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
                        <i class="path-split">\</i><a href="/course/list?c=photo">UI设计</a>
                                    <i class="path-split">\</i><a href="/course/list?c=uitool">设计工具</a>
                        <i class="path-split">\</i><a href="/learn/139"><span>PS入门教程——新手过招</a></span>
        </div>
        <div class="hd clearfix">
            <h2 class="l"><?php echo $course['course_name']?></h2>
                    </div>

        <div class="statics clearfix">
            
                        <div class="moco-btn l learn-btn green-btn red-btn"> 
                <a href="/video/2147" class="J-learn-course">开始学习</a>
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
                <span class="meta-value"> 9小时45分</span>
                <em></em>
            </div>
            <div class="static-item l score-btn">
                <span class="meta">综合评分</span>
                <span class="meta-value"><?php echo $course['integral']?></span>
                <em></em>
                
                                
                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="/coursescore/139" class="person-num">
                            <span class="person-num l">342人评价</span>
                        </a>
                                                    <a href="/coursescore/139?page=1" class="evaluation-btn r">查看评价</a>
                                                <div class="score-detail-box">
                            <div class="score-static-item">
                                <span class="meta-value">9.9</span>
                                <span class="meta">内容实用</span>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.7</span>
                                <span class="meta">简洁易懂</span>
                                <em></em>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.4</span>
                                <span class="meta">逻辑清晰</span>
                                <em></em>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="extra">
            <!-- credit -->
            <div class="share-rl-tips share-posi js-share-statue">
                <span class="icon-drop_up share-triangle"></span>
                <span>分享即可 +</span><strong>1积分</strong>
            </div>
            <!-- share -->
            <div class="share-action r bdsharebuttonbox">
                <a href="javascript:;" class="share wx js-share icon-share-weichat" data-cmd="weixin"></a>
                <a href="javascript:;" class="share qq js-share icon-share-qq" data-cmd="qzone"></a>
                <a href="javascript:;" class="share sina js-share icon-share-weibo" data-cmd="tsina"></a>
            </div>
        </div>
    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="{{asset('home')}}/Picture/55af49cd00011fc206000338.jpg" alt="" style="display: none" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    </div>
    
        
</div>

<div class="course-info-main clearfix w">
    <div class="content-wrap clearfix">
        <div class="content">
            <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">简介：<?php echo $course['course_intro']?></p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu ">
	<ul class="course-menu clearfix">
		<li><a class="ui-tabs-active " id="learnOn"  href="{{URL('learnShow')}}?id=<?php echo $course['course_id']?>"><span>章节</span></a></li>
		<li><a id="commentOn" class="" href="{{URL('learnShow')}}?id=<?php echo $course['course_id']?>"><span>评论</span></a></li>
		<li><a id="qaOn" class="" href="{{URL('learnIssue')}}?id=<?php echo $course['course_id']?>"><span>问答</span></a></li>
		<li><a id="noteOn" class="active" href="{{URL('learnNote')}}?id=<?php echo $course['course_id']?>"><span>笔记</span></a></li>
	    <!--
        <li><a id="wikiOn" class="" href="/wiki/139">WIKI</a></li>
        -->
	</ul>
	
</div><!-- 课程面板 -->

            
<div id="course_note">
  <div class="course-tool-bar clearfix">
      <div class="tool-left l">
        <a href="#" class="sort-item active">最新</a>
        <a href="#" class="sort-item ">点赞</a>
      </div>

      <div class="tool-right r">
        
                
      </div>
  </div>
<ul id="js-note-container" class="mod-post">

<?php foreach($note as $k=>$v){ ?>
<li id="1591908" class="post-row js-find-txt" courseid="139" noteId="1591908" authorid="3032381">
  <div class="media">
    <a href="/u/3032381/courses" target="_blank"><img src="{{asset('home')}}/Picture/56e42a910001f95101800180-40-40.jpg" width="40" height="40"></a>
  </div>
  <div class="bd">
    <div class="tit">
      <a href="/u/3032381/courses" target="_blank"><?=$v['user_name'] ?></a>
    </div>
    <div class="js-notelist-content notelist-content mynote">
      <pre class="autowrap"><?=$v['note_content'] ?></pre>
     <!--  <div class="notelist-content-more">
        <a href="javascript:;" class="js-toggle-content">[ 查看全文 ]</a>
      </div> -->
    </div>
    <div class="clearfix">
      <input class="moco-btn moco-btn-green sava_btn" type="button" value="保存">
    </div>
            <div class="footer clearfix">
      <span title="17小时前" class="l timeago">时间：<?=$v['note_time'] ?></span>
      <a href="/video/3164" class="from l">源自：<?=$v['chapter_name'] ?></a>
      <div class="actions r">
        <textarea style="display:none;">扩大选取--要求连续
选取相似--不要求连续
选取的操作：扩展，收缩，平滑，边界
crtl+图层 选中该图层选取
Q 快速蒙版模式编辑</textarea>
        <a title="采集" href="javascript:;" class="Jcollect post-action "  data-mid="3164|3032381">
          <i>采集</i>
          <em>0</em>
        </a>
        <a title="赞" href="javascript:;" class="Jpraise post-action "  data-mid="3164">
          <span class="icon-thumb-revert"></span>
          <em>0</em>
        </a> 
      </div>
    </div>
  </div>
</li>
<?php } ?>


<li id="1587495" class="post-row js-find-txt" courseid="139" noteId="1587495" authorid="4479730">
  <div class="media">
    <a href="/u/4479730/courses" target="_blank"><img src="{{asset('home')}}/Picture/545847c10001f40702200220-40-40.jpg" width="40" height="40"></a>
  </div>
  <div class="bd">
    <div class="tit">
      <a href="/u/4479730/courses" target="_blank">慕粉1930564643</a>
    </div>
    <div class="js-notelist-content notelist-content mynote">
      <pre class="autowrap">可以采用矩尺工具把一个倾斜的物品给正过来，图像-旋转画布-任意角度</pre>
      <div class="notelist-content-more">
        <a href="javascript:;" class="js-toggle-content">[ 查看全文 ]</a>
      </div>
    </div>
    <div class="clearfix">
      <input class="moco-btn moco-btn-green sava_btn" type="button" value="保存">
    </div>
            <div class="footer clearfix">
      <span title="2天前" class="l timeago">时间：2天前</span>
      <a href="/video/2316" class="from l">源自：1-4 PS之图像的旋转和翻转</a>
      <div class="actions r">
        <textarea style="display:none;">可以采用矩尺工具把一个倾斜的物品给正过来，图像-旋转画布-任意角度</textarea>
        <a title="采集" href="javascript:;" class="Jcollect post-action "  data-mid="2316|4479730">
          <i>采集</i>
          <em>0</em>
        </a>
        <a title="赞" href="javascript:;" class="Jpraise post-action "  data-mid="2316">
          <span class="icon-thumb-revert"></span>
          <em>0</em>
        </a> 
      </div>
    </div>
  </div>
</li>

</ul>
<div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="/course/note/id/139?sort=last&page=2">2</a><a class="text-page-tag" href="/course/note/id/139?sort=last&page=3">3</a><a class="text-page-tag" href="/course/note/id/139?sort=last&page=4">4</a><a class="text-page-tag" href="/course/note/id/139?sort=last&page=5">5</a><a class="text-page-tag" href="/course/note/id/139?sort=last&page=6">6</a><a class="text-page-tag" href="/course/note/id/139?sort=last&page=7">7</a><a href="/course/note/id/139?sort=last&page=2">下一页</a><a href="/course/note/id/139?sort=last&page=316">尾页</a></div>
</div>

        </div>
        <div class="aside r">
            <div class="bd">
    
        
        <div class="box mb40 js-usercard-box">
        <h4>讲师提示</h4>
                        <div class="teacher-info">
            <a href="/u/141256/courses?sort=publish" target="_blank" >
                <img data-userid="141256" class="js-usercard-dialog" src="{{asset('home')}}/Picture/53855e6f0001034501400140-80-80.jpg" width="80" height="80">
            </a>
            <span class="tit">
                <a href="/u/141256/courses?sort=publish" target="_blank">Oeasy</a><i class="icon-imooc"></i>
            </span>
            <span class="job">页面重构设计</span>
        </div>
                                <div class="course-info-tip">
                        <dl class="first">
                <dt>课程须知</dt>
                <dd class="autowrap">零基础好上手，所有对Photoshop感兴趣的小伙伴都可以来学习</dd>
            </dl>
                                    <dl>
                <dt>老师告诉你能学到什么？</dt>
                <dd class="autowrap">PS基本界面及工具介绍</dd>
            </dl>
                    </div>
            </div>
    
    <div class="js-recom-box"></div>

</div>        </div>
    </div>
    <div class="clear"></div>

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
<script src="{{asset('home')}}/Scripts/ssologin.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scripts/sea.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scripts/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

 

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
