<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-Private</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">

</head>

<body class="min-h-[100vh] flex justify-center items-center ">
    <main class="w-[380px] h-[600px] bg-white/30 rounded-2xl">
    <header class="flex justify-center items-center border-b border-purple-500 bg-purple-400 rounded pt-2 pb-2">         
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:-translate-x-3 hover:scale-125 mr-1 text-purple-500 gap-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </a>
            <h1 class="text-3xl gap-2 text-white">OOP Files</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4 ">
            <h2 class=" text-center text-2xl mb-6">
                Table Maker
            </h2>
            <form class="p-2 mb-4 grid grid-cols-2 gap-4 justify-center ring-black/50 bg-purple-600/30 rounded-md" action="" method="post">
            <div class=" flex flex-col items-center gap-4">
                <label>Rows:</label>
                <input type="range" name="nr" min="1" max="20" step="1" oninput="onr.value=this.value">
                <output id="onr" class="" >10</output>
            </div>
            <div class=" flex flex-col items-center gap-4">
                <label>Columns:</label>
                <input type="range" name="nc" min="1" max="20" step="1" oninput="onc.value=this.value">
                <output id="onc" >10</output>
            </div>
                <button class=" p-2 bg-pink-600 hover:scale-105 hover:bg-pink-700 text-white rounded-md w-[331px]">Make Table</button>
            </form>
            <?php
            class Table {
                private $nr;
                private $nc;

                public function __construct($nr, $nc){
                    $this->nr = $nr;
                    $this->nc = $nc;
                    $this->makeTable();
            } 
            private function makeTable(){
                echo "<table class='border-collapse   rounded-md  mx-auto mb-4'>";
                for($r = 1; $r <= $this->nr; $r++) {
                    echo"<tr>";
                    for($c = 1; $c <= $this->nc; $c++) {
                        echo "<td class='p-2 ring-1 rounded-sm ring-purple-600'>  </td>";
                    }
                    echo"</tr>";
                }
                echo "</table>";
            }
        }
    if($_POST){
        $table = new Table($_POST['nr'], $_POST['nc']);
    }
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>

</body>

</html>