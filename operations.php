<?php
function calcul($operation){
    $operand1 = "";
    $operand2 = "";
    $operator = "";
    for ($i = 0; $i<strlen($operation); $i++){
        $char = $operation[$i];
        if (is_numeric($char) == true){
            $operand1 .= $char;}
        elseif($char == "+" || $char == "-" || $char == "*" || $char == "/"){
            $operator = $char;
            $operand2 = $operand1;
            $operand1 = "";
        }
        else {break;}
        }
    $operand1 = (float) $operand1;
    $operand2 = (float) $operand2;
    switch ($operator){
        case "+" : $result = $operand2 + $operand1;
        break;
        case "-" : $result = $operand2 - $operand1;
        break;
        case "*" : $result = $operand2 * $operand1;
        break;
        case "/" : 
            if ($operator != 0 ) {
            $result = $operand2 / $operand1;}
            else{echo "Undefined operation";}
        break;
        default : echo "Invalid operator";
    }

    return $result;

}
echo calcul("3+5") . "\n";
echo calcul("10*120") . "\n";
echo calcul("120/3") . "\n";
echo calcul("12-5") . "\n";