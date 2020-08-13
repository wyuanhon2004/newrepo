<?php
$p = $_GET;

if (!isset($p['req_time']) || empty($p['req_time'])) {
	echo 'false1';exit;
}

if (!isset($p['token']) || empty($p['token']) || $p['token'] != md5($p['req_time'].'#123QWE789')) {
	echo 'false3';exit;
}

echo json_encode($_SERVER);exit;