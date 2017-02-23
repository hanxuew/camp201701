<?php include('includes/head.php') ?>
<?php include('includes/header.php') ?>
	<div id="story">
        <?php foreach ($story as $row): ?>
        <input id="id" name="id" hidden="hidden" type="text" value="<?php echo $row['id'] ?>"/>
        <h2><?php echo $row['title'] ?></h2>
        <span><a><p style="display:inline-block; width:60px; margin:10px;">Poseidon</p></a>
            <p style="display:inline-block; width:200px; margin:10px;">2016-09-02</p>
            </span><br>
        <?php if(isset( $row['video'])){
            echo $row['video'];
        } ?>
        <div id="article" style="margin-top: 20px;">
            <?php echo $row['content']?>
        </div>
        <?php endforeach ?>
        <span id="comm" style=" display: block;margin: 20px 0px 10px 0px;">
            <h3>评论</h3>
            <br/>
            <hr/>
                <?php foreach($comment as $row): ?>
                    <br/>
                    <div id="commits">
                        <h4 class="info" style="display: block; float:left;margin-left: 10px;">[<?php echo $row['username'] ?>]</h4>
                        <p class="info" style="display: block;margin-left: 100px;"><?php echo $row['time'] ?></p>
                        <p class="content" style="margin: 10px;"><?php echo $row['content'] ?></p>
                    </div>
                <?php endforeach ?>
        </span>
		<br>
        <span id="commit">
            <h3>发表评论</h3><br>
                <textarea id="commContent" name="content"/></textarea><br/><br/>
                <lable style="font-size:18px;">你的名字：</lable>
                <input id="commAuthor" type="text" name="username" spaceholder="你的名字"><br/><br/>
                <button id="submit">评论</button><br/><br/>
        </span>
	</div>
    <script src="static/js/jquery1.6.js"></script>
    <script>

        $('#submit').click(function() {
            var data = {
                id:$("#id").val(),
                username:$("#commAuthor").val(),
                content:$("#commContent").val()
            };
            var comm = '<br/><div id="commits"><h4 class="info" style="display: block; float:left;margin-left: 10px;">['+$("#commAuthor").val()+']</h4><p class="info" style="display: block;margin-left: 100px;"><?php echo date("Y-m-d H:i:s",time()); ?></p><p class="content" style="margin: 10px;">'+$("#commContent").val()+'</p></div>';

            var url = "comm/add";
            if($("#commAuthor").val()&&$("#commContent").val()){
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,

                    success: function(){
                        $('#comm').append(comm);
                        $("#commAuthor").val("");
                        $("#commContent").val("")
                    }
                });
            }
        });
        
    </script>
<?php include('includes/footer.php') ?>