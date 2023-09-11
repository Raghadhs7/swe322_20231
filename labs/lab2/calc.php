<?php  
     echo "<h1> Basics of Calculator</h1>";
    
function add($x,$y){
    return ($x+$y);
}
    
function subtract($x,$y){
    return ($x-$y);
}
    
function multiply($x,$y){
    return ($x*$y); 
}
    
function divide($x,$y){
    return ($x/$y); 
}
     
echo "5 + 6 =" . add (5,6). "<br>";
echo "8 + 6 =" . subtract(8,6). "<br>";
echo "2 * 9 =" . multiply(2,9). "<br>" ;
echo "10 / 5 =" . divide(10,5).  "<br>";
    
    ?>
