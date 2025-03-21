<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Text\HtmlFilter;

foreach($arResult['value'] as $value)
{
	print (!empty($value['value']) ? HtmlFilter::encode($value['value']) : '');
}