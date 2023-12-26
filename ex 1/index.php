<?php

            class Car
            {
                public $color;

                public function Model()
                {
                    echo "My car is GTR.";
                }
            }

            function displayData($car)
            {
                echo "My Car Color is : " . $car->color ;
                $car->Model();
            }

            $myCar = new Car();
            $myCar->color = 'Blue <br>';


            displayData($myCar);

?>