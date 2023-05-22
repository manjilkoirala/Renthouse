<?php
include("Landing-Page-Element/navbar.php");
function component($propertytype,$propertydis,$propertyimg,$propertycity){
   $element=
   "<div class='col-md-3 col-sm-6 my-3 my-md-0'>
   <form action='propertylist.php'>
       <div class='card shadow'>
           <div>
               <img src='$propertyimg' alt='image1' class='img-fluid card-img-top'>
           </div>
           <div class='card-body'>
               <h5 class='card-title'>$propertytype</h5>
               
                   <h5>
                       <span class='price'>$propertydis</span>
                   </h5>
                   <h6>
                   $propertycity
                   <p class='card-text'>
                       
                   </p>
                   <button type='Submit' class='btn btn-warning my-3'><i class='fas fa-eye'></i> View Property</button>
           </div>
       </div>
   </form>
</div>";
    
   echo $element;
}

include("config/config.php");

?>
 <br><br>
  <?php
  include("search.html");
  ?>

<!DOCTYPE html>
<html lang="en">
<head>

      <!-- Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
     <!--Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    img{
        
        width: 100px;
        height: auto;
        background: lightblue;
        background: radial-gradient(white 30%, lightblue 70%);
    }
</style>
</head>
<body>

<div class="container">
    <div class="row text-center py-5">
        
    <?php
    $sql="SELECT * FROM add_property";
    $query=mysqli_query($db,$sql);
    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $property_id=$rows['property_id'];

    $sql2="SELECT * FROM property_photo where property_id=$property_id";
    $query2=mysqli_query($db,$sql2);

    if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
        
    
        component($rows['property_type'],$rows['district'],"owner/".$photo,$rows['city']);}
   
       
}}
 ?>
</div>

 
</div>

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



