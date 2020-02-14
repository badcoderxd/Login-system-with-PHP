<?php
 require"header.php";
?>
<main>
<div class="wrapper-main">
<section class="section-default">
 <?php
 if (isset($_SESSION['userid'])){
	echo '<p class="qa"> You are Logged in</p>'; 
 }
 else
 {
	echo '<p class="qb"> You are Logged out</p>';
 }
 ?>


</section>
</div>
</main>

<?php
 require"footer.php";
?>
