<?php
$id = $_REQUEST['id']; //post:get 모두 받아짐.
// $title = $_GET['title'];
//url 매개변수 타이틀을 가져와서 id 저장?
$name = $_REQUEST['name'];
$passwd = $_REQUEST['passwd'];
$passwd_confirm = $_REQUEST['passwd_confirm'];
$birth_year = $_REQUEST['birth_year'];
$birth_month = $_REQUEST['birth_month'];
$birth_day = $_REQUEST['birth_day'];
$phone1 = $_REQUEST['phone1'];
$phone2 = $_REQUEST['phone2'];
$phone3 = $_REQUEST['phone3'];
$address = $_REQUEST['address'];
// $gender = $_REQUEST['gender'];



echo "$id<br>";
echo "$name<br>";
echo "$passwd<br>";
echo "$passwd_confirm<br>";
echo "$birth_year";
echo "$birth_month";
echo "$birth_day<br>";
echo "$phone1";
echo "$phone2";
echo "$phone3<br>";
if($_REQUEST['gender'] === "M"){
  $gender = '남자';
}else{
  $gender = '여자';
};
echo "$gender";

if(isset($_REQUEST["movie"])){
  $movie = '영화감상';
}else{
  $movie='';
}
if(isset($_REQUEST["book"])){
  $book = '독서';
}else{
  $book='';
}
if(isset($_REQUEST["sport"])){
  $sport = '운동';
}else{
  $sport='';
}
if(isset($_REQUEST["shop"])){
  $shop = '쇼핑';
}else{
  $shop='';
}

// echo $title;
// 변수값 출력
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      width: 640px;
      border-collapse:collapse;
      border: 1px solid #000;
    }
    tr,td{
      border:1px solid #000
    }
    table tr td:nth-child(1){
      text-align: right;
      width: 15%;
    }
  </style>
</head>
<body>
<h2>❗❗ 회원가입 결과</h2>
<table>
<tr>
  <td> * 아이디 : </td>
  <!-- <td> <?php print $id; ?> </td> -->
  <td> <?= $id; ?> </td>
  <!-- '<'?php print 까지를 '<'?=으로 줄일수 있다.  ''는 제외하고 볼것.-->
</tr>
<tr>
  <td> * 이름 : </td>
  <td> <?= $name; ?> </td>
</tr>
<tr>
  <td> * 비밀번호 : </td>    
  <td> <?= $passwd; ?> </td>
</tr>
<tr>
  <td> * 비밀번호 확인 : </td>    
  <td> <?= $passwd_confirm; ?> </td>
</tr>
<tr>
  <td> * 생년월일 : </td>    
  <td> <?= $birth_year; ?>년 <?= $birth_month; ?>월 <?= $birth_day; ?>일 </td>
</tr>
<tr>
  <td> * 휴대전화 : </td>
  <td> <?= $phone1 ?> - <?= $phone2 ?> - <?= $phone3 ?> </td>
</tr>
<tr>
  <td> * 성별 : </td>
  <td> <?= $gender ?></td>
</tr>
<tr>
  <td> * 주소 : </td>
  <td> <?= $address ?></td>
</tr>
<tr>
  <td> * 취미 : </td>
  <td> <?= $movie, $book, $shop, $sport ?></td>
</tr>
</table>
  
</body>
</html>