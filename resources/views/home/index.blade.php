
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IT技术问答平台_-慕课网猿问</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta name="Keywords" content="IT程序员技术交流与问答,技术问答,慕课网社区,编程技术问答,技术问答平台,IT技术社区" />
    <meta name="Description" content="猿问是由慕课网为广大IT爱好者提供的专业问答交流平台,这里大牛云集,用户可根据自身需求,提出相关问题,也可为有问题同学进行解答,互帮互助,分享知识！" />

    <meta name="viewport" content="width=device-width,target-densitydpi=high-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>



    <link rel="stylesheet" href="{{asset('home/')}}/Content/moco.min.css" type="text/css" />

    {{--<script type="text/javascript">--}}

    {{--eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('!4(){3 6=a;3 l=4(){3 b,e=9 y("(^| )"+"c=([^;]*)(;|$)");j(b=h.g.z(e)){k w(b[2])}x{k a}};3 8=4(t){3 f=l();3 7=9 o();7.A(7.d()+B*i*i*r);h.g="c="+t+";s="+7.M()+";N=/;L=O.m";j(t&&t!=f){Q.P.G()}};3 5=9 E();5.H=4(){K(6);6=a;8(0)};5.J=4(){8(1)};6=I(4(){5.n="";8(1)},F);5.n=\'R://p.u.m/p/v/q/D.C?t=\'+9 o().d()}()',54,54,'|||var|function|imgobj|timer|exp|setcookie|new|null|arr|IMCDNS|getTime|reg|_0|cookie|document|60|if|return|getcookie|com|src|Date|static|common|1000|expires||mukewang|img|unescape|else|RegExp|match|setTime|24|png|logo|Image|3000|reload|onload|setTimeout|onerror|clearTimeout|domain|toGMTString|path|imooc|location|window|http'.split('|'),0,{}))--}}

    {{--</script>--}}


    <script type="text/javascript">

        var OP_CONFIG={"module":"wenda","page":"index"};
        var isLogin = 0;
        var is_choice = "0";
        var seajsTimestamp="v=2016022402352";
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
    </script>







    <link rel="stylesheet" href="{{asset('home/')}}/Content/3fea7b1770434fe8bff19199d75b3d0c.css" type="text/css" />
</head>
<body >

{{--header start--}}
@include('home.layouts.header')
{{--header end--}}

