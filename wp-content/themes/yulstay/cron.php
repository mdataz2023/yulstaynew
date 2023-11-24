<?php
error_reporting(0);
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

$zipFolder = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/';
$unzipFolder = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/';
$backupFolder = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/backup/';

$files1 = scandir($zipFolder);
$pattern = '/[\n]/';

$zip = new ZipArchive;
for ($i=0; $i <count($files1) ; $i++) { $explode=explode(".zip",$files1[$i]); if(count($explode)>1){
    chmod($zipFolder.$files1[$i],773);
    $res = $zip->open($zipFolder.$files1[$i]);
    if ($res) {
    // Unzip Path
    $result =$zip->extractTo($unzipFolder);
    $zip->close();
    if($result===true){
    copy($zipFolder.$files1[$i],$backupFolder.$files1[$i]);
    unlink($zipFolder.$files1[$i]);

    $addendaFile =fopen($zipFolder."ADDENDA.TXT", 'r');
    while (($valueExplode = fgetcsv($addendaFile)) !== FALSE) {

    $TEXTE= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[6]), 'UTF-8', 'ISO-8859-1'));

    $addendaSql = $conn->query("SELECT * FROM ADDENDA WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and NO_ADDENDA =
    '".$valueExplode[1]."' and ORDRE_AFFICHAGE = '".$valueExplode[3]."' ");

    if($addendaSql->num_rows===0){
        $insertSql = "INSERT INTO ADDENDA (NO_INSCRIPTION, NO_ADDENDA, CODE_LANGUE, ORDRE_AFFICHAGE, CHAMP_INUTILISE_1,
        CHAMP_INUTILISE_2, TEXTE)
        VALUES ('$valueExplode[0]', '$valueExplode[1]',
        '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','".$TEXTE."')";
        $conn->query($insertSql);
    }
    }
    unlink($zipFolder."ADDENDA.TXT");
// //////////////////////////////////////////////////////////////////////////////////////
    $bureauxFile =fopen($zipFolder."BUREAUX.TXT", 'r');
    while (($valueExplode = fgetcsv($bureauxFile)) !== FALSE) {

    $NOM_RUE= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[4]), 'UTF-8', 'ISO-8859-1'));

    $bureauxSql = $conn->query("SELECT * FROM BUREAUX WHERE CODE = '".$valueExplode[0]."'");

    if($bureauxSql->num_rows===0){
    $insertSql = "INSERT INTO BUREAUX (CODE, FIRME_CODE, NOM_LEGAL, NO_CIVIQUE, NOM_RUE, BUREAU, MUNICIPALITE, PROVINCE,
    CODE_POSTAL, TELEPHONE_1, POSTE_1, TELEPHONE_2, POSTE_2, TELEPHONE_FAX, COURRIEL, SITE_WEB, DIRECTEUR_CODE,
    URL_LOGO_BUREAU)
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$NOM_RUE','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]','$valueExplode[17]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."BUREAUX.TXT");
// //////////////////////////////////////////////////////////////////////////////////////


