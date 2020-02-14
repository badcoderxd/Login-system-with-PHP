<?php
 require"header.php";
?>
<main>
<div class="wrapper-main>
 <section class="section-default">
 <h1>Signup</h1>
 <?php
 if(isset($_GET["error"])){
 if($_GET["error"]== "emptyfields"){
echo'<p>Fill in all fields!</p>';
}
else if($_GET["error"]== "emptyfields"){
echo'<p>empty</p>';
}
}
else if($_GET["signup"]== "success")
{
 echo'<p>signup succuss!</p>';
}
 
?>
 <form action="includes/signup.inc.php" method="post">
 <input type="text" name="uid" placeholder="Username">
 <input type="text" name="mail" placeholder="E-mail">
 <input type="password" name="pwd" placeholder="password">
 <input type="password" name="pwd-repeat" placeholder="repeat-password">
 <button type="submit" name="signup-submit">Signup</button> 
</form>
</section>
</div>
</main>

<?php
 require"footer.php";
?>