<header>
    <div id="head">
        <span class="logo">
		<h1>BetterME</h1>
	    </span>
        <ul class="nav">
            <li><a href="index/home">主页</a></li>
            <li><a href="">音乐</a></li>
            <li><a href="">阅读</a></li>
        </ul>
        <?php if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
        echo "<span class='login'><a>[".$_SESSION['username']."]</a> <a href='user/logout/".$_SESSION['username']."'>退出登录</a></span>";
        }else{
            echo '<span class="login"><a href="user/log">登录</a> <a href="user/reg">注册</a></span>';
        }
        ?>
        <a id="back" href="index/home">三</a>
    </div>
</header>