<?php
    include("header.php")
?>
            <div class="container">
                <div class="grid">
                    <div class="app__content ">       
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                            <div class="home-menu__bar">
                                <div class="home-product__title">
                                    <h1 class="home-Product__title_text">Mugs</h1>
                                    <p class="home-Product__title_text">Home / Mugs</p>
                                </div>
                                <div class="home-filter">
                                    <a class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Mug.jpg" alt="">
                                        Mugs
                                    </a>
                                    <a class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Pots.jpg" alt="">
                                        Pots
                                    </a>
                                    <a class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Plates.jpg" alt="">
                                        Plates
                                    </a>
                                    <a class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Decor.jpg" alt="">
                                        Decor
                                    </a>
                                    <a class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Bowl.jpg" alt="">
                                        Bowls
                                    </a>
                                </div>
                            </div>
                            <div class="home-product">
                                <div class="home-product_sorting">
                                    <div class="selection">
                                        <div class="selection">
                                            <div class="selection__price">
                                                <label for="price">Price </label>
                                                <i class="fa-solid fa-chevron-down selection__price-icon"></i>
                                                <div class="selection__price-content">
                                                    <div class="selection__slider-container">
                                                        <input type="number" id="min-price" class="selection__slider-input" value="14" min="14" max="320"> -
                                                        <input type="number" id="max-price" class="selection__slider-input" value="320" min="14" max="320">
                                                    </div>
                                                    <button class="selection__btn" onclick="applyFilter()">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="selection__color">
                                            <label for="color">Color</label>
                                            <i class="fa-solid fa-chevron-down selection__price-icon"></i>
                                            <div class="selection__color-content">
                                                <div class="selection__color-options">
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #b2b2b2;"></span> Ash Gray</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #000;"></span> Black</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #4169e1;"></span> Blue</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #e3dac9;"></span> Bone</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #8b4513;"></span> Brown</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #808080;"></span> Gray</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #228b22;"></span> Green</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #e5e4e2;"></span> Platinum</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-sorting">
                                        <span class="show-label">Show :</span>
                                        <a href="#" class="show-option">9</a> /
                                        <a href="#" class="show-option">12</a> /
                                        <a href="#" class="show-option">18</a> /
                                        <a href="#" class="show-option">24</a>
                                        <select class="sorting-dropdown">
                                            <option>Default sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by average rating</option>
                                            <option>Sort by latest</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class=" row container-fluid">
                                    <!-- Product item -->
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg)"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" href="#">
                                            <a href="" class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/mugs/short_Mug.jpg);"></div>
                                            </a>
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Short Mug</div>
                                                <div class="home-product-item__rating">
                                                    <a href="" class="product-carts">
                                                        Mugs
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">140.000đ</span>
                                            </div>
                                        </div>
                                    </div>                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
<?php
    include("footer.php")
?>