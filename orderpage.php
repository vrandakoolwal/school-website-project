<head>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body><form method="post" action="congrats.php">
<h1 align="center"><font face="montserrat" color="#8b4h98" size="24">ORDER FORM </font></h1>
<center>
<div class="order">
<table  cellspacing="0" cellpadding="20">

<tr><td>Delivery Address</td><td><textarea rows="4" cols="25" required></textarea></td></tr>
<tr rowspan="3"><td>Payment</td>
    <td><input type="radio" name="Payment" value="net banking" checked>NET BANKING</td>
    <td><input type="radio" name="payment" value="credit card">CREDIT CARD</td>
    <td><input type="radio" name="payment" value=" debit card">DEBIT CARD</td></tr>
    
<tr>
<td>Bank</td>
<td><select name="bank">
    <option value="sbi" selected required>STATE BANK OF INDIA</option>
    <option value="bob" >BANK OF BARODA</option>
    <option value="hdfc" >HDFC BANK</option>
    <option value="idbi" >IDBI BANK</option>
    </select></td></tr>
<tr><td></td>
<td><button id="submit">Submit</button></td></tr>
</table>
</div>
</center>
</form>
</body>