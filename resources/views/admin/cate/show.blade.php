<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 分类添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('home')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="{{asset('home')}}/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="{{asset('home')}}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{asset('home')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('home')}}/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-6">
                <div class="col-sm-6">
                    <div class="row float-e-margins" style="width: 800px;margin-left: 100px;margin-top: 100px;height: 800px">
                        <div class="ibox-title">
                            <h5>分类添加</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="form_basic.html#">选项1</a>
                                    </li>
                                    <li><a href="form_basic.html#">选项2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">分类名：</label>

                                    <div class="col-sm-8">
                                        <input type="email" placeholder="用户名" class="form-control">
                                        <span class="help-block m-b-none">请输入要填入的分类名字</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">所属分类：</label>
                                    <div class="col-sm-8">
                                        <select name="" id="">
                                            <option value="0">顶级</option>
                                            <?php foreach($cate as $k=>$v){?>
                                            <option value="{{$v['categray_id']}}">{{$v['categray_name']}}</option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <button class="btn btn-sm btn-info" type="submit">登 录</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

<!-- 全局/js -->
<script src="{{asset('home')}}/js/jquery.min.{{asset('home')}}/js?v=2.1.4"></script>
<script src="{{asset('home')}}/js/bootstrap.min.{{asset('home')}}/js?v=3.3.6"></script>

<!-- 自定义/js -->
<script src="{{asset('home')}}/js/content.{{asset('home')}}/js?v=1.0.0"></script>

<!-- iCheck -->
<script src="{{asset('home')}}/js/plugins/iCheck/icheck.min.{{asset('home')}}/js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>




</body>

</html>
