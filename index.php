<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <link rel="stylesheet" href="style.css">
  <style> 
    /*請在這裹撰寫你的CSS*/
    body {
      margin: 0; /* 清除邊距 */
      padding: 0; /* 清除內邊距 */
      height: 100vh; /* 100% 視窗高度 */
      width: 100vw; /* 100% 視窗寬度 */
      background-image: url('pic/image.png'); /* 替換為你的圖片 URL */
      background-size: cover; /* 確保圖片覆蓋整個背景 */
      background-position: center; /* 圖片居中 */
    }
    /* 跑馬燈使用 */
    .marquee { 
      width: 100%; 
      overflow: hidden; 
      white-space: nowrap; 
      box-sizing: border-box; 
      color: red;
      font-size:36px
    } 
    .marquee span { 
      display: inline-block; 
      padding-left: 100%; 
      animation: marquee 20s linear infinite;
    } 
    @keyframes marquee { 
      0% { transform: translate(0, 0); } 
      100% { transform: translate(-100%, 0); } 
    }  


    .table-container {
      position: relative; /* 相對定位 */
      width: 80%;
      height: 65%;
      padding: 20px; /* 添加內邊距 */
      background-color: rgba(240, 240, 240, 0.1); /* 背景顏色 */
      border-radius: 15px; /* 圓角 */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8); /* 陰影效果 */
      margin: 0 auto;
    }

    .table-menu {
      position: relative; /* 相對定位 */
      width: 80%;
      height: 15%;
      padding: 20px; /* 添加內邊距 */
      background-color: rgba(128, 128, 128, 0.3); /* 背景顏色 */
      border-radius: 15px; /* 圓角 */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8); /* 陰影效果 */
      margin: 0 auto;
    }

    table {
      border-collapse: collapse; /* 合併邊框 */
      width: 100%; /* 表格寬度 */
      height: 100%; /* 自動調整高度 */
    }
    th, td {
      background-color: rgba(240, 240, 240, 0.5); /* 偶數行背景 */
      border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
      width: 14.28%;
      padding: 15px;
      text-align: center;
      font-size: 200%;
      border-radius: 200px;/* 圓角 */
    }
    .tdRed{
        background-color:  rgba(233, 43, 95, 0.5);
        border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
    }
    .tdBlue{
        background-color:  rgba(0, 0, 255, 0.7);
        border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
    }

    th {
      background-color: rgba(0, 123, 255, 0.5); /* 表頭的背景顏色 */
      color: white; /* 表頭文字顏色 */
    }
    /*tr:nth-child(even) {*/
    tr {
      /*background-color: rgba(240, 240, 240, 0.6); /* 偶數行背景 */
      /*border-radius: 15px;/* 圓角 */
    }
    /* 懸停效果 */
    td:hover {
      background-color: rgba(100, 100, 255, 0.6); /* 懸停時顯示淺藍色 */
    }
    .menutd{
      background-color: rgba(100, 100, 255, 0.0); /* 全透明 */
    }
    .menutd:hover {
      background-color: rgba(100, 100, 255, 0.0); /* 全透明 */
    }


</style>
</head>
<body>
<!-- /*請在這裹撰寫你的萬年曆程式碼*/   -->
<!-- <h1>萬年曆</h1>   -->
<div class="overlay"></div>
<!-- 載入 -->
<?php include("myCode/getMarker.php") ?>
<?php include("myCode/calendar.php") ?>
<?php
  $showData = getCalendar($year, $month);
?>
<!-- 馬燈 -->
<div class="marquee"> 
    <span id="marquee-text"><?=$markItem[0];?></span> 
</div> 
<!-- 萬年曆排版地方 -->
<div class="table-menu">
  <table>
    <tr>
        <td><a href="index.php?year=<?=$year-1;?>&month=<?=$month;?>">去年</a></td>
        <td class ="menutd" rowspan="2" colspan="1" style="font-size:70px; color:gold;"><?php echo $year."年".$month."月";?></td>
        <td><a href="index.php?year=<?=$year+1;?>&month=<?=$month;?>">明年</a></td>
      </tr>
      <tr>
        <td><a href="index.php?year=<?=$year;?>&month=<?=$month-1;?>">上個月</a></td>
        <td><a href="index.php?year=<?=$year;?>&month=<?=$month+1;?>">下個月</a></td>
    </tr>
  </table>
</div>
<br>
<div class="table-container">
  <table>
    <thead>
      <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
      </tr>
      </thead>
      <tbody>
        <?php
            $count = 0;
            $countGray = 0;
            foreach($showData as $sData => $item)
            {
              echo "<tr>";
              foreach($item as $d)
              {
                $showComm = "<td";
                if($year == $currentYear && $month == $currentMonth && $d == $currentDay)
                {
                  $showComm = $showComm." class='tdBlue'>";
                }else
                {
                  if($count == 0 || $count == 6)
                  {
                    $showComm = $showComm." class='tdRed'>";
                  }else
                  {
                    $showComm = $showComm.">";
                  }
                }
                //處理字體顏色
                $showComm = $showComm."<div style='font-size:40px; ";
                switch($countGray)
                {
                  case 0:
                    if($d == 1)
                    {
                      $countGray =1;
                    }
                    break;                  
                  case 1:
                    if($d == 1)
                    {
                      $countGray = 2;
                    }
                    break;
                }
                if($countGray == 0 || $countGray== 2)
                {
                  $showComm = $showComm."color:gray;'>";
                }else
                {
                  $showComm = $showComm."'>";
                }
                $showComm = $showComm.$d."</div>";
                $showComm = $showComm."</td>";
                echo $showComm;
                if($count == 6)
                {
                  $count = 0;
                }else
                {
                  $count ++;
                }
              }
              echo "</tr>";
            }
        ?>
      </tbody>
  </table>
</div>

</body>
</html>