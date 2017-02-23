<?php include('/includes/head.php') ?>
<?php include('/includes/header.php') ?>
<div id="content">
            <a href="story/publish">发表文章</a>
            <h2>我的文章</h2>
            <table border="1">
                <tr>
                    <th>标题</th>
                    <th>时间</th>
                    <th>操作</th>
                </tr>
            <?php foreach($story as $row): ?>
                <tr>
                    <th><?php echo $row['title'] ?></th>
                    <th><?php echo $row['time'] ?></th>
                    <th><a href="story/edit">修改</a><a href="story/del">删除</a></th>
                </tr>
            <?php endforeach ?>
            </table>
</div>
<?php include('/includes/footer.php') ?>