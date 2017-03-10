<?php
////遍历某个文件夹及其子文件夹里的内容，不包括.及..
//function files_show($path)
//{
//    $handle = dir($path); //打开制定文件夹
//    return $handle;
//    $exclude = array('.', '..');  //排除选项
//    $dir = array();  //返回项
//    while(($result = $handle->read()) != false)
//    {
//        //拼装路径
//        $result_dir = $path.'/'.$result;
//        //排除选项及检查是否为目录
//        if (!in_array($result, $exclude) && is_dir($result_dir))
//        {
//            //递归查询目录
//            $dir[$result] = files_show($result_dir);
//        }
//        elseif (!in_array($result, $exclude))
//        {
//            $dir[] = $result;
//        }
//    }
//    $handle->close();
//    return $dir;
//}
//
////列出某个文件夹里的所有文件,不包括.及..
//function file_show($path)
//{
//    $handle = dir($path); //打开制定文件夹
//    $exclude = array('.', '..');  //排除选项
//    $dir = '';  //返回项
//    while(($result = $handle->read()) != false)
//    {
//        //拼装路径
//        $result_dir = $path.'/'.$result;
//        if (!in_array($result, $exclude) && is_dir($result_dir))
//        {
//            $dir .= '<b>'.$result.'</b><br />';
//        }
//        else
//        {
//            $dir .= $result.'<br />';
//        }
//    }
//    $handle->close();
//    return $dir;
//}
//
////下面是调试内容
//$path = 'D:\web\hantianyu\filter';
//$a = files_show($path);
//echo '<pre>';
//print_r($a);
//exit;
//
//?>
