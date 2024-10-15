<?php

require_once get_template_directory() . '/Content/Content.php';

use SEVEN_TECH_THEME\Content\Content;

$content = new Content;

$page = $_SERVER['REQUEST_URI'];

$pageContent = $content->getContent($page);

if (!empty($pageContent)) {
	$pageContentArray = $pageContent['content'];

	foreach ($pageContentArray as $content) {
		echo $content;
	}
}
