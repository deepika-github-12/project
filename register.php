<?php include('server.php');
ini_set("memory_limit", "1G"); ?>
<html>
 <head>
 <title>Performance tracker</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <center>
            <div class="heading">
             <h2> Register here</h2>
            </div>
<form method="post" action=server.php>
<div class="input">
<label>Enter your Vardhaman email ID</label>
<input type="text" name="vemail" pattern=".+@vardhaman\.org" required>
</div>

<div class="input">
<label>Password :</label>
<input type="Password" name="password">
</div>

<div class="input">
<label>Confirm Password :</label>
<input type="Password" name="password1">
</div>

<div class="input">
<label>Name :</label>
<input type="text" name="name" required>
</div>

<div class="input">
<label>Roll number :</label>
<input type="text" name="rno" required>
</div>

<div class="input">
<label>Mobile Number :</label>
<input type="text" name="num" required>
</div>

<div class="input">
<label for="branch">Select your branch:</label>
<select name="branch" id="branch">
  <option value="cse">COMPUTER SCIENCE ENGINEERING</option>
  <option value="it">INFORMATION TECHNOLOGY</option>
  <option value="mech">MECHANICAL ENGINEERING</option>
  <option value="ece">ELECTRICAL AND ELECTRONICS ENGINEERING</option>
  <option value="eee">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
</select>
</div>

<div class="input">
<label for="year">Passed out year :</label>
  <input type="number" id="year" name="year" min="2012" max="2025">
</div>

<div class="input">
<button type="submit" name="register" class="btn">REGISTER</button>
</div>
<p> Have you already registerd? <a href="login.php">LOG IN </a><p>



</form>



</center>

 </body>
  </html>
 