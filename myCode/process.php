<?php
    if(isset($_GET['month'])){
        $month=$_GET['month'];
    }else{
        $month=$currentMonth;
    }
    if(isset($_GET['year'])){
        $year=$_GET['year'];
        
    }else{
        $year=$currentYear;
    }
    //取得計算日期後資料
    //function getCalendar($cY, $cM)
    //{
        $cY = $year;
        $cM = $month;
        $cData = [];

        //資料初始化
        $year = $cY;
        $month = $cM;
        if($month - 1 == 0)
        {
            $monthUp = 12;
            $yearUp = $year - 1;
        }else
        {
            $monthUp = $month - 1;
            $yearUp = $year;
        }
        $daysInMonth = date("t", strtotime($year."-".$month."-01"));
        $daysInMonthUp = date("t", strtotime($yearUp."-".$monthUp."-01"));
        $timestamp = strtotime($year."-".$month."-01");
        $w = date("N", $timestamp);
        $count = 1;
        //把資料放入矩陣中
        for($i = 0; $i < 6; $i++)                    
        {
            for($j=0; $j < 7; $j++)
            {
                $dayNum = ($i*7) + $j+1 - $w;
                if($dayNum <= $daysInMonth && $dayNum > 0)
                {
                    $cData[$i][$j] = $dayNum;
                }else
                {
                    if($dayNum > $daysInMonth)
                    {
                        $cData[$i][$j] = $dayNum - $daysInMonth;
                    }else
                    {
                        $cData[$i][$j] = $daysInMonthUp - $w + $j + 1;
                    }
                }
            }
        }
        //echo "<pre>";
        echo json_encode($cData);;
        //echo "</pre>";
        //return $cData;
    //}

?>