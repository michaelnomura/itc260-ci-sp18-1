<?php
//application/views/news/success.php
$this->load->view($this->config->item('theme') . 'header');

?>

<h1>Yay!</h1>
<p>In theory your data was submitted</p>
<?php 
$this->load->view($this->config->item('theme') . 'footer'); ?>