<?php

require_once './vendor/autoload.php';
use CoinbaseCommerce\ApiClient;
use CoinbaseCommerce\Resources\Charge;
ApiClient::init('763d424e-fe7b-4375-865f-0d50ce992791');

function recuperaCargoPorId($id)
{
    try{
        $retriveCharge  = Charge::retrieve($id);
        if (isset ($retriveCharge->payments[0]['status'])){
            echo "El cargo con ID=".$id."esta ".$retriveCharge->payments[0]['status']."<br>";
        } else {
            echo "El cargo con ID=".$id." no tiene pagos<br>";
        }
        //var_dump($retriveCharge);
        }catch(\Exception $ex){
            echo $ex->getMessage();
    }
}
recuperaCargoPorId($_GET['id']);

?>