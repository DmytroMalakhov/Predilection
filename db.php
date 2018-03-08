<?php 
$dbhost = "localhost"; /*адресс  сервера*/
$dbname = "Predilection"; /*имя БД*/
$username = "root"; /* имя пользователя БД*/
$password = ""; /* пароль БД*/

$db = new PDO ("mysql:host=$dbhost; dbname=$dbname", $username, $password); /* ОБЬЯЗАТЕЛЬНО ДВОЙНЫЕ КАВЫЧКИ ОКОЛО MYSQL*/
 
 /*Получение всех статей*/ 
function get_all_articles () {
	global $db;
	$articles = $db->query("SELECT * FROM articles");

	return $articles;
}

/*Получение статьи по ее id*/ 
function get_article_by_id ($id) {
	global $db;
	$articles = $db->query("SELECT * FROM articles WHERE id = $id");
	foreach ($articles as $article) {
		return $article;
	}
}

/*Получение коментария по его id*/
function get_comment_by_id ($id) {
    global $db;
    $comments = $db->query("SELECT * FROM articles WHERE id = $id");
    foreach ($comments as $comment) {
        return $comment;
    }
}


/*Получение названия категории по ее ID*/ 
function get_category_by_id ($id) {
	global $db;
	$categories = $db->query("SELECT * FROM categories WHERE id = $id");
	foreach ($categories as $category) {
		return $category["category_name"];
	}	
}

/*Получение имени автора по ее ID*/ 
function get_author_by_id ($id) {
	global $db;
	$authors = $db->query("SELECT * FROM authors WHERE id = $id");
	foreach ($authors as $author) {
		return $author["author_name"];
	}	
}

/*Обновление кол-ва простмотров по ее ID*/ 
function views_update($id) {
	global $db;
	$db->query("UPDATE articles SET views = views + 1  WHERE id = $id");
}