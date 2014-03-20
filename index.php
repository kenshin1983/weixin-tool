<?php 
  //post 
  if(!empty($_POST['link'] && !empty($_POST['data']))){
    $signature = '5ad371e439a3ef69c7fe9c6a54774bfee4ea43a7';
    $timestamp = '1395233489';
    $nonce = '1876670608';

    $query = http_build_query(array(
        'signature' => $signature, 
        'timestamp' => $timestamp, 
        'nonce'     =>$nonce));
    $link = $_POST['link'] . '&' . $query;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST['data']);
    $data = curl_exec($ch);
    curl_close($ch);
    echo $data;
    exit;
  }


?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <title>微信本地测试工具</title>
  <link href="http://cdn.bootcss.com/semantic-ui/0.13.0/css/semantic.min.css" rel="stylesheet">
  <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/semantic-ui/0.13.0/javascript/semantic.min.js"></script>
</head>
<body>
<div class="ui grid">
  <div class="eight wide column">
      <div class="ui fluid form segment">
        <h3 class="ui header">微信模拟请求</h3>
        <div class="field">
            <label>请求地址</label>
            <input placeholder="请求地址" type="text" id="link">
        </div>
        <div class="field">
            <label>POST XML</label>
            <textarea id="data"></textarea>
        </div>
        <div class="ui blue submit button" id="sub">提交</div>
    </div>
  </div>
  <div class="eight wide column">
      <div class="ui fluid form segment">
        <h3 class="ui header">请求返回结果</h3>
        <div class="field">
            <textarea id="response"></textarea>
        </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
$(function($){ 
  $('#sub').click(function(){
    var link = $('#link').val();
    var data = $('#data').val();
    $.ajax({
      url : 'index.php',
      type : 'post',
      data : {link : link, data : data},
      success : function(resp){
        $('#response').val(resp);
      }
    });

  });
  
  
})
</script>