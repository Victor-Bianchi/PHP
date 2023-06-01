<?php

    function minhaFuncao($param = 10, $param2 = 20) {
        echo "Função!";
        return $param + $param2."<br>";
    }

    echo minhaFuncao();

    # Trabalhando com Datas

    date_default_timezone_set("America/Sao_Paulo"); # CORRIGIR O HORÁRIO

    $data = date("d/m/Y H:i:s", time() + (60 * 10)); # adição de 10 minutos
    # função time() retorna o tempo em segundos do timestamp

    echo $data;

    /**
     * Função include() com a ação de incluir arquivos (fazer header e footer padrão)
     * Colocar o nome do site como variável e dar echo na tag title
     */

?>