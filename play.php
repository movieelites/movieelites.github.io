<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">     
 

 <?php
$conn = new mysqli("sql112.epizy.com","epiz_29956612","FzwVh0h1FJT","epiz_29956612_moviemovieelites");
$id = $_GET['id'];
$queryn= "SELECT * FROM movie_list WHERE id='$id' ORDER BY 1 DESC";
$result = mysqli_query($conn,$queryn);
if(mysqli_num_rows($result) == 0){
header("location:index.php");
}
$r = mysqli_fetch_assoc($result);

$nam = $r['name'];
$img = $r['image'];
$des = $r['description'];

echo "<title> $nam - Movie Elites - Free Movie Website</title>
  <meta name='keywords' content=' $nam, Movie Elites, Movie, Elites, movieelites, movieelites.42web.io, MovieElites.42web.io'>
<meta name='description' content='Download $nam and other Movies for free at low data size and for hight quality'>
<meta name='author' content='Movie Elites'>

";
?>
<link rel="icon" href="<?php echo $img; ?>">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <style>
div.gallery {
  height: 80%
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;

  text-align: center;
}

* {
  box-sizing: border-box;
   
   
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>


<?php
include "d.html";
echo "
<div class='col-sm-6 col-xs-6'>
                <div class='list mb-2'>
                    <div class='list-header'>
                        <img src='$img' alt=' (MovieElites) $nam' >
                    
                    </div>
                    <div class='list-content'>
                        <h2><span class='text-black'>$nam</span></h2>
                        <p> $des </p>
   </div>
                </div>

";

?>

<?php
///$id = $_GET['id'];

$query= "SELECT * FROM links WHERE movie_id='$id' ORDER BY 1 ASC";

$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result)==0) {
   echo "<div class='container'>     
        <div class='row'>

<div class='col-sm-6 col-xs-6'>
                <div class='list mb-2'>          
         <div class='list-content'>
        <h2><a href='#' class='text-black'> No Links Available le </a></h2>                                           
   </div>
       </div>
    </div>
</div>
</div>";
  }
else{


$roww = mysqli_fetch_assoc($result);
	$namee = $roww['name'];
$imgaeee = $roww['image'];
$de = $roww['description'];
$link1 = $roww['link1'];
$link2 = $roww['link2'];
$link3 = $roww['link3'];
$link4 = $roww['link4'];
$link5 = $roww['link5'];
    

if(!empty($link1)){
echo "<div class='container'>     
        <div class='row'>

<div class='col-sm-6 col-xs-6'>
                <div class='list mb-2'>    
<div class='list-header'>
</div>      
         <div class='list-content'>
        <h2><a href='$link1' class='text-black'> Download Link 1 </a></h2>                                           
   </div>
       </div>
    </div>
</div>
</div>";
}

if(!empty($link2)){
echo "<div class='container'>     
        <div class='row'>

<div class='col-sm-6 col-xs-6'>
                <div class='list mb-2'>     
<div class='list-header'>
</div>     
         <div class='list-content'>
        <h2><a href='$link2' class='text-black'> Download Link 2 </a></h2>                                           
   </div>
       </div>
    </div>
</div>
</div>";
}

if(!empty($link3)){
echo "<div class='container'>     
        <div class='row'>

<div class='col-sm-6 col-xs-6'>
                <div class='list mb-2'>     
<div class='list-header'>
</div>     
         <div class='list-content'>
        <h2><a href='$link3' class='text-black'> Download Link 3 </a></h2>                                           
   </div>
       </div>
    </div>
</div>
</div>";
}

if(!empty($link4)){
echo "<div class='container'>     
        <div class='row'>

<div class='col-sm-6 col-xs-6'>
                <div class='list mb-2'>   
<div class='list-header'>
</div>       
         <div class='list-content'>
        <h2><a href='$link4' class='text-black'> Download Link 4 </a></h2>                                           
   </div>
       </div>
    </div>
</div>
</div>";
}

if(!empty($link5)){
echo "<div class='container'>     
        <div class='row'>

<div class='col-sm-6 col-xs-6'>
                <div class='list mb-2'>    
<div class='list-header'>
</div>      
         <div class='list-content'>
        <h2><a href='$link5' class='text-black'> Download Link 5 </a></h2>                                           
   </div>
       </div>
    </div>
</div>
</div>";



}
}
?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<?php
echo"
<iframe src='addviews.php?id=$nam' style='width: 0.1px; height: 0.1px;'></iframe>
";
?>
  </body>
</html>

.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<?php
echo"
<iframe src='addviews.php?id=$nam' style='width: 0.1px; height: 0.1px;'></iframe>
";
?>
  </body>
</html>
