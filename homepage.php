<!-- Author: Vranda Koolwal -->
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">    
</head>    

<body alink="black" vlink="black" link="black">    
<?php
session_start();
if (!isset ($_SESSION['loggedin']) || $_SESSION['loggedin']== false)
{
header ("Location: signin.php");
 }

?>


<div class="banner">

</div>
    <br>
<table cellspacing="0" width="100%" ><tr><td align="right" class="fa fa-caret-down" style="font-size: 18px"><a id="links" href="signin.php">Sign In/Sign Up</a></td></tr></table>

	<!--menubar--><div class="menubar">
<a href="homepage.php">Home</a>
<div class="dropdwn">
    <button class="drop-btn">Women
<i class="fa fa-caret-down" style="font-size: 24px"></i>
</button>

<div class="dropdwn-content">

<a   href="displaypage.php">Western wear</a>
<a   href="displaypage.php">Ethnic wear</a>
<a   href="displaypage.php">Summer wear</a>
<a   href="displaypage.php">Kurtis</a>
<a   href="displaypage.php">Tops and Shirts</a>
<a   href="displaypage.php">Skirts</a>
<a   href="displaypage.php">Dresses</a>
</div>
    
</div>

<div class="dropdwn">
    <button class="drop-btn">Men
<i class="fa fa-caret-down"></i>
</button>

<div class="dropdwn-content">

<a  href="displaypage.php">Shirts</a>
<a  href="displaypage.php">Jeans</a>
<a  href="displaypage.php">T-shirts and Polos </a>
<a  href="displaypage.php"> Watches </a>
<a  href="displaypage.php"> Sport shoes </a>
<a  href="displaypage.php"> Casual Shoes </a>
<a  href="displaypage.php">  Formal Shoes </a>
<a  href="displaypage.php">  Wallets</a>
<a   href="displaypage.php">  Sportswear </a>

    
</div>
    
</div>
    
<div class="dropdwn">
    <button class="drop-btn">Accesories
<i class="fa fa-caret-down" style="font-size: 24px"></i>
</button>

<div class="dropdwn-content">

<a  href="displaypage.php">Link 1</a>
<a  href="displaypage.php">Link 2</a>
<a  href="displaypage.php">Link 3</a>

</div>
    
</div>
    
<a href="displaypage.php">Shop</a>




</div> <!--menubar-->
<br><br><br><br>
<!--Shop by category--><table align="center" width="100%" cellpadding="20" >
<tr>
<td colspan="4" width="100%" >
<h1 align="center"><font face="montserrat" color="#022d4c"><i> SHOP BY CATEGORIES </i></font></h1></td>
</tr>
<tr>
<td align="center"><a id="links"  href="displaypage.php">Jumpsuits</a></td>
<td align="center"><a id="links"  href="displaypage.php">T-Shirts</a></td>
<td align="center"><a id="links"  href="displaypage.php">Jackets</a></td>
<td align="center"><a id="links"  href="displaypage.php">Jeans</a></td>
</tr>`
<tr>
<td align="center"><a id="links"  href="displaypage.php">Shoes</a></td>
<td align="center"><a id="links"  href="displaypage.php">Accessories</a></td>
<td align="center"><a id="links"  href="displaypage.php">Kids Wear</a></td>
<td align="center"><a id="links"  href="displaypage.php">Jewellery</a></td>
</tr>
<tr>
<td align="center"><a id="links"  href="displaypage.php">Sweatshirts</a></td>
<td align="center"><a id="links"  href="displaypage.php">Hoodies</a></td>
<td align="center"><a id="links"  href="displaypage.php">Leggings</a></td>
<td align="center"><a id="links"  href="displaypage.php">Kurtis</a></td>
</tr>
<tr>
<td align="center"><a id="links"  href="displaypage.php">Moisturizer</a></td>
<td align="center"><a id="links"  href="displaypage.php">Sarees</a></td>
<td align="center"><a id="links"  href="displaypage.php">Furnitures</a></td>
<td align="center"><a id="links"  href="displaypage.php">Electronics</a></td></tr>
</table>  <!--Shop by category-->
    
    <br><br><br><br>
    
<!--Shop by brands--><table align="center" cellpadding="20" width="100%">
<tr>
<td colspan="4" width="100%">
    <h1 align="center"><font face="montserrat" color="#022d4c"><i>SHOP BY BRANDS</i></font></h1></td>
</tr>
<tr>
<td align="center"><a id="links"  href="displaypage.php">H & M</a></td>
<td align="center"><a id="links"  href="displaypage.php">Bata</a></td>
<td align="center"><a id="links"  href="displaypage.php">Hey!</a></td>
<td align="center"><a id="links"  href="displaypage.php">Bare</a></td>
</tr>
<tr>
<td align="center"><a id="links"  href="displaypage.php">AND</a></td>
<td align="center"><a id="links"  href="displaypage.php">Pantaloons</a></td>
<td align="center"><a id="links"  href="displaypage.php">Max</a></td>
<td align="center"><a id="links"  href="displaypage.php">Manyavar</a></td>
</tr>
<tr>
<td align="center"><a id="links"  href="displaypage.php">Mochi</a></td>
<td align="center"><a id="links"  href="displaypage.php">Adidas</a></td>
<td align="center"><a id="links"  href="displaypage.php">Nike</a></td>
<td align="center"><a id="links"  href="displaypage.php">Mufti</a></td>
</tr>
<tr>
<td align="center"><a id="links"  href="displaypage.php">Bigg Bazar</a></td>
<td align="center"><a id="links"  href="displaypage.php">Levi's</a></td>
<td align="center"><a id="links"  href="displaypage.php">Madame</a></td>
<td align="center"><a id="links"  href="displaypage.php">Raymond</a></td>
</tr>
</table><!--Shop by brands-->

<br><br><br><br>
<center>

    <table cellpadding="20"  width="100%">
        
        <tr>
            <td align="center" colspan="4"><h1><font face="montserrat" color="#022d4c"><i>MOST POPULAR</i></font></h1></td>
        </tr>    
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
				
                for (i=1; i<=5; i++)
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
                function call()//on_click__addtocart
    {
        window.alert("Item has been added to cart successfully");
        
    }
            </script>
        

    

</table>
</center>    
    <?php
	if (isset ($_SESSION['visits']))
	{
	$_SESSION['visits'] = $_SESSION['visits']+1;
	}
	else 
	{
	$_SESSION['visits'] = 1;
	}

	echo "<center><div class='order'>The page has been viewed " . $_SESSION['visits'] . " times </div></center>";
	?>
</body></html>