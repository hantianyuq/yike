<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 表单验证 jQuery Validation</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('admin')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="{{asset('admin')}}/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="{{asset('admin')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style.css?v=4.1.0" rel="stylesheet">
<style>
    #div{
        margin-top: 50px;
        margin-left: 240px;
    }
</style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight" id="div">
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>课程添加</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" id="commentForm" action="{{URL('courseAdd')}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">课程名称：</label>
                                <div class="col-sm-8">
                                    <input id="cname" name="name" minlength="2" type="text" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">课程分类：</label>
                                <div class="col-sm-8">
                                   <select name="cate" class="form-control">
                                       <option value="0">...请选择</option>
                                   <?php foreach($cate as $kk=>$vv){ ?>
                                       <option value="<?=$vv['category_id'] ?>"><?=$vv['category_name'] ?></option>
                                   <?php } ?>
                                   </select>
                                </div>
                            </div>
                           <!--  <div class="form-group">
                                <label class="col-sm-3 control-label">E-mail：</label>
                                <div class="col-sm-8">
                                    <input id="cemail" type="email" class="form-control" name="email" required="" aria-required="true">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label">难度级别：</label>
                                <div class="col-sm-8">
                                    <input id="curl" type="text" class="form-control" name="rank">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">简介：</label>
                                <div class="col-sm-8">
                                    <textarea id="ccomment" name="intro" class="form-control" required="" aria-required="true"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- 全局js -->
    <script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
    <script src="{{asset('admin')}}/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="{{asset('admin')}}/js/content.js?v=1.0.0"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="{{asset('admin')}}/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="{{asset('admin')}}/js/plugins/validate/messages_zh.min.js"></script>

    <script src="{{asset('admin')}}/js/demo/form-validate-demo.js"></script>


</body>

</html>
