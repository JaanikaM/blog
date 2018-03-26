<?php
/**
 * Created by PhpStorm.
 * User: Jassu
 * Date: 26.03.2018
 * Time: 13:26
 */

namespace App;
class tags extends Controller
{
    function index()
    {
        $this->tags = get_all("SELECT tag_name,
                                    COUNT(post_id) as count From post_tag 
                                    NATURAL JOIN  tag  GROUP BY tag_id");
    }
    function view()
    {
        $_tags = get_all("SELECT * from post_tag NATURAL JOIN tag");
        foreach ($_tags as $tag) {
            $this->tags[$tag['post_id']][] = $tag['tag_name'];
        };
    }
}