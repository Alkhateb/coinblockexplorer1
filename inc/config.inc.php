﻿<?php
// change level of php error reporting
$error_level = E_ALL;

// enable/disable rpc error reporting
$rpc_debug = true;

// enable/disable the explorer frontend
$site_enabled = true;

// message to show when $site_enabled = false
$offline_msg = 'LuckChain区块浏览器正在维护中...';

// install directory ('/' if installed at root)
$install_dir = '/';

// website title-2016
$site_name = 'LuckChain Block Explorer';

// default time zone used by server
$time_zone = 'PRC';

// coin currency code-2016
$curr_code = 'BASH';

// coin currency englishname-2016
$curr_ename = 'BASH';

// coin currency name-2016
$curr_name = '幸运链';

// coin currency official website-2016
$curr_offweb = 'http://www.luckchain.org';

// coin currency exchange website-2016
$curr_exweb = 'http://www.8xsz.com' ;

// coin currency exchange name-2016
$curr_exname = '八喜数字网' ;

// coin currency alg-2016
$curr_alg = 'Scrypt+Pos' ;

// show coinbase tx's on home page
$show_cbtxs = true;

// initial balance of coinbase account
$total_coin = '1000000000';

// initial block reward
$first_reward = '10';

// unix time when first block was mined
$launch_time = 1476547200;

// number of decimal places
$dec_count = 20;

// number of tx's shown per page
$txper_page = 20;

// RPC client name
$rpc_client = 'cryptonited';

// RPC username-2016
$rpc_user = 'fiyea2016';

// RPC password-2016
$rpc_pass = '123456f789';

//database host-2016
$db_host = "localhost";
$db_user = "root";
$db_pwd = "fiyea20163465";

//database detail-2016
$db_add = "db_bash_add"; //数据库名字
$tb_add = "db_tb_add"; //数据库基本表名字
$rich_add = "db_rich_add";//数据库富豪榜表名字

// address of coinbase account
$cb_address = 'BCMWG2XxhFw88MH7SJpRJVBuQo6j2BMmzy';


// ignore crap under this line
$inter_prot = (empty($_SERVER['HTTPS'])) ? 'http://' : 'https://';
$base_url = $inter_prot.$_SERVER['HTTP_HOST'].$install_dir;
bcscale($dec_count);
ini_set('display_errors', 1); 
error_reporting($error_level);
date_default_timezone_set($time_zone);
?>