$caracteristiquesFile =fopen($zipFolder."CARACTERISTIQUES.TXT", 'r');
while (($valueExplode = fgetcsv($caracteristiquesFile)) !== FALSE) {
    $INFORMATIONS_ANGLAISES= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[5]), 'UTF-8', 'ISO-8859-1'));
    $MONTANT= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[6]), 'UTF-8', 'ISO-8859-1'));

    $csSql = $conn->query("SELECT * FROM CARACTERISTIQUES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and TCAR_CODE =
    '".$valueExplode[1]."' and SCARAC_CODE = '".$valueExplode[2]."'");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO CARACTERISTIQUES
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$INFORMATIONS_ANGLAISES','$MONTANT')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."CARACTERISTIQUES.TXT");
// //////////////////////////////////////////////////////////////////////////////////////


$depensesFile =fopen($zipFolder."DEPENSES.TXT", 'r');
while (($valueExplode = fgetcsv($depensesFile)) !== FALSE) {
    $AU_DEPENSE_INFO_F= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[7]), 'UTF-8', 'ISO-8859-1'));
    $AU_DEPENSE_INFO_A= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[8]), 'UTF-8', 'ISO-8859-1'));

    $csSql = $conn->query("SELECT * FROM DEPENSES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and TDEP_CODE =
    '".$valueExplode[2]."' and PART_DEPENSE = '".$valueExplode[7]."'");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO DEPENSES
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$AU_DEPENSE_INFO_F','$AU_DEPENSE_INFO_A')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."DEPENSES.TXT");

// //////////////////////////////////////////////////////////////////////////////////////


$firmesFile =fopen($zipFolder."FIRMES.TXT", 'r');
while (($valueExplode = fgetcsv($firmesFile)) !== FALSE) {
    $NOM_LEGAL= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[1]), 'UTF-8', 'ISO-8859-1'));

    $csSql = $conn->query("SELECT * FROM FIRMES WHERE CODE = '".$valueExplode[0]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO FIRMES
    VALUES ('$valueExplode[0]', ' $NOM_LEGAL',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."FIRMES.TXT");
// //////////////////////////////////////////////////////////////////////////////////////

    $inscriptionsFile =fopen($zipFolder."INSCRIPTIONS.TXT", 'r');
    $conn->query("DELETE FROM INSCRIPTIONS");
    while (($valueExplode = fgetcsv($inscriptionsFile)) !== FALSE) {
    $obj27= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[27]), 'UTF-8', 'ISO-8859-1'));
    $obj100= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[100]), 'UTF-8', 'ISO-8859-1'));
    $obj101= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[101]), 'UTF-8', 'ISO-8859-1'));
    $obj102= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[102]), 'UTF-8', 'ISO-8859-1'));
    $obj157= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[157]), 'UTF-8', 'ISO-8859-1'));
    $obj158= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[158]), 'UTF-8', 'ISO-8859-1'));

    $csSql = $conn->query("SELECT * FROM INSCRIPTIONS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' ");

    if($csSql->num_rows===0){
        $price=$valueExplode[6]!=""?$valueExplode[6]:0;
        $price2=$valueExplode[9]!=""?$valueExplode[9]:0;
    $insertSql = "INSERT INTO INSCRIPTIONS
    VALUES ('$valueExplode[0]', '$valueExplode[1]', '$valueExplode[2]', '$valueExplode[3]', '$valueExplode[4]',
    '$valueExplode[5]', ' $price', '$valueExplode[7]', '$valueExplode[8]', '$price2',
    '$valueExplode[10]', '$valueExplode[11]', '$valueExplode[12]', '$valueExplode[13]', '$valueExplode[14]',
    '$valueExplode[15]', '$valueExplode[16]', '$valueExplode[17]', '$valueExplode[18]', '$valueExplode[19]',
    '$valueExplode[20]', '$valueExplode[21]', '$valueExplode[22]', '$valueExplode[23]', '$valueExplode[24]',
    '$valueExplode[25]', '$valueExplode[26]', '$obj27', '$valueExplode[28]',
    '$valueExplode[29]', '$valueExplode[30]', '$valueExplode[31]', '$valueExplode[32]', '$valueExplode[33]',
    '$valueExplode[34]', '$valueExplode[35]', '$valueExplode[36]', '$valueExplode[37]', '$valueExplode[38]',
    '$valueExplode[39]', '$valueExplode[40]', '$valueExplode[41]', '$valueExplode[42]', '$valueExplode[43]',
    '$valueExplode[44]', '$valueExplode[45]', '$valueExplode[46]', '$valueExplode[47]', '$valueExplode[48]',
    '$valueExplode[49]', '$valueExplode[50]', '$valueExplode[51]', '$valueExplode[52]', '$valueExplode[53]',
    '$valueExplode[54]', '$valueExplode[55]', '$valueExplode[56]', '$valueExplode[57]', '$valueExplode[58]',
    '$valueExplode[59]', '$valueExplode[60]', '$valueExplode[61]', '$valueExplode[62]', '$valueExplode[63]',
    '$valueExplode[64]', '$valueExplode[65]', '$valueExplode[66]', '$valueExplode[67]', '$valueExplode[68]',
    '$valueExplode[69]', '$valueExplode[70]', '$valueExplode[71]', '$valueExplode[72]', '$valueExplode[73]',
    '$valueExplode[74]', '$valueExplode[75]', '$valueExplode[76]', '$valueExplode[77]', '$valueExplode[78]',
    '$valueExplode[79]', '$valueExplode[80]', '$valueExplode[81]', '$valueExplode[82]', '$valueExplode[83]',
    '$valueExplode[84]', '$valueExplode[85]', '$valueExplode[86]', '$valueExplode[87]', '$valueExplode[88]',
    '$valueExplode[89]', '$valueExplode[90]', '$valueExplode[91]', '$valueExplode[92]', '$valueExplode[93]',
    '$valueExplode[94]', '$valueExplode[95]', '$valueExplode[96]', '$valueExplode[97]', '$valueExplode[98]',
    '$valueExplode[99]', '$obj100', '$obj101','$obj102', '$valueExplode[103]',
    '$valueExplode[104]', '$valueExplode[105]', '$valueExplode[106]','$valueExplode[107]', '$valueExplode[108]', '$valueExplode[109]', '$valueExplode[110]', '$valueExplode[111]',
    '$valueExplode[112]', '$valueExplode[113]', '$valueExplode[114]', '$valueExplode[115]', '$valueExplode[116]',
    '$valueExplode[117]', '$valueExplode[118]', '$valueExplode[119]', '$valueExplode[120]', '$valueExplode[121]',
    '$valueExplode[122]', '$valueExplode[123]', '$valueExplode[124]', '$valueExplode[125]', '$valueExplode[126]',
    '$valueExplode[127]', '$valueExplode[128]', '$valueExplode[129]', '$valueExplode[130]', '$valueExplode[131]',
    '$valueExplode[132]', '$valueExplode[133]', '$valueExplode[134]', '$valueExplode[135]', '$valueExplode[136]',
    '$valueExplode[137]', '$valueExplode[138]', '$valueExplode[139]', '$valueExplode[140]', '$valueExplode[141]',
    '$valueExplode[142]', '$valueExplode[143]', '$valueExplode[144]', '$valueExplode[145]', '$valueExplode[146]',
    '$valueExplode[147]', '$valueExplode[148]', '$valueExplode[149]', '$valueExplode[150]', '$valueExplode[151]',
    '$valueExplode[152]', '$valueExplode[153]', '$valueExplode[154]', '$valueExplode[155]', '$valueExplode[156]', '$obj157', '$obj158')";

   $conn->query($insertSql);
    }else{
    $sql = "UPDATE INSCRIPTIONS SET CODE_STATUT='$valueExplode[115]' WHERE NO_INSCRIPTION='$valueExplode[0]'";
    $conn->query($sql);
    }
    }
    unlink($zipFolder."INSCRIPTIONS.TXT");


