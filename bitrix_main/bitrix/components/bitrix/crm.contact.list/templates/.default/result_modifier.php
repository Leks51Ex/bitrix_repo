<?
//$arr = get_defined_vars();
use Bitrix\Crm\ContactTable;
use Bitrix\Main\UserGroupTable;

if($_SERVER["SERVER_NAME"]=="cp.cir.cx"){
    $field_id = "3582";
}
else {
    $field_id = "3345";
}

$result = UserGroupTable::getList([
    "filter" => ["USER_ID" => $USER->GetID()],
    "select" => ["GROUP_ID"]
]);


while ($group = $result->fetch()) {
    if ((int)$group['GROUP_ID'] === 8) {
        $hasAccess = true;
        break;
    }
}
foreach($arResult["CONTACT"] as $id => $contact){
    //print_r($arResult["CONTACT"]);
    //print_r($source);
    $source = ContactTable::getList([
        "filter" => ["ID" => $id],
        "select" => ["UF_CRM_SOURCE_ID"], // Замените 'UF_YOUR_CUSTOM_FIELD' на ваш код пользовательского поля
    ])->fetch();
    
    if($source["UF_CRM_SOURCE_ID"] == $field_id && !$hasAccess){ // Если нет доступа, то скрыть контакт
        if(array_key_exists($id, $arResult["CONTACT"])) {
            unset($arResult["CONTACT"][$id]);
        }
    }
}

unset($id,$contact,$field_id);