<?php include('/includes/head.php') ?>
<?php include('/includes/header.php') ?>
<div id="content">
    <form action="story/add" method="post">
        <input type="text" name="title"/>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <input type="submit"/>
    </form>
</div>
<?php include('/includes/footer.php') ?>