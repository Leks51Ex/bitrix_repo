<?

$workflows_arr = $arResult['viewData']['workflows'];


foreach($workflows_arr as $workflow){
    echo "<pre>";
        print_r($workflow);
    echo "</pre>";
}