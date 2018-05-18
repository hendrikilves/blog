<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 18.05.2018
 * Time: 9:53
 */

namespace App;


class tags extends Controller
{
    function index()
    {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS COUNT
                                    FROM post_tags NATURAL JOIN tag
                                    GROUP BY tag_id");
    }
}