<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER SEARCH</title>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="resource/script.js"></script>
    <script src="resource/shift.js"></script>


        

   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
            <a href="" class="navbar-brand mr-auto">Food SEARCH</a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li id="btn1" class="nav-item active"><a class="nav-link" onclick="page_selector('Page1','Page2','Page3');myFunction();" href="#"> <span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li id="btn3" class="nav-item"><a class="nav-link" onclick="page_selector('Page3','Page2','Page1');myFunction3();" href="#" href="#"> <span class="fa fa-list fa-lg"></span> Show Cart</a></li>
    
                </ul>
            </div>
            
        </div>
    </nav>
    <header class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="">
                        <h1>Food Search</h1>
                        <p>Search All the food items here</p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </header>

    <div id="Page1">
        <div id="search">
            <input class="form-control" type="text" name="search" id="text" placeholder="Enter Order ID HERE">
            <p id = "para"></p>
            <button class="btn btn-primary" id="cartbutton" onclick= "get_order()" >Add Selected Item</button>
            <button class="btn btn-primary"onclick="page_selector('Page3','Page2','Page1');myFunction3();" >Show CART</button>

        </div>
        <ul id="itemList">
        <div class="card"><img id = "dishimg" class="card-img-top" src=""><div id="877" class="card-body"><h5 id = "dishname"></h5><p class="card-text" id = "dishdes"><p id = "sprice"></p></p><p id = "smallprice"></p><p id="lprice"></p><p id = "largeprice"></p></div></div>
            
        </ul>
        
    </div>
    <div id="Page2" style="display: ;">
        

    </div>
            
      <div id="Page3" style="display:none">
            <h1>SHOW CART</h1> 
            <div class="row" id="cart_list">
            
            
            </div> 
      </div>

    <script src="resource/bootstrap.min.js"></script>
</body>
</html>



