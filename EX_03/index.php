<?php
class sen
{
    private string $met;


    function __construct(){
        $this->met = "+1";

    }
    function getValue(){
        return $this->getOperation(rand(0, 4095));


    }


    public function setOperation($str){


        $this->met = $str;


    }

    private function getOperation($valor){

        $result = 0;

        eval("\$result = " . ($valor . $this->met) . ";");

        return $result;

    }
}

class product
{


    public sen $sen1;
    public sen $sen2;
    public sen $sen3;
    public sen $sen4;
    public sen $sen5;

    function __construct(){
        $this->sen1 = new sen();
        $this->sen2 = new sen();
        $this->sen3 = new sen();
        $this->sen4 = new sen();
        $this->sen5 = new sen();


    }


}

$p = new product();
echo $p->sen1->getValue() . "</br>";

$p->sen1->setOperation("*69");



echo $p->sen2->getValue() . "</br>";

$p->sen2->setOperation("</33");



echo $p->sen3->getValue() . "</br>";

$p->sen3->setOperation("-200");



echo $p->sen4->getValue() . "</br>";

$p->sen4->setOperation("+55");



echo $p->sen5->getValue() . "</br>";

$p->sen5->setOperation("/48");


?>
