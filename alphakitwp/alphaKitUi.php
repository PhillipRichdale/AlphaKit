<?php

if (!defined('ABSPATH')) die;

?>

<script>
	var AlphaKitUiUrl = "<?=plugins_url()."/alphakitwp/uiContents.php";?>";
</script>

<div class="container">
	<div class="purespace" id="purespace">
		<div class="pure-g">
			<div class="pure-u-1-5">
				<img
					id="AlphaKit-Logo"
					style="width:100%;"
					alt="AlphaKit-Logo"
					src="<?=plugins_url()."/alphakitwp/";?>alphakit-logo-pict.svg"
				>

			</div>
			<div class="pure-u-4-5">
				<h1>AlphaKit Overview</h1>
				<p>AlphaKit is a PHP Toolkit and set of PHP Utilities deployed as a WordPress Plugin. AlphaKits intent is to offer a fast and easy way for web developers to integrate critical tools and functions that significantly speed up day-to-day web development with WordPress environments whilst at the same time supporting best pratices and a clean software architecture on top of WordPresses aged legacy structure.</p>
				<p>Please note: AlphaKit includes tools ment solely for software development and not ment  for delivery into production systems. Such as the AlphaKit Della CASE Tool / Modeller.</p>
			</div>
		</div>
	</div>
    <?php
    ?>
</div><!-- container -->