<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button  class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">


    <div class="wenda clearfix">

        <div class="js-layout-change">
            <div class="l wenda-main">
                <div class="wd-top-slogan">
                    <span>程序员自己的问答社区</span>
                    <a class="js-quiz" href="{{url('home/myanswer')}}">我要提问</a>
                </div>
                <div class="nav">
                    <a href="/wenda" class="active">推荐</a>
                    <a href="/wenda/new" >最新</a>
                    <a href="/wenda/waitreply" >等待回答</a>
                </div><!--.nav end-->

                <!--推荐位-->
                <ul class="recommend">
                    <li><i class="icon-flag2"></i><a href="http://www.imooc.com/act/annulreport16/" data-ast="yuanwenindex_1_862" target="_blank" title="2016慕课网年度学习报告">2016慕课网年度学习报告</a></li>
                </ul><!--recommend end-->
                <!--左侧列表内容-->
                <div class="wenda-list">
                    <script>
                        window._bd_share_config = {
                            share : [
                                {
                                    "tag" : 'share_342838',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342838',
                                    "bdText":'[慕课猿问：java链接不上数据库，怎么解决！ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228838',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228838',
                                    "bdText":'[慕课猿问：java链接不上数据库，怎么解决！ 回答者:居正w (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342831',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342831',
                                    "bdText":'[慕课猿问：css+div布局优点体现在哪 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228781',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228781',
                                    "bdText":'[慕课猿问：css+div布局优点体现在哪 回答者:习惯受伤 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342867',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342867',
                                    "bdText":'[慕课猿问：预览大图效果为什么不能正常显示？ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228879',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228879',
                                    "bdText":'[慕课猿问：预览大图效果为什么不能正常显示？ 回答者:习惯受伤 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342862',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342862',
                                    "bdText":'[慕课猿问：目前是 Vue 好点还是 react 好点？ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342842',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342842',
                                    "bdText":'[慕课猿问：怎么用DOM创建a节点 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342791',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342791',
                                    "bdText":'[慕课猿问：我明明打了 public class 为什么还说我没有 class？ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228685',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228685',
                                    "bdText":'[慕课猿问：我明明打了 public class 为什么还说我没有 class？ 回答者:云naive (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342827',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342827',
                                    "bdText":'[慕课猿问：js中的return (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228768',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228768',
                                    "bdText":'[慕课猿问：js中的return 回答者:woshiajuana (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342815',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342815',
                                    "bdText":'[慕课猿问：怎样实现图片轮播效果 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228815',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228815',
                                    "bdText":'[慕课猿问：怎样实现图片轮播效果 回答者:学习js (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342784',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342784',
                                    "bdText":'[慕课猿问：\n 这个符号该怎么用 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228763',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228763',
                                    "bdText":'[慕课猿问：\n 这个符号该怎么用 回答者:i杜克 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342826',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342826',
                                    "bdText":'[慕课猿问：为什么输出没结果 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342794',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342794',
                                    "bdText":'[慕课猿问：我不知道哪错了，求大神 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228720',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228720',
                                    "bdText":'[慕课猿问：我不知道哪错了，求大神 回答者:風雨兼程 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342836',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342836',
                                    "bdText":'[慕课猿问：不学C++直接学数据结构可以吗？ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228793',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228793',
                                    "bdText":'[慕课猿问：不学C++直接学数据结构可以吗？ 回答者:ziom (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342829',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342829',
                                    "bdText":'[慕课猿问：web前端页面 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228777',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228777',
                                    "bdText":'[慕课猿问：web前端页面 回答者:习惯受伤 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342780',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342780',
                                    "bdText":'[慕课猿问：学习数据库基础，从哪开始？ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228654',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228654',
                                    "bdText":'[慕课猿问：学习数据库基础，从哪开始？ 回答者:justwander (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342764',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342764',
                                    "bdText":'[慕课猿问：网页布局问题 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228619',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228619',
                                    "bdText":'[慕课猿问：网页布局问题 回答者:渠清 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342872',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342872',
                                    "bdText":'[慕课猿问：学完了C不知道方向 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342774',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342774',
                                    "bdText":'[慕课猿问：QQ照片多文件上传是怎么实现的？ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228735',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228735',
                                    "bdText":'[慕课猿问：QQ照片多文件上传是怎么实现的？ 回答者:习惯受伤 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342801',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342801',
                                    "bdText":'[慕课猿问：编程求解，谢谢！ (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228738',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228738',
                                    "bdText":'[慕课猿问：编程求解，谢谢！ 回答者:祎隋 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342869',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342869',
                                    "bdText":'[慕课猿问：写Java学生管理系统，怎样把信息录入到txt里删除或增加学生后，又怎样更新 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342771',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342771',
                                    "bdText":'[慕课猿问：js 中 null和undefined的区别 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228731',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228731',
                                    "bdText":'[慕课猿问：js 中 null和undefined的区别 回答者:习惯受伤 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342868',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342868',
                                    "bdText":'[慕课猿问：javac HelloIMooc.java时报错 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228878',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228878',
                                    "bdText":'[慕课猿问：javac HelloIMooc.java时报错 回答者:习惯受伤 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342821',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342821',
                                    "bdText":'[慕课猿问：字符串转换json对象 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342864',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342864',
                                    "bdText":'[慕课猿问：有没有介绍eclipse的相关文档啊 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228881',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228881',
                                    "bdText":'[慕课猿问：有没有介绍eclipse的相关文档啊 回答者:_GoldenRain (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342863',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342863',
                                    "bdText":'[慕课猿问：input标签上传文件，用js获取的文件路径一律都被浏览器改为C:\fakepath，怎么破 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_320982',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/320982',
                                    "bdText":'[慕课猿问：刷分零容忍！关于刷分用户的处罚公告 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_173959',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/173959',
                                    "bdText":'[慕课猿问：刷分零容忍！关于刷分用户的处罚公告 回答者:爱生活爱胖胖 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342860',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342860',
                                    "bdText":'[慕课猿问：安装VC6.0中文版一直显示不兼容 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_228883',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/228883',
                                    "bdText":'[慕课猿问：安装VC6.0中文版一直显示不兼容 回答者:习惯受伤 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_321340',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/321340',
                                    "bdText":'[慕课猿问：腾讯游戏大牛在线，有问题尽管来 (分享自@慕课网)#慕课爱分享#'
                                }
                                ,{
                                    "tag" : 'share_answer_175008',
                                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/175008',
                                    "bdText":'[慕课猿问：腾讯游戏大牛在线，有问题尽管来 回答者:xiemioc (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342859',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342859',
                                    "bdText":'[慕课猿问：Node怎么把这个相等的返回来?为什么会Undefined? (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342816',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342816',
                                    "bdText":'[慕课猿问：哪位大神有vs2015和vs2013的压缩包? (分享自@慕课网)#慕课爱分享#'
                                }
                                ,            {
                                    "tag" : 'share_342857',
                                    "bdUrl" : 'http://www.imooc.com/wenda/detail/342857',
                                    "bdText":'[慕课猿问：H5游戏如何制作呢？ (分享自@慕课网)#慕课爱分享#'
                                }

                            ]
                        };
                    </script>

                    {{--------------------------------------------------推荐---start----------------------------------}}
                    @foreach($recommend as $key=>$val)
                        <div class="ques-answer">
                            <div class="tag-img">
                                <a href="/wenda/17" target="_blank">
                                    <img src="{{asset('home/')}}/Picture/563aff440001e80700900090.jpg" title="JavaScript"/>
                                </a>
                            </div><!--.tag-img end-->
                            <div class="from-tag">        来自
                                <a href="{{url('home/detail')}}?answer_id={{$val['answer_id']}}&&user_id={{$val['user_id']}}" target="_blank">{{$val[0]}}</a>
                            </div><!--.from-tag end-->
                            <div class="ques-con">
                                <a href="{{url('home/detail')}}?answer_id={{$val['answer_id']}}&&user_id={{$val['user_id']}}" class="ques-con-content" target="_blank" title={{$val['answer_content']}}>{{$val['answer_title']}}</a>

                            </div>
                            <div class="answer-con first" data-answer-id="228768" id="answer-con">
                                <div class="user">



                                </div>
                                <div class="answer-content">{{$val['answer_content']}}</div>
                                <div class="ctrl-bar clearfix">
                                    <span class="agree-with " data-ques-id="342827" data-answer-id="228768" data-hasop=""><b>赞同</b><em>1</em></span>
                                    <span class="oppose " data-ques-id="342827" data-answer-id="228768" data-hasop="">反对</span>

                                    <div class="share-box clearfix">

                                        <div class="show-btn"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more">分享</a></div>  </div>


                                        <div class="share-box-con">
                                            <div class="bdsharebuttonbox" data-tag="share_answer_228768" data-quesid="342827">
                                                <a class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                                                <a class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                                                <a class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                                            </div>
                                        </div>

                                    </div>

                                </div><!--.ctrl-bar end-->
                            </div><!--.answer-con end-->

                        </div><!--.ques-answer end-->
                    @endforeach


                    {{--------------------------------------------------推荐-end------------------------------------}}

                    <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="/wenda/recommend/2">2</a><a class="text-page-tag" href="/wenda/recommend/3">3</a><a class="text-page-tag" href="/wenda/recommend/4">4</a><a class="text-page-tag" href="/wenda/recommend/5">5</a><a class="text-page-tag" href="/wenda/recommend/6">6</a><a class="text-page-tag" href="/wenda/recommend/7">7</a><a href="/wenda/recommend/2">下一页</a><a href="/wenda/recommend/1373">尾页</a></div>


                </div>
            </div>
            <div class="r wenda-slider">


                {{--登录 start--}}
                <div id='islogin' style="display: none">

                    <div class="user-about">
                        <div class="user-info">
                            <div class="user-pic">
                                <a href="/u/3310018/bbs">
                                    <img src="http://img.mukewang.com/5729f1bd0001dce001000099-100-100.jpg" alt="qq_謎之嘚殇_03310018"/>
                                </a>
                            </div>
                            <div class="user-name">
                                <a href="/u/3310018/bbs">qq_謎之嘚殇_03310018</a>
                            </div>
                            <div class="integral-info clearifx">
                                <a href="/u/3310018/credit" class="integral">积分：0</a>
                                <a href="/mall/index" class="integral-mall">积分商城</a>
                            </div>
                        </div><!--.user-info end-->
                        <div class="user-action">
                            <span class="ques"><a href="/u/3310018/bbs">提问</a><!-- <i></i>--></span>
                            <span class="reply"><a href="/u/3310018/bbs?sort=reply">回答</a></span>
                            <span class="follow"><a href="/u/3310018/bbs?sort=follow">关注</a></span>
                        </div><!--.user-action end-->
                    </div><!--.user-about end-->

                    <!--.my-follow-class登录后可见-->
                    <div class="my-follow-class">
                        <h3>我关注的分类 <span class="js-open">+</span></h3>
                        <div class="no-tag">
                            <h4>您还没有关注任何分类</h4>
                            <div class="follow-immediately">马上关注</div>
                        </div><!--.no-tag end-->
                    </div>
                </div>
                {{--登录 end--}}
                <!--.my-follow-class登录后可见-->

                <div class="recommend-class">
                    <div class="title clearfix">
                        <h3>推荐分类</h3>
                        <span class="all-cls">全部分类</span>
                    </div><!--title end-->
                    <ul class="cls-list">
                        @foreach($recommendType as $val)
                            <li>
                                <div class="class-info">
                                    <div class="class-icon">
                                        <a href="/wenda/26" target="_blank">
                                            <img src="{{asset('home/')}}/Picture/563b0af800018db300900090.jpg" alt="前端工具"/>
                                        </a>
                                    </div><!--.class-icon end-->
                                    <h4><a href="/wenda/26" target="_blank">{{$val['type_name']}}</a></h4>
                                    <p class="follow-person">{{$val['type_number']}}人关注</p>
                                    <a href="javascript:void(0)" data-tag-id="26" class="follow">关注</a>
                                </div><!--.class-info end-->
                                <div class="desc">{{$val['intro']}}</div>
                            </li><!--li end-->

                        @endforeach
                    </ul><!--.cls-list end-->
                </div><!--.recommend-class end-->

                <div class="advertisement">
                    <a href="http://www.imooc.com/wenda/detail/323381" data-ast="yuanwenindexright_1_871" >
                        <img src="{{asset('home/')}}/Picture/587df61d00016c5402800100.jpg" alt="经验谈"/>
                    </a>
                </div><!--.advertisement end-->
                <div class="hot-ques">
                    <h3 class="title">热门问题</h3>
                    <ul>
                        <li>
                            <p class="content"><a target="_blank" href="/wenda/detail/332686">话说，大家想编程的最初初衷是什么</a></p>
                            <div class="info-bar clearfix">
                                <a target="_blank" href="/wenda/detail/332686" class="answer-num">279 回答</a>
                                <a target="_blank" href="/wenda/detail/332686" class="follow-num">7 关注</a>
                                <a target="_blank" href="/wenda/28" class="from">来自 C</a>
                            </div>
                        </li>
                        <li>
                            <p class="content"><a target="_blank" href="/wenda/detail/321340">腾讯游戏大牛在线，有问题尽管来</a></p>
                            <div class="info-bar clearfix">
                                <a target="_blank" href="/wenda/detail/321340" class="answer-num">119 回答</a>
                                <a target="_blank" href="/wenda/detail/321340" class="follow-num">9 关注</a>
                                <a target="_blank" href="/wenda/5" class="from">来自 Html/CSS</a>
                            </div>
                        </li>
                        <li>
                            <p class="content"><a target="_blank" href="/wenda/detail/338299">java好学吗.??pp</a></p>
                            <div class="info-bar clearfix">
                                <a target="_blank" href="/wenda/detail/338299" class="answer-num">72 回答</a>
                                <a target="_blank" href="/wenda/detail/338299" class="follow-num">4 关注</a>
                                <a target="_blank" href="/wenda/3" class="from">来自 JAVA</a>
                            </div>
                        </li>
                        <li>
                            <p class="content"><a target="_blank" href="/wenda/detail/320028">在那么多次想放弃的时候，坚持下来的理由是什么呢</a></p>
                            <div class="info-bar clearfix">
                                <a target="_blank" href="/wenda/detail/320028" class="answer-num">64 回答</a>
                                <a target="_blank" href="/wenda/detail/320028" class="follow-num">9 关注</a>
                                <a target="_blank" href="/wenda/17" class="from">来自 JavaScript</a>
                            </div>
                        </li>
                    </ul><!--ul end-->
                </div><!--.hot-ques end-->

                <div class="leifeng-sort">
                    <h3 class="title clearfix">
                        <span>回答雷锋榜</span>
                        <span class='leifeng-tab js-leifeng-tab' data-type='week'>一周</span>
                        <span class='leifeng-tab js-leifeng-tab active' data-type='day'>今日</span>
                    </h3>

                    <div class='leifeng-tab-box leifeng-day js-leifeng-tab-box' data-type='day'>
                        <ul class='leifeng-tab-box-min'>
                            <li>
                                <div class="ranking first">1</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/4499997/bbs">
                                        <img src="{{asset('home/')}}/Picture/583d2ab20001050406400640-100-100.jpg" title="习惯受伤"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/4499997/bbs">习惯受伤</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">全栈工程师</span>
                                    <span class="answer-num">26回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking second">2</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/2902820/bbs">
                                        <img src="{{asset('home/')}}/Picture/57b58b44000182fb01500150-100-100.jpg" title="名分开就是姓名"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/2902820/bbs">名分开就是姓名...</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">学生</span>
                                    <span class="answer-num">17回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking third">3</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/2541334/bbs">
                                        <img src="{{asset('home/')}}/Picture/56434e100001a1c504190419-100-100.jpg" title="居正w"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/2541334/bbs">居正w</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">学生</span>
                                    <span class="answer-num">8回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">4</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/1088132/bbs">
                                        <img src="{{asset('home/')}}/Picture/5485bdcf00015df201000100-100-100.jpg" title="Caballarii"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/1088132/bbs">Caballarii</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">JAVA开发工程师</span>
                                    <span class="answer-num">8回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">5</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/1121955/bbs">
                                        <img src="{{asset('home/')}}/Picture/545861d500015cc602200220-100-100.jpg" title="hulukid"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/1121955/bbs">hulukid</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">JAVA开发工程师</span>
                                    <span class="answer-num">6回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">6</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/3440701/bbs">
                                        <img src="{{asset('home/')}}/Picture/574d2ed20001ce4e01000100-100-100.jpg" title="_GoldenRain"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/3440701/bbs">_GoldenRain</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">JAVA开发工程师</span>
                                    <span class="answer-num">6回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">7</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/1971860/bbs">
                                        <img src="{{asset('home/')}}/Picture/555ad1260001e79302790279-100-100.jpg" title="ziom"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/1971860/bbs">ziom</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">学生</span>
                                    <span class="answer-num">5回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">8</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/2056728/bbs">
                                        <img src="{{asset('home/')}}/Picture/557e5cfa0001b4e601000100-100-100.jpg" title="KevenHuang"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/2056728/bbs">KevenHuang</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">PHP开发工程师</span>
                                    <span class="answer-num">4回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">9</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/4133220/bbs">
                                        <img src="{{asset('home/')}}/Picture/57f69c7100011e1101000099-100-100.jpg" title="祎隋"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/4133220/bbs">祎隋</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">学生</span>
                                    <span class="answer-num">4回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">10</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/3233775/bbs">
                                        <img src="{{asset('home/')}}/Picture/587475030001b86a05800331-100-100.jpg" title="牛奶小哥哥"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/3233775/bbs">牛奶小哥哥</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">Web前端工程师</span>
                                    <span class="answer-num">3回答</span>
                                </div><!--.user-info end-->
                            </li>
                        </ul>
                        <div class='lyleif'><span class='js-lyleif'>显示另外5个雷锋</span></div>
                    </div>

                    <div class='leifeng-tab-box leifeng-week js-leifeng-tab-box' data-type='week'>
                        <ul class='leifeng-tab-box-min'>
                            <li>
                                <div class="ranking first">1</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/1971860/bbs">
                                        <img src="{{asset('home/')}}/Picture/555ad1260001e79302790279-100-100.jpg" title="ziom"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/1971860/bbs">ziom</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">学生</span>
                                    <span class="answer-num">64回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking second">2</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/4499997/bbs">
                                        <img src="{{asset('home/')}}/Picture/583d2ab20001050406400640-100-100.jpg" title="习惯受伤"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/4499997/bbs">习惯受伤</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">全栈工程师</span>
                                    <span class="answer-num">47回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking third">3</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/2056728/bbs">
                                        <img src="{{asset('home/')}}/Picture/557e5cfa0001b4e601000100-100-100.jpg" title="KevenHuang"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/2056728/bbs">KevenHuang</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">PHP开发工程师</span>
                                    <span class="answer-num">29回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">4</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/3233849/bbs">
                                        <img src="{{asset('home/')}}/Picture/533e4cbd00011ecc01000100-100-100.jpg" title="学习js"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/3233849/bbs">学习js</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">学生</span>
                                    <span class="answer-num">19回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">5</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/2855983/bbs">
                                        <img src="{{asset('home/')}}/Picture/5458502c00012d4a02200220-100-100.jpg" title="time_is_everything"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/2855983/bbs">time_is_everythi...</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">JAVA开发工程师</span>
                                    <span class="answer-num">16回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">6</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/1088132/bbs">
                                        <img src="{{asset('home/')}}/Picture/5485bdcf00015df201000100-100-100.jpg" title="Caballarii"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/1088132/bbs">Caballarii</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">JAVA开发工程师</span>
                                    <span class="answer-num">14回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">7</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/2698756/bbs">
                                        <img src="{{asset('home/')}}/Picture/566d43c80001575c01000100-100-100.jpg" title="夢想的星辰"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/2698756/bbs">夢想的星辰</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">Web前端工程师</span>
                                    <span class="answer-num">11回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">8</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/1020706/bbs">
                                        <img src="{{asset('home/')}}/Picture/546353070001b3eb01000097-100-100.jpg" title="蜂之谷"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/1020706/bbs">蜂之谷</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">移动开发工程师</span>
                                    <span class="answer-num">10回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">9</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/2699509/bbs">
                                        <img src="{{asset('home/')}}/Picture/58380a200001214801800180-100-100.jpg" title="woshiajuana"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/2699509/bbs">woshiajuana</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">Web前端工程师</span>
                                    <span class="answer-num">10回答</span>
                                </div><!--.user-info end-->
                            </li>
                            <li>
                                <div class="ranking ">10</div>
                                <div class="user-pic">
                                    <a target="_blank" href="/u/112291/bbs">
                                        <img src="{{asset('home/')}}/Picture/54584f8f00019fc002200220-100-100.jpg" title="云naive"/>
                                    </a>
                                </div><!--.user-pic end-->
                                <div class="user-name">
                                    <a target="_blank" href="/u/112291/bbs">云naive</a>
                                </div><!--.user-name end-->
                                <div class="user-info clearfix">
                                    <span class="role">学生</span>
                                    <span class="answer-num">9回答</span>
                                </div><!--.user-info end-->
                            </li>
                        </ul>
                        <div class='lyleif'><span class='js-lyleif'>显示另外5个雷锋</span></div>
                    </div>
                </div><!--.leifeng-sort end-->

            </div>
        </div>
    </div>

    <div class="tag-pop" id="tag-pop">
        <div class="shade"></div>
        <div class="tag-main">
            <h3><span>关注我喜欢或专注的猿问分类</span> <i class="icon-close2 js-close"></i></h3>
            <ul class="tag-list clearfix">
                <li data-tag-id="12" >
                    <img src="{{asset('home/')}}/Picture/563aff7e0001c8c700900090.jpg" alt=""/>
                    <span>Android</span>
                </li>
                <li data-tag-id="22" >
                    <img src="{{asset('home/')}}/Picture/563afef30001025000900090.jpg" alt=""/>
                    <span>AngularJS</span>
                </li>
                <li data-tag-id="24" >
                    <img src="{{asset('home/')}}/Picture/563afee70001ccbe00900090.jpg" alt=""/>
                    <span>Bootstrap</span>
                </li>
                <li data-tag-id="28" >
                    <img src="{{asset('home/')}}/Picture/563afeb5000149c000900090.jpg" alt=""/>
                    <span>C</span>
                </li>
                <li data-tag-id="38" >
                    <img src="{{asset('home/')}}/Picture/563afd4600014d7e00900090.jpg" alt=""/>
                    <span>C#</span>
                </li>
                <li data-tag-id="30" >
                    <img src="{{asset('home/')}}/Picture/563afe97000178c200900090.jpg" alt=""/>
                    <span>C++</span>
                </li>
                <li data-tag-id="34" >
                    <img src="{{asset('home/')}}/Picture/563afdfb000167f300900090.jpg" alt=""/>
                    <span>Cocos2d-x</span>
                </li>
                <li data-tag-id="25" >
                    <img src="{{asset('home/')}}/Picture/563afed80001928100900090.jpg" alt=""/>
                    <span>CSS3</span>
                </li>
                <li data-tag-id="31" >
                    <img src="{{asset('home/')}}/Picture/563afe8400019fbc00900090.jpg" alt=""/>
                    <span>Go</span>
                </li>
                <li data-tag-id="5" >
                    <img src="{{asset('home/')}}/Picture/563affe40001680c00900090.jpg" alt=""/>
                    <span>Html/CSS</span>
                </li>
                <li data-tag-id="14" >
                    <img src="{{asset('home/')}}/Picture/563aff620001ec7600900090.jpg" alt=""/>
                    <span>Html5</span>
                </li>
                <li data-tag-id="19" >
                    <img src="{{asset('home/')}}/Picture/563aff2000019d0700900090.jpg" alt=""/>
                    <span>iOS</span>
                </li>
                <li data-tag-id="3" >
                    <img src="{{asset('home/')}}/Picture/563afff200010a9f00900090.jpg" alt=""/>
                    <span>JAVA</span>
                </li>
                <li data-tag-id="17" >
                    <img src="{{asset('home/')}}/Picture/563aff440001e80700900090.jpg" alt=""/>
                    <span>JavaScript</span>
                </li>
                <li data-tag-id="15" >
                    <img src="{{asset('home/')}}/Picture/563aff530001428b00900090.jpg" alt=""/>
                    <span>JQuery</span>
                </li>
                <li data-tag-id="20" >
                    <img src="{{asset('home/')}}/Picture/563aff130001c76f00900090.jpg" alt=""/>
                    <span>Linux</span>
                </li>
                <li data-tag-id="7" >
                    <img src="{{asset('home/')}}/Picture/563affd00001cc8a00900090.jpg" alt=""/>
                    <span>Maya</span>
                </li>
                <li data-tag-id="8" >
                    <img src="{{asset('home/')}}/Picture/563affc20001ce1000900090.jpg" alt=""/>
                    <span>MongoDB</span>
                </li>
                <li data-tag-id="11" >
                    <img src="{{asset('home/')}}/Picture/563aff910001771f00900090.jpg" alt=""/>
                    <span>Mysql</span>
                </li>
                <li data-tag-id="13" >
                    <img src="{{asset('home/')}}/Picture/563aff700001005200900090.jpg" alt=""/>
                    <span>Node.js</span>
                </li>
                <li data-tag-id="29" >
                    <img src="{{asset('home/')}}/Picture/563afea70001be2b00900090.jpg" alt=""/>
                    <span>Oracle</span>
                </li>
                <li data-tag-id="10" >
                    <img src="{{asset('home/')}}/Picture/563affa10001301000900090.jpg" alt=""/>
                    <span>Photoshop</span>
                </li>
                <li data-tag-id="2" >
                    <img src="{{asset('home/')}}/Picture/563afd9d0001d30a00900090.jpg" alt=""/>
                    <span>PHP</span>
                </li>
                <li data-tag-id="9" >
                    <img src="{{asset('home/')}}/Picture/563affb10001bbc500900090.jpg" alt=""/>
                    <span>Premiere</span>
                </li>
                <li data-tag-id="18" >
                    <img src="{{asset('home/')}}/Picture/563aff300001f47400900090.jpg" alt=""/>
                    <span>Python</span>
                </li>
                <li data-tag-id="50" >
                    <img src="{{asset('home/')}}/Picture/579f2f59000130cc02400240.jpg" alt=""/>
                    <span>React.JS</span>
                </li>
                <li data-tag-id="54" >
                    <img src="{{asset('home/')}}/Picture/58453e8c0001204302400240.jpg" alt=""/>
                    <span>Ruby</span>
                </li>
                <li data-tag-id="53" >
                    <img src="{{asset('home/')}}/Picture/57b4497d0001223302400240.jpg" alt=""/>
                    <span>Sass/Less</span>
                </li>
                <li data-tag-id="36" >
                    <img src="{{asset('home/')}}/Picture/563afdc60001f1a900900090.jpg" alt=""/>
                    <span>SQL Server</span>
                </li>
                <li data-tag-id="33" >
                    <img src="{{asset('home/')}}/Picture/563afe730001883800900090.jpg" alt=""/>
                    <span>Unity 3D</span>
                </li>
                <li data-tag-id="52" >
                    <img src="{{asset('home/')}}/Picture/57b2d150000136e702400240.jpg" alt=""/>
                    <span>Vue.js</span>
                </li>
                <li data-tag-id="27" >
                    <img src="{{asset('home/')}}/Picture/563afec200019e2400900090.jpg" alt=""/>
                    <span>WebApp</span>
                </li>
                <li data-tag-id="40" >
                    <img src="{{asset('home/')}}/Picture/564045270001d8dc00900090.jpg" alt=""/>
                    <span>ZBrush</span>
                </li>
                <li data-tag-id="21" >
                    <img src="{{asset('home/')}}/Picture/563aff040001d14100900090.jpg" alt=""/>
                    <span>云计算</span>
                </li>
                <li data-tag-id="26" >
                    <img src="{{asset('home/')}}/Picture/563b0af800018db300900090.jpg" alt=""/>
                    <span>前端工具</span>
                </li>
                <li data-tag-id="35" >
                    <img src="{{asset('home/')}}/Picture/563afdd50001d4a400900090.jpg" alt=""/>
                    <span>大数据</span>
                </li>
                <li data-tag-id="39" >
                    <img src="{{asset('home/')}}/Picture/563b04ef00014a4b00900090.jpg" alt=""/>
                    <span>数据结构</span>
                </li>
                <li data-tag-id="51" >
                    <img src="{{asset('home/')}}/Picture/57aad4170001397802400240.jpg" alt=""/>
                    <span>测试</span>
                </li>
            </ul>
            <div class="save-btn">保存</div>
        </div><!--.tag-main end-->
    </div><!--.tag-pop end-->


</div>

{{--footer start--}}
@include('components.home_footer');
{{--footer end--}}


<!--script-->
<script src="{{asset('home/')}}/Scripts/ssologin.js"></script>
<script type="text/javascript" src="{{asset('home/')}}/Scripts/sea.js"></script>
<script type="text/javascript" src="{{asset('home/')}}/Scripts/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>





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
    <input id="alreadylogin" type="hidden" value={{$is_login}} />
    <script src="{{asset('home/Scripts/jquery-1.7.2.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            var is_login = $("#alreadylogin").val();
            if(is_login == 1){
                $("#islogin").attr("style","display:block");
            }
        })
    </script>
</div>
</body>
</html>


<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>