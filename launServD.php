<?php
$service_datapoints = array();
$totalServices=0;
$totalCost=0;


try{
    $link = new PDO('mysql:host=localhost;dbname=homeservices', 'root', '');
    $serv_handle =$link->prepare("select * from cleaningservice_data"); 
    $serv_handle->execute();
    $s_result =$serv_handle->fetchAll(PDO::FETCH_OBJ);
    $count=0;
    foreach($s_result as $row){
        array_push($service_datapoints, array("label"=>$row->Year, "y"=>$row->service_amount));
       $count++;
       $totalCost+=$row->service_amount;
    }

    $totalServices=$count;
    
 
  $link = null;
}
catch(PDOException $ex){
    print($ex->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <title>M&R Laundry Service</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
         window.onload = function () {

var service_doughnut_chart = new CanvasJS.Chart("chartContainer", {
    theme: "dark2",
    exportEnabled: true,
    animationEnabled: true,
    title:{
        text: "Service Availed According to Year",
        horizontalAlign: "center"
    },
    data: [{
        type: "doughnut",
        startAngle: 60,
        innerRadius: 60,
        indexLabelFontSize: 17,
        indexLabel: "{label} ({y})",
        toolTipContent: "<b>{label}:</b> {y} (#percent%)",
        dataPoints: <?php echo json_encode($service_datapoints, JSON_NUMERIC_CHECK); ?>
    }]
});
service_doughnut_chart.render();

} 

           
</script>
<style>
  
  body {
      position: relative; 
      font-family: 'Roboto', sans-serif;
      background-color: #343a40;
  }

  .carousel-inner img {
    width: 100%;
    height: 100%;
}
.aboutimg
{
  width: 50%;
  height: 25%; 
}
.image-parent {
  max-width: 70px;
}
.footer{
  overflow: hidden;
  margin-top: 150px;
  background: #262626;
  color: #627482 !important;
  margin-bottom: 0;
  padding-bottom: 0;
  height: 300px;
}
.cs1{
    margin-left: 2rem;
}
</style>

</head>


<body>

  <!-- Navbar -->
<nav class="navbar  bg-dark navbar-dark ">
  <a class="navbar-brand ">M&R Services</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login.php"> Login <span class="fas fa-sign-in-alt"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php"> Signup <span class="fa fa-user-plus"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="">
       
        <img src="img/laundry.jpg" class="mx-auto d-block aboutimg"><br>
        <p class="cs1" style="color: #FFFFFF">M&R Laundry Service ensures that your clothes are handled by professional and experienced professionals. Our quality services are quick and simple. Every customer’s laundry is washed with extreme care to preserve their clothes’ quality. After washing your clothes our professionals folds, packs and deliver at your doorstep. This is why our laundry service in Bangladesh is recommended if you’re scheduling your first appointment. 
       </p>
<br>
       <h2 class="cs1" style="color: #FFFFFF"><b>What’s included in our laundry service?</b></h2>
<br>
       <ul style="color: #FFFFFF" class="cs1">
       <li>Washing</li>
       <li>Drying</li>
       <li>Starching</li>
       <li>Ironing laundry</li>
       </ul>
      
<br>
            <div class="container-fluid"> 
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mt-4">
                        <div id="chartContainer" class= "cCon" style="height: 370px; width: 100%;"></div>
                        </div>    
                    </div>
                     <!---Graph API ---> 
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>   
                </div>

            </div>
<br>
<br>
            <h2 style="color: #FFFFFF" class="cs1 text-center"> <b>Why Us?</b> </h2><br>
            <p class="cs1" style="color: #FFFFFF"> <b>Hassle Free:</b> Ordering a laundry service from us is simple and easy. You can hire expert service providers from us and save your valuable time from doing all the works by yourself.
<br>
<br>
<b>Budget Friendly:</b> You can hire Professional dry cleaning and laundry services in the same budget or less than any other local laundry services near near you. Our Service Providers will handle your clothes from carrying, washing, drying to folding and deliver at your doorstep.
<br>
<br>
<b>Well-trained Professionals: </b>We offer you a  wide range of well-trained professional Service Providers to serve laundry services. We check their backgrounds in details.
<br>
<br>
<b>Customized Service:</b> From list of laundry services you can customize your clothes’ washing method. All clothes aren’t suitable for same washing method, we understand that. You can describe your preferences when our Service Provider will pick your clothes. You will get your clothes washed exactly as described.
<br>
<br>
<b>Safety Assurance: </b>Our service providers offer a safe cleaning and washing guarantee. This means they will process every mentioned garments accept safely. However, they will not damage your clothes in order to remove permanent stains.  
</p>
        </div>
 </div>
<br>
<h2 style="color: #FFFFFF" class="cs1 text-center"> <b>Protections Against Covid-19</b> </h2><br>
<img src="img/Safe.jpg" class="mx-auto d-block aboutimg">
<br>
<p class="cs1" style="color: #FFFFFF"> We are well-equipped and well-prepared to protect your health and hygiene while serve you. Our preparations include- </p>

       <ul class="cs1" style="color: #FFFFFF">
       <li><b>Checked Health condition of service specialist</b></li><br>
       <li><b>Ensuring use of masks, hand sanitisers, gloves, etc</b></li><br>
       <li><b>Disinfecting equipments before and after the work</b></li><br>
       <li><b>Maintaining social distancing</b></li>
       </ul>


<!----Footer---->
<div class="container-fluid pb-0 mb-0 justify-content-center text-light bg-dark footer" >
    <div class="row justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text">M&R Services</h3>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 text-muted bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled">
                             <li> <a class="text-muted" href="home.php">Home</li></a>
                             <li> <a class="text-muted" href="about.php">About Us</li></a>
                             <li> <a class="text-muted" href="">Contact Us</li></a>
                         </ul>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                         <p class="mb-1 text-muted">Plot 16 Block B, Aftabuddin Ahmed Road</p>
                         <p class="text-muted">Bashundhara R/A</p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                         <p class="social text-muted mb-0 pb-0 bold-text">
                          <span class="mx-2"><span class="fab fa-facebook">
                            
                          </span>
                        </span>
                        <span class="mx-2"><i class="fab fa-instagram" aria-hidden="true"></i> </span>
                         <span class="mx-2"><i class="fa fa-phone" aria-hidden="true"></i>
                         </span>
                        </p><small class="rights"><span>&#174;</span> M&R All Rights Reserved.</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                         <h6 class="mt-55 mt-2 text-muted bold-text">
                          <b>Rehnuma Akhtar</b>
                        </h6>
                        <small class="text-muted"> 
                        <span><i class="fa fa-envelope text-muted" aria-hidden="true">
                        </i>
                      </span> <a href="mailto: rehnuma@gmail.com" class="text-muted">rehnuma@gmail.com</a>
                    </small>
                     </div>
                     
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text">
                          <b>Mashrur Ahmed</b>
                        </h6>
                         <small class="text-muted">
                          <span>
                          <i class="fa fa-envelope text-muted" aria-hidden="true"></i>
                        </span>
                        <a href="mailto: mashrur@gmail.com" class="text-muted">mashrur@gmail.com</a></small>
                     </div>
                 </div>
             </div>
         </div>
  
 </div>
   <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>