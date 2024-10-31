<?php    
    // 取得目前年份
    $currentYear = date("Y");
    // 取得目前月份
    $currentMonth = date("m");
    // 取得目前日
    $currentDay = date("d");
    
    //取得計算日期後資料
    function getCalendar($cY, $cM)
    {
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
        /*
        echo "<pre>";
        print_r($cData);
        echo "</pre>";
        */
        return $cData;
    }

?>
