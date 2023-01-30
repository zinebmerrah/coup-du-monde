<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
          <link rel="stylesheet" href="style.css">
          <title>coup du monde</title>
</head>
<body>
          <form action="index.php" method="post">
                    <!-- match1 -->
                    <div>
                         <p>maroc<input type="number" name="maroc-match1"></p>
                        <p> <input type="number" name="croatie-match1">Croatie</p>
                    </div>
                    <!-- match 2 -->
                    <div>
                         <p>Belgique<input type="number" name="belgique-match1"></p>
                         <p><input type="number" name="canada-match1">Canada</p>
                    </div>
                    <!-- match 3 -->
                    <div>
                         <p>Belgique<input type="number" name="belgique-match2"></p>
                        <p> <input type="number" name="maroc-match2">Maroc</p>
                    </div>
                    <!-- match 4 -->
                    <div>
                         <p>Croatie<input type="number" name="croatie-match2"></p>
                         <p><input type="number" name="canada-match2">Canada</p>
                    </div>
                    <!-- match 5 -->
                    <div>
                         <p>Croatie<input type="number" name="croatie-match3"></p>
                        <p> <input type="number" name="belgique-match3">Belgique</p>
                    </div>
                    <!-- match 6 -->
                    <div>
                         <p>Canada<input type="number" name="canada-match3"></p>
                         <p><input type="number" name="maroc-match3">Maroc</p>
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
                    
                         $points = array("maroc" => 0  , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         $matchJ = array("maroc" => 0 , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         $matchG = array("maroc" => 0 , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         $Null = array("maroc" => 0 , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         $matchP = array("maroc" => 0 , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         $butM = array("maroc" => 0 , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         $butE = array("maroc" => 0 , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         $difference = array("maroc" => 0 , "croatie" => 0 , "belgique" => 0 , "canada" => 0);
                         
                    
                              // match 1
                              if($_POST['maroc-match1'] == "" and $_POST['croatie-match1'] == ""){
                                   $points['maroc'] += 0;
                                   $points['croatie'] += 0;
                              }elseif($_POST['maroc-match1'] > $_POST['croatie-match1']){
                                   $points['maroc'] += 3;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['croatie'] += 1;
                                   $matchG['maroc'] += 1;
                                   $matchP['croatie'] += 1;
                                   $butM['maroc'] += $_POST['maroc-match1'];
                                   $butE['croatie'] += $_POST['maroc-match1'];
                              }elseif($_POST['maroc-match1'] < $_POST['croatie-match1']){
                                   $points['croatie'] += 3;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['croatie'] += 1;
                                   $matchG['croatie'] += 1;
                                   $matchP['maroc'] += 1;
                                   $butM['croatie'] += $_POST['croatie-match1'];
                                   $butE['maroc'] += $_POST['croatie-match1'];
                              }elseif($_POST['maroc-match1'] == $_POST['croatie-match1']){
                                   $points['maroc'] += 1;
                                   $points['croatie'] += 1;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['croatie'] += 1;
                                   $Null['maroc'] += 1;
                                   $Null['croatie'] += 1;
                              }
                              // match 2
                              if($_POST['belgique-match1']=="" and $_POST['canada-match1']==""){
                                   $points['belgique'] += 0;
                                   $points['canada'] += 0;
                              }elseif($_POST['belgique-match1'] > $_POST['canada-match1']){
                                   $points['belgique'] += 3;
                                   $matchJ['belgique'] += 1;
                                   $matchJ['canada'] += 1;
                                   $matchG['belgique'] += 1;
                                   $matchP['canada'] += 1;
                                   $butM['belgique'] += $_POST['belgique-match1'];
                                   $butE['canada'] += $_POST['belgique-match1'];
                              }elseif($_POST['belgique-match1'] < $_POST['canada-match1']){
                                   $points['canada'] += 3;
                                   $matchJ['belgique'] += 1;
                                   $matchJ['canada'] += 1;
                                   $matchG['canada'] += 1;
                                   $matchP['belgique'] += 1;
                                   $butM['canada'] += $_POST['canada-match1'];
                                   $butE['belgique'] += $_POST['canada-match1'];    
                              }elseif($_POST['belgique-match1'] == $_POST['canada-match1']){
                                   $points['belgique'] += 1;
                                   $points['canada'] += 1;
                                   $matchJ['belgique'] += 1;
                                   $matchJ['canada'] += 1;
                                   $Null['belgique'] += 1;
                                   $Null['canada'] += 1;
                              }
                              // match 3
                              if($_POST['maroc-match2']=="" and $_POST['belgique-match2']==""){
                                   $points['maroc'] += 0;
                                   $points['belgique'] += 0;
                              }elseif($_POST['maroc-match2'] > $_POST['belgique-match2']){
                                   $points['maroc'] += 3;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['belgique'] += 1;
                                   $matchG['maroc'] += 1;
                                   $matchP['belgique'] += 1;
                                   $butM['maroc'] += $_POST['maroc-match2'];
                                   $butE['belgique'] += $_POST['maroc-match2'];
                              }elseif($_POST['maroc-match2'] < $_POST['belgique-match2']){
                                   $points['belgique'] += 3;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['belgique'] += 1;
                                   $matchG['belgique'] += 1;
                                   $matchP['maroc'] += 1;
                                   $butM['belgique'] += $_POST['belgique-match2']; 
                                   $butE['maroc'] += $_POST['belgique-match2']; 
                              }elseif($_POST['maroc-match2'] == $_POST['belgique-match2']){
                                   $points['maroc'] += 1;
                                   $points['belgique'] += 1;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['belgique'] += 1;
                                   $Null['maroc'] += 1;
                                   $Null['belgique'] += 1; 
                              }
                              // match 4
                              if($_POST['croatie-match2']=="" and $_POST['canada-match2']==""){
                                   $points['croatie'] += 0;
                                   $points['canada'] += 0;
                              }elseif($_POST['croatie-match2'] > $_POST['canada-match2']){
                                   $points['croatie'] += 3;
                                   $matchJ['croatie'] += 1;
                                   $matchJ['canada'] += 1;
                                   $matchG['croatie'] += 1;
                                   $matchP['canada'] += 1;
                                   $butM['croatie'] += $_POST['croatie-match2'];
                                   $butE['canada'] += $_POST['croatie-match2'];  
                              }elseif($_POST['croatie-match2'] < $_POST['canada-match2']){
                                   $points['canada'] += 3;
                                   $matchJ['croatie'] += 1;
                                   $matchJ['canada'] += 1;
                                   $matchG['canada'] += 1;
                                   $matchP['croatie'] += 1; 
                                   $butM['canada'] += $_POST['canada-match2'];
                                   $butE['croatie'] += $_POST['canada-match2'];  
                              }elseif($_POST['croatie-match2'] == $_POST['canada-match2']){
                                   $points['croatie'] += 1;
                                   $points['canada'] += 1;
                                   $matchJ['croatie'] += 1;
                                   $matchJ['canada'] += 1;
                                   $Null['croatie'] += 1;
                                   $Null['canada'] += 1; 
                              }
                              // match 5
                              if($_POST['maroc-match3']=="" and $_POST['canada-match3']==""){
                                   $points['maroc'] += 0;
                                   $points['canada'] += 0;
                              }elseif($_POST['maroc-match3'] > $_POST['canada-match3']){
                                   $points['maroc'] += 3;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['canada'] += 1;
                                   $matchG['maroc'] += 1;
                                   $matchP['canada'] += 1;
                                   $butM['maroc'] += $_POST['maroc-match3'];
                                   $butE['canada'] += $_POST['maroc-match3'];
                              }elseif($_POST['maroc-match3'] < $_POST['canada-match3']){
                                   $points['canada'] += 3;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['canada'] += 1;
                                   $matchG['canada'] += 1;
                                   $matchP['maroc'] += 1;
                                   $butM['canada'] += $_POST['canada-match3'];
                                   $butE['maroc'] += $_POST['canada-match3'];  
                              }elseif($_POST['maroc-match3'] == $_POST['maroc-match3']){
                                   $points['maroc'] += 1;
                                   $points['canada'] += 1;
                                   $matchJ['maroc'] += 1;
                                   $matchJ['canada'] += 1;
                                   $Null['maroc'] += 1;
                                   $Null['canada'] += 1; 
                              }
                              // match 6
                              if($_POST['belgique-match3']=="" and $_POST['croatie-match3']==""){
                                   $points['croatie'] += 0;
                                   $points['belgique'] += 0;
                              }elseif($_POST['belgique-match3'] > $_POST['croatie-match3']){
                                   $points['belgique'] += 3;
                                   $matchJ['croatie'] += 1;
                                   $matchJ['belgique'] += 1;
                                   $matchG['belgique'] += 1;
                                   $matchP['croatie'] += 1;
                                   $butM['belgique'] += $_POST['belgique-match3'];
                                   $butE['croatie'] += $_POST['belgique-match3'];  
                              }elseif($_POST['belgique-match3'] < $_POST['croatie-match3']){
                                   $points['croatie'] += 3;
                                   $matchJ['croatie'] += 1;
                                   $matchJ['belgique'] += 1;
                                   $matchG['croatie'] += 1; 
                                   $matchP['belgique'] += 1;
                                   $butM['croatie'] += $_POST['croatie-match3'];
                                   $butE['belgique'] += $_POST['croatie-match3']; 
                              }elseif($_POST['belgique-match3'] == $_POST['croatie-match3']){
                                   $points['croatie'] += 1;
                                   $points['belgique'] += 1;
                                   $matchJ['croatie'] += 1;
                                   $matchJ['belgique'] += 1;
                                   $Null['croatie'] += 1;
                                   $Null['belgique'] += 1; 
                              }                       
                         }
                    ?>

               <tbody>
                    <tr>
                         <td>Maroc</td>
                         <td><?php echo $points["maroc"]; ?></td>
                         <td><?php echo $matchJ["maroc"]; ?></td>
                         <td><?php echo $matchG["maroc"]; ?></td>
                         <td><?php echo $Null["maroc"]; ?></td>
                         <td><?php echo $matchP["maroc"]; ?></td>
                         <td><?php echo $butM["maroc"]; ?></td>
                         <td><?php echo $butE["maroc"]; ?></td>
                         <td><?php echo $difference["maroc"] = $butM["maroc"]-$butE["maroc"]; ?></td>
                    </tr>
                    <tr>
                         <td>Croatie</td>
                         <td><?php echo $points["croatie"]; ?></td>
                         <td><?php echo $matchJ["croatie"]; ?></td>
                         <td><?php echo $matchG["croatie"]; ?></td>
                         <td><?php echo $Null["croatie"]; ?></td>
                         <td><?php echo $matchP["croatie"]; ?></td>
                         <td><?php echo $butM["croatie"]; ?></td>
                         <td><?php echo $butE["croatie"]; ?></td>
                         <td><?php echo $difference["croatie"] = $butM["croatie"]-$butE["croatie"]; ?></td>
                    </tr>
                    <tr>
                         <td>Belgique</td>
                         <td><?php echo $points["belgique"]; ?></td>
                         <td><?php echo $matchJ["belgique"]; ?></td>
                         <td><?php echo $matchG["belgique"]; ?></td>
                         <td><?php echo $Null["belgique"]; ?></td>
                         <td><?php echo $matchP["belgique"]; ?></td>
                         <td><?php echo $butM["belgique"]; ?></td>
                         <td><?php echo $butE["belgique"]; ?></td>
                         <td><?php echo $difference["belgique"] = $butM["belgique"]-$butE["belgique"]; ?></td>
                         
                    </tr>
                    <tr>
                         <td>Canada</td>
                         <td><?php echo $points["canada"]; ?></td>
                         <td><?php echo $matchJ["canada"]; ?></td>
                         <td><?php echo $matchG["canada"]; ?></td>
                         <td><?php echo $Null["canada"]; ?></td>
                         <td><?php echo $matchP["canada"]; ?></td>
                         <td><?php echo $butM["canada"]; ?></td>
                         <td><?php echo $butE["canada"]; ?></td>
                         <td><?php echo $difference["canada"] = $butM["canada"]-$butE["canada"]; ?></td>
                    </tr>
               </tbody>     
          </table>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>