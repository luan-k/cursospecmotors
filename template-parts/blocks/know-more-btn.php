<?php
$text     = get_field('know_more_btn_text');
$link     = get_field('know_more_btn_link');

?>

<a href="<?php echo $link ?>" class="btn-wk rounded-2xl flex items-center justify-center bg-pec-bluedark text-white py-6 px-9 w-full text-center my-12">
	<?php echo $text; ?>
</a>
