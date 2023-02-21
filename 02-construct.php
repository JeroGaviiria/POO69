<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-Construct</title>
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
            <?php
            
            class Playlist{
                //attributes
                private $name; 
                private $artist = array();
                private $album = array();
                private $cover = array();
                private $year = array();

                //methods

                public function __construct($name) {

                    $this ->name = $name;

                }

                public function setPlaylist($artist, $album, $cover, $year) {

                    $this ->artist[] = $artist;
                    $this ->album[] = $album;
                    $this ->cover[] = $cover;
                    $this ->year[] = $year;

                }

                public function getPlaylist(){

                    echo "<div class='p-2 ring-1  items-center flex flex-col gap-2'>
                                <h2 class='text center'>
                                    PlayList: ".$this -> name."
                                </h2>";
                            for($i = 0; $i < count($this->artist);$i++){
                                echo "<div class='bg-purple-600/30 p-4 text-center flex flex-col gap-2 rounded-md mb-4 w-[250px]'> 
                                <img class='rounded-md' src='".$this->cover[$i]."' alt='Album Cover'>
                                <p><strong>Artista: <strong>".$this->artist[$i]."</p>
                                <p><strong>Album: <strong>".$this->album[$i]."</p>
                                <p><strong>Año: <strong>".$this->year[$i]."</p> <br>
                                </div>";
                            }
                            echo"</div>";

                }

            }

            $playlist = new Playlist('Reggaeton');
            $playlist -> setPlaylist('Jhayco', 'Timelezz', 'https://tinyurl.com/3v3v72k8', 2020);
            $playlist -> setPlaylist('Eladio', 'Sauce Boyz', 'https://tinyurl.com/yvfz7kfw', 2020);
            $playlist -> setPlaylist('Anuel', 'RHLM', 'https://tinyurl.com/bdz4yd2t', 2018);
            $playlist -> setPlaylist('Young Miko', 'Trap Kitty', 'https://tinyurl.com/24sjpf4b', 2022);
            $playlist -> setPlaylist('Mora', 'PDDC', 'https://tinyurl.com/2p8mbmce', 2021);
            $playlist -> getPlaylist();
            
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>

</body>

</html>