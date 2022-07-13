<?php

/*Monk*/

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,235";
          break;

        case "2":
            $xpNext = "4,765";
        break;
        
        case "3":
            $xpNext = "10,025";
        break;
        
        case "4":
            $xpNext = "18,251";
        break;
        
        case "5":
            $xpNext = "45,501";
        break;
        
        case "6":
            $xpNext = "93,001";
        break;        

        case "7":
            $xpNext = "195,001";
        break;
                
        case "8":
            $xpNext = "340,001";
        break;
                
        case "9":
            $xpNext = "560,001";
        break;
                
        case "10":
            $xpNext = "780,001";
        break;
                
        case "11":
            $xpNext = "1,000,001";
        break;
                
        case "12":
            $xpNext = "1,220,001";
        break;
                
        case "13":
            $xpNext = "1,440,001";
        break;
                
        case "14":
            $xpNext = "1,660,001";
        break;
                
        case "15":
            $xpNext = "1,880,001";
        break;
                
        case "16":
            $xpNext = "---";
        break;


        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}

?>