
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php echo $course['course_name'] ?>_YI课网
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

var OP_CONFIG={"module":"course","page":"qa","userInfo":{"uid":4911548}};
var isLogin = 1;
var is_choice = "";
var seajsTimestamp="v=2017022402353";
var _msg_unread = 0; 
var _not_unread = 0; 
var _cart_num = 0;
</script>




<link rel="stylesheet" href="{{asset('home')}}/Content/ab4bc18fdce3498f9fceeac1429203be.css" type="text/css" />
</head>
<body >

@include("home.layouts.header")

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
    <!--     <div class="extra">
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
        <li>
            <a class="ui-tabs-active " id="learnOn"  href="{{URL('learnShow')}}?id=<?php echo $course['course_id']?>">
                <span>章节</span>
            </a>
        </li>
        <li>
            <a id="commentOn" class="" href="{{URL('home/Comment/show')}}?course_id=<?php echo $course['course_id']?>">
                <span>评论</span>
            </a>
        </li>
        <li>
            <a id="qaOn" class="active" href="{{URL('learnIssue')}}?id=<?php echo $course['course_id']?>">
                <span>问答</span>
            </a>
        </li>
        <li>
            <a id="noteOn" class="" href="{{URL('learnNote')}}?id=<?php echo $course['course_id']?>">
                <span>笔记</span>
            </a>
        </li>
        <!--
        <li><a id="wikiOn" class="" href="/wiki/139">WIKI</a></li>
        -->
    </ul>
    
</div><!-- 课程面板 -->

            

<div class="comp-filter-bar">
    <a href="/qa/139/t/1?page=1" class="bar-item active" >全部</a>
    <a href="/qa/139/t/2?page=1" class="bar-item " >精华</a>
    
        
