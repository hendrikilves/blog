<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 18.05.2018
 * Time: 9:58
 */

foreach($tags as $tag):?>

    <div class="span8">
        <h1><?php echo $tag['tag_name']?></h1>
    </div>

<?php endforeach?>
<?php
/*
$_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
foreach ($_tags as $tag) {
$this->tags[$tag['post_id']][] = $tag['tag_name'];
}*/
?>
