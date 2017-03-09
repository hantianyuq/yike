<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" id="token" content="{{csrf_token()}}">
    <title> - FooTable</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{asset('admin')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="{{asset('admin')}}/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="{{asset('admin')}}/css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style.css?v=4.1.0" rel="stylesheet">
    <script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
    <script src="{{asset('admin')}}/upload/jquery.uploadify.min.js" type="text/javascript"></script>
    <style>
        .uploadify{display:inline-block;}
        .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
        table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/upload/uploadify.css">
    <style>
        .uploadify{display:inline-block;}
        .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
        table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>上传轮播图片</h5>
                </div>
                <p>
                @if(session("msg"))
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="color: red;font-size: 18px">{{session("msg")}}</label>
                    </div>
                    @endif
                    </p>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="{{url('admin/TurnsAdd')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">轮播图名</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="real_turns_name">
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">图片</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="real_turns_path" >
                                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                                </div>
                            </div>
                            <script type="text/javascript">
                                <?php $timestamp = time();?>
                                $(function() {
                                    $('#file_upload').uploadify({
                                        'buttonText'  : '图片上传',
                                        'formData'     : {
                                            'timestamp' : '<?php echo $timestamp;?>',
                                            "_token":"{{csrf_token()}}",
                                        },
                                        'swf'      : '{{asset('admin')}}/upload/uploadify.swf',
                                        'uploader' : '{{url('admin/TurnsUpload')}}',
                                        'onUploadSuccess' : function(file,data,response){
                                            var path = "{{asset('/')}}"+data;
                                            $("input[name='real_turns_path']").val(data);
                                            $("#picture").attr("src",path);
                                        }
                                    });
                                });
                            </script>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">图片显示</label>
                                <img src="" alt="" id="picture" style="width: 350px;height: 200px;">
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">排序号</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="real_turns_sort">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">创建</button>
                                    <button class="btn btn-white" type="reset">取消</button>
                                </div>
                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- 全局js -->


<script src="{{asset('admin')}}/js/bootstrap.min.js?v=3.3.6"></script>
<script src="{{asset('admin')}}/js/plugins/footable/footable.all.min.js"></script>
<script src="{{asset('admin')}}/js/layer/layer.js"></script>

<!-- 自定义js -->
<script src="{{asset('admin')}}/js/content.js?v=1.0.0"></script>
<script>
    $(document).ready(function() {

        $('.footable').footable();
        $('.footable2').footable();

    });
</script>




</body>

</html>