</div>
<div class="answertabcon">
    <div class="course_quescon">
    <?php foreach($issue as $k=>$v){ ?>
        <div class="wenda-listcon mod-qa-list clearfix">
            <div class="headslider qa-medias l">
                <a href="/u/3394709/courses" class="media" target="_blank" title="慕粉61520"><img src="{{asset('home')}}/Picture/545868250001157802200220-40-40.jpg" width="40" height="40">
                <i class="icon-ques-revert nofinish"></i>
                </a>
            </div>
            <div class="wendaslider qa-content">
                <h2 class="wendaquetitle qa-header">
                    <a href="/u/3394709/courses" class="name" target="_blank" title="慕粉61520">
                        <?=$v['user_name'] ?>
                    </a>
                    <div class="wendatitlecon qa-header-cnt clearfix">
                        <a href="{{URL('learnAnswer')}}?id=<?=$v['issue_id'] ?>" target="_blank" class="qa-tit">
                            <i><?=$v['issue_title'] ?></i>
                        </a>
                    </div>
                </h2>
                <div class="replycont qa-body clearfix">
                    
                       <!--  <div class="replydes">
                            <span class="wait-answer">快来回答问题，最佳答案可 +<strong>3积分</strong></span>
                            <a href="/qadetail/200822" class="myanswer" target="_blank">我来回答</a>
                            <a href="/about/faq?t=3" target="_blank" class="what-credit">什么是积分</a>
                        </div> -->

                </div>
                <div class="replymegfooter qa-footer clearfix">
                    <div class="wenda-time">
                        <div class="l-box l">
                            <em><?=$v['issue_time'] ?></em>
                            <a href="#" target="_blank">源自:<?=$v['chapter_name'] ?></a>
                        </div>
                        <a href="{{URL('learnAnswer')}}?id=<?=$v['issue_id'] ?>" target="_blank" class="replynumber static-count r">
                            <span class="static-item answer">
                                <b class="val"><?=$v['hui'] ?></b>
                                <span class="key">回答</span>
                            </span>
                            <span class="static-item">
                                <b class="val">15</b>
                                <span class="key">浏览</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>                 
    </div>

    <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="/course/qa/id/139/t/1?page=2">2</a><a class="text-page-tag" href="/course/qa/id/139/t/1?page=3">3</a><a class="text-page-tag" href="/course/qa/id/139/t/1?page=4">4</a><a class="text-page-tag" href="/course/qa/id/139/t/1?page=5">5</a><a class="text-page-tag" href="/course/qa/id/139/t/1?page=6">6</a><a class="text-page-tag" href="/course/qa/id/139/t/1?page=7">7</a><a href="/course/qa/id/139/t/1?page=2">下一页</a><a href="/course/qa/id/139/t/1?page=123">尾页</a></div>
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



<script type="text/javascript" charset="utf-8" src="{{asset('home')}}/Scripts/ueditor.final.min.js"></script>

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

<!--积分弹出框-->
<div class="integral-pop" id="no-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>你的积分不足，无法发表</p>
        <a class="integral-rule" href="" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a href="javascript:void(0)" class="btn btn-green l cancel-cf">确认</a>
            <a href="javascript:void(0)" class="btn btn-grey r cancel-cf">取消</a>
        </div>
    </div>
</div>
<div class="integral-pop" id="enough-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>继续发表请点击 "确定"</p>
        <a class="integral-rule" href="" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a id="interal-use" href="javascript:void(0)" class="btn btn-green l">确认</a>
            <a id="interal-cancel" href="javascript:void(0)" class="btn btn-grey r">取消</a>
        </div>
    </div>
</div>
<!--问答弹出框 通用-->
<script type="text/imooc-tpl" id="course-qa-tpl">

    <div class="qa-pop">

            <div class="question-area">
                <div class="qa-control qa-ipt-title">
                    <input type="text" id="js-qa-title" maxlength="255" class="js-placeholder autocomplete" placeholder="请输入问题标题" />
                </div>
                <a href="http://www.imooc.com/wenda/detail/292353" target="_blank" class="another-meth">如何更好<br />的提问？</a>
                <dl class="send-area-result">
                </dl>
            </div>

        <div class="qa-control-wrap clearfix">
            <div class="qa-control">
                <div class="rich-text-editor">
                    <textarea id="discuss-editor" >请输入讨论内容...</textarea>
                </div>
            </div>
        </div>
        <div id="js-discuss-btm" class="discuss-bottom input-btm clearfix pop-footer">
            <div class="verify-code clearfix"></div>
                        <input id="js-discuss-submit" class="r moco-btn moco-btn-green" type="button" value="发布" />
        </div>
        <div id="use-credit-tip" class="use-credit-tip">
            <span class="credit-info">本次提问将花费2个积分</span>
            <a class="credit-rule" href="" target="_blank">为什么扣积分？</a>
        </div>
    </div>

</script>
<script type="text/imooc-tpl" id="tpl_qa">

<div class="wenda-listcon mod-qa-list clearfix" data-qid={id}>
    <div class="headslider qa-medias l">
        <a href="/u/{uid}/courses" class="media" target="_blank" title="{nickname}">
            <img src="{{asset('home')}}/Picture/9ab0366b593b4994885d195c920b637a.gif" width="40" height="40" />
            <i class="icon-ques-revert nofinish"></i>
        </a>
    </div>
    <div class="wendaslider qa-content">
        <h2 class="wendaquetitle qa-header">
            <a href="/u/{uid}/courses" class="name" target="_blank" title="{nickname}">
                {nickname}
            </a>
            <div class="wendatitlecon qa-header-cnt clearfix">
                <a href="/qadetail/{id}" target="_blank" class="qa-tit">
                    <i>{title}</i>
                </a>
            </div>
        </h2>
        <div class="replycont qa-body clearfix">
            <div class="replysign">
                <span class="replydet">嗯～～，这个提问大家都在考虑......</span>
            </div>
        </div>
        <div class="replymegfooter qa-footer">
            <div class="wenda-time">
                <div class="l-box l">
                    <em>时间：{time}</em>
                </div>
                <a href="/qadetail/{id}" target="_blank" class="replynumber static-count r">
                    <span class="static-item answer">
                        <b class="val">0</b>
                        <span class="key">回答</span>
                    </span>
                    <span class="static-item">
                        <b class="val">0</b>
                        <span class="key">浏览</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

</script>


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
