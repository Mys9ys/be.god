<?php
require_once "component_epilog.php";

$people = [
        array("name"=>"aaa", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"aab", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"aac", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"aae", "money"=>20, "city"=>"Tobikville"),
]
?>
<h1>People</h1>
<div class="people_cart_box">
    <?php
    foreach ($people as $chel){?>
        <?=PeopleCart($chel);?>
    <?}?>
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

?>