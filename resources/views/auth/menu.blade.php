@extends('../layouts.main')

@section('title', 'Menu')
@section('css')
<link rel="stylesheet" href="{{asset('css/menu.css')}}">
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

                <nav>
                    
                </nav>

                <div class="menu-section">
                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>

                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>
                    
                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>

                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>
                    
                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>

                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>
                    
                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>
                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>
                    <div class="best-seller-card">                           
                        <div class="card-picture">
                                <img src="/img/adobo.jpg" id="adobo">
                        </div> 
                    
                        <div class="best-seller-info">
                            <h1>Adobo</h1>
                                <p><span class="price">Price: </span>$3.41</p>
                                    <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>
                </div>

                    

                </div>

                

            </div>
        </div>
@endsection