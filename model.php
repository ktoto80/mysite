<?php
function open_database_connection()
{
	$link=mysql_connect('localhost','melnikov2','123');
	mysql_select_db('melnikov2',$link);
	mysql_query("SET CHARSET UTF8");
	return $link;
}
function close_database_connection($link)
{
	mysql_close($link);
}
function get_all_rows()
{
	$link=open_database_connection();
	$result=mysql_query('SELECT * FROM pages',$link);
	$rows=array();
	while($row=mysql_fetch_assoc($result)){
		$rows[]=$row;
	}
	close_database_connection($link);
	return $rows;
}