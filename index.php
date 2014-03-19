<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <title>微信本地测试工具</title>
  <link href="http://cdn.bootcss.com/semantic-ui/0.13.0/css/semantic.min.css" rel="stylesheet">
  <script src="http://cdn.bootcss.com/semantic-ui/0.13.0/javascript/semantic.min.js"></script>
</head>
<body>
<div class="ui grid">
  <div class="eight wide column">
      <div class="ui fluid form segment">
        <h3 class="ui header">微信模拟请求</h3>
        <div class="field">
            <label>请求地址</label>
            <input placeholder="请求地址" type="text" name="link">
        </div>
        <div class="field">
            <label>POST XML</label>
            <textarea name="data"></textarea>
        </div>
        <div class="ui blue submit button">提交</div>
    </div>
  </div>
  <div class="eight wide column">
      <div class="ui fluid form segment">
        <h3 class="ui header">请求返回结果</h3>
        <div class="field">
            <textarea name="response"></textarea>
        </div>
    </div>
  </div>
</div>
</body>
</html>