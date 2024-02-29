<?php

  function parImpar($num)
  {
      if($num % 2 == 0 && $num != 0)
      {
          return true;
      }else if ($num % 2 != 0 && $num != 0){
          return false;
      }else{
          die;
      }
  }
  
do 
{
      $num = readline("Insira um número: \n");
      if(parImpar($num) == true)
      {
          print "O número que você informou é par!\n";
      }else{
          print "O número que você informou é impar!\n";
      }
} while ($num != 0);
