<nav>
        <a href="index.php" > <div class="logo"></div></a>
        
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
                    <ul id="categorieDropdown">
                        <li><a href="categorie.php">CATEGORIE-1</a></li>
                        <li><a href="categorie.php">CATEGORIE-2</a></li>
                        <li><a href="categorie.php">CATEGORIE-3</a></li>
                        <li><a href="categorie.php">CATEGORIE-4</a></li>
                    </ul>
                </li>
                <li class="search">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Cherchez un produit ou une marque" name="search">
                        <button type="submit"><img src="icons/Icon-search.png" alt=""></button>
                    </form> 
                </li>
                <li class="panier">
                    <a href="panier.php">
                        <div class="panierIcon"></div>
                        <span>Panier</span>
                    </a> 
                </li>
                <li class="login">
                    <a href="Login.php">
                        <div class="deconnexionIcon"></div>
                        <span>Connexion</span>
                    </a> 
                   
                </li>
                <li></li>
                <li class="inscription">
                    <a href="inscription.php">
                        <!-- <div class="deconnexionIcon"></div> -->
                        <span>S'inscrire</span>
                    </a> 
                   
                </li>
            </ul>
        </div>
    </nav>