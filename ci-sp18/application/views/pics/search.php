<?php
//application/views/news/index.php
$this->load->view($this->config->item('theme') . 'header');
?>

<h2><?php echo $title; ?></h2>


<?=validation_errors(); ?>
<?=form_open('pics/search'); ?>

    <label for="tags">Tag</label>
    <input type="input" name="tags" /><br />

    <input type="submit" name="submit" value="Show Images" />

</form>
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>