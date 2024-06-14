<header class="">
    <!-- Image and text -->
    <nav class="navbar bg-dark ">
        <div class="d-flex col mx-2">
            <div class="col-6 d-flex">
                <div class="row">
                </div>
                <a class="navbar-brand" href="/">
                    <img src="../img/favicon.webp" alt="logo menu principal" width="50" height="50" class="ms-4 img-fluid rounded">
                </a>
                <h1 class="text-light">Le blog des poissons</h1>
            </div>

            <!-- Ancien endroit fil d'ariane-->



            <div class="col-4 d-flex justify-content-end">
                <a href="login" class="btn btn-primary">Login</a>
            </div>
        </div>
    </nav>
    
    <!--            Fil d'ariane basé sur $pathlink['pathlink']-->
    <div class="bg-darkgrey">
        <p class="text-light">
            <?php
                $filArray = [];
                array_push($filArray, "accueil");
                
                $pathlink = $GLOBALS['pathlink'];
                foreach ($pathlink as $key => $value) {
                    if ($value != "" ) {
                        array_push($filArray, $value);
                    }
                }
                //                $pathlink = array_filter($pathlink);
                //                $pathlink = array_values($pathlink);
                //                $pathlink = array_map('ucfirst', $pathlink);
                //                $pathlink = implode(" > ", $pathlink);
//                echo($fil);
                foreach ($filArray as $key => $value) {
                    echo(" > ");
                    if ($value == "accueil") {
                        echo("<a href='/'>Accueil</a>");
                        continue;
                    }
                    if ($value == "login") {
                        echo("<a href='/login'>Login</a>");
                        continue;
                    }
                    if ($value == "forum") {
                        if (isset($pathlink[2])) {
                            echo("<a href='/forum/$pathlink[2]'>Poisson " . $pathlink[2] . " </a>");
                        }
                    }
                    else {
                        echo("");
                    }
                }
            ?>
        </p>
    </div>
</header>
