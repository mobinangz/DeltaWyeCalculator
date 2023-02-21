<?php 
class Delta{
//Equations
public function Equations($ResistorA,$ResistorB,$ResistorC){
//calculate Resistor1
   $Resistor1=($ResistorB*$ResistorC)/($ResistorA+$ResistorB+$ResistorC);
    echo "Resistor1 is: " . $Resistor1 . "\n";
//calculate Resistor2
   $Resistor2=($ResistorA*$ResistorC)/($ResistorA+$ResistorB+$ResistorC);
    echo "Resistor2 is: " . $Resistor2. "\n";
//calculate Resistor3
   $Resistor3=($ResistorA*$ResistorB)/($ResistorA+$ResistorB+$ResistorC);
    echo "Resistor3 is: " . $Resistor3 . "\n";
    }
}
//making object
$object = new Delta();
$object->Equations(readline('Enter Resistor1: '. "\n" ),readline('Enter Resistor2: '. "\n" ),readline('Enter Resistor3: '. "\n" ));

































 