<?php

use classes\Human;

require_once "component_epilog.php";
require_once "result_modifier.php";




$people = [
        array("name"=>"aaa", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"aab", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"aac", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"aae", "money"=>20, "city"=>"Tobikville"),
];
$aaa = new Human();

$aaa->setMoney(5);
$aaa->setName('aaa');
$aaa->sale(3);
print_debug($aaa);

$bdCon = new \classes\Model();

print_debug($bdCon->getConnect());
?>
<div class="container">

    <h1>People</h1>
    <div class="people_cart_box">
        <?php
        foreach ($people as $chel){?>
            <?=PeopleCart($chel);?>
        <?}?>

        <?=PeopleCartObj($aaa);?>
    </div>
</div>

<?php
function PeopleCart($chel){
    return  '
    <div class="people_cart">
        <p>Name: '.$chel["name"].'</p>
        <p>$: '.$chel["money"].'</p>
    </div>
    ';
}

function PeopleCartObj($obj){
    return  '
    <div class="people_cart">
        <p>Name: '.$obj->name.'</p>
        <p>$: '.$obj->countMoney().'</p>
    </div>
    ';
}


?>