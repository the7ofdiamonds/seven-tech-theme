<?php

use SEVEN_TECH\Content\Content;

$content = new Content;

$page = $_SERVER['REQUEST_URI'];

$pageContent = $content->getPageContent($page);

$pageContentArray = $pageContent['content'];

foreach ($pageContentArray as $content) {
	echo $content;
}
