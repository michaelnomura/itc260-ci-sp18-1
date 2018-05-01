<?php
//application/view/news/view.php
$this->load->view($this->config->item('theme') . 'header');

/*echo '<pre>';
var_dump($pics);
echo '<pre>';
die;*/

foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
    
    echo "<hr>";
    echo "<h3>" . $pic->title . "</h3>";
    
    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' /><br>";
 
}

$this->load->view($this->config->item('theme') . 'footer');
