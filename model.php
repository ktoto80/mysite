<?php
function open_database_connection()
{
	$link=mysql_connect('localhost','','');
	mysql_select_db('Hovinen',$link);
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
function add_row()
{
	if (empty($_REQUEST['add_title']) //'kui on puudu informatsioon'
		&& !empty($_REQUEST['add_content'])
			&& !empty($_REQUEST['add_autor'])){
		return;//'koik otsast peale'
	}
	$title=$_REQUEST['add_title'];
	$autor=$_REQUEST['add_title'];
	$content=$_REQUEST['add_title'];
	$date=new date();
	$link=$_REQUEST['add_title'];
	
	$link=open_database_connection();
$sql="INSERT INTO pages ('date',title,content,autor) 
		VALUES('$date','$title','$content','$autor')";
	close_database_connection($link);
}