<head>
<link rel="stylesheet" href="stylesheet.css">
<script>
function zoomin(img)
    {
        img.height="400";
        img.width="600";
    }
function zoomout(img)
    {
        img.height="350";
        img.width="400";
    }
function call()
    {
        window.alert("Item has been successfully added into the cart")
    }
    
</script>
</head>
<body>
<div class="banner">
</div>
    <br>
<div class="menubar">
<a href="homepage.php">Home</a>
<div class="dropdwn">
    <button class="drop-btn">Women
<i class="fa fa-caret-down" style="font-size: 24px"></i>
</button>
<div class="dropdwn-content">
<a href="displaypage.php">Western wear</a>
<a href="displaypage.php">Ethnic wear</a>
<a href="displaypage.php">Summer wear</a>
<a href="displaypage.php">Kurtis</a>
<a href="displaypage.php">Tops and Shirts</a>
<a href="displaypage.php">Skirts</a>
<a href="displaypage.php">Dresses</a>
</div>
</div>
<div class="dropdwn">
    <button class="drop-btn">Men
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdwn-content">
<a href="displaypage.php">Shirts</a>
<a href="displaypage.php">Jeans</a>
<a href="displaypage.php">T-shirts and Polos </a>
<a href="displaypage.php"> Watches </a>
<a href="displaypage.php"> Sport shoes </a>
<a href="displaypage.php"> Casual Shoes </a>
<a href="displaypage.php">  Formal Shoes </a>
<a href="displaypage.php">  Wallets</a>
<a href="displaypage.php">  Sportswear </a>
</div>
</div>
<div class="dropdwn">
    <button class="drop-btn">Accesories
<i class="fa fa-caret-down" style="font-size: 24px"></i>
</button>
<div class="dropdwn-content">
<a href="displaypage.php">Link 1</a>
<a href="displaypage.php">Link 2</a>
<a href="displaypage.php">Link 3</a>
</div>
</div>
<a href="displaypage.php">Shop</a>
</div> <!--menubar-->
<table cellpadding="10" width="100%" >
    <tr>
    <td width="500" colspan="2"><img src="http://via.placeholder.com/400x350" align="left" onmouseover="zoomin(this)" onmouseout="zoomout(this)">
    </td>
    <td colspan="3" width="500">
    <div class="product_name">Product Name</div>
    <br><br>
    <div class="amount">Amount</div> 
    <br><br>
    <div class="description">Short Description</div>
    <br><br>
    <!-- Any Warning eg-Only __ left -->        
        <button class="button_cart" onclick="call()">Add to cart</button>
    <br><br><br><br>
        <button class="button_cart" onclick="location.href='orderpage.php'">Buy</button>
    </td>
    <td rowspan="3" width="400"> <center> <div class="popular">Most Popular </div> <hr class="style1"></center> 
            <script>
                for (j=1; j<=15; j++)
                    document.write
                    ("<table cellpadding='5'><tr><td rowspan='2' width='60'><a href='productpage.php'><img src='http://via.placeholder.com/60x60' align='left'></a></td>" + 
                    "<td id='name'>Product Name</td></tr>"  + 
                    "<tr><td id='amt'>Amount</td> </tr> </table>"
                    );
            </script>
    </td>
	</tr>
    <tr>    
    <td colspan="5">
        <br>
    <div class="info">Addition Information</div>
        <br>
        <hr>
        <br>
        <table border="1" cellspacing="0" width="80%">
        <div class="info_table">    
        <tr><td id="product_colour">Colour</td>
            <td width="80%"><!--Enter the Colour--></td>
        </tr>
        <tr><td id="product_material">Material</td>
            <td><!--Enter the material--></td>
        </tr>
        <tr><td id="product_size">Size</td>
            <td><!--Enter the size--></td>
        </tr>
        </div>
        </table>
    </td>
    </tr>
    <tr>
    <td colspan="5">
        <br>
        <div class="related">
        Related Products
        </div>
        <br>
        <hr>
        <br>
        <script>
        document.write("<table cellpadding='5'><tr>")
        for (i=1; i<=4; i++)
                        {
                                document.write 
                                    ( 
                                        "<td colspan='2' ><a href='productpage.php'><img src='http://via.placeholder.com/250x200'></a></td>" 
                                    );
                             
                        }
        document.write("</tr>");
        document.write("<tr>");
        for (i=1; i<=4; i++)
                        {
                                document.write 
                                    ( 
                                        "<td width='210'><div class='button_cart'><button class='button_cart' onclick='call()'>Add to Cart</button></td><td width='30' align='right'><a href='productpage.php'><img src='heart.png' height='20' width='20'></a></td>"
                                    );
                             
                        }
        document.write("</tr></table>")
        </script>
    </td>
    </tr>
</table>
</body>