<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

return array(
	"css" => "/bitrix/js/b24network/component/account/socserv/dist/socserv.bundle.css",
	"js" => "/bitrix/js/b24network/component/account/socserv/dist/socserv.bundle.js",
	'rel' => [
		'main.polyfill.core',
		'main.core.events',
	],
	'skip_core' => true,
);