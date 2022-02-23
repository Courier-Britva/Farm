<?php
# This variables are use to make counting of cows milk a little easier
$CowsCounter = 0;                                                    #
$CowsTotal=10;                                                       #
$MilkCounter = 0;                                                    #
$CowObject = new Cow;                                                #
$CowsMilkFunc = "CowsMilk";                                          #
######################################################################

# This variables are use to make counting of chick milk a little easier
$ChickenCounter = 0;                                                  #
$ChickenTotal=10;                                                     #
$EggsCounter = 0;                                                     #
$ChickenObject = new Chicken;                                         #
$ChickenEggsFunc = "ChickenEggsCounter";                              #
#######################################################################


class Cow{
    # Random number of milk for each cow
    function CowsMilk(){
        $MilkArray = array(8, 9, 10, 11, 12);
        return $MilkArray[array_rand($MilkArray)];
    }

    #counting of total number of milk in first and second week
    function TotalMilkCounter(){
        #calling of cows milk functions
        global $CowsCounter;
        global $MilkCounter;
        global $CowObject;
        global $CowsMilkFunc;

        #loop which count a number of milk per day
        while ($CowsCounter != 10):
            $MilkCounter = $MilkCounter + $CowObject->$CowsMilkFunc();
            $CowsCounter = $CowsCounter + 1;
        endwhile;
        #and then we getting number of milk per week
        $MilkCounter = $MilkCounter * 7;
        echo 'now we have '.$CowsCounter.' cows!'."\n";
        echo "On this week Cows gave as ".$MilkCounter." litres of milk. Cool!"."\n"."\n";

        $MilkCounter = 0;
        $CowsCounter = 0;

        while ($CowsCounter != 11):
            $MilkCounter = $MilkCounter + $CowObject->$CowsMilkFunc();
            $CowsCounter = $CowsCounter + 1;
        endwhile;
        #and then we getting number of milk per week
        $MilkCounter = $MilkCounter * 7;
        echo 'now we have '.$CowsCounter.' cows!'."\n";
        echo "After we bought 1 more Cows on the next week we have got ".$MilkCounter." litres of milk. Cool!"."\n"."\n";
    }
}



class Chicken{
    # Random number of eggs for each chicken
    function ChickenEggsCounter(){
        $EggsArray = array(0, 1);
        return $EggsArray[array_rand($EggsArray)];
    }

    #counting of total number of eggs in first and second week
    function TotalEggsCounter(){
        #calling of chicken eggs functions
        global $ChickenCounter;
        global $ChickenTotal;
        global $ChickenObject;
        global $ChickenEggsFunc;

        #loop which count a number of eggs per day
        while ($ChickenCounter != 20):
            $EggsCounter = $EggsCounter + $ChickenObject->$ChickenEggsFunc();
            $ChickenCounter = $ChickenCounter + 1;
        endwhile;
        #and then we getting number of eggs per week
        $EggsCounter = $EggsCounter * 7;
        echo 'now we have '.$ChickenCounter.' Chickens!'."\n";
        echo "On this week Chickens gave as ".$EggsCounter." Eggs. Cool!"."\n"."\n";

        $EggsCounter = 0;
        $ChickenCounter = 0;

        #loop which count a number of eggs per day
        while ($ChickenCounter != 25):
            $EggsCounter = $EggsCounter + $ChickenObject->$ChickenEggsFunc();
            $ChickenCounter = $ChickenCounter + 1;
        endwhile;
        #and then we getting number of eggs per week
        $EggsCounter = $EggsCounter * 7;
        echo 'now we have '.$ChickenCounter.' Chickens!'."\n";
        echo "On this week Chickens gave as ".$EggsCounter." Eggs. Cool!"."\n"."\n";

        $EggsCounter = 0;
        $ChickenCounter = 0;
    }

}

class Farm{
    function FarmTextPrinter(){
        #get object of Cow class
        global $CowObject;

        #get object of Chicken class
        global $ChickenObject;

        echo $CowObject ->TotalMilkCounter();
        echo $ChickenObject -> TotalEggsCounter();
    }
}

#getting functions of Farm class
$OurFarm = new Farm;
$OurFarm->FarmTextPrinter();





