<?php include('includes/head.php') ?>
<?php include('includes/header.php') ?>
<?php foreach($story as $row):?>
	<div id="content">
        <div class="item">
            <a href="story/show/<?php echo $row['id'];?>"><h3><?php echo $row['title'];?></h3></a>
        <span>
            <a><p><?php echo $row['author'];?></p></a><p>&nbsp;&nbsp;<?php echo $row['time'];?></p>
        </span>
            <div class="summary">
                <?php echo $row['summary'];?>
            </div>
<!--            <a href="story/show/--><?php //echo $row['id'];?><!--">全文&gt;&gt;</a>-->
        </div>
	</div>
<?php endforeach ?>
</div>
<?php include('includes/footer.php') ?>