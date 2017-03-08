<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> hAdmin- 主页</title>

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('admin')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="{{asset('admin')}}/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="{{asset('admin')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">hAdmin</strong>
                                    </span>
                                </span>
                        </a>

                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">25小时前</small>
                                        <strong>二愣子</strong> 呵呵
                                        <br>
                                        <small class="text-muted">昨天</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                        <span class="pull-right text-muted small">4分钟前</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-qq fa-fw"></i> 3条新回复
                                        <span class="pull-right text-muted small">12分钟钱</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>

                </ul>
            </nav>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe id="J_iframe" width="100%" height="100%" src="{{url('admin/index_v1')}}" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
    </div>
    <!--右侧部分结束-->
</div>

 
<!-- 全局js -->
<script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
<script src="{{asset('admin')}}/js/bootstrap.min.js?v=3.3.6"></script>
<script src="{{asset('admin')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{asset('admin')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{asset('admin')}}/js/plugins/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="{{asset('admin')}}/js/hAdmin.js?v=4.1.0"></script>
<script type="text/javascript" src="{{asset('admin')}}/js/index.js"></script>

<!-- 第三方插件 -->
<script src="{{asset('admin')}}/js/plugins/pace/pace.min.js"></script>

    <!-- 全局js -->
    <script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
    <script src="{{asset('admin')}}/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="{{asset('admin')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{asset('admin')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{asset('admin')}}/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="{{asset('admin')}}/js/hAdmin.js?v=4.1.0"></script>
    <script type="text/javascript" src="{{asset('admin')}}/js/index.js"></script>

    <!-- 第三方插件 -->
    <script src="{{asset('admin')}}/js/plugins/pace/pace.min.js"></script>

<div style="text-align:center;">
    <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>

</html>