// //////////////////////////////////////////////////////////////////////////////////////

 $liensAdditionnelsFile =fopen($zipFolder."LIENS_ADDITIONNELS.TXT", 'r');
 while (($valueExplode = fgetcsv($liensAdditionnelsFile)) !== FALSE) {

    $csSql = $conn->query("SELECT * FROM LIENS_ADDITIONNELS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ =
    '".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO LIENS_ADDITIONNELS
    VALUES ('$valueExplode[0]', '$valueExplode[1]', '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]')";
    $conn->query($insertSql);

    // $wpdb->insert('LIENS_ADDITIONNELS', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'SEQ' =>$valueExplode[1],
    // 'TYPE_LIEN' =>$valueExplode[2],
    // 'LIEN_FRANCAIS' =>$valueExplode[3],
    // 'LIEN_ANGLAIS' =>$valueExplode[4]
    // )
    // );
    }
    }
    unlink($zipFolder."LIENS_ADDITIONNELS.TXT");

// //////////////////////////////////////////////////////////////////////////////////////

$membresFile =fopen($zipFolder."MEMBRES.TXT", 'r');
while (($valueExplode = fgetcsv($membresFile)) !== FALSE) {
    // $obj100= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[100])));

    $csSql = $conn->query("SELECT * FROM MEMBRES WHERE CODE = '".$valueExplode[0]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO MEMBRES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]','$valueExplode[17]','$valueExplode[18]','$valueExplode[19]','$valueExplode[20]','$valueExplode[21]','$valueExplode[22]','$valueExplode[23]')";
    $conn->query($insertSql);

    }
    }
    unlink($zipFolder."MEMBRES.TXT");


// //////////////////////////////////////////////////////////////////////////////////////

$membresMSFile =fopen($zipFolder."MEMBRES_MEDIAS_SOCIAUX.TXT", 'r');
while (($valueExplode = fgetcsv($membresMSFile)) !== FALSE) {
    // $obj100= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[100])));

    $csSql = $conn->query("SELECT * FROM MEMBRES_MEDIAS_SOCIAUX WHERE MEMBRE_CODE = '".$valueExplode[0]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO MEMBRES_MEDIAS_SOCIAUX
    VALUES ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]')";
    $conn->query($insertSql);

    // $wpdb->insert('MEMBRES_MEDIAS_SOCIAUX', array(
    // 'MEMBRE_CODE' =>$valueExplode[0],
    // 'TYPE_MEDIA_SOCIAL' =>$valueExplode[1],
    // 'LIEN_MEDIA_SOCIAL' =>$valueExplode[2]
    // )
    // );
    }
    }
    unlink($zipFolder."MEMBRES_MEDIAS_SOCIAUX.TXT");

// //////////////////////////////////////////////////////////////////////////////////////

$photosFile =fopen($zipFolder."PHOTOS.TXT", 'r');
while (($valueExplode = fgetcsv($photosFile)) !== FALSE) {
    // $obj100= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[100])));
    $csSql = $conn->query("SELECT * FROM PHOTOS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO PHOTOS
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."PHOTOS.TXT");

// //////////////////////////////////////////////////////////////////////////////////////

$piecesUnitesFile =fopen($zipFolder."PIECES_UNITES.TXT", 'r');
while (($valueExplode = fgetcsv($piecesUnitesFile)) !== FALSE) {
    // $obj100= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[100])));

    $csSql = $conn->query("SELECT * FROM PIECES_UNITES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ_UNITE_DET='". $valueExplode[1]."' and SEQ='".$valueExplode[2]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO PIECES_UNITES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."PIECES_UNITES.TXT");

// //////////////////////////////////////////////////////////////////////////////////////

$remarquesFile =fopen($zipFolder."REMARQUES.TXT", 'r');
while (($valueExplode = fgetcsv($remarquesFile)) !== FALSE) {
    $obj4= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[4]), 'UTF-8', 'ISO-8859-1'));
    $obj5= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[5]), 'UTF-8', 'ISO-8859-1'));
    $obj6= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[6]), 'UTF-8', 'ISO-8859-1'));

        $csSql = $conn->query("SELECT * FROM REMARQUES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
        NO_REMARQUE='".$valueExplode[1]."' and ORDRE_AFFICHAGE='".$valueExplode[2]."' ");

    if($csSql->num_rows===0){
        $insertSql = "INSERT INTO REMARQUES
        VALUES
        ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$obj4','".$obj5."','".$obj6."')";
        $conn->query($insertSql);
    }
}
// //////////////////////////////////////////////////////////////////////////////////////

