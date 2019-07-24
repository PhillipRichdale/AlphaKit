<?php
	// ...
$digits = 5;
$randNum = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
?>

<script>
	var AlphaKitUiUrl = "<?=plugins_url()."/alphakitwp/uiContents.php";?>";
</script>

<div class="container">
	<div class="purespace" id="purespace">
		<div class="pure-g">
			<div class="pure-u-5-5">
				<h1>AlphaKit Della</h1>
			</div>
			<div class="pure-u-3-5 entity-title">
				<p>entity-title</p>
			</div>
			<div class="pure-u-2-5 entity-refreshing">
				<p>
					entity-refreshing
					<img
						id="loadspinner"
						src = "<?=plugins_url()."/alphakitwp/";?>loading-spinner-grey.gif"
					/>
				</p>
			</div>
			<div class="pure-u-5-5 entity-bottom">
				&nbsp;<form action="">
                    <label for="entityname">Name of the Entity (lowercase alphabet only):</label>
                    <input
                            id="entityname_XX"
                            name="entityname"
                            type="text"
                            value=""
                            maxlength="300"
                            pattern="[a-z]"
                            autofocus
                            required
                    />
                    <!-- required autofocus readonly disabled size= maxlength= -->
                </form>
			</div>
		</div>
	</div>
    <?php
    ?>
</div><!-- container -->
