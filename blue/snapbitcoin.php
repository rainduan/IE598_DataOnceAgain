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

foreach($ret as $v) {
    echo '
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stats-widget">
                            <div class="stats-widget-body">
                                <!-- Row start -->
                                <ul class="row no-gutters mb-3">
                                    <li class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="stats-widget-header">
                                            '.$v['img'].'
                                        </div>
                                    </li>
                                    <li class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h6 class="title">'.$v["name"].'</h6>
                                        <h5 class="total">$'.$v["price"].'</h5>
                                    </li>
                                </ul>
                                <!-- Row end -->
                                <div class="progress sm">
                                    <div class="progress-bar '.$v['type'].'" role="progressbar" style="width: '.$v['percent'].'%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    ';
}

?>