<?php $title="失败页面"?>
<?php include("../templates/header.php"); ?>  
  <div class="container">
    <div class="row">
      <div class="span10">
        <div class="tips tips-large tips-warning">
          <span class="x-icon x-icon-error">×</span>
          <div class="tips-content">
            <h2>失败信息</h2>
            <p class="auxiliary-text">
              你可以继续操作以下内容：
            </p>
            <p>
              <a class="page-action" data-type="setTitle" title="编辑用户个性化功能权限" href="userFunc.html">编辑用户个性化功能权限</a>
              <a class="page-action" data-type="setTitle" title="配置用户数据权限" href="userData.html">配置用户数据权限</a>
              <a class="page-action" data-type="setTitle" title="返回用户管理" href="userManage.html">返回用户管理</a>
            </p>
          </div>
        </div>
      </div> 
    </div>
  </div>
<?php include("../templates/script.php"); ?> 
<?php include("../templates/footer.php"); ?>  