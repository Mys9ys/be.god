<?php
require_once "component_epilog.php";

$companies = [
        array("name"=>"ВПР", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"МнФ", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"ВиФ", "money"=>20, "city"=>"Tobikville"),
        array("name"=>"ВодПр", "money"=>20, "city"=>"Tobikville"),
]
?>
<div class="container">
    <h1>company</h1>
    <div class="company_cart_box">
        <?php
        foreach ($companies as $company){?>
            <?=companyCart($company);?>
        <?}?>
    </div>
</div>


<?php
function companyCart($company){
    return  '
    <div class="company_cart">
        <p>Name: '.$company["name"].'</p>
        <p>$: '.$company["money"].'</p>
    </div>
    ';
}

?>