<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 18.05.2018
 * Time: 9:58
 */

foreach ($tags as $tag):?>
    <div class="list-group">
  <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>" class="list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">
          <?=$tag['tag_name']?>
      </h5>
    </div>
        </a>
    </div>
<?php endforeach ?>
