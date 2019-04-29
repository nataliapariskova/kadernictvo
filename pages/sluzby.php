<?php
$conn->query("SET CHARACTER SET utf8");

if($_GET["hladaj"]) $sql = "SELECT * FROM sluzby WHERE nazov LIKE '%".$_GET["hladaj"]."%'";	//ak obsahuje hľadaný reťazec
	else $sql = "SELECT * FROM sluzby";
$result = $conn->query($sql);
?>



    <div class="container">
        <div class="row">
        <div class="row"> 
        <p style="font-size:250%;"> Kaderníctvo </p>
        <font size="400%" color="#ff33cc" > <b>Natália </b></font>
    </div>
    </div>


    <div class="row">

    <ul class="nav nav-pills nav-fill col-md-7" >
			<li class="nav-item"><a class="nav-link" href="../index.php?link=home.php">Salón</a></a></li>
            <li class="nav-item"><a class="btn btn-secondary" <a class="nav-link active" href="../index.php?link=sluzby.php">Naša tvorba</a></a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=cennik.php">Cenník</a></li>
			<li class="nav-item"><a class="nav-link"href="../index.php?link=kontakt.php">Kontakt</a></li>
	</ul>

         
		<div class="col-md-4 mt-2">
			<form action="index.php" method="get">
			  <div class="form-row">
				  <div class="col-md-8">
                    <input type="hidden" name="link" value="sluzby.php">
					<input type="text" class="form-control" name="hladaj" placeholder="hľadaný text">
				  </div>
				  <div class="col-md-4">
					<button type="submit" class="btn btn-secondary">Odoslať</button>
				  </div>
			  </div>
			</form>
		</div>
</div>


</div>
<hr>


<div class="container" >
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
         <div class="carousel-inner">
         <div class="carousel-item active">
         <img src="obrazky/noznice.jpg"   class="d-block w-100" alt="noznice"   >
          </div>
                     <div class="carousel-item">
                     <img src="obrazky/noznice_cislo.jpg" class="d-block w-100" alt="tel.cislo"  >
                     </div>
                                 <div class="carousel-item">
                                 <img src="obrazky/noznice_strih.jpg" class="d-block w-100" alt="farba na vlasy">
                                 </div>
         </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



<br>
<br>
<h5 align="center"> Malá ukážka z našej tvorby. </h5>
<div class="container">
<div class="row">
    <?php 
      while($row= $result->fetch_assoc())
      //for($i=0; $i<9; $i++)
      {
     // $row = $result->fetch_assoc();
    ?>
    <!-- <div class="card mb-3 col-md-4">
        <div class="row no-gutters">
         <div class="col-md-4">-->

            <div class="row no-gutters">
            <div class="card" style="width:17rem;">
                  <img src="obrazky/<?php echo $row["obrazok"]; ?>" class="card-img-top" alt="..."  height="200"/>
                  <div class="card-body">
                 </div>
            <div class="col-md-8">
            <div class="card-body">
                   <h6 class="card-title"> <?php echo $row["nazov"]; ?></h6>
                    
                </div>
            </div>
        </div>
    </div>

<?php } ?>
</div>
</div>


