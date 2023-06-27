<?php 

    $numero = $_POST['numero'] ?? 0;
    $numfmt = numfmt_create('pt_BR', NumberFormatter::DECIMAL);
    $numeroFmt = numfmt_format($numfmt, $numero);

    $decimal = explode(",", $numeroFmt);

    echo "O número informado $numeroFmt contém:"."<br>";
    echo "$decimal[0] como parte inteira e 0,$decimal[1] como parte decimal";
?>