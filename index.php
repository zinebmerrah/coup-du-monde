<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
          <link rel="stylesheet" href="coupe.css">
          <title>coupe du monde</title>
</head>
<body>
          <nav class="navbar bg-body-tertiary">
               <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1"><img src="logo-removebg-preview.png" alt=""></span>
               </div>
          </nav>
          <form action="index.php" method="post">
                    <!-- match1 -->
                    <div>
                         equipe 1<input type="number" name="equipe1-match1">
                        <input type="number" name="equipe2-match1">equipe 2
                    </div>
                    <!-- match 2 -->
                    <div>
                         equipe 3<input type="number" name="equipe3-match1">
                         <input type="number" name="equipe4-match1">equipe 4
                    </div>
                    <!-- match 3 -->
                    <div>
                         equipe 1<input type="number" name="equipe1-match2">
                        <input type="number" name="equipe3-match2">equipe 3
                    </div>
                    <!-- match 4 -->
                    <div>
                         equipe 2<input type="number" name="equipe2-match2">
                         <input type="number" name="equipe4-match2">equipe 4
                    </div>
                    <!-- match 5 -->
                    <div>
                         equipe 1<input type="number" name="equipe1-match3">
                        <input type="number" name="equipe4-match3">equipe 4
                    </div>
                    <!-- match 6 -->
                    <div>
                         equipe 3<input type="number" name="equipe3-match3">
                         <input type="number" name="equipe2-match3">equipe 2
                    </div>
                    <input  id="button"  type="submit" value="simuler" name="sub">
          </form>
     <table class="table ">
          <thead>
               <tr>
                    <th scope="col">Equipes</th>
                    <th scope="col">Pts</th>
                    <th scope="col">MJ</th>
                    <th scope="col">MG</th>
                    <th scope="col">null</th>
                    <th scope="col">MP</th>
                    <th scope="col">BM</th>
                    <th scope="col">BE</th>
                    <th scope="col">DIff</th>
               </tr>
          </thead>
     <?php 

          if(isset($_POST['sub'])){

          $points = array("equipe1" => 0  , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
          $matchJ = array("equipe1" => 0 , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
          $matchG = array("equipe1" => 0 , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
          $Null = array("equipe1" => 0 , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
          $matchP = array("equipe1" => 0 , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
          $butM = array("equipe1" => 0 , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
          $butE = array("equipe1" => 0 , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
          $difference = array("equipe1" => $butM["equipe1"]-$butE["equipe1"] , "equipe2" => $butM["equipe2"]-$butE["equipe2"] , "equipe3" => $butM["equipe3"]-$butE["equipe3"] , "equipe4" => $butM["equipe4"]-$butE["equipe4"]);


               // match 1
               if($_POST['equipe1-match1'] == "" and $_POST['equipe2-match1'] == ""){
                    $points['equipe1'] += 0;
                    $points['equipe2'] += 0;
               }elseif($_POST['equipe1-match1'] > $_POST['equipe2-match1']){
                    $points['equipe1'] += 3;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe2'] += 1;
                    $matchG['equipe1'] += 1;
                    $matchP['equipe2'] += 1;
                    $butM['equipe1'] += $_POST['equipe1-match1'];
                    $butE['equipe2'] += $_POST['equipe1-match1'];
               }elseif($_POST['equipe1-match1'] < $_POST['equipe2-match1']){
                    $points['equipe2'] += 3;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe2'] += 1;
                    $matchG['equipe2'] += 1;
                    $matchP['equipe1'] += 1;
                    $butM['equipe2'] += $_POST['equipe2-match1'];
                    $butE['equipe1'] += $_POST['equipe2-match1'];
               }elseif($_POST['equipe1-match1'] == $_POST['equipe2-match1']){
                    $points['equipe1'] += 1;
                    $points['equipe2'] += 1;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe2'] += 1;
                    $Null['equipe1'] += 1;
                    $Null['equipe2'] += 1;
               }
               // match 2
               if($_POST['equipe3-match1']=="" and $_POST['equipe4-match1']==""){
                    $points['equipe3'] += 0;
                    $points['equipe4'] += 0;
               }elseif($_POST['equipe3-match1'] > $_POST['equipe4-match1']){
                    $points['equipe3'] += 3;
                    $matchJ['equipe3'] += 1;
                    $matchJ['equipe4'] += 1;
                    $matchG['equipe3'] += 1;
                    $matchP['equipe4'] += 1;
                    $butM['equipe3'] += $_POST['equipe3-match1'];
                    $butE['equipe4'] += $_POST['equipe3-match1'];
               }elseif($_POST['equipe3-match1'] < $_POST['equipe4-match1']){
                    $points['equipe4'] += 3;
                    $matchJ['equipe3'] += 1;
                    $matchJ['equipe4'] += 1;
                    $matchG['equipe4'] += 1;
                    $matchP['equipe3'] += 1;
                    $butM['equipe4'] += $_POST['equipe4-match1'];
                    $butE['equipe3'] += $_POST['equipe4-match1'];    
               }elseif($_POST['equipe3-match1'] == $_POST['equipe4-match1']){
                    $points['equipe3'] += 1;
                    $points['equipe4'] += 1;
                    $matchJ['equipe3'] += 1;
                    $matchJ['equipe4'] += 1;
                    $Null['equipe3'] += 1;
                    $Null['equipe4'] += 1;
               }
               // match 3
               if($_POST['equipe1-match2']=="" and $_POST['equipe3-match2']==""){
                    $points['equipe1'] += 0;
                    $points['equipe3'] += 0;
               }elseif($_POST['equipe1-match2'] > $_POST['equipe3-match2']){
                    $points['equipe1'] += 3;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe3'] += 1;
                    $matchG['equipe1'] += 1;
                    $matchP['equipe3'] += 1;
                    $butM['equipe1'] += $_POST['equipe1-match2'];
                    $butE['equipe3'] += $_POST['equipe1-match2'];
               }elseif($_POST['equipe1-match2'] < $_POST['equipe3-match2']){
                    $points['equipe3'] += 3;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe3'] += 1;
                    $matchG['equipe3'] += 1;
                    $matchP['equipe1'] += 1;
                    $butM['equipe3'] += $_POST['equipe3-match2']; 
                    $butE['equipe1'] += $_POST['equipe3-match2']; 
               }elseif($_POST['equipe1-match2'] == $_POST['equipe3-match2']){
                    $points['equipe1'] += 1;
                    $points['equipe3'] += 1;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe3'] += 1;
                    $Null['equipe1'] += 1;
                    $Null['equipe3'] += 1; 
               }
               // match 4
               if($_POST['equipe2-match2']=="" and $_POST['equipe4-match2']==""){
                    $points['equipe2'] += 0;
                    $points['equipe4'] += 0;
               }elseif($_POST['equipe2-match2'] > $_POST['equipe4-match2']){
                    $points['equipe2'] += 3;
                    $matchJ['equipe2'] += 1;
                    $matchJ['equipe4'] += 1;
                    $matchG['equipe2'] += 1;
                    $matchP['equipe4'] += 1;
                    $butM['equipe2'] += $_POST['equipe2-match2'];
                    $butE['equipe4'] += $_POST['equipe2-match2'];  
               }elseif($_POST['equipe2-match2'] < $_POST['equipe4-match2']){
                    $points['equipe4'] += 3;
                    $matchJ['equipe2'] += 1;
                    $matchJ['equipe4'] += 1;
                    $matchG['equipe4'] += 1;
                    $matchP['equipe2'] += 1; 
                    $butM['equipe4'] += $_POST['equipe4-match2'];
                    $butE['equipe2'] += $_POST['equipe4-match2'];  
               }elseif($_POST['equipe2-match2'] == $_POST['equipe4-match2']){
                    $points['equipe2'] += 1;
                    $points['equipe4'] += 1;
                    $matchJ['equipe2'] += 1;
                    $matchJ['equipe4'] += 1;
                    $Null['equipe2'] += 1;
                    $Null['equipe4'] += 1; 
               }
               // match 5
               if($_POST['equipe1-match3']=="" and $_POST['equipe4-match3']==""){
                    $points['equipe1'] += 0;
                    $points['equipe4'] += 0;
               }elseif($_POST['equipe1-match3'] > $_POST['equipe4-match3']){
                    $points['equipe1'] += 3;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe4'] += 1;
                    $matchG['equipe1'] += 1;
                    $matchP['equipe4'] += 1;
                    $butM['equipe1'] += $_POST['equipe1-match3'];
                    $butE['equipe4'] += $_POST['equipe1-match3'];
               }elseif($_POST['equipe1-match3'] < $_POST['equipe4-match3']){
                    $points['equipe4'] += 3;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe4'] += 1;
                    $matchG['equipe4'] += 1;
                    $matchP['equipe1'] += 1;
                    $butM['equipe4'] += $_POST['equipe4-match3'];
                    $butE['equipe1'] += $_POST['equipe4-match3'];  
               }elseif($_POST['equipe1-match3'] == $_POST['equipe4-match3']){
                    $points['equipe1'] += 1;
                    $points['equipe4'] += 1;
                    $matchJ['equipe1'] += 1;
                    $matchJ['equipe4'] += 1;
                    $Null['equipe1'] += 1;
                    $Null['equipe4'] += 1; 
               }
               // match 6
               if($_POST['equipe3-match3']=="" and $_POST['equipe2-match3']==""){
                    $points['equipe2'] += 0;
                    $points['equipe3'] += 0;
               }elseif($_POST['equipe3-match3'] > $_POST['equipe2-match3']){
                    $points['equipe3'] += 3;
                    $matchJ['equipe2'] += 1;
                    $matchJ['equipe3'] += 1;
                    $matchG['equipe3'] += 1;
                    $matchP['equipe2'] += 1;
                    $butM['equipe3'] += $_POST['equipe3-match3'];
                    $butE['equipe2'] += $_POST['equipe3-match3'];  
               }elseif($_POST['equipe3-match3'] < $_POST['equipe2-match3']){
                    $points['equipe2'] += 3;
                    $matchJ['equipe2'] += 1;
                    $matchJ['equipe3'] += 1;
                    $matchG['equipe2'] += 1; 
                    $matchP['equipe3'] += 1;
                    $butM['equipe2'] += $_POST['equipe2-match3'];
                    $butE['equipe3'] += $_POST['equipe2-match3']; 
               }elseif($_POST['equipe3-match3'] == $_POST['equipe2-match3']){
                    $points['equipe2'] += 1;
                    $points['equipe3'] += 1;
                    $matchJ['equipe2'] += 1;
                    $matchJ['equipe3'] += 1;
                    $Null['equipe2'] += 1;
                    $Null['equipe3'] += 1; 
               }                       
          }


          ?>
          <?php

          function cmp($a,$b){
               if($a==$b){
               return 0;
               }
               return ($a>$b)?-1:1;

          }
          uasort ($points,"cmp");
          foreach($points as $key => $value){
               echo "
               <tr>
                    <td>$key</td>
                    <td>$value</td>
                    <td>$matchJ[$key]</td>
                    <td>$matchG[$key]</td>
                    <td>$Null[$key]</td>
                    <td>$matchP[$key]</td>
                    <td>$butM[$key]</td>
                    <td>$butE[$key]</td>
                    <td>$difference[$key]</td>

                         
               </tr>";
               
          };
         

     
          ?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
