<?php
include_once('../../simple_html_dom.php');

function scraping_digg() {
    // create HTML DOM
    $html = file_get_html('http://digg.com/');
    // get news block
    foreach($html->find('div.digg-story__content') as $article) {
        // get title
        $item['title'] = trim($article->find('h2', 0)->plaintext);
        // get details
        $item['details'] = trim($article->find('digg-story__description', 0)->plaintext);

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
    echo $v['title'].'<br>';
    echo '<ul>';
    echo '<li>'.$v['details'].'</li>';
    echo '<li>Diggs: '.$v['diggs'].'</li>';
    echo '</ul>';
}

?>