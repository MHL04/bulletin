<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            *{ /* for all tags */
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            form{
                max-width: 50%; /*    Largeur max mete ak margin auto mete form lan in center    */
                margin: 50px auto;
                padding: 25px;
                background-color:blanchedalmond;
                border-radius: 35px;
                font-family:arial;
            }

            .form div > input{
                width: 100%;
                display: inline-block;
                margin-bottom: 20px;
                margin-top: 0px;
                padding: 3px 10px; 
            }
            h1{
                text-align: center;
                font-family:arial;
            }
            #bouton{
                margin-bottom: 15px; 
                margin-top: -15px;
                font-family:arial;
          
                
              
            }
            table,th,tr,td{
                border: solid 1px;
                border-collapse: collapse;
                max-width: 50%; /*    Largeur max mete ak margin auto mete form lan in center    */
                margin: 40px auto;
                font-family:arial;
                padding: 9px;


            }
            th{
                background-color:skyblue;
            }
            td{
                background-color:blanchedalmond;
            }

            }
            
        </style>
</head>
<body>
    

    <form class="form" method="post">
        <h1>BULLETIN</h1>
        <div>
            <label for="nom">NOM</label>
            <input type="text" name="nom">
        </div>
        <div>
            <label for="prenom">PRENOM</label>
            <input type="text" name="prenom">
        </div>
        <div>
            <label for="sexe">SEXE</label>
        </div>
        <input type="radio" name="sexe" value="MASCULIN">M
        <input type="radio" name="sexe" value="FEMININ">F
        
        </div>
        <div>
            <label for="matiere">MATIERE</label>
            <input type="text" name="matiere">
        </div>
        <div>
            <label for="note">NOTE</label>
            <input type="number" name="note">
        </div>
        
        <div id="bouton">
           <button name="save">SAVE</button>
           <button name="delete">DELETE</button>
           
        <!-- <input type="submit"value="DELETE"name="delete"> -->
        </div>
      
           
        
        <!-- <div>
            <label for="refresh">REFRESH</label>
            <input type="button" value="refresh">
        </div>  -->
     
    </form>
    <?PHP 
    if(isset($_POST["delete"])){
        session_destroy();
    }
    
    
    ?>
   <?php
        if(isset($_POST["save"])) //La fonction isset() permet de tester si une variable existe
     {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $sexe=$_POST['sexe'];
        $matiere=$_POST['matiere'];
        $note=$_POST['note'];
        $total=$_POST['total'];
        $moyenne=$_POST['moyenne'];
        
    

     }
           
           $p=array("nom" => $nom,"prenom" => $prenom,"sexe" => $sexe,"matiere" => $matiere,"note" => $note,"total" => $note,"moyenne"=>$note);
           $_SESSION["personne"][]=$p;
           $p=$_SESSION["personne"];
           foreach($p as $l){
            foreach($l as $r=>$e){
                $total=array_sum(array_column($p,'note'));
                
            }}
        //    $total = array_sum(array_column($p,'note'));//somme de la colonne note du tableau $p
           echo"LE TOTAL EST: $total<br>";
           
          //echo"la largeur du tableau est:".count($p);
          $moyenne=0;
          $moyenne=$total/count($p);
          echo"LA MOYENNE EST $moyenne";
        // //print_r($p);
        // $total=0;
        //  $Qte = array_column($p, 'note');
        //  $moy=0;
        //  $moy=$total/$Qte;
        //  echo"LA MOYENNE EST: $moy";
        //   $moy=0;
        //   $moy=$total/$Qte;
        //   echo"la moyenne est :$moy ";
       
     
        
        // print_r($Qte);

          
// $total==$note+$total;
// echo" le total est $total";
          
        
  
   
    ?>
    <!-- 
    foreach($p as $l){
    foreach($l as $r=>$e){
        $total1=$note*$coeffiscient;
        echo "le total est $total1";
    }
}
   
     -->

 <table>
        <thead>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>SEXE</th>
                <th>MATIERE</th>
                <th>NOTE</th>
                <th>TOTAL</th>
                <TH>MOYENNE</TH>
                
                
            </tr>
        </thead>
        <TBody>
        <?php ?>
            <?php foreach($p as $l){?>
                <tr>
                    <?php foreach($l as$c=>$v){?>
                        <td>
                            <?php echo $v; ?>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                   
        </TBody>
                    </table>
<!-- <table>
            <thead>
                <tr>
                    <th> No Compte</th>
                    <th> Date </th>
                    <th>  Montant </th>
                    <th>Solde</th>
                </tr>
            </thead>
            <tbody>
                foreach($tab as $l ){ ?>
                <tr>
               foreach($l as$c=>$v){
                    <td><?= $k['Compte'] ?></td>
                    <td><?= $k['Date'] ?></td>
                    <td><?= $k['Montant'] ?></td>
                    <td><?= $k['Solde'] ?></td>
                </tr>
                } ?>
            </tbody>
        </table> -->
</body>
</html>