<?php
if (!defined('IN_SCRIPT')) {die('Invalid attempt!');}
$config = array(
    "name" => "Bunkercoin",
    "symbol" => "BKC",
    "description" => "You could browse the Bunkercoin block detail and transaction detail with Bunkercoin Block Explorer.",
    "homepage" => "https://bunkercoin.xyz/",
    "root_path" => "/", //start with '/', end with '/'
    "copy_name" => "The Bunkercoin developers",
    "start_year" => 2021,
    "explorer_name" => "Bunkercoin Block Explorer",
    "explorer_path" => "", //do not start with '/',  but end with '/', if root write ""
    "theme" => "theme1",
    "rpc_host" => "127.0.0.1",
    "rpc_port" => 1234,
    "rpc_user" => "user",
    "rpc_password" => "password",
    "proofof" => "pow",
    "nTargetTimespan" => 60, // Bunkercoin: every 1 minute
    "nTargetSpacing" => 60, // Bunkercoin: 1 minute
    "blocks_per_page" => 15,
    "date_format" => "H:i:s d/m/Y",
    "refresh_interval" => 60,
    "retarget_diff_since" => 0,
);
