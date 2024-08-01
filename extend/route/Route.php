<?php
// +----------------------------------------------------------------------
// | 路由设置
// +----------------------------------------------------------------------


$user = ['^'.str_replace('/', '\/', 'user').'\/(\d+)$' => 'member/user/index/userid/$1'];
// $search = ['^'.str_replace('/', '\/', 'search').'\/(\w+)\/(\w+)$' => 'index/search/index/modelid/$1/keyword/$2'];
$search = ['^'.str_replace('/', '\/', 'search').'$' => 'index/search/index'];
return array_merge($user,$search);