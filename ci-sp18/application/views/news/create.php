<?php
//application/views/news/create.php
$this->load->view($this->config->item('theme') . 'header');
?>

<?=validation_errors(); ?>
<h2><?=$title?></h2>


<?=form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>
<?php 
$this->load->view($this->config->item('theme') . 'footer');
?>