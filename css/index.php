<?php ob_start(); ?>



<?php
$info = ob_get_contents();
// 这个是这个页面的所有信息
$filectime = filectime("index.html");
// 这个index.html改成你需要的
if (!(time() - 3600 * 24 > $filectime)) {
    // 这个设置每天进行更换 3600*24是时间
    exit;
}
if ($handle = @fopen('index.html', 'w')) {
    // 这个index.html改成你需要的
    @fwrite($handle, $info);
    @fclose($handle);
}
?>