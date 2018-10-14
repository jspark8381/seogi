<?php
$year=date("Y");
$month=date("n"); //m은 앞에 0까지 나오는 걸 return
$day=date("j");
$max=date("t"); // date 함수의 인자 t를 넣으면 그 달이 몇일까지 있는 지 알아 낼 수 있음. ex)10월은 31일을 반환, 11월은 30일을 반환
$start_week=date("w",strtotime("$year-$month-1")); //strtotime 함수는 timestamp 값으로 변환해줌. w를 넣으면 해당일이 몇번째 요일인지 반환 0~6까지
?>

<div class="" align=center>
<?= $year ?>년 <?= $month ?>월

<table width=500 border="1">
  <tr>
    <td>일</td>
    <td>월</td>
    <td>화</td>
    <td>수</td>
    <td>목</td>
    <td>금</td>
    <td>토</td>
  </tr>

  <tr>
    <?php
    for ($i=0; $i <$start_week ; $i++) {
    ?>
    <td>&nbsp</td>     <!-- 매월 1일 앞에 빈칸을 세서($start_week) 만듬-->
    <?php
    }
    ?>
    <?php
    for ($i=1; $i <=$max ; $i++) {
      $tmp=date("w",strtotime("{$year}-{$month}-{$i}"));
      if ($tmp==0) {
        echo "</tr><tr>";
      }
    ?>
    <td><?=$i?></td>
    <?php
    }
    ?>
  </tr>
</table>
</div>
