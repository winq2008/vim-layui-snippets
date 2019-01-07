<?php
/**
 * Short description for index.php
 *
 * @package index
 * @author zhenyangze <zhenyangze@gmail.com>
 * @version 0.1
 * @copyright (C) 2019 zhenyangze <zhenyangze@gmail.com>
 * @license MIT
 */

$content  = file_get_contents('../Dict/layui.txt');
$list = explode("\n", $content);
foreach($list as $item) {
    $item = trim($item);
    if (empty($item)) {
        continue;
    }
    //$key = str_ireplace('-', '_', $item);
    file_put_contents(__DIR__ . '/html_keywords.snippets', implode("\n", [
        "snippet " . $item . ' ' . "\"Layui_Class:" . $item . "\"",
        $item,
        "endsnippet", 
        "\n",
    ]) . "\n", FILE_APPEND);
}