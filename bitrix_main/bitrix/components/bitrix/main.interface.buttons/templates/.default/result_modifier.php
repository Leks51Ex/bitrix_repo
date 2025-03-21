<?
/* Замена вкладки Товары на Товары и услуги */


foreach($arResult["ITEMS"] as $find_key => $find_value)
{
    if ($find_value["TEXT"] == "Товары"){
		$arResult["ITEMS"][$find_key]["TEXT"] = "Товары и услуги";
	}
}


$pattern = '/^socialnetwork_profile_menu_user_\d+$/';
if (preg_match($pattern, $arResult["ID"])) {
    //foreach($arResult["ITEMS"] as $find_key => $find_value)
    //{
        //echo "TEST";
        //if ($find_value["DATA_ID"] == "effective_counter"){
            
            array_push($arResult["ITEMS"], ["ID"=>"company-block", "SORT"=>"6", "TEXT"=>"Компании", "ON_CLICK"=>"load_profile_tabs_ajax('company-block')"]);
            array_push($arResult["ITEMS"], ["ID"=>"material-assets", "SORT"=>"7", "TEXT"=>"Материальные ценности", "ON_CLICK"=>"load_profile_tabs_ajax('material-assets')"]);
            
            //$arResult["ITEMS"][$find_key]["TEXT"] = "Эффективности";
            //echo "TEST";
            //die();
        //}
    //}
    
}

/*
echo "<pre>";
var_dump($arResult);
echo "</pre>";
*/