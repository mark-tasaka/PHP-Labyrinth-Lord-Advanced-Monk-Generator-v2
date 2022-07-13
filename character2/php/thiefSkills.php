<?php

/*Monk */


function thiefMessage ($level)
{
    $message = "";
    
    if($level >= 1 && $level <= 3)
    {
        $message = "";
    }
    else if($level >= 4 && $level <= 8)
    {
        $message = "80% probability of reading languages (any non-magical writings).";
    }
    else if($level == 9)
    {
        $message = "80% probability of reading languages (any non-magical writings).<br/>
                    Can establish a thief's den, with 2d6 1st level thief apprentices.";
    }
    else
    {
        $message = "80% probability of reading languages (any non-magical writings).<br/>
                    Can establish a thief's den, with 2d6 1st level thief apprentices.<br/>
                    Can read and cast magic from magic-user/elf scrolls with 90% accuracy.";
    }
    
    return $message;
    
}



function adjustPickLocks ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 7;
    }
    else if($species === "Elf")
    {
        $adjust = -5;
    }
    else if($species === "Gnome")
    {
        $adjust = 5;
    }
    else if($species === "Halfling")
    {
        $adjust = 5;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustFindRemoveTraps ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 10;
    }
    else if($species === "Elf")
    {
        $adjust = 0;
    }
    else if($species === "Gnome")
    {
        $adjust = 7;
    }
    else if($species === "Halfling")
    {
        $adjust = 5;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}



function adjustPickPockets ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 0;
    }
    else if($species === "Elf")
    {
        $adjust = 5;
    }
    else if($species === "Gnome")
    {
        $adjust = 0;
    }
    else if($species === "Halfling")
    {
        $adjust = 5;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 10;
    }
    else if($species === "Half-Orc")
    {
        $adjust = -5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustMoveSilently ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 0;
    }
    else if($species === "Elf")
    {
        $adjust = 7;
    }
    else if($species === "Gnome")
    {
        $adjust = 5;
    }
    else if($species === "Halfling")
    {
        $adjust = 10;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 0;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustClimbWalls ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = -10;
    }
    else if($species === "Elf")
    {
        $adjust = 0;
    }
    else if($species === "Gnome")
    {
        $adjust = -15;
    }
    else if($species === "Halfling")
    {
        $adjust = -15;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}



function adjustHideShadow ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 0;
    }
    else if($species === "Elf")
    {
        $adjust = 10;
    }
    else if($species === "Gnome")
    {
        $adjust = 5;
    }
    else if($species === "Halfling")
    {
        $adjust = 10;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 5;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 0;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function hearNoiseAdjust ($species, $level)
{
    
    $adjust = 0;
    
    if($species === "Elf" && $level <= 9)
    {
        $adjust = 1;
    }
    
    return $adjust;
    
}



?>