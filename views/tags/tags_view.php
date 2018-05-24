<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 18.05.2018
 * Time: 12:08
 */

foreach($posts as $post):?>
    <div id="blog" class="row">
        <div class="col-md-10 blogShort">
            <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject'];?></a></h1>
            <i class="fa fa-calendar"></i><?=$post['post_created'];?> </p>
            <p><i class="fa fa-tags"></i> Tags: <?foreach ($tags as $tag):?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="badge badge-info"><?=$tag['tag_name']?></span></a> <?endforeach?></p>
        </div>

        <div class="col-md-12 gap10"></div>
    </div>
<?endforeach?>
</div>
