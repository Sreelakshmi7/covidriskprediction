
 
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
   .form-control{
	  padding: 15px; 
    width: 270px;
    height: 7px;
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
      <h1><center>Predict Now</center></h1><br>
      
     
         <form action="result.php" method="POST" enctype="multipart/form-data">
         <div id="t1">
         <input type="text" name="uid" placeholder="User Id" id="ip1" class="form-control" required><br>
         <input type="numer" name="age" placeholder="Age" id="ip1" class="form-control"required><br>
       
         <input type="radio" name="sex" value="0" required > Male
         <input type="radio" name="sex" value="1" required> Female<br>

        <select name="inmsupr" required class="form-control"  >
		<option value=''> Select Inmsupr</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
	
		 <select name="pneumonia" required class="form-control">
		<option value=''> Select Pneumonia</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		 <select name="diabetes" required class="form-control">
		<option value=''> Select Diabetes</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		 <select name="asthma" required class="form-control">
		<option value=''> Select Asthma</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		 <select name="copd" required class="form-control">
		<option value=''> Select Copd</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		 <select name="hypertension" required class="form-control">
		<option value=''> Select Hypertension</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		 <select name="cardiovascular" required class="form-control">
		<option value=''> Select Cardiovascular</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		<select name="renal_chronic" required class="form-control">
		<option value=''> Select Renal Chronic</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		<select name="obesity" required class="form-control">
		<option value=''> Select Obesity</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select>
		<select name="tobacco" required class="form-control">
		<option value=''> Select Tobacco</option>
		<option value='1'>YES</option>
		<option value='0'> NO</option>
		</select><br>
		 <input type="numer" name="day" placeholder="Days Prior To Treatment" class="form-control" id="ip1" required><br><br>
		
		
		
         <input type="Submit" value="Predict ICU" name="p1" style=" height: 30px; width: 250px" id="p1">
		 <br><br>
		 	
         <input type="Submit" value="Predict INTUBATION" name="p2" style=" height: 30px; width: 250px" id="p1">
        </div>
        </form>
        
        
        
        
       </div>
      </div>
    </div> 
   </div>
 </body>
</html>