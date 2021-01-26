<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");
?>


<!--- Products container -->
<div class = "shop-container">
    <!--- Filter box -->
    <div class = "filter-box">
        <strong>FILTER BY</strong>
            <div class="filter-container">
                <span>Category</span>
                <div>
                    <input type ="checkbox" id="Keyboards" name="Keyboards"/>
                    <label for="Keyboards">Keyboards</label>
                </div>
                <div>
                    <input type ="checkbox" id="Gaming-Chairs" name="Gaming-Chairs"/>
                    <label for="Gaming-Chairs">Gaming Chairs</label>
                </div>
                <div>
                    <input type ="checkbox" id="Headsets" name="Headsets"/>
                    <label for="Headsets">Headsets</label>
                </div>
            </div>
            <div class="filter-container">
                <span>Brands</span>
                <div>
                    <input type ="checkbox" id="Razer" name="Razer"/>
                    <label for="Razer">Razer</label>
                </div>
                <div>
                    <input type ="checkbox" id="Acer" name="Acer"/>
                    <label for="Acer">Acer</label>
                </div>
                <div>
                    <input type ="checkbox" id="Logitech" name="Logitech"/>
                    <label for="Logitech">Logitech</label>
                </div>
            </div>
            <div class="filter-container">
                <span>Price</span>
                <div>
                    <input type ="checkbox" id="price1" name="price1"/>
                    <label for="price1">Under £10</label>
                </div>
                <div>
                    <input type ="checkbox" id="price2" name="price2"/>
                    <label for="price2">£10-£50</label>
                </div>
                <div>
                    <input type ="checkbox" id="price3" name="price3"/>
                    <label for="price3">£50-£200</label>
                </div>
            </div>
    </div>

    <!--- Products sections -->
    <div class="products">
        <div class="product-row">
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                                <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
        </div>    
        <div class="product-row">
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
        </div>
        <div class="product-row">
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
        </div>    
        <div class="product-row">
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
            <div class="shop-product-container">
                <div class="shop-product-box">
                    <div class="shop-product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                </div>
                <div class="shop-product-details">
                    <a href="#" class="Newp-name">Acer chair</a>
                    <span class="p-price">£99.00</span>
                </div>
            </div>
        </div>    
        
        
    </div> 
    
</div>
 


<?php
        outputFooter("Home");
?>