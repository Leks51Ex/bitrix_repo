<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader,
	Bitrix\Main\Localization\Loc,
	Bitrix\Sale,
	Bitrix\Sale\Delivery,
	Bitrix\Main\Engine\Contract\Controllerable;

/**
 * Class SalesCenterDeliveryComponent
 */
class SalesCenterDeliveryComponent extends CBitrixComponent
{
	/**
	 * @param $arParams
	 * @return array
	 */
	public function onPrepareComponentParams($arParams)
	{
		return parent::onPrepareComponentParams($arParams);
	}

	/**
	 * @return mixed|void
	 * @throws \Bitrix\Main\ArgumentException
	 * @throws \Bitrix\Main\LoaderException
	 * @throws \Bitrix\Main\SystemException
	 */
	public function executeComponent()
	{
		if(!Loader::includeModule('salescenter'))
		{
			ShowError(Loc::getMessage('SD_SALESCENTER_MODULE_ERROR'));
			return;
		}
		Loader::includeModule('sale');

		$this->includeComponentTemplate();
	}

	/**
	 * @param $error
	 */
	protected function showError($error)
	{
		ShowError($error);
	}
}