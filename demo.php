
include "imgExif.class.php"

function exeTime(){
    $micro = microtime();
    list($usec,$sec) = explode(' ',$micro);
    return ($sec + $usec);
}

$start = exeTime();   

//使用方法：
$i = new imgExif();
//echo '<font color=\'blue\'>图片格式：' . $i->getImgtype('12.jpg','Extension') . '<br><br></font>';
$arr = $i->getImgInfo('12.jpg','Brief','1');
foreach($arr as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

$end = exeTime();
echo '<br><font color=\'red\'>脚本执行时间：' . ($end - $start) . '<br></font>';
