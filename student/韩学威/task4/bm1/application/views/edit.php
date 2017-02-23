<?php include('/includes/head.php') ?>
<?php include('/includes/header.php') ?>
		<div id="content">
            <?php foreach($data as $row): ?>
            <form action="story/add">
                <input name="title" type="text" value="<?php echo $row['title'] ?>"><br>
                <textarea name="content" id="" cols="30" rows="10" value="<?php echo $row['content'] ?>"></textarea><br>
                <input type="submit">
            </form>
            <?php endforeach ?>
		</div>
<?php include('/includes/footer.php') ?>