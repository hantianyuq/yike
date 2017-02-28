<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <title> - 数据表格</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="{{asset('admin')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="{{asset('admin')}}/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="{{asset('admin')}}/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="{{asset('admin')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>笔记管理</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_data_tables.html#">选项1</a>
                            </li>
                            <li><a href="table_data_tables.html#">选项2</a>
                            </li>
                        </ul>

                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="" style="margin-left: 20px; margin-top: 10px; margin-bottom: 5px;">
                    <!-- <a href="dataAdd" class="btn btn-primary ">添加行</a> -->
                    
                </div>


                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>发布人</th>
                            <th>审核状态</th>
                            <th>发布内容</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($note as $k=>$v){ ?>
                        <tr class="gradeC" >
                            <td><?=$v['note_id'] ?></td>
                            <td><?=$v['user_name'] ?></td>
                            <td id="<?=$v['note_id'] ?>"><span class='status'>
                            <?php
                                if($v['status'] == 1){
                                    echo "<font color='green'>√</font>";
                                }else{
                                    echo "<font color='red'>×</font>";
                                }
                            ?>
                            </span></td>
                            <td><?=$v['note_content'] ?></td>
                            <td class="center">
                                <a href="javascript:;" id="<?=$v['note_id'] ?>" class="del">删除</a>
                            </td>
                        </tr>
                        <?php } ?>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- 全局js -->
<script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
<script src="{{asset('admin')}}/js/bootstrap.min.js?v=3.3.6"></script>

<script src="{{asset('admin')}}/js/plugins/jeditable/jquery.jeditable.js"></script>

<!-- Data Tables -->
<script src="{{asset('admin')}}/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="{{asset('admin')}}/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- 自定义js -->
<script src="{{asset('admin')}}/js/content.js?v=1.0.0"></script>
<script>
    $(function(){
        // 即点即改
        $(document).on('click','.status',function(){
            var status = $(this).children().html();
            var id = $(this).parent().attr('id');
            var _this = $(this);
            if(status == '√'){
                status = 0;
            }else{
                status = 1;
            }
            // alert(id);
            $.ajax({
                type: "get",
                url: "{{URL('noteUpdate')}}",
                data:{
                    id:id,
                    status:status,
                },
                success: function(msg){
                    // alert(msg);
                    if(msg == 1){
                        if(status == 0){
                            _this.html("<font color=red>×</font>");
                        }else{
                            _this.html("<font color=green>√</font>");
                        }
                    }else{
                        alert('修改失败');
                    }
                }
            });
        })



        // 删除
        $('.del').click(function(){
            var id = $(this).attr('id');
            var _this = $(this);
            if(confirm('确定要删除吗？')){
                $.ajax({
                    type:"get",
                    url:"{{URL('noteDel')}}",
                    data:{
                        id:id
                    },
                    success: function(msg){
                        if(msg == 1){
                            _this.parent().parent().remove();
                        }else{
                            alert('删除失败');
                        }
                    }
                });
            }
        })
    })
</script>
<script>
    $(document).ready(function () {
        $('.dataTables-example').dataTable();

        /* Init DataTables */
        var oTable = $('#editable').dataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable('../example_ajax.php', {
            "callback": function (sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
            },
            "submitdata": function (value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition(this)[2]
                };
            },

            "width": "90%",
            "height": "100%"
        });


    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData([
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row"]);

    }
</script>




</body>

</html>
