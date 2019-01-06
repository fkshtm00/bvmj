

<?php

$db = mysqli_connect('boardvilemj.c3m2ybbsh0nx.ap-northeast-2.rds.amazonaws.com','fkshtm00','qpfmsk123','boardvile');

mysqli_query($db,"set names utf8");

$query = "select * from Trating";

$result = mysqli_query($db,$query);

if(mysqli_num_rows($result) >0){
	while($rs = mysqli_fetch_assoc($result)){
		echo $rs["rating"]. " " . $rs["ratingname"] . "<br>";
	}

}else{
	echo "0 result";
}
?>