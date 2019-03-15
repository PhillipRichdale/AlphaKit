<?php
    if (!defined('ABSPATH')) die;
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
                &nbsp;
            </div>
        </div>
    </div>
    <?php
    ?>
</div><!-- container -->
