<?php
require_once('common.php');

// 引数（クエリー）を受け取る
$qid    = $_GET['qid'];
$answer = $_GET['answer'];

// 正解か判定
if( $question[$qid][1] == $answer ){
	echo "正解！";
}
else{
	echo "残念！";
}