$renovationsFile =fopen($zipFolder."RENOVATIONS.TXT", 'r');
while (($valueExplode = fgetcsv($renovationsFile)) !== FALSE) {
    // $obj6= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[6])));

    $csSql = $conn->query("SELECT * FROM RENOVATIONS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO RENOVATIONS
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."RENOVATIONS.TXT");


// //////////////////////////////////////////////////////////////////////////////////////

$unitesDFile =fopen($zipFolder."UNITES_DETAILLEES.TXT", 'r');
while (($valueExplode = fgetcsv($unitesDFile)) !== FALSE) {
    // $obj6= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[6])));

    $csSql = $conn->query("SELECT * FROM UNITES_DETAILLEES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' and TYPE_UNITE_DET='".$valueExplode[2]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO UNITES_DETAILLEES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]','$valueExplode[17]','$valueExplode[18]','$valueExplode[19]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."UNITES_DETAILLEES.TXT");



// //////////////////////////////////////////////////////////////////////////////////////

$unitesSile =fopen($zipFolder."UNITES_SOMMAIRES.TXT", 'r');
while (($valueExplode = fgetcsv($unitesSile)) !== FALSE) {
    // $obj6= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[6])));

    $csSql = $conn->query("SELECT * FROM UNITES_SOMMAIRES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO UNITES_SOMMAIRES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]')";
    $conn->query($insertSql);

    }
    }
    unlink($zipFolder."UNITES_SOMMAIRES.TXT");


// //////////////////////////////////////////////////////////////////////////////////////

$valeursSile =fopen($zipFolder."VALEURS_FIXES.TXT", 'r');
while (($valueExplode = fgetcsv($valeursSile)) !== FALSE) {
    $obj4= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[4]), 'UTF-8', 'ISO-8859-1'));
    $obj5= $conn->real_escape_string(mb_convert_encoding(quoted_printable_decode($valueExplode[5]), 'UTF-8', 'ISO-8859-1'));

    $csSql = $conn->query("SELECT * FROM VALEURS_FIXES WHERE DOMAINE = '".$valueExplode[0]."' and
    VALEUR='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO VALEURS_FIXES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$obj4','$obj5')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."VALEURS_FIXES.TXT");


// //////////////////////////////////////////////////////////////////////////////////////

$visitesLibresile =fopen($zipFolder."VISITES_LIBRES.TXT", 'r');
while (($valueExplode = fgetcsv($visitesLibresile)) !== FALSE) {
    // $obj4= $conn->real_escape_string(str_replace('Ã©',"é",str_replace('�',"",$valueExplode[4])));

    $csSql = $conn->query("SELECT * FROM VISITES_LIBRES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO VALEURS_FIXES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."VISITES_LIBRES.TXT");

    unlink($zipFolder."INSCRIPTIONS.TXT");
    $conn->query("INSERT INTO action_log (ACTION)VALUES ('new data record added. Zip file name : ".$files1[$i]."' )");

    }
    }
    }
}

    $sql = "SELECT * FROM INSCRIPTIONS";
    $conn->query("DELETE FROM wp_posts where post_type='rental-property'");
    $conn->query("DELETE FROM wp_posts where post_type='multi-residential'");
    $conn->query("DELETE FROM wp_posts where post_type='residential'");
    $getResultInscription = $conn->query($sql);

    while($row = $getResultInscription->fetch_assoc()) {

    $posts = $conn->query("SELECT * FROM wp_posts where post_content='".$row['NO_INSCRIPTION']."'");


    if($posts->num_rows=="0"){
    // // Create post object

    $postType="";
    if($row['PRIX_LOCATION_DEMANDE']>0){
    $postType="rental-property";
    }else if($row['CATEGORIE_PROPRIETE'] =="M"){
    $postType='multi-residential';
    }else{
    $postType='residential';
    }

    $new_post = array(
        'post_author'   => 1,
        'post_date'     => current_time('mysql'),
        'post_date_gmt' => current_time('mysql', 1),
        'post_content'  => $row['NO_INSCRIPTION'],
        'post_title'    => $conn->real_escape_string($row['NOM_RUE_COMPLET']),
        'post_status'   => 'publish',
        'post_type'     => $postType,
        'comment_status'=> 'open',
        'ping_status'   => 'open',
    );

    // Insert the post into the database
    $post_id = wp_insert_post($new_post);

    // Check if the insertion was successful
    // if ($post_id) {
    //     echo "Post inserted successfully. ID: " . $post_id;
    // } else {
    //     echo "Error inserting post.";
    // }

    // $insertSql = "INSERT INTO wp_posts (post_title,post_content,post_status,post_type,post_author,post_name)
    // VALUES ('".$row['NOM_RUE_COMPLET']."','".$row['NO_INSCRIPTION']."','publish','".$postType."','1','".$post_name."')";

    // $conn->query($insertSql);


    }
    }