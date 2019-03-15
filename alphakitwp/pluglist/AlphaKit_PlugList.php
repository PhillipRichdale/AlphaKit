<?php

if (!defined('ABSPATH')) die;

require_once __DIR__ . "/../classes/AlphaKit.php";
global $AlphaKit;
global $wpdb;
$AlphaKit = new \AlphaKit\AlphaKit($wpdb);

add_action( 'network_admin_menu', 'AlphaKit_PlugList_menu');
require_once "AlphaKit_PlugList_Functions.php";


function AlphaKit_PlugList_genTotalView()
{
	$installation = AlphaKit_PlugList_getInstallation();
	$localList = false;
	if ("staging" != $installation)
	{
		$stagingList = AlphaKit_PlugList_getRemoteData();
	} else {
		$stagingList = AlphaKit_PlugList_getPlList();
	}
	//var_dump($stagingList);exit();
	if ("live" != $installation)
	{
		$liveList = AlphaKit_PlugList_getDataLive();
	} else {
		$liveList = AlphaKit_PlugList_getPlList();
	}

	if ("local" == $installation)
	{
		$localList = AlphaKit_PlugList_getPlList();
	}

	$nameList = "";
	$liveVernumList = "";
	$stagingVernumList = "";
	$localVernumList = "";

	$nameKeys = array();

	//add *all* plugins to the namelist:
	foreach ($liveList as $nameKey => $items)
	{
		$nameKeys[$nameKey] = $items["name"];
	}
	foreach ($stagingList as $nameKey => $items)
	{
		$nameKeys[$nameKey] = $items["name"];
	}
	if ($localList)
	{
		foreach ($localList as $nameKey => $items)
		{
			$nameKeys[$nameKey] = $items["name"];
		}
	}

	ksort($nameKeys);
	//sorted assembly of li lists by complete nameKey array:
	foreach ($nameKeys as $nameKey => $pName)
	{
		$nameList .= "<li><span class='pname'>".$pName."&#8203;</span></li>\n";


		$liveVersion = false;
		$stagingVersion = false;
		if (isset($liveList[$nameKey]))
		{
			$liveVersion = $liveList[$nameKey]["version"];
			$liveVernumList .= "<li><span class='pversion'>&#8203;".$liveList[$nameKey]["version"]."</span></li>\n";
		} else {
			$liveVernumList .= "<li><span class='pversion notThere'>x&#8203;</span></li>\n";
		}

		if (isset($stagingList[$nameKey]))
		{
			$offsync = "";
			$stagingVersion = $stagingList[$nameKey]["version"];
			if ($liveVersion)
			{
				if ($liveVersion != $stagingList[$nameKey]["version"])
				{
					$offsync = "offsync";
				}
			}
			$stagingVernumList .= "<li><span class='pversion $offsync'>&#8203;".$stagingList[$nameKey]["version"]."</span></li>\n";
		} else {
			$stagingVernumList .= "<li><span class='pversion notThere'>x&#8203;</span></li>\n";
		}

		if (isset($localList[$nameKey]))
		{
			$offsync = "";
			if ($liveVersion)
			{
				if ($liveVersion != $localList[$nameKey]["version"])
				{
					$offsync = "offsync";
				}
				if ($stagingVersion)
				{
					if ($stagingVersion != $localList[$nameKey]["version"])
					{
						$offsync = "offsync offsyncOfStage";
					}
				}
			}
			$localVernumList .= "<li><span class='pversion $offsync'>&#8203;".$localList[$nameKey]["version"]."</span></li>\n";
		} else {
			$localVernumList .= "<li><span class='pversion notThere'>x&#8203;</span></li>\n";
		}
	}
	$lists = array(
		"live" => $liveVernumList
		,
		"staging" => $stagingVernumList
	);
	if ($localList)
	{
		$lists['local'] = $localVernumList;
	}
	$lists["names"] = $nameList;
	return $lists;
}
function AlphaKit_PlugList_show_options()
{
	AlphaKit_PlugList_writeJsonList();

	$lists = AlphaKit_PlugList_genTotalView();
	?>
	<style>
		div.container {
			width: 100%;
		}
		div.apList_Names {
			margin: 0;
			padding: 0 6px 0 0;
			float: left;
		}
		div.apList_Vernums {
			width: 70px;
			margin: 0;
			padding: 0 6px 0 0;
			float: left;
		}
		h1 {
			min-height: 40px;
			margin: 20px auto 0 0;
		}
		ul li span.pname {
			display: inline-block;
			background-color: white;
			padding: 3px 3px 3px 6px;
			border: #e3e3e3 1px solid;
			border-radius: 3px;
			width: 500px;
		}
		ul li span.pversion {
			display: inline-block;
			background-color: white;
			padding: 3px 3px 3px 6px;
			border: #e3e3e3 1px solid;
			border-radius: 3px;
			width: 60px;
			text-align: right;
		}
		span.notThere {
			color: #ee2200;
			font-weight: bold;
			font-family: monospace;
			text-align: center;
		}
		span.offsync {
			color: orangered;
			font-weight: bold;
			background-color:#aaddff;
		}
		ul li span.offsyncOfStage {
			color: #ffa100;
			background-color: #4e8fff;
		}
		div.update-nag, div#wordfenceAutoUpdateChoice, div.updated {
			display: none;
		}
	</style>
	<script>
		let success = function (e, n)
		{
			let retVal = JSON.stringify(e, null, 4);
			console.log("e =>" + retVal);
			console.log("n =>" + n);
		}
		jQuery.ajax({
			dataType: "json",
			url: "https://www.###REMOTE_URL###/wp-content/plugins/aplister/aplist_trigger.php",
			data:"",
			success:success
		});
	</script>
	<div class="container">
		<h1>AlphaKit PlugList</h1>
		<p>This AlphaKit Component lists all installed WordPress plugins alphabetically with name and version-number. Additionaly this list gets stored as <code>pluglist.json</code> in the pluglist directory. A manually editable list of remote installations compares all plugin lists. Differences in these lists and in each plugins version are highlighted. Plugins not present in an installation are highlighted with a bold red "<span class="notThere">x</span>".<br /><br />Each column in the list is enclosed in its own div for easy copy & pasting into other tables and lists.</p>
		<div class="apList_Names">
			<h2>Plugins</h2>
			<ul>
				<?=$lists["names"];?>
			</ul>
		</div>
	<?php
		if (isset($lists["live"]))
		{
			if (strlen($lists["live"]) > 0)
			{
				?>
				<div class="apList_Vernums">
					<h2>Live</h2>
					<ul>
						<?=$lists["live"];?>
					</ul>
				</div>
				<?php
			}
		}

		if (isset($lists["staging"]))
		{
			if (strlen($lists["staging"]) > 0)
			{
				?>
				<div class="apList_Vernums">
					<h2>Staging</h2>
					<ul>
						<?=$lists["staging"];?>
					</ul>
				</div>
				<?php
			}
		}

		if (isset($lists["local"]))
		{
			if (strlen($lists["local"]) > 0)
			{
				?>
				<div class="apList_Vernums">
					<h2>Local</h2>
					<ul>
						<?=$lists["local"];?>
					</ul>
				</div>
				<?php
			}
		}
	?>
	</div><!-- container -->
	<?php
}

add_action('pre_current_active_plugins', 'AlphaKit_PlugList_hideme');
add_shortcode( 'AlphaKit_PlugList_write_json_list', 'AlphaKit_PlugList_writeJsonList');