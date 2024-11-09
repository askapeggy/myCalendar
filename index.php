<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <style> 
    /*請在這裹撰寫你的CSS*/
    body {
      margin: 0; /* 清除邊距 */
      padding: 0; /* 清除內邊距 */
      height: 100vh; /* 100% 視窗高度 */
      width: 100vw; /* 100% 視窗寬度 */
      box-sizing: border-box;
      background-image: url('pic/7.png'); /* 替換為你的圖片 URL */
      background-size: cover; /* 確保圖片覆蓋整個背景 */
      background-position: center; /* 圖片居中 */
    }
    .overlay {
    position: fixed; /* 固定位置 */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* 半透明黑色覆蓋層 */
    z-index: 0; /* 在影片上方 */
    }
    /* 跑馬燈使用 */
    .marquee { 
      width: 100%; 
      overflow: hidden; 
      white-space: nowrap; 
      box-sizing: border-box; 
      color: red;
      font-size:36px;
    } 
    .marquee span { 
      display: inline-block; 
      padding-left: 100%; 
      animation: marquee 10s linear infinite;
    } 
    @keyframes marquee { 
      0% { transform: translate(0, 0); } 
      100% { transform: translate(-100%, 0); } 
    }  

    .table-container {
      position: relative; /* 相對定位 */
      box-sizing: border-box;
      width: 80%;
      height: 74%;
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
    .table-title {
      position: relative; /* 相對定位 */
      width: 80%;
      height: 11%;
      padding: 20px; /* 添加內邊距 */
      background-color: rgba(128, 128, 128, 0.0); /* 背景顏色 */
      margin: 0 auto;
    }
    table {
      border-collapse: collapse; /* 合併邊框 */
      width: 100%; /* 表格寬度 */
      height: 100%; /* 自動調整高度 */
      padding: 0px;
      border-spacing: 0px;
    }
    td {
      background-color: rgba(240, 240, 240, 0.5); /* 偶數行背景 */
      border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
      width: 14.28%;
      padding: 0px;
      text-align: center;
      /* font-size: 200%;  */
      border-radius: 200px;/* 圓角 */
      font-size:1.5vw;
    }
    th{
      background-color: rgba(240, 240, 240, 0.5); /* 偶數行背景 */
      border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
      width: 14.28%;
      padding: 0px;
      text-align: center;
      border-radius: 200px;/* 圓角 */
      font-size:1.5vw;
    }
    .tdRed{
      height: 1px;
      background-color:  rgba(233, 43, 95, 0.5);
      border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
    }
    .tdG{
      background-color:  rgba(110, 110, 110, 0.5);
      border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
    }
    .tdBlue{
        background-color:  rgba(0, 0, 255, 0.7);
        border: 0px solid rgba(0, 0, 0, 0.3); /* 邊框顏色和透明度 */
    }
    th {
      box-sizing: border-box;
      height: 10%;
      background-color: rgba(0, 123, 255, 0.5); /* 表頭的背景顏色 */
      color: white; /* 表頭文字顏色 */
    }
    .trSize
    {
      box-sizing: border-box;
      height: 10%;
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
    .button {
      background-color: #4CAF50; /* 綠色背景 */
      width: 100%;
      height: 100%;
      border: none; /* 去掉邊框 */
      color: white; /* 白色文字 */
      padding: 15px 0px; /* 按鈕的內邊距 */
      text-align: center; /* 文字居中 */
      text-decoration: none; /* 去掉文字裝飾 */
      display: inline-block; /* 按鈕顯示為塊級元素 */
      font-size: 16px; /* 文字大小 */
      margin: 4px 2px; /* 按鈕的外邊距 */
      cursor: pointer; /* 鼠標懸停時顯示為手形 */
      border-radius: 12px; /* 圓角效果 */
      transition: background-color 0.3s, transform 0.3s; /* 變色和縮放效果 */
      font-size: 1.0vw;
    }
    /* 滑鼠懸停時的樣式 */
    .button:hover {
      background-color: #45a049; /* 滑鼠懸停時變暗 */
      transform: scale(1.1); /* 輕微放大 */
    }

    /* 按鈕被按下時的效果 */
    .button:active {
      transform: scale(0.95); /* 按下時縮小 */
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
<div class="table-title">
  <table>
    <tr>
        <td style="font-size:1.5vw; background-color: rgba(0, 0, 0, 0.0);">
          <button class="button" onclick="callPHP(1)">去年</button>
          <!-- <a href="index.php?year=<?=$year-1;?>&month=<?=$month;?>" style="display: block; height: 100%; width: 100%;">去年</a> -->
        </td>
        <td class ="menutd" rowspan="2" colspan="1" style="font-size:3vw; color:gold;" id="viewYM"><?php echo $year."年".$month."月";?></td>
        <td style="font-size:1.5vw; background-color: rgba(0, 0, 0, 0.0);">
          <!-- <a href="index.php?year=<?=$year+1;?>&month=<?=$month;?>" style="display: block; height: 100%; width: 100%;">明年</a> -->
          <button class="button" onclick="callPHP(2)">明年</button>
        </td>
      </tr>
      <tr>
        <td style="font-size:1.5vw; background-color: rgba(0, 0, 0, 0.0);">
          <!-- <a href="index.php?year=<?=$year;?>&month=<?=$month-1;?>" style="display: block; height: 100%; width: 100%;">上個月</a> -->
          <button class="button" onclick="callPHP(3)">上個月</button>
        </td>
        <td style="font-size:1.5vw; background-color: rgba(0, 0, 0, 0.0);">
          <!-- <a href="index.php?year=<?=$year;?>&month=<?=$month+1;?>" style="display: block; height: 100%; width: 100%;">下個月</a> -->
          <button class="button" onclick="callPHP(4)">下個月</button>
        </td>
    </tr>
  </table>
</div>
<br>
<div class="table-container">
  <table>
      <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
      <!-- 萬年曆資料顯示出來 -->
      <?php
        $countid = 0;
        $count = 0;
        $countGray = 0;
        $startcount = -1;
        // 矩陣資料全部印出
        foreach($showData as $sData => $item)
        {
          echo "<tr class = 'trSize'>";
          foreach($item as $d)
          {
            //從當月1日才開始計算
            if($startcount == -1 && $d == 1)
            {
              //$startcount = $currentDay - 1;
              $startcount = 0;
            }
            //填入td顏色
            $showComm = "<td";
            if($year == $currentYear && $month == $currentMonth && $d == $currentDay && $startcount == 0)
            {
              //當日的td藍色
              $startcount = -2;
              $showComm = $showComm." class='tdBlue'";
            }else
            {
              if($count == 0 || $count == 6)
              {
                //星期六 日 的td紅色
                $showComm = $showComm." class='tdRed'";
              }else
              {
                //一般時間就是灰色
                $showComm = $showComm." class='tdG'";
              }
            }
            $showComm = $showComm."id=T".$countid.">";
            //處理數字字體顏色
            //$showComm = $showComm."<div style='font-size:3vw;'id='".$countid."'";
            $showComm = $showComm."<div style='font-size:3vw;";
            //不是當月都是灰色
            switch($countGray)
            {
              case 0:
                if($d == 1)
                {
                  $countGray = 1;
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
              $showComm = $showComm."color:gray;";
            }else
            {
              $showComm = $showComm."color:black;";
            }
            $showComm = $showComm."' id=".$countid.">";
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
            $countid++;
          }
          echo "</tr>";
        }
      ?>
  </table>
  <p id="result"></p>
</div>

<!-- 跑馬燈時間控制和程式部分 -->
<script> 
  //取出PHP中 年和月
  var year = <?php echo $year; ?>;
  var month = <?php echo $month; ?>;
  //取出PHP中 目前年和月和日
  var cYear = <?php echo $currentYear ?>;
  var cMonth1 = <?php echo $currentMonth ?>;
  var cDay = <?php echo $currentDay ?>;
  const texts = <?php echo json_encode($markItem); ?>;
  let currentIndex = Math.floor(Math.random() * texts.length); 
  var currentImageIndex = 0;
  //var musicTF = 0;
  //初始顯示隨機文字
  document.getElementById("marquee-text").innerText = texts[currentIndex];  //換字跑馬燈
  function changeText() 
  { 
    currentIndex = Math.floor(Math.random() * texts.length); 
    document.getElementById("marquee-text").innerText = texts[currentIndex]; 
  } 
  // 每10秒更換一次文字 
  setInterval(changeText, 10000); 

  //取萬年曆資料
  function callPHP(ym) 
  {
    var music = new Audio("bell.mp3");
    music.play();
    changeBackground();
    switch(ym)
    {
      case 1:
        year = year - 1;
        break;
      case 2:
        year = year + 1;
        break;
      case 3:
        if(month == 1)
        {
          month = 12;
          year = year-1;
        }else
        {
          month --;
        }
        break;
      case 4:
        if(month == 12)
        {
          month = 1;
          year = year+1;
        }else
        {
          month ++;
        }
        break;
    }
    document.getElementById('viewYM').innerText  = year+"年"+month+"月";
    var countNum = 0;
    var countUp = -1;
    var xhr = new XMLHttpRequest(); 
    var blueShow = 1;

    xhr.open("GET", "myCode/process.php?year=" + year +"&month="+ month, true);
    // 設定 call back function
    xhr.onload = function() 
    {
      if (xhr.status == 200) 
      {
        try 
        { 
          // 嘗試解讀 JSON
          var responseData = JSON.parse(xhr.responseText);
          //console.log(responseData); // 印出JSON
        } catch (e) 
        {
          console.error("解讀 JSON 錯誤: ", e);
          document.getElementById("result").innerText = "PHP回應不正確";
        }
        responseData.forEach((week, weekIndex) => 
        {
          week.forEach((day, dayIndex) => 
          {
            //let eleTdName = `T${countNum}`;
            //console.error(eleTdName);
            let eleTD = document.getElementById(`T${countNum}`);
            eleTD.classList.replace('tdRed', 'tdG');
            eleTD.classList.replace('tdBlue', 'tdG');
            if(year == cYear && month == cMonth1 && day == cDay && blueShow == 1)
            {
              blueShow = 0;
              eleTD.classList.replace('tdG', 'tdBlue');                  
            }else
            {
              if((countNum%7 == 0) || (countNum%7 == 6))
              {
                eleTD.classList.replace('tdG', 'tdRed');
              }
            }
            //console.error(`TD: ${countNum}`);
            let ele = document.getElementById(`${countNum}`);
            if(ele)
            {
              //判斷是否是當月 字必須要黑色其餘灰色
              let currentStyle = ele.getAttribute("style");
              //console.error(`找不到 ID: ${countNum}`);
              if((countUp == -1) && (day == 1))
              {
                countUp = 0;
              }else if((countUp == 0) && (day == 1))
              {
                countUp = -2;
              }
              if(countUp == -1 || countUp == -2)
              {
                ele.style.color = "gray";
              }else
              {
                ele.style.color = "black";
              }
              ele.innerHTML = `${day}`;
            }else
            {
              console.error(`找不到 ID: ${countNum}`);
            }
            countNum = countNum + 1;
          });
        });
      } else 
      {
        console.error("Error with request: " + xhr.status);
      }
    };
    // Send the request
    xhr.send();
  }

  //載入完畢就執行
  window.onload = function() 
  {
    changeBackground();
  };
  //換背景
  function changeBackground()
  {
    const backImage = [
      'pic/7.png',
      'pic/1.webp',
      'pic/2.webp',
      'pic/3.webp',
      'pic/4.webp',
      'pic/5.webp',
      'pic/6.webp',
    ];
    let currentIndex = 0;
    do
    {
      currentIndex = Math.floor(Math.random() * backImage.length); 
    }while(currentIndex == currentImageIndex)
    currentImageIndex = currentIndex;
    document.body.style.backgroundImage = `url('${backImage[currentImageIndex]}')`;
  }
</script>  
</body>
</html>