<?php

class Post
{
    public  $title;
    public $published;

    public function __construct($title,$published)
    {
        $this->title=$title;
        $this->published=$published;

    }


}

$posts = [

    new Post('Some Post',true),
    new Post('Spotifaj działa',true),
    new Post('Praca wre?',false)
];

$unpublishedPosts = array_filter($posts, function ($posts){
    return $posts->published===false;
});

array_map(function ($posts){

    return (array) $posts;

},$posts);

$title=array_column($posts,'title');
var_dump($title);