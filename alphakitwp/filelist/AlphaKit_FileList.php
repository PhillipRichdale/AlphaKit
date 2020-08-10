<?php

if (!defined('ABSPATH')) {
    die;
}

function AlphaKit_FileList_show_options()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }

    $fileUrl = "http://" . $_SERVER['SERVER_NAME'] . "/wp-content/uploads/curl-media-dl.bash";
    $wgetFileUrl = "http://" . $_SERVER['SERVER_NAME'] . "/wp-content/uploads/wget-media-dl.bash";

    //Not good. Slow for huge uploads directories. This needs replacing with some true Ajax call thing:
    generateShellScripts(); ?>
    <script>
        var spinnerCount = 0;
        var degrees = 0;
        var spinnerInterval = false;
        var demoInterval = false;

        function doLoadInication()
        {
            if (8 == spinnerCount)
            {
                spinnerCount = 0;
            }
            degrees = 45 * spinnerCount;
            jQuery("img#loadspinner").css({"transform":"rotate("+degrees+"deg)"});
            spinnerCount++;
        }
        jQuery(document).ready(function(){
            jQuery("div.notice").hide();
            jQuery("div.updated").hide();
            jQuery("div.error").hide();
            jQuery("div.info").hide();

            function showLoading()
            {
                jQuery("img#loadspinner").show();
                jQuery("img#loadspinner").fadeIn(1);
                spinnerInterval = setInterval(doLoadInication,100);
                demoInterval = setInterval(loadingFinished, 10000);
            }
            function loadingFinished()
            {
                jQuery("img#loadspinner").faceOut(
                    400,
                    function()
                    {
                        jQuery("img#loadspinner").hide();
                        clearInterval(spinnerInterval);
                        clearInterval(demoInterval);
                    }
                );

            }
            //showLoading();
        });
    </script>
    <style>
        a.thisButton{
            display: block;
            text-align: center;
            width: 350px;
            background-color:#eee;
            border:1px solid #777;
            border-radius:7px;
            color:#000;
            margin: 10px;
            padding:10px 10px 10px 10px;
            text-decoration: none;
        }
        a.thisButton:hover {
            background-color: #3962ff;
            color: white;
            font-weight: bold;
        }
        img#loadspinner {
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
        }
        a#curlButton, a#wgetButton {
            /** pointer-events: none; **/
        }
    </style>
    <div class="container">
        <div class="purespace" id="purespace">
                <div class="pure-g">
                    <div class="pure-u-5-5">
                        <div class="wrap">
                            <h1 class="wp-heading-inline">AlphaKit FileList</h1>
                            <p>
                                Generates a shellscript to download all files in the WordPress <code>uploads</code> directory using <code>curl</code>.<br />
                                The generated sh/curl script checks for existing files and only downloads those that haven't been downloaded yet.
                            </p>
                            <p>
                                <a id="curlButton" class="button button-primary" href="<?=$fileUrl; ?>" download>Download curl shellscript here.</a>
                            </p>
                            <p>
                                ATTENTION: Execute in <u><b><i>*WordPress ROOT*</i></b></u> with <code>sh curl-media-dl.bash</code>.<br />
                                <code>curl</code> - of course - needs to be present.<br />
                                Install that with your package manager of choice.
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
    <?php
}
