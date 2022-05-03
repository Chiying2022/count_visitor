<html>

<head>
    <meta charset="UTF-8">
    <title>瀏覽計數器-ljccccccccccc@163.com</title>
</head>

<body>
    <?php
    //數字輸出網頁計數器
    $max_len = 9;
    $CounterFile = "counter.dat";
    if (!file_exists($CounterFile)) {  //如果計數器檔案不存在
        $counter = 0;
        $cf = fopen($CounterFile, "w"); //開啟檔案
        fputs($cf, '0');     //初始化計數器
        fclose($cf);     //關閉檔案
    } else {          //取回當前計數器的值
        $cf = fopen($CounterFile, "r");
        $counter = trim(fgets($cf, $max_len));
        fclose($cf);
    }
    $counter++;         //計數器加一
    $cf = fopen($CounterFile, "w");    //寫入新的資料
    fputs($cf, $counter);
    fclose($cf);
    ?>
    <div id="dd" align="center">
        <span>歡迎您!</span>
        <span>您是本站的第
            <?php
            echo $counter;       //輸出計數器
            ?>
            位訪客！</span>
    </div>
</body>

</html>