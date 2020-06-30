<nav>
        <a href="home.php" > <div class="logo"></div></a>

        <input type="checkbox" id="checkboxNavbar">
        <label id="checkNavBtn" for="checkboxNavbar">
            <div class="menuIcon">
            <span></span>
            <span></span>
            <span></span>
            </div>
        </label>
       

        <div id="topNav">
            <ul>
                <li class="categorie">
                    <input type="checkbox" id="checkboxCategorie">
                    <a href="#">
                        <label class="categorieTitle" for="checkboxCategorie">
                            <div class="categorieIcon">
                            <span></span>
                            <span></span>
                            <span></span>
                            </div>
                            <p>Catégories</p> 
                        </label>
                    </a>
                    <?php  
                   echo  '<ul id="categorieDropdown">';    
                    require('fonction/table.php');
                    for($i=0;$i<count($array);$i++){
                    echo '
                    <form action="recherche.php" method="GET">
                    <input type="text" style="display:none" name="Nom_cat" value="'.$array[$i].'">
                    <li><button>'.str_replace("_"," ",$array[$i]).'</button></li>
                    </form>';
                    }

                      
                   echo '</ul>';
                   ?>
                </li>
                <li class="search">
                    <form action="recherche.php">
                        <input type="text" placeholder="Cherchez un produit ou une marque" name="search">
                        <button  type="submit"><img src="icons/Icon-search.png"  ></button>
                    </form> 
                </li>
                <?php
                require('fonction/paner.php');
                echo 
                '<li class="panier"><a href="panier.php">
                        <div class="panierIcon"></div>
                        <span>Panier  ('.count($list).') </span>
                    </a> </button>
                </li>'
                ?>
                
                <li class="deconnexion">
                    <a href="deconnecter.php">
                        <div class="deconnexionIcon"></div>
                        <span>deconnexion</span>
                    </a> 
                   
                </li>
                
            </ul>
        </div>;
      
        
    </nav>
