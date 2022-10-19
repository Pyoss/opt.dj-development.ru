<?php
$arUrlRewrite = array(
    0 =>
        array(
            'SORT' => 100,
        ),
    1 =>
        array(
            'CONDITION' => '#^/category/(.+)/#',
            'RULE' => 'category=$1',
            'ID' => 'dj:opt-category',
            'PATH' => '/category/index.php',
            'SORT' => 200,
        ),
);