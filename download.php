<?php
  $down = $_GET['down'];
  $down = str_replace('/', '', $down);
  $filesize = filesize($down);
  
  if(file_exists($down)){
    header("Content-Type:application/octet-stream");
    header("Content-Disposition:attachment;filename=".pathinfo("$down",PATHINFO_BASENAME));
    header("Content-Transfer-Encoding:binary");
    header("Content-Length:".$filesize);
    header("Cache-Control:cache,must-revalidate");
    header("Pragma:no-cache");
    header("Expires:0");
    if(is_file($down)){
        $fp = fopen($down,"r");
        while(!feof($fp)){
          $buf = fread($fp,8096);
          $read = strlen($buf);
          print($buf);
          flush();
        }
        fclose($fp);
    }
  } else {
    ?><script>alert("존재하지 않는 파일입니다."); <?php } ?>
    history.back(1);
    </script>