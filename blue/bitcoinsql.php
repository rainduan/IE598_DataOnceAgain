<?php
include_once('./snap/simple_html_dom.php');

function scraping_digg() {
    // create HTML DOM
    $html = file_get_html('https://coinmarketcap.com/');
    // get news block
    $list=array('bg-danger','bg-info','bg-warning','bg-success');
    $count=0;
    foreach($html->find('tbody tr') as $article) {
        // get img
        $item['img'] = trim($article->find('img', 0));
        // get name
        $item['name'] = trim($article->find('.currency-name-container', 0)->innertext);
        //get price
        $item['price'] = trim($article->find('.price', 0)->innertext);
        $item['percent'] = trim($article->find('.percent-change', 0)->innertext);

        $item['price'] = substr($item['price'], 1);
        $item['percent'] = substr($item['percent'], 0,-1);
        $item['price']=number_format((float)$item['price'], 2, '.', '');
        $item['percent']=$item['percent']*10;
        $count++;
        $item['count']=$count;
        if($item['percent']<0){
            $item['percent']=-$item['percent'];
            $item['type']=$list[0];

        }
        else{
            $item['type']=$list[3];

        }
//        $item['price']=$item['percent'];
//        $item['price'] = trim($article);

        $ret[] = $item;
    }

    // clean up memory
    $html->clear();
    unset($html);

    return $ret;
}


// -----------------------------------------------------------------------------
// test it!

// "http://digg.com" will check user_agent header...
ini_set('user_agent', 'My-Application/2.5');

$ret = scraping_digg();
include("./config.php");
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
foreach($ret as $v) {
    if($v['count']<10){
        $query="INSERT INTO `blue`.`market` (`name`, `level`) VALUES ('".$v['name']."', '9100".$v['count']."')";
    }elseif ($v['count']<100){
        $query="INSERT INTO `blue`.`market` (`name`, `level`) VALUES ('".$v['name']."', '910".$v['count']."')";
    }else{
        $query="INSERT INTO `blue`.`market` (`name`, `level`) VALUES ('".$v['name']."', '91".$v['count']."')";
    }
    if ($conn->query($query) === TRUE) {
//        echo "New record created successfully";
        echo 'add'.$v['count'];
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>