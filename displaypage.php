<!-- Author: Vranda Koolwal -->
<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<script>
    function call()//on_click__addtocart
    {
        window.alert("Item has been added to cart successfully");
        
    }
</script> <!--on click event-->
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
    <br><br>
<center>
    <table cellpadding="20" >
            <script>
			function change()
				{
				var image = document.getElementById('imghrt');
				if (image.src.match("heart")) {
				image.src = "heartred.png";
				} else {
				image.src = "heart.png";
				}
				}
                for (i=1; i<=25; i++)
                    {
                        document.write("<tr>");
                        for (j=1; j<=4; j++)
                        {
                                 document.write("<td><table><tr>");
                                document.write 
                                    ( 
                                        "<td colspan='2' ><a href='productpage.php'><img src="+i+j+".jpg height='200' width='250'></a></td>" 
                                    );
                                     document.write("</tr><tr>");
                                document.write
                                    (
                                            "<td width='170'><button type='button' class='button_cart'onclick='call()'> Add to cart </td><td width='30' align='right'><img src='heart.png' id='imghrt' height='20' width='20' onclick='change()'></td>"
                                    );
                             document.write("</tr></table></td>");
                        }
                        document.write ("</tr>");   
                    }
            </script>
</table>
</center>
</body>