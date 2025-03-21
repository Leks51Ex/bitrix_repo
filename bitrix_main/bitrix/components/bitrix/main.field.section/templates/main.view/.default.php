<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var EnumUfComponent $component
 * @var array $arResult
 */

use \Bitrix\Main\UserField\Types\EnumType;

$component = $this->getComponent();

$isEmpty = true;
?>

<span class="field-wrap">
<?php
foreach($arResult['value'] as $res)
{
	if(array_key_exists($res, $arResult['userField']['USER_TYPE']['FIELDS']))
	{
		$textRes = $arResult['userField']['USER_TYPE']['FIELDS'][$res];
		$isEmpty = false;
	}
	else
	{
		continue;
	}
	?>
	<span class="field-item">
		<?php
		if(!empty($arResult['userField']['PROPERTY_VALUE_LINK']))
		{
			$href = htmlspecialcharsbx(
				str_replace('#VALUE#', $res, $arResult['userField']['PROPERTY_VALUE_LINK'])
			);
			$textRes = htmlspecialcharsbx($textRes);
			?>
			<a
				href="<?= $href ?>"
			>
				<?= $textRes ?>
			</a>
			<?php
		}
		else
		{
			print htmlspecialcharsbx($textRes);
		}
		?>
	</span>
	<?php
}

if($isEmpty)
{
	$emptyCaption = htmlspecialcharsbx(
		EnumType::getEmptyCaption($arResult['userField'])
	);
	print $component->getHtmlBuilder()->wrapSingleField($emptyCaption);
}
?>
</span>