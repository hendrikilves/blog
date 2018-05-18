<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php foreach($posts as $post):?>

    <div class="span8">
        <h1><?php echo $post['post_subject']?></h1>
        <p><?php echo $post['post_text']?></p>
        <a href="<?php echo BASE_URL.'posts/view/'.$post['post_id']?>">Loe veel</a>
        <div>
            <span class="badge badge-success"><?php echo $post['post_created']?></span>
        </div>
    </div>

<?php endforeach?>

<?php foreach ($tags[$post['post_id']] as $tag):?>
    <a href="#"><span class="label" style="background-color: hotpink"><?=$tag?></span></a> <? endforeach?>
