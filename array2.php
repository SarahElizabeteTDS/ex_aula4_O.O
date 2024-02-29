<?php

    $array1 = array("Nome" => "Manuel de Medeiros" , "Endereco" => "Rua das Acácias", "Cidade" => "Foz do Iguaçu", "UF" => "PR");
    $array2 = array("Nome" => "Juliana de Amaral" , "Endereco" => "Rua dos Pinheiros", "Cidade" => "Florianópolis", "UF" => "SC");
    $array3 = array("Nome" => "Rodrigo Baidek" , "Endereco" => "Rua Dom Pedro I", "Cidade" => "Petrópolis", "UF" => "RJ");
    $array4 = array("Nome" => "Fabíola da Silva" , "Endereco" => "Rua Chile", "Cidade" => "Guarulhos", "UF" => "SP");

    $pessoas = array($array1, $array2, $array3, $array4);

    foreach ($pessoas as $p) 
    {
        foreach ($p as $dados) 
        {
            print $dados . "|";
        }
        print "\n";
    }
