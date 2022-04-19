<div class="wrap">
	<h1>Duplicate Post Settings</h1>
	<form method="post" action="options.php">
		<?php settings_fields('duplicate_post_general') ?>
		<?php do_settings_sections('duplicate_post') ?>
		<?php submit_button() ?>
	</form>
</div>

<style>
h1{color: orange; font-family: sans-serif;}
</style>