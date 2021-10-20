
 
  <style>
  .page-header2
  {
	background:#141D29;
	color:#FFF;  
	height:60px;
  }
  .page-header2 a
  {
	  float:right;
	color:#FFF;  
  }
  .tmenu
  {
	margin-top:15px;  
  }
  
  .right
  {
	background:#F5F5F5; 
	height:100%;
	min-height:600px;
  }
  
  
  
  .menu
  {
	background:#F0F0F0; 
	height:100%;
	min-height:600px;
	 
  }
  .menu ul
  {
list-style-type:none ;
margin-left:-10px;
  }
   .menu li
  {
height:30px; 
font-size:16px;
  }
  .glyphicon
  {
	color:#06F; 
	margin-right:10px; 
  }
  </style>
 



<html>
  <head>
    <meta name="viewport" content="width=device-width" content="initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/new3.css" rel="stylesheet">
   </head>
<body>

<div class="col-sm-12 page-header2">
  <div class="col-sm-4"><h2>COVID RISK PREDICTION </h2></div>
   <div class="col-sm-8 tmenu">
  </div>
  </div>

  <div id="p3">
   <div class="container">
    <div class="row-justify-content-center">
     <div class="col-sm-5">
      <h1><center>OUTPUT</center></h1><br>
      
     
        
         <div id="t1">
		 
         <?php
		 $head="sex,age,inmsupr,pneumonia,diabetes,asthma,copd,hypertension,cardiovascular,renal_chronic,obesity,tobacco,days_prior_to_treatment";
$data="$_POST[sex],$_POST[age],$_POST[inmsupr],$_POST[pneumonia],$_POST[diabetes],$_POST[asthma],$_POST[copd],$_POST[hypertension],$_POST[cardiovascular],$_POST[renal_chronic],$_POST[obesity],$_POST[tobacco],$_POST[day]";

$myfile="test.csv";
$fh=fopen($myfile,'w') or die('canot open file');
$str="$head\n$data";
fwrite($fh,$str);
fclose($fh);

if(isset($_POST['p1']))
{
$python=`python test_icu.py`;
echo"<h2>XGB</h2>";

	if($python==0)
	{
		echo"<h4>ICU NOT REQUIRED</h4>";

	}
	else
	{
		echo"<h4>ICU REQUIRED</h4>";
	}
}	 

if(isset($_POST['p2']))
{
$python=`python test_intubed.py`;
echo"<h2>XGB</h2>";

	if($python==0)
	{
		echo"<h4>INTUBATION NOT REQUIRED</h4>";

	}
	else
	{
		echo"<h4>INTUBATION REQUIREDh4>";
	}
}	 
	
	 ?>
		
        <a href='index.php' class='btn btn-danger'>GO BACK</a>
        </div>
        
        
        
        
       </div>
      </div>
    </div> 
   </div>
 </body>
</html>