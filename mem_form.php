<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
    table{
      width: 640px;
      border-collapse:collapse;
      border: 1px solid #000;
    }
    tr,td{
      border:1px solid #000;
    }
    table tr td:nth-child(1){
      text-align: right;
      width: 15%;
    }
  </style>
<body>
<h2>✅ 회원가입</h2>

<form method='get' action="mem_print.php">
  <!-- <input type="text" name='title' value='회원가입 양식'> -->
  <table>
    <tr>
      <td> * 아이디 : </td>
      <td> <input type="text" name='id' value='guest' size='15' maxlength='10' autofocus required></td>
      <!-- name이 print의 매개변수로 이동 -->
    </tr>
    <tr>
      <td> * 이름 : </td>
      <td> <input type="text" name='name' value='' required></td>
    </tr>
    <tr>
      <td> * 비밀번호 : </td>
      <td><input type="password" name="passwd" value="1234" required></td>
      
    </tr>
    <tr>
      <td> * 비밀번호 확인 : </td>
      <td><input type="password" name="passwd_confirm"></td>
    </tr>
    <tr>
      <td> * 생년월일 : </td>
      <td>
        <select name="birth_year" required>
          <!-- <option value="2023">2023</option> -->
          <?php
           for($i=2023; $i >= 1910 ; $i--){
            print "<option value=$i>{$i}년";
            //html 코드를 출력할때는 print를 사용함
            //변수와 문자를 연이어 적으면 오류가 발생하기때문에 변수라는 지정을 하기 위해 {변수}와 같이 사용함.
          }
          ?>
        </select>
        <select name="birth_month">
          <?php
          for($i=1; $i <=12; $i++){
            print "<option value=$i>{$i}월</option>";
          };
          ?>
        </select>
        <select name="birth_day">
          <?php
          for($i=1; $i <=31; $i++){
            print "<option value=$i>{$i}일</option>";
          };
          ?>
        </select>
        
      </td>
    </tr>
    <tr>
        <td> * 휴대전화 : </td>
        <td>
          <select name="phone1">
            <option>선택</option>
            <option value="010">010</option>
            <option value="011">011</option>
            <option value="017">017</option>
          </select> - 
          <input type="text" maxlength='4' size='4' name='phone2'> - 
          <input type="text" maxlength='4' size='4' name='phone3'>
        </td>
      </tr>
      <tr>
        <td> * 성별 : </td>
        <td>
          <input type="radio" name='gender' value="M" checked>남
          <input type="radio" name='gender' value="F">여
        </td>
      </tr>
      <tr>
        <td> * 주소 : </td>
        <td> <input type="text" name="address" size='50'>
      </td>
      </tr>
    <tr>
      <td> * 취미 : </td>
      <td>
        <input type="checkbox" name='movie' value='yes' checked>영화감상 <br>
        <input type="checkbox" name='book' value='yes' >독서 <br>
        <input type="checkbox" name='shop' value='yes'>쇼핑 <br>
        <input type="checkbox" name='sport' value='yes' checked>운동 <br>
      </td>
    </tr>
    <tr>
      <td><input type="submit" value='확인'></td>
    </tr>
  </table>
</form>


  
</body>
</html>