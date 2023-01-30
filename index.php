<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="style.css">
          <title>coup du monde</title>
</head>
<body>
          <form action="index.php" method="post">
                    <!-- match1 -->
                    <div>
                         <p>equipe 1 :<input type="number" name="equipe1-match1"></p>
                        <p> <input type="number" name="equipe2-match1">equipe 2</p>
                    </div>
                    <!-- match 2 -->
                    <div>
                         <p>equipe 3 :<input type="number" name="equipe3-match1"></p>
                         <p><input type="number" name="equipe4-match1">equipe 4</p>
                    </div>
                    <!-- match 3 -->
                    <div>
                         <p>equipe 1 :<input type="number" name="equipe1-match2"></p>
                        <p> <input type="number" name="equipe3-match2">equipe 3</p>
                    </div>
                    <!-- match 4 -->
                    <div>
                         <p>equipe 2 :<input type="number" name="equipe2-match2"></p>
                         <p><input type="number" name="equipe4-match2">equipe 4</p>
                    </div>
                    <!-- match 5 -->
                    <div>
                         <p>equipe 1 :<input type="number" name="equipe1-match3"></p>
                        <p> <input type="number" name="equipe4-match3">equipe 4</p>
                    </div>
                    <!-- match 6 -->
                    <div>
                         <p>equipe 3 :<input type="number" name="equipe3-match3"></p>
                         <p><input type="number" name="equipe2-match3">equipe 2</p>
                    </div>
                    <input type="submit" value="simuler" name="sub">
          </form>
          <table>
               <thead>
                    <tr>
                         <th>Equipes</th>
                         <th>Pts</th>
                         <th>MJ</th>
                         <th>MG</th>
                         <th>null</th>
                         <th>MP</th>
                         <th>BM</th>
                         <th>BE</th>
                         <th>Diff</th>
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
                         $difference = array("equipe1" => 0 , "equipe2" => 0 , "equipe3" => 0 , "equipe4" => 0);
                         
                    
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

               <tbody>
                    <tr>
                         <td>Equipe 1</td>
                         <td><?php echo $points["equipe1"]; ?></td>
                         <td><?php echo $matchJ["equipe1"]; ?></td>
                         <td><?php echo $matchG["equipe1"]; ?></td>
                         <td><?php echo $Null["equipe1"]; ?></td>
                         <td><?php echo $matchP["equipe1"]; ?></td>
                         <td><?php echo $butM["equipe1"]; ?></td>
                         <td><?php echo $butE["equipe1"]; ?></td>
                         <td><?php echo $difference["equipe1"] = $butM["equipe1"]-$butE["equipe1"]; ?></td>
                    </tr>
                    <tr>
                         <td>Equipe 2</td>
                         <td><?php echo $points["equipe2"]; ?></td>
                         <td><?php echo $matchJ["equipe2"]; ?></td>
                         <td><?php echo $matchG["equipe2"]; ?></td>
                         <td><?php echo $Null["equipe2"]; ?></td>
                         <td><?php echo $matchP["equipe2"]; ?></td>
                         <td><?php echo $butM["equipe2"]; ?></td>
                         <td><?php echo $butE["equipe2"]; ?></td>
                         <td><?php echo $difference["equipe2"] = $butM["equipe2"]-$butE["equipe2"]; ?></td>
                    </tr>
                    <tr>
                         <td>Equipe 3</td>
                         <td><?php echo $points["equipe3"]; ?></td>
                         <td><?php echo $matchJ["equipe3"]; ?></td>
                         <td><?php echo $matchG["equipe3"]; ?></td>
                         <td><?php echo $Null["equipe3"]; ?></td>
                         <td><?php echo $matchP["equipe3"]; ?></td>
                         <td><?php echo $butM["equipe3"]; ?></td>
                         <td><?php echo $butE["equipe3"]; ?></td>
                         <td><?php echo $difference["equipe3"] = $butM["equipe3"]-$butE["equipe3"]; ?></td>
                         
                    </tr>
                    <tr>
                         <td>Equipe 4</td>
                         <td><?php echo $points["equipe4"]; ?></td>
                         <td><?php echo $matchJ["equipe4"]; ?></td>
                         <td><?php echo $matchG["equipe4"]; ?></td>
                         <td><?php echo $Null["equipe4"]; ?></td>
                         <td><?php echo $matchP["equipe4"]; ?></td>
                         <td><?php echo $butM["equipe4"]; ?></td>
                         <td><?php echo $butE["equipe4"]; ?></td>
                         <td><?php echo $difference["equipe4"] = $butM["equipe4"]-$butE["equipe4"]; ?></td>
                    </tr>
               </tbody>     
          </table>
</body>
</html>