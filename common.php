<?php
function outputHeader($page_title){
    echo<<<END
    <!DOCTYPE html>
    <html lang ="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Commerce Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" text="text/css"/>
        <link rel="stylesheet" type="text/css" href="..\css/style.css">
        <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>$page_title</title>
    </head>
    <body>
    <!--Header-->
        <div class="welcomeRow">
        </div>
        <div class="wrapper">
            <div class="navigation">
                <a href="../index.php" class="logo">
                    <img src="../jpg/Logo.png"/>
                </a>
                <div class="box">
                <i class="fa fa-search" aria-hidden="true" ></i>
                <input type="text" name="">
                </div>
                <div class="right-menu">
                    <a href="#loginModal" data-toggle="modal" >
                        <i class="far fa-user"></i>
                    </a>
                    <a href="../cart.php" >
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                
                <div class="modal fade" role="dialog" id="loginModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <strong>Log in</strong>
                                <button type="button" class="close" data-dismiss="modal">x</button>
                            </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Log in"/>  
                        </div>
                        </div>
                    </div>
                </div>             
            </div>      
        </div>
    END;
}

function outputBannerNavigation($pageName){
    echo '<nav>';
    echo '<div class="navigationbar">';
    echo '<ul class="menu">';
        //Array of pages to link to
        $linkNames = array("Home", "Shop", "About", "Contact", "Sign up");// this is the pageName of HTML file
        $linkAddresses = array("index.php", "shop.php","about.php", "contact.php", 'myAccount.php'); // the link
        //Output navigation
        for($x = 0; $x < count($linkNames); $x++){ // goes through the links to find matching pageName
    echo '<li><a ';      // print the anchor
        if($linkNames[$x] == $pageName){    // finds the match of pageName and link
    echo 'class="selected" '; }
    echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</li></a>';  // goes to the page
        } // end for loop   
    echo '</ul>';
    echo '</div>'; 
    echo '</nav>';
    echo '<div class ="shadow">';
    echo '</div>';
}

function outputFooter(){
    echo<<<END
    <div class="footer">
        <span class="copyright">
            Copyright 2021 - MiddlesexElectronics 
        </span>
        <div class="cms">
        <a href="cms/cms.php">cms</a>
        </div> 
    </div>
    </body>
    </html>
    END;
}

function outputFooterCMS(){
    echo<<<END
            <div class="footer">
                <a href="..\index.php">Home</a>
                <a href="..\shop.php">Shop</a>
                <a href="..\about.php">Contact</a>
                <a href="..\contact.php">Login</a>
                <a href="cms.php">CMS</a>
            </div>
          </body>
        </html>
    END;
    }

?>



