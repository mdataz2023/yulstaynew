<?php

$servername = "localhost";
$username = "uhd50p3aarwb3";
$password = "b2p(N1;]:3Lc";
$dbname = "db3slni3ex0xza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$language="A";

$customSql="";
$post_type=$_POST['post_type'];
$min_price=$_POST['min_price'];
$max_price=$_POST['max_price'];
$min_size=$_POST['min_size'];
$max_size=$_POST['max_size'];
$orderBy=@$_POST['orderBy'];
$baths=$_POST['baths'];
$beds=$_POST['beds'];

if(isset($min_price)&$min_price!=""){
    if($post_type=="rental-property"){
        $customSql.=" and  PRIX_LOCATION_DEMANDE >= '".$min_price."'";
    }else{
        $customSql.=" and  PRIX_DEMANDE >= '".$min_price."'";
    }
}
if(isset($max_price)&$max_price!=""){
    if($post_type=="rental-property"){
        $customSql.=" and  PRIX_LOCATION_DEMANDE <= '".$max_price."'";
    }else{
        $customSql.=" and  PRIX_DEMANDE <= '".$max_price."'";
    }
}
if(isset($beds)&$beds!=""){
    if($beds==5)
        $customSql.=" and NB_CHAMBRES >= '".$beds."'";
    else
        $customSql.=" and NB_CHAMBRES = '".$beds."'";
}
if(isset($baths)&$baths!="undefined"&$baths!="" ){
    $customSql.=" and  NB_CHAMBRES_HORS_SOL >= '".$baths."'";
}
if(isset($min_size)&$min_size!=""){
    $customSql.=" and  SUPERFICIE_HABITABLE >= '".$min_size."'";
}
if(isset($max_size)&$max_size!=""){
    $customSql.=" and  SUPERFICIE_HABITABLE <= '".$max_size."'";
}
if(isset($orderBy)&$orderBy!=""){

$price="PRIX_DEMANDE";
if($post_type=="rental-property"){
    $price="PRIX_LOCATION_DEMANDE";
}
    if($orderBy=="low"){
        $customSql.=" order by  ".$price." asc";
    }else if($orderBy=="high"){
        $customSql.=" order by  ".$price." desc";
    }
}

$sql= "SELECT * FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where p.post_type='".$_POST['post_type']."' and i.CODE_STATUT='EV' ".$customSql;
// $sql = "INSERT INTO filter_table (QUERY) VALUES ('".$sql1."' )";

$result = mysqli_query($conn, $sql);
$data="";
$postIndex=0;
    while($inscriptionsData = mysqli_fetch_assoc($result)) {
        $photos=mysqli_query($conn, "SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData["NO_INSCRIPTION"]."' limit 3");
        $photosHtml="";
        if ($photos->num_rows > 0) {
            $photoIndex=0;
            while($page = mysqli_fetch_assoc($photos)) {
                $actv="";
                if($photoIndex==0){
                    $actv="active";
                }else{
                    $actv="";
                }
                $photosHtml.='<div class="carousel-item '.$actv.'" style="background-image: url('.$page['PhotoURL'].')"> </div>';
                $photoIndex++;
            }
        }
        $r2=str_replace(' ',"",$inscriptionsData['NOM_RUE_COMPLET']);
        $r1=str_replace("'","",$r2);
$priceVariable=0;
        if($post_type=="rental-property"){
            $priceVariable=    $inscriptionsData['PRIX_LOCATION_DEMANDE'];
        }else{
            $priceVariable=    $inscriptionsData['PRIX_DEMANDE'];
        }
        $REGION_CODES=mysqli_query($conn, "SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData['MUN_CODE']."' limit 3");
        $title="";
        while($REGION_CODE = mysqli_fetch_assoc($REGION_CODES)) {
            $title=$REGION_CODE['DESCRIPTION'];
        }

        $data.='
        <div class="col-sm-12 col-md-6 col-xxxl-4 NO_INSCRIPTION'.str_replace('.',"",$r1).'">
            <a href="'.$_POST['bloginfo'].'/'.$_POST['post_type'].'/'.$inscriptionsData['post_name'].'" class="pxp-results-card-1 rounded-lg" data-prop="1">
                <div id="card-carousel-'.$postIndex.'" class="carousel slide" data-ride="carousel"
                    data-interval="false">
                <div class="carousel-inner">
                '. $photosHtml.'
                </div>
                <span class="carousel-control-prev" data-href="#card-carousel-'.$postIndex.'"
                    data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                </span>
                <span class="carousel-control-next" data-href="#card-carousel-'.$postIndex.'"
                    data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                </span>
             </div>
             <div class="pxp-results-card-1-gradient"></div>
             <div class="pxp-results-card-1-details">
                 <div class="pxp-results-card-1-details-title">'.  $title.'</div>
                 <div class="pxp-results-card-1-details-price">
                     '.number_format($priceVariable,2).' $'.'
                 </div>
             </div>
             <div class="pxp-results-card-1-features">
                 <span>'.$inscriptionsData['NB_CHAMBRES'].' BD <span>|</span>
                     '.$inscriptionsData['NB_CHAMBRES_HORS_SOL'].' BA <span>|</span>
                    '.$inscriptionsData['SUPERFICIE_HABITABLE']." ".$inscriptionsData['UM_SUPERFICIE_HABITABLE'].'
                 </span>
             </div>
             <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
         </a>
        </div>
';
$postIndex++;
}
// mysqli_close($conn);
echo $data;
?>