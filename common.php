<?php
$question = [
	["富士山の標高は何メートル？", 3776],
	["下は大火事、上は洪水、それなんだ？", '風呂'],
	["パンはパンでも食べられないパンは？", 'フライパン']
];

function getDB1($sql, $param=[]){
	$dsn  = 'mysql:dbname=quizdb;host=localhost';
	$user = 'senpai';
	$pw   = 'indocurry';

	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);

	return( $sth->fetch(PDO::FETCH_ASSOC) );
}

