<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">

</head>

<body class="min-h-[100vh] flex justify-center items-center ">
    <main class="w-[380px] h-[600px] bg-white/30 rounded-2xl">
    <header class="flex justify-center items-center  border-b-2 border-purple-500 bg-purple-400 rounded pt-2 pb-2">         
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:-translate-x-3 hover:scale-125 mr-1 text-purple-500 gap-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </a>
            <h1 class="text-3xl gap-2 text-white">01 - CLASS</h1>
        </header>
        <section class=" p-5 my-2 ">
        <?php 
            class Vehicle {
                // Attributes
                public $brand;
                public $refer;
                public $model;
                public $color;

                public function setAttributes($brand, $refer, $model, $color){
                    $this->brand = $brand;
                    $this->refer = $refer;
                    $this->model = $model;
                    $this->color = $color;
                }

                public function getAttributes(){
                    return "<div class='p-4 mb-2 ring-2 rounded-md ring-purple-500'> 
                        <p><strong> Brand: </strong>$this->brand</p>
                        <p><strong> Brand: </strong>$this->refer</p>
                        <p><strong> Brand: </strong>$this->model</p>
                        <p><strong> Brand: </strong>$this->color</p>
                            </div>";    
                }   
                        }
        //Create an object
        $vehicle1 = new Vehicle;
        $vehicle2 = new Vehicle;
        $vehicle3 = new Vehicle;
        $vehicle1->setAttributes('Audi', 'R8', '2020', 'Gray');
        $vehicle2->setAttributes('Chevrolet', 'Camaro', '2018', 'Yellow');
        $vehicle3->setAttributes('Lamborghini', 'Urus', '2022', 'Crimson Red');
        //Access Attributes
        echo $vehicle1->getAttributes();
        echo $vehicle2->getAttributes();
        echo $vehicle3->getAttributes();
        ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>

</body>

</html>