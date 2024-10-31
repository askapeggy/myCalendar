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
   <style> 
    body {
            margin: 0; /* 清除邊距  跑馬燈必須這樣做*/
            padding: 0; /* 清除內邊距  跑馬燈必須這樣做*/
    }
    /* 跑馬燈使用 */
    .marquee { 
      width: 100%; 
      overflow: hidden; 
      white-space: nowrap; 
      box-sizing: border-box; 
    } 
    .marquee span { 
      display: inline-block; 
      padding-left: 100%; 
      animation: marquee 10s linear infinite;
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


<!-- 跑馬燈時間控制和程式部分 -->
<script> 
  const texts = <?php echo json_encode($markItem); ?>;
  let currentIndex = 0; 
  //換字跑馬燈
  function changeText() 
  { 
    currentIndex = (currentIndex + 1) % texts.length; 
    document.getElementById("marquee-text").innerText = texts[currentIndex]; 
  } 
  // 每10秒更換一次文字 
  setInterval(changeText, 10000); 
</script>  
</body>
</html>