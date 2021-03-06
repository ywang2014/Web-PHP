<?php
/*
	强制不缓存
	主要用于调试，不需要修改前面代码
	
	$smarty->force_cache = true;
*/

require('Smarty3/lib/Smarty.class.php');
require('./mysmarty.class.php');

$smarty = new Mysmarty();

// 开启缓存
$smarty->caching = true;

// 设置缓存生命周期
$smarty->cache_lifetime = 5;	// 时间5秒

// 设置缓存目录
$smarty->cache_dir = './cache';

/* 强制不缓存 */
$smarty->force_cache = true;

$id = $_GET['id'];

if (!$smarty->isCached("01.html", $id))	// 名称一样
{
	$conn = mysql_connect('localhost', 'root', 'wang');
	@mysql_select_db('test', $conn);
	mysql_query('set names utf8');
	
	$sql = 'select id, name, reply_time from users where id = '.$id;
	$rs = mysql_query($sql, $conn);
	
	$users = array();
	while ($row = mysql_fetch_array($rs))
	{
		$users[] = $row;
	}
	
	echo "我走的是数据库";
	$smarty->assign('users', $users);
}
// 不缓存的值，一定要放在外面，保证能够从php获得值，放在if里面，则根本找不到这些值！！！！

$smarty->display("01.html", $id);

?>