<?php include('includes/head.php') ?>
<?php include('includes/header.php') ?>
<div id="user">
    <div style="width: 280px; margin: 0 auto;">
        <h1>登录</h1>
        <form action="user/login" method="post">
            <input style="width: 200px;height: 30px;font-size: 18px;margin: 30px 0;" type="text" name="username"/><br/>
            <input style="width: 200px;height: 30px;font-size: 18px;margin: 0 0 30px 0;" type="password" name="password"/><br/>
        <span>
            <input  style="width: 100px;height: 30px;font-size: 18px;" type="submit" value="登录"/>
            <a href="/user/reg">注册</a>
        </span>
        </form>
    </div>
</div>
<?php include('includes/footer.php') ?>