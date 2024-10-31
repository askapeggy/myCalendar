<?php
    // 抓取馬克吐溫名語錄
    $url = "https://zh.wikiquote.org/zh-tw/%E9%A6%AC%E5%85%8B%C2%B7%E5%90%90%E6%BA%AB";
    // 使用 cRUL 抓取內容
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    //判斷是否抓取成功
    if($result == false)
    {
        echo "無法抓取馬克吐溫資料";
    }
    //解析HTML資料 並抓出來
    $dom = new DOMDocument();
    @$dom->loadHTML($result);
    $xpath = new DOMXPath($dom);
    $markItem = [];
    // $startNode = $xpath->query('//span[@id="語錄"]')->item(0);
    // $endNode = $xpath->query('//span[@id="外部鏈結"]')->item(0);
    $startNode = $xpath->query('//h2[@id="語錄"]')->item(0); 
    $endNode = $xpath->query('//h2[@id="外部鏈結"]')->item(0);

    //確認節點存在 
    if ($startNode === null || $endNode === null) 
    { 
        echo "找不到指定的節點。"; exit;
    }
    $node = $startNode->parentNode->nextSibling;
    
    //開始從 語錄 抓到 外部鏈結
    while($node && $node->isSameNode($endNode->parentNode) == false)
    {
        if($node->nodeType == XML_ELEMENT_NODE)
        {
            $mData = explode("。", trim($node->textContent));
            if(count($mData) >= 2)
            {
                $markItem[] = $mData[0]."。";
            }else
            {
                $mData = explode("？", trim($node->textContent));
                if(count($mData) >= 2)
                    $markItem[] = $mData[0]."？";
            }
        }
        $node = $node->nextSibling;
    }
    /*
    //顯示提取的內容
    if(!empty($markItem))
    {
        echo "<pre>";
        print_r($markItem);
        echo "</pre>";
    }else{
        echo "目前無內容";
    }
        */
?>
