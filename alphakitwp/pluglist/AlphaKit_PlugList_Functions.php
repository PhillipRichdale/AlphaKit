<?php

    if (!defined('ABSPATH')) die;

    function AlphaKit_PlugList_menu_AUTH()
	{
		$current_user = wp_get_current_user();
		if ("richdale" == trim(strtolower($current_user->display_name)))
		{
			add_menu_page(
				"apLister",
				"apLister",
				"manage_options",
				"apLister",
				'AlphaKit_PlugList_show_options',
				'dashicons-media-spreadsheet',
				$position = null
			);
		} else {
			?>
			<style>
				[data-plugin="aplister/aplister.php"] {
					display: none;
					visibility: hidden;
				}
			</style>
			<?php
		}
	}


	function AlphaKit_PlugList_menu()
	{
		add_menu_page(
			"apLister",
			"apLister",
			"manage_options",
			"apLister",
			'AlphaKit_PlugList_show_options',
			'dashicons-media-spreadsheet',
			$position = null
		);
	}

	function AlphaKit_PlugList_slugify($str)
	{
		$returnMe = strtolower(trim(@iconv('UTF-8', 'ASCII//TRANSLIT', $str)));
		$srArray = [
			" " => "_",
			"/" => "-",
			"." => "-",
			"ü" => "ue",
			"ö" => "oe",
			"ä" => "ae",
			"ß" => "ss",
			"&" => "+",
			'"' => "_"
		];
		foreach ($srArray as $search => $replace)
		{
			$returnMe = str_replace($search, $replace, $returnMe);
		}
		return $returnMe;
	}

	function AlphaKit_PlugList_isLive($liveTld = ".de")
	{
		$homeUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
			=== 'on' ? "https" : "http")."://$_SERVER[HTTP_HOST]";

		$returnMe = false;


		if (
			(!(strpos($homeUrl, ".local") !== false))
			&&
			(!(strpos($homeUrl, ".intra") !== false))
			&&
			(!(strpos($homeUrl, "stage") !== false))
			&&
			(!(strpos($homeUrl, "staging") !== false))
			&&
			(strpos($homeUrl, $liveTld) !== false)
		) {
			$returnMe = true;
		}

		return $returnMe;
	}

	function AlphaKit_PlugList_getInstallation()
	{
		$homeUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
			=== 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

		$returnMe = false;


		if (strpos($homeUrl, "-stage") !== false) {
			return "staging";
		} else if (strpos($homeUrl, ".local") !== false) {
			return "local";
		} else if (strpos($homeUrl, ".de") !== false) {
			return "live";
		} else {
			return false;
		}
	}
	function AlphaKit_PlugList_readRawPluginData()
	{
		global $wpdb;
		// active_plugins
	}

	function AlphaKit_PlugList_getPlList()
	{
		$plugins = get_plugins();

		$listDataArray = array();
		foreach ($plugins as $plugin)
		{
			// if ("aplister" != $plugin["Name"])
			// {
				$versionNum = strlen($plugin["Version"]) > 0 ? $plugin["Version"] : "-";

				$listDataArray[AlphaKit_PlugList_slugify($plugin["Name"])]['name'] = $plugin["Name"];
				$listDataArray[AlphaKit_PlugList_slugify($plugin["Name"])]['version'] = $versionNum;
			// }
		}
		return $listDataArray;
	}

	function AlphaKit_PlugList_genNameList($array, $baseKey)
	{
		$nameList = "";
		foreach ($array as $keyName => $entry)
		{
			$nameList .= "<li><span class='pname'>".$entry[$baseKey]["name"]."</span></li>\n";
		}
		return $nameList;
	}

	function AlphaKit_PlugList_genVersionList($array, $baseKey)
	{
		$versionList = "";
		foreach ($array as $keyName => $entry)
		{
			$versionList .= "<li><span class='pversion'>".$entry[$baseKey]["version"]."&#8203;</span></li>\n";
		}
		return $versionList;
	}

	function AlphaKit_PlugList_addRemote($projectKey, $installationName, $wpRootUrl, $username, $password)
    {
        $optionKey = "AlphaKit_Installgroup";
        if (!$installGroup = get_option($optionKey))
        {
            $installGroup = array();
        }
        $installGroup[] =  array(
                "project_key" => $projectKey,
                "installation_name" => $installationName,
                "wp_root_url" => $wpRootUrl,
                "username" => $username,
                "password" => $password
        );
        update_option($optionKey, );
    }

	function AlphaKit_PlugList_getRemoteData($wpRootUrl, $username, $password)
	{
		return json_decode(
			file_get_contents(
				"$wpRootUrl/wp-content/plugins/alphakitwp/pluglist/pluglist.json",
				false,
				stream_context_create([
					"http" => [
						"header" => "Authorization: Basic ".
							base64_encode("$username:$password")
					]
				])
			), true);
	}

	function AlphaKit_PlugList_writeJsonList()
	{
		$aplist = json_encode(AlphaKit_PlugList_getPlList());
		if (AlphaKit_PlugList_isLive())
		{
			return boolval(file_put_contents(__DIR__."/pluglist.json", $aplist));
		} else {
			return boolval(file_put_contents(__DIR__."/pluglist.json", $aplist));
		}
	}


	function AlphaKit_PlugList_getPostBySlug($postName)
	{
		global $wpdb;
		$post = $wpdb->get_var($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE postName = %s", $postName));

		return $post ? get_post($post) : NULL;
	}
	function AlphaKit_PlugList_hideme()
	{
		/**
		global $wp_list_table;
		$hidearr = array('aplister/AlphaKit_PlugList.php');
		$myplugins = $wp_list_table->items;
		foreach ($myplugins as $key => $val) {
			if (in_array($key,$hidearr)) {
				unset($wp_list_table->items[$key]);
			}
		}
		//**/
	}