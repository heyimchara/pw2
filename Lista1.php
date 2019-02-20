<?php

echo "Exer1";

           $n1 = 10;
           $n2 = 4;
           $n3 = 8;
           $n4 = 6;
           
           $media = ($n1+$n2+$n3+$n4)/4;
           
          if ($media >= 6){
              echo "aprovado";
          }else{
              echo"reprovado";
          }  

echo "Exer2";

$salario = 2500;
            
          if ($salario <= 1000){
              
             $valor = $salario * 0.4;
              
              echo "seu bonus será de:" . $valor ;
          }else{
              
               $valor = $salario * 0.3;
              
              echo "seu bonus será de:" . $valor ; 
          }  
       


echo "Exer3";

$media = 7.75;
        $frequen = 0.75;
        
        if ($media >= 6 && 0.75){
            echo "Aprovado";
        }else{
            echo"Reprovado";
        }
       


echo "Exer4";

for ($i=0; $i<=100; $i++){
              if ($i%2==0){
                  echo $i . "<br>";
              }  
            }
       


echo "Exer5";

$n1 =54;
            $n2 = 121;
            
           if ($n1 > $n2){
               echo $n1;
           }else{
               echo $n2;
           }


echo "Exer6";

$n1=12;
         $n2=24;
         $n3=57;
         
         if($n1>$n2 && $n1>$n3){
            echo $n1; 
         }elseif($n2>$n1 && $n2>$n3){
            echo $n2; 
         }else{
             echo $n3;
         }


echo "Exer7";

$n1 = 7;
          $n2 = 10;
          
          if ($n1 == $n2){
              echo "os numeros são iguais";    
          }elseif($n1 > $n2){
              echo "O primeiro é maior";
          }else{
              echo "O segundo é maior"; 
          }


echo "Exer8";
$idade = 80;

          if ($idade <=18){

          echo "Pagar inteira";

        }elseif ($idade >=60){

          echo "Pagar metade";

        }


echo "Exer9";

echo "<h3>"."Tabuada do 1"."</h3>";

         echo "<br>" ;
          echo "<br>" ;

         for ($i=1; $i<=1; $i++){

         for ($y=1; $y<=10; $y++) { 
          echo $i . " x " .$y."= " . $i*$y . " | ";
         }
       }

       echo "<br>" ;
        echo "<br>" ;

        echo "<h3>" . "Tabuada do 2" . "</h3>";

         echo "<br>" ;
        echo "<br>" ;


         for ($i=2; $i<=2; $i++){

         for ($y=1; $y<=10; $y++) { 
          echo $i . " x " .$y."= " . $i*$y . " | ";
         }
       }







?>


           



