<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="span8">
    <h1><?php echo $post['post_subject']?></h1>
    <h3><?php echo $post['username']?></h3>
    <p><?php echo $post['post_text']?></p>
    <div>
        <span class="badge badge-success"><?php echo $post['post_created']?></span>
    </div>
    <?foreach ($tags as $tag):?><a href="#"><span class=""label label-info"><?=$tag['tag_name']?></span></a><?endforeach?>
</div>