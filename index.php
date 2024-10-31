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
    @keyframes marquee 
    { 
      0% { transform: translate(0, 0); } 
      100% { transform: translate(-100%, 0); } 
    }  
  </style>
</head>
<body>
<h1>萬年曆</h1>  
<div class="overlay"></div>
<!-- 載入 -->
<?php include("myCode/getMarker.php") ?>
<?php include("myCode/calendar.php") ?>
<?php
  /*請在這裹撰寫你的萬年曆程式碼*/  
  $showData = getCalendar($currentYear, $currentMonth);
?>
<!-- 馬燈 -->
<div class="marquee"> 
    <span id="marquee-text"><?=$markItem[0];?></span> 
</div> 
<!-- 萬年曆排版地方 -->
</body>
</html>