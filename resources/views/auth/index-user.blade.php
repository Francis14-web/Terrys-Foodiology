@extends('../layouts.main')

@section('title', 'Home Canteen')
@section('css')
<link rel="stylesheet" href="{{asset('css/index-user.css')}}">
        <script src="https://kit.fontawesome.com/a3db278887.js" crossorigin="anonymous"></script>
@endsection


@section('content')
<div class="container">
            <div class="wrapper">
                <div id="sidebar">
                    <p>LOGO</p>
                    <ul>
                        <li>
                            <a href="index.html" id="home"><i class="fa-solid fa-house" ></i>Home</a>                              
                        </li>
                        <li>
                            <a href="menu.html" id="menu"><i class="fa-solid fa-list-dropdown"></i>Menu</a>    
                        </li>
                        <li>
                            <a href="#" id="sales"><i class="fa-sharp fa-solid fa-money-check-dollar"></i>Sales</a>    
                        </li>
                        <li>
                            <a href="#" id="inventory"><i class="fa-solid fa-box"></i>Inventory</a>              
                        </li>
                        <li>
                            <a href="#" id="order"><i class="fa-solid fa-cart-shopping"></i>Order</a>    
                        </li>
                        <li>
                            <a href="#" id="order"><i class="fa-solid fa-message"></i>Messages</a>    
                        </li>
                        
                    </ul>
                </div>
                <div id="menu-side">
                    <div id="carousel">
                        <div id="carousel-card1">
                            
                        </div>
                        <div id="carousel-card2">

                        </div>
                    </div>
                    <p id="best-seller-title">Best Sellers</p>
                    <div id="best-seller">
                        
                        <div class="best-seller-card">                           
                                <div class="card-picture">
                                        <img src="/img/adobo.jpg" id="adobo">
                                </div> 
                            
                                <div class="best-seller-info">
                                    <h1>Adobo</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="button" class="edit-btn">Edit</button>
                                </div>
                        </div>
                        
                        <div class="best-seller-card">                           
                            <div class="card-picture">
                                    <img src="/img/adobo.jpg" id="adobo">
                            </div> 
                        
                            <div class="best-seller-info">
                                <h1>Adobo</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>

                        <div class="best-seller-card">                           
                            <div class="card-picture">
                                    <img src="/img/adobo.jpg" id="adobo">
                            </div> 
                        
                            <div class="best-seller-info">
                                <h1>Adobo</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>
                

                    </div>

                    <div class="new-product">
                        <div class="product-container">
                            <img src="/img/burger.png" alt="new product" id="new-burger">
                            <div id="new-product-info">
                                <h1>New Product</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat.</p>
                                <button type="button" id="edit-btn-product">Edit</button>
                            </div>
                        </div>
                    </div>

                    <div class="promo">
                        <div class="promo-container">
                            <img src="/img/promo.svg" alt="promo" id="promo-pic">
                            <div id="promo-info">
                                <h1>Special Promo</h1>
                                <p>Valentine's Sales 30% off to all product</p>
                                <button type="button" id="edit-btn-promo">Edit</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    
    </body>
@endsection