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

    $addendaFile = file_get_contents( $zipFolder."ADDENDA.TXT");

    $catch = preg_split($pattern, $addendaFile);

    foreach($catch as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $addendaSql = $conn->query("SELECT * FROM ADDENDA WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and NO_ADDENDA =
    '".$valueExplode[1]."' and ORDRE_AFFICHAGE = '".$valueExplode[3]."' ");

    if($addendaSql->num_rows===0){
    $insertSql = "INSERT INTO ADDENDA (NO_INSCRIPTION, NO_ADDENDA, CODE_LANGUE, ORDRE_AFFICHAGE, CHAMP_INUTILISE_1,
    CHAMP_INUTILISE_2, TEXTE)
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."ADDENDA.TXT");

    $bureauxFile = file_get_contents($zipFolder."BUREAUX.TXT");
    $bureauxResult = preg_split($pattern, $bureauxFile);
    foreach($bureauxResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);
    $bureauxSql = $conn->query("SELECT * FROM BUREAUX WHERE CODE = '".$valueExplode[0]."'");

    if($bureauxSql->num_rows===0){
    $insertSql = "INSERT INTO BUREAUX (CODE, FIRME_CODE, NOM_LEGAL, NO_CIVIQUE, NOM_RUE, BUREAU, MUNICIPALITE, PROVINCE,
    CODE_POSTAL, TELEPHONE_1, POSTE_1, TELEPHONE_2, POSTE_2, TELEPHONE_FAX, COURRIEL, SITE_WEB, DIRECTEUR_CODE,
    URL_LOGO_BUREAU)
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]','$valueExplode[17]')";
    $conn->query($insertSql);
    }
    }
    unlink($zipFolder."BUREAUX.TXT");

    $caracteristiquesFile = file_get_contents($zipFolder."CARACTERISTIQUES.TXT");
    $caracteristiquesResult = preg_split($pattern, $caracteristiquesFile);
    foreach($caracteristiquesResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);
    $csSql = $conn->query("SELECT * FROM CARACTERISTIQUES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and TCAR_CODE =
    '".$valueExplode[1]."' and SCARAC_CODE = '".$valueExplode[2]."'");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO CARACTERISTIQUES
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]')";
    $conn->query($insertSql);
    // $wpdb->insert('CARACTERISTIQUES', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'TCAR_CODE' =>$valueExplode[1],
    // 'SCARAC_CODE' =>$valueExplode[2],
    // 'NOMBRE' =>$valueExplode[3],
    // 'INFORMATIONS_FRANCAISES' =>$valueExplode[4],
    // 'INFORMATIONS_ANGLAISES' =>$valueExplode[5],
    // 'MONTANT' =>$valueExplode[6]
    // )
    // );
    }
    }
    unlink($zipFolder."CARACTERISTIQUES.TXT");

    // =================================
    $depensesFile = file_get_contents($zipFolder."DEPENSES.TXT");
    $depensesResult = preg_split($pattern, $depensesFile);
    foreach($depensesResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM DEPENSES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and TDEP_CODE =
    '".$valueExplode[2]."' and PART_DEPENSE = '".$valueExplode[7]."'");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO DEPENSES
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]')";
    $conn->query($insertSql);
    // $wpdb->insert('DEPENSES', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'TDEP_CODE' =>$valueExplode[1],
    // 'MONTANT_DEPENSE' =>$valueExplode[2],
    // 'ANNEE' =>$valueExplode[3],
    // 'ANNEE_EXPIRATION' =>$valueExplode[4],
    // 'FREQUENCE' =>$valueExplode[5],
    // 'PART_DEPENSE' =>$valueExplode[6],
    // 'AU_DEPENSE_INFO_F' =>$valueExplode[7],
    // 'AU_DEPENSE_INFO_A' =>$valueExplode[8]
    // )
    // );
    }
    }
    unlink($zipFolder."DEPENSES.TXT");

    // =================================
    $firmesFile = file_get_contents($zipFolder."FIRMES.TXT");
    $firmesResult = preg_split($pattern, $firmesFile);
    foreach($firmesResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM FIRMES WHERE CODE = '".$valueExplode[0]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO FIRMES
    VALUES ('$valueExplode[0]', '$valueExplode[1]',
    '$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]')";
    $conn->query($insertSql);
    // $wpdb->insert('FIRMES', array(
    // 'CODE' =>$valueExplode[0],
    // 'NOM_LEGAL' =>$valueExplode[1],
    // 'NO_CERTIFICAT' =>$valueExplode[2],
    // 'TYPE_CERTIFICAT' =>$valueExplode[3],
    // 'BANNIERE_CODE' =>$valueExplode[4],
    // 'FIRME_PRINCIPALE' =>$valueExplode[5],
    // 'COURTIER_CODE' =>$valueExplode[6]
    // )
    // );
    }
    }
    unlink($zipFolder."FIRMES.TXT");

    // =================================
    $inscriptionsFile = file_get_contents($zipFolder."INSCRIPTIONS.TXT");
    $inscriptionsResult = preg_split($pattern, $inscriptionsFile);
    foreach($inscriptionsResult as $value)
    {
    $valueReplace= str_replace('�',"",$value);
    $value1= str_replace(', ',"~",$valueReplace);

    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM INSCRIPTIONS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO INSCRIPTIONS
    VALUES ('$valueExplode[0]', '$valueExplode[1]', '$valueExplode[2]', '$valueExplode[3]', '$valueExplode[4]',
    '$valueExplode[5]', '$valueExplode[6]', '$valueExplode[7]', '$valueExplode[8]', '$valueExplode[9]',
    '$valueExplode[10]', '$valueExplode[11]', '$valueExplode[12]', '$valueExplode[13]', '$valueExplode[14]',
    '$valueExplode[15]', '$valueExplode[16]', '$valueExplode[17]', '$valueExplode[18]', '$valueExplode[19]',
    '$valueExplode[20]', '$valueExplode[21]', '$valueExplode[22]', '$valueExplode[23]', '$valueExplode[24]',
    '$valueExplode[25]', '$valueExplode[26]', '".str_replace('~',", ",$valueExplode[27])."', '$valueExplode[28]',
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
    '$valueExplode[99]', '".str_replace('~',", ",$valueExplode[100])."', '".str_replace('~',", ",$valueExplode[101])."',
    '$valueExplode[102]', '$valueExplode[103]', '$valueExplode[104]', '$valueExplode[105]', '$valueExplode[106]',
    '$valueExplode[107]', '$valueExplode[108]', '$valueExplode[109]', '$valueExplode[110]', '$valueExplode[111]',
    '$valueExplode[112]', '$valueExplode[113]', '$valueExplode[114]', '$valueExplode[115]', '$valueExplode[116]',
    '$valueExplode[117]', '$valueExplode[118]', '$valueExplode[119]', '$valueExplode[120]', '$valueExplode[121]',
    '$valueExplode[122]', '$valueExplode[123]', '$valueExplode[124]', '$valueExplode[125]', '$valueExplode[126]',
    '$valueExplode[127]', '$valueExplode[128]', '$valueExplode[129]', '$valueExplode[130]', '$valueExplode[131]',
    '$valueExplode[132]', '$valueExplode[133]', '$valueExplode[134]', '$valueExplode[135]', '$valueExplode[136]',
    '$valueExplode[137]', '$valueExplode[138]', '$valueExplode[139]', '$valueExplode[140]', '$valueExplode[141]',
    '$valueExplode[142]', '$valueExplode[143]', '$valueExplode[144]', '$valueExplode[145]', '$valueExplode[146]',
    '$valueExplode[147]', '$valueExplode[148]', '$valueExplode[149]', '$valueExplode[150]', '$valueExplode[151]',
    '$valueExplode[152]', '$valueExplode[153]', '$valueExplode[154]', '$valueExplode[155]', '$valueExplode[156]')";
    $conn->query($insertSql);
    // $wpdb->insert('INSCRIPTIONS', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'CHAMP_INUTILISE_1' =>$valueExplode[1],
    // 'COURTIER_INSCRIPTEUR_1' =>$valueExplode[2],
    // 'BUREAU_INSCRIPTEUR_1' =>$valueExplode[3],
    // 'COURTIER_INSCRIPTEUR_2' =>$valueExplode[4],
    // 'BUREAU_INSCRIPTEUR_2' =>$valueExplode[5],
    // 'PRIX_DEMANDE' =>$valueExplode[6],
    // 'UM_PRIX_DEMANDE' =>$valueExplode[7],
    // 'DEVISE_PRIX_DEMANDE' =>$valueExplode[8],
    // 'PRIX_LOCATION_DEMANDE' =>$valueExplode[9],
    // 'UM_PRIX_LOCATION_DEMANDE' =>$valueExplode[10],
    // 'DEVISE_PRIX_LOCATION_DEMANDE' =>$valueExplode[11],
    // 'CHAMP_INUTILISE_36' =>$valueExplode[12],
    // 'CODE_DECLARATION_VENDEUR' =>$valueExplode[13],
    // 'IND_REPRISE_FINANCE' =>$valueExplode[14],
    // 'IND_INTERNET' =>$valueExplode[15],
    // 'IND_ECHANGE_POSSIBLE' =>$valueExplode[16],
    // 'CHAMP_INUTILISE_37' =>$valueExplode[17],
    // 'CHAMP_INUTILISE_3' =>$valueExplode[18],
    // 'CHAMP_INUTILISE_4' =>$valueExplode[19],
    // 'DATE_MISE_EN_VIGUEUR' =>$valueExplode[20],
    // 'CHAMP_INUTILISE_38' =>$valueExplode[21],
    // 'MUN_CODE' =>$valueExplode[22],
    // 'QUARTR_CODE' =>$valueExplode[23],
    // 'PRES_DE' =>$valueExplode[24],
    // 'NO_CIVIQUE_DEBUT' =>$valueExplode[25],
    // 'NO_CIVIQUE_FIN' =>$valueExplode[26],
    // 'NOM_RUE_COMPLET' =>str_replace('~',", ",$valueExplode[27]),
    // 'APPARTEMENT' =>$valueExplode[28],
    // 'CODE_POSTAL' =>$valueExplode[29],
    // 'CHAMP_INUTILISE_39' =>$valueExplode[30],
    // 'CHAMP_INUTILISE_40' =>$valueExplode[31],
    // 'CHAMP_INUTILISE_41' =>$valueExplode[32],
    // 'CHAMP_INUTILISE_5' =>$valueExplode[33],
    // 'CHAMP_INUTILISE_6' =>$valueExplode[34],
    // 'CHAMP_INUTILISE_7' =>$valueExplode[35],
    // 'CHAMP_INUTILISE_8' =>$valueExplode[36],
    // 'CHAMP_INUTILISE_9' =>$valueExplode[37],
    // 'CHAMP_INUTILISE_10' =>$valueExplode[38],
    // 'CHAMP_INUTILISE_11' =>$valueExplode[39],
    // 'CHAMP_INUTILISE_12' =>$valueExplode[40],
    // 'CHAMP_INUTILISE_13' =>$valueExplode[41],
    // 'CHAMP_INUTILISE_14' =>$valueExplode[42],
    // 'DATE_OCCUPATION' =>$valueExplode[43],
    // 'DELAI_OCCUPATION_FRANCAIS' =>$valueExplode[44],
    // 'DELAI_OCCUPATION_ANGLAIS' =>$valueExplode[45],
    // 'CHAMP_INUTILISE_42' =>$valueExplode[46],
    // 'CHAMP_INUTILISE_43' =>$valueExplode[47],
    // 'CHAMP_INUTILISE_44' =>$valueExplode[48],
    // 'DATE_FIN_BAIL' =>$valueExplode[49],
    // 'CHAMP_INUTILISE_52' =>$valueExplode[50],
    // 'CHAMP_INUTILISE_15' =>$valueExplode[51],
    // 'CHAMP_INUTILISE_45' =>$valueExplode[52],
    // 'CATEGORIE_PROPRIETE' =>$valueExplode[53],
    // 'GENRE_PROPRIETE' =>$valueExplode[54],
    // 'TYPE_BATIMENT' =>$valueExplode[55],
    // 'TYPE_COPROPRIETE' =>$valueExplode[56],
    // 'NIVEAU' =>$valueExplode[57],
    // 'NB_ETAGES' =>$valueExplode[58],
    // 'ANNEE_CONTRUCTION' =>$valueExplode[59],
    // 'CODE_ANNEE_CONSTRUCTION' =>$valueExplode[60],
    // 'CHAMP_INUTILISE_16' =>$valueExplode[61],
    // 'FACADE_BATIMENT' =>$valueExplode[62],
    // 'PROFONDEUR_BATIMENT' =>$valueExplode[63],
    // 'IND_IRREGULIER_BATIMENT' =>$valueExplode[64],
    // 'UM_DIMENSION_BATIMENT' =>$valueExplode[65],
    // 'SUPERFICIE_BATIMENT' =>$valueExplode[66],
    // 'UM_SUPERFICIE_BATIMENT' =>$valueExplode[67],
    // 'SUPERFICIE_HABITABLE' =>$valueExplode[68],
    // 'UM_SUPERFICIE_HABITABLE' =>$valueExplode[69],
    // 'CHAMP_INUTILISE_17' =>$valueExplode[70],
    // 'FACADE_TERRAIN' =>$valueExplode[71],
    // 'PROFONDEUR_TERRAIN' =>$valueExplode[72],
    // 'IND_IRREGULIER_TERRAIN' =>$valueExplode[73],
    // 'UM_DIMENSION_TERRAIN' =>$valueExplode[74],
    // 'SUPERFICIE_TERRAIN' =>$valueExplode[75],
    // 'UM_SUPERFICIE_TERRAIN' =>$valueExplode[76],
    // 'CHAMP_INUTILISE_46' =>$valueExplode[77],
    // 'ANNEE_EVALUATION' =>$valueExplode[78],
    // 'EVALUATION_MUNICIPALE_TERRAIN' =>$valueExplode[79],
    // 'EVALUATION_MUNICIPALE_BATIMENT' =>$valueExplode[80],
    // 'NB_PIECES' =>$valueExplode[81],
    // 'NB_CHAMBRES' =>$valueExplode[82],
    // 'NB_CHAMBRES_SOUS_SOL' =>$valueExplode[83],
    // 'NB_CHAMBRES_HORS_SOL' =>$valueExplode[84],
    // 'NB_SALLES_BAINS' =>$valueExplode[85],
    // 'NB_SALLES_EAU' =>$valueExplode[86],
    // 'CHAMP_INUTILISE_47' =>$valueExplode[87],
    // 'CHAMP_INUTILISE_48' =>$valueExplode[88],
    // 'CHAMP_INUTILISE_18' =>$valueExplode[89],
    // 'CHAMP_INUTILISE_19' =>$valueExplode[90],
    // 'CHAMP_INUTILISE_20' =>$valueExplode[91],
    // 'CHAMP_INUTILISE_21' =>$valueExplode[92],
    // 'DEPENSES_TOT_EXPLOITATION' =>$valueExplode[93],
    // 'CHAMP_INUTILISE_22' =>$valueExplode[94],
    // 'CHAMP_INUTILISE_23' =>$valueExplode[95],
    // 'NOM_PLAN_EAU' =>$valueExplode[96],
    // 'CHAMP_INUTILISE_24' =>$valueExplode[97],
    // 'CHAMP_INUTILISE_25' =>$valueExplode[98],
    // 'NB_CHAUFFE_EAU_LOUE' =>$valueExplode[99],
    // 'INCLUS_FRANCAIS' =>str_replace('~',", ",$valueExplode[100]),
    // 'INCLUS_ANGLAIS' =>str_replace('~',", ",$valueExplode[101]),
    // 'EXCLUS_FRANCAIS' =>$valueExplode[102],
    // 'EXCLUS_ANGLAIS' =>$valueExplode[103],
    // 'NB_UNITES_TOTAL' =>$valueExplode[104],
    // 'CHAMP_INUTILISE_26' =>$valueExplode[105],
    // 'CHAMP_INUTILISE_27' =>$valueExplode[106],
    // 'CHAMP_INUTILISE_28' =>$valueExplode[107],
    // 'CHAMP_INUTILISE_29' =>$valueExplode[108],
    // 'CHAMP_INUTILISE_30' =>$valueExplode[109],
    // 'CHAMP_INUTILISE_31' =>$valueExplode[110],
    // "CHAMP_INUTILISE_32"=>$valueExplode[111],
    // "CHAMP_INUTILISE_49"=>$valueExplode[112],
    // "DATE_MODIF"=>$valueExplode[113],
    // "FREQUENCE_PRIX_LOCATION"=>$valueExplode[114],
    // "CODE_STATUT"=>$valueExplode[115],
    // "POURC_QUOTE_PART"=>$valueExplode[116],
    // "UTILISATION_COMMERCIALE"=>$valueExplode[117],
    // "CHAMP_INUTILISE_2"=>$valueExplode[118],
    // "NOM_DU_PARC"=>$valueExplode[119],
    // "CHAMP_INUTILISE_50"=>$valueExplode[120],
    // "CHAMP_INUTILISE_51"=>$valueExplode[121],
    // "RAISON_SOCIALE"=>$valueExplode[122],
    // "EN_OPER_DEPUIS"=>$valueExplode[123],
    // "IND_FRANCHISE"=>$valueExplode[124],
    // "CHAMP_INUTILISE_33"=>$valueExplode[125],
    // "CHAMP_INUTILISE_34"=>$valueExplode[126],
    // "CHAMP_INUTILISE_35"=>$valueExplode[127],
    // "IND_OPT_RENOUV_BAIL"=>$valueExplode[128],
    // "ANNEE_MOIS_ECHEANCE_BAIL"=>$valueExplode[129],
    // "URL_VISITE_VIRTUELLE_FRANCAIS"=>$valueExplode[130],
    // "URL_VISITE_VIRTUELLE_ANGLAIS"=>$valueExplode[131],
    // "URL_DESC_DETAILLEE"=>$valueExplode[132],
    // "IND_TAXES_PRIX_DEMANDE"=>$valueExplode[133],
    // "IND_TAXES_PRIX_LOCATION_DEMANDE"=>$valueExplode[134],
    // "COURTIER_INSCRIPTEUR_3"=>$valueExplode[135],
    // "BUREAU_INSCRIPTEUR_3"=>$valueExplode[136],
    // "COURTIER_INSCRIPTEUR_4"=>$valueExplode[137],
    // "BUREAU_INSCRIPTEUR_4"=>$valueExplode[138],
    // "COURTIER1_TYPE_DIVUL_INTERET"=>$valueExplode[139],
    // "COURTIER2_TYPE_DIVUL_INTERET"=>$valueExplode[140],
    // "COURTIER3_TYPE_DIVUL_INTERET"=>$valueExplode[141],
    // "COURTIER4_TYPE_DIVUL_INTERET"=>$valueExplode[142],
    // "IND_VENTE_SANS_GARANTIE_LEGALE"=>$valueExplode[143],
    // "LATITUDE"=>$valueExplode[144],
    // "LONGITUDE"=>$valueExplode[145],
    // "TYPE_SUPERFICIE_HABITABLE"=>$valueExplode[146],
    // "REV_POT_BRUT_RES"=>$valueExplode[147],
    // "REV_POT_BRUT_COMM"=>$valueExplode[148],
    // "REV_POT_BRUT_STAT"=>$valueExplode[149],
    // "REV_POT_BRUT_AU"=>$valueExplode[150],
    // "DATE_REV_BRUT_POT"=>$valueExplode[151],
    // "PARTICULARITE_CONSTRUCTION"=>$valueExplode[152],
    // "AU_GENRE_PROPRIETE_INFO_F"=>$valueExplode[153],
    // "AU_GENRE_PROPRIETE_INFO_A"=>$valueExplode[154],
    // "PRIX_DEMANDE_TAXE_INCL"=>$valueExplode[155],
    // "IND_VISITES_INTERACTIVES"=>$valueExplode[156]
    // )
    // );
    }else{
    $sql = "UPDATE INSCRIPTIONS SET CODE_STATUT='$valueExplode[115]' WHERE NO_INSCRIPTION='$valueExplode[0]'";
    $conn->query($sql);
    }
    }
    unlink($zipFolder."INSCRIPTIONS.TXT");


    // =================================
    $liensAdditionnelsFile = file_get_contents($zipFolder."LIENS_ADDITIONNELS.TXT");
    $liensAdditionnelsResult = preg_split($pattern, $liensAdditionnelsFile);
    foreach($liensAdditionnelsResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

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

    // =================================
    $membresFile = file_get_contents($zipFolder."MEMBRES.TXT");
    $membresResult = preg_split($pattern, $membresFile);
    foreach($membresResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM MEMBRES WHERE CODE = '".$valueExplode[0]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO MEMBRES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]','$valueExplode[17]','$valueExplode[18]','$valueExplode[19]','$valueExplode[20]','$valueExplode[21]','$valueExplode[22]','$valueExplode[23]')";
    $conn->query($insertSql);

    // $wpdb->insert('MEMBRES', array(
    // 'CODE' =>$valueExplode[0],
    // 'BUR_CODE' =>$valueExplode[1],
    // 'NO_CERTIFICAT' =>$valueExplode[2],
    // 'TYPE_CERTIFICAT' =>$valueExplode[3],
    // 'NOM' =>$valueExplode[4],
    // 'PRENOM' =>$valueExplode[5],
    // 'TITRE_PROFESSIONNEL' =>$valueExplode[6],
    // 'CHAMP_INUTILISE_1' =>$valueExplode[7],
    // 'TELEPHONE_1' =>$valueExplode[8],
    // 'TELEPHONE_2' =>$valueExplode[9],
    // 'TELEPHONE_FAX' =>$valueExplode[10],
    // 'COURRIEL' =>$valueExplode[11],
    // 'SITE_WEB' =>$valueExplode[12],
    // 'CHAMP_INUTILISE_2' =>$valueExplode[13],
    // 'CODE_LANGUE' =>$valueExplode[14],
    // 'PHOTO_URL' =>$valueExplode[15],
    // 'DATE_MODIFICATION' =>$valueExplode[16],
    // 'NOM_SOCIETE' =>$valueExplode[17],
    // 'TYPE_SOCIETE_DESC_F' =>$valueExplode[18],
    // 'TYPE_SOCIETE_DESC_A' =>$valueExplode[19],
    // 'LIEN_VIDEO_F' =>$valueExplode[20],
    // 'LIEN_VIDEO_A' =>$valueExplode[21],
    // 'PRESENTATION_F' =>$valueExplode[22],
    // 'PRESENTATION_A' =>$valueExplode[23]
    // )
    // );
    }
    }
    unlink($zipFolder."MEMBRES.TXT");


    // =================================
    $membresMSFile = file_get_contents($zipFolder."MEMBRES_MEDIAS_SOCIAUX.TXT");
    $membresMSResult = preg_split($pattern, $membresMSFile);
    foreach($membresMSResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

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

    // =================================
    $photosFile = file_get_contents($zipFolder."PHOTOS.TXT");
    $photosResult = preg_split($pattern, $photosFile);
    foreach($photosResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM PHOTOS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO PHOTOS
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]')";
    $conn->query($insertSql);
    // $wpdb->insert('PHOTOS', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'SEQ' =>$valueExplode[1],
    // 'NOM_FICHIER_PHOTO' =>$valueExplode[2],
    // 'CODE_DESCRIPTION_PHOTO' =>$valueExplode[3],
    // 'DESCRIPTION_FRANCAISE' =>$valueExplode[4],
    // 'DESCRIPTION_ANGLAISE' =>$valueExplode[5],
    // 'PhotoURL' =>$valueExplode[6],
    // 'NO_VERSION' =>$valueExplode[7],
    // 'DATE_MODIFICATION' =>$valueExplode[8]
    // )
    // );
    }
    }
    unlink($zipFolder."PHOTOS.TXT");

    // =================================
    $piecesUnitesFile = file_get_contents($zipFolder."PIECES_UNITES.TXT");
    $piecesUnitesResult = preg_split($pattern, $piecesUnitesFile);
    foreach($piecesUnitesResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM PIECES_UNITES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ_UNITE_DET='". $valueExplode[1]."' and SEQ='".$valueExplode[2]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO PIECES_UNITES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]')";
    $conn->query($insertSql);

    // $wpdb->insert('PIECES_UNITES', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'SEQ_UNITE_DET' =>$valueExplode[1],
    // 'SEQ' =>$valueExplode[2],
    // 'PIECE_CODE' =>$valueExplode[3],
    // 'AU_PIECE_INFO_F' =>$valueExplode[4],
    // 'AU_PIECE_INFO_A' =>$valueExplode[5],
    // 'NIVEAU' =>$valueExplode[6],
    // 'AU_NIVEAU_INFO_F' =>$valueExplode[7],
    // 'AU_NIVEAU_INFO_A' =>$valueExplode[8],
    // 'DIMENSIONS' =>$valueExplode[9],
    // 'IND_IRREGULIER' =>$valueExplode[10],
    // 'COUVRE_PLANCHER_CODE' =>$valueExplode[11],
    // 'AU_COUVRE_PLANCHER_F' =>$valueExplode[12],
    // 'AU_COUVRE_PLANCHER_A' =>$valueExplode[13],
    // 'IND_FOYER_POELE' =>$valueExplode[14],
    // 'INFO_SUPP_F' =>$valueExplode[15],
    // 'INFO_SUPP_A' =>$valueExplode[16]
    // )
    // );
    }
    }
    unlink($zipFolder."PIECES_UNITES.TXT");

    // =================================
    $remarquesFile = file_get_contents($zipFolder."REMARQUES.TXT");
    $remarquesResult = preg_split($pattern, $remarquesFile);
    foreach($remarquesResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM REMARQUES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    NO_REMARQUE='".$valueExplode[1]."' and ORDRE_AFFICHAGE='".$valueExplode[2]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO REMARQUES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]')";
    $conn->query($insertSql);

    // $wpdb->insert('REMARQUES', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'NO_REMARQUE' =>$valueExplode[1],
    // 'CODE_LANGUE' =>$valueExplode[2],
    // 'ORDRE_AFFICHAGE' =>$valueExplode[3],
    // 'CHAMP_INUTILISE_1' =>$valueExplode[4],
    // 'CHAMP_INUTILISE_2' =>$valueExplode[5],
    // 'TEXTE' =>$valueExplode[6]
    // )
    // );
    // }
    }
    unlink($zipFolder."REMARQUES.TXT");

    // =================================
    $renovationsFile = file_get_contents($zipFolder."RENOVATIONS.TXT");
    $renovationsResult = preg_split($pattern, $renovationsFile);
    foreach($renovationsResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);
    $csSql = $conn->query("SELECT * FROM RENOVATIONS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO RENOVATIONS
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]')";
    $conn->query($insertSql);

    // $wpdb->insert('RENOVATIONS', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'SEQ' =>$valueExplode[1],
    // 'RENOVATION_TYPE' =>$valueExplode[2],
    // 'ANNEE' =>$valueExplode[3],
    // 'CHAMP_INUTILISE_1' =>$valueExplode[4],
    // 'INFORMATIONS_FRANCAISES' =>$valueExplode[5],
    // 'INFORMATIONS_ANGLAISES' =>$valueExplode[6],
    // 'MONTANT' =>$valueExplode[7]
    // )
    // );
    }
    }
    unlink($zipFolder."RENOVATIONS.TXT");

    // =================================
    $unitesDFile = file_get_contents($zipFolder."UNITES_DETAILLEES.TXT");
    $unitesDResult = preg_split($pattern, $unitesDFile);
    foreach($unitesDResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);
    $csSql = $conn->query("SELECT * FROM UNITES_DETAILLEES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' and TYPE_UNITE_DET='".$valueExplode[2]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO UNITES_DETAILLEES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]','$valueExplode[10]','$valueExplode[11]','$valueExplode[12]','$valueExplode[13]','$valueExplode[14]','$valueExplode[15]','$valueExplode[16]','$valueExplode[17]','$valueExplode[18]','$valueExplode[19]')";
    $conn->query($insertSql);
    // $wpdb->insert('UNITES_DETAILLEES', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'SEQ' =>$valueExplode[1],
    // 'TYPE_UNITE_DET' =>$valueExplode[2],
    // 'NB_PIECES' =>$valueExplode[3],
    // 'NB_CHAMBRES' =>$valueExplode[4],
    // 'INCLUS_CHAUFFAGE' =>$valueExplode[5],
    // 'INCLUS_ELECTRICITE' =>$valueExplode[6],
    // 'INCLUS_EAU_CHAUDE' =>$valueExplode[7],
    // 'INCLUS_TAXE_EAU' =>$valueExplode[8],
    // 'INCLUS_PELOUSE' =>$valueExplode[9],
    // 'INCLUS_DENEIGEMENT' =>$valueExplode[10],
    // 'INCLUS_MEUBLE' =>$valueExplode[11],
    // 'INCLUS_SEMI_MEUBLE' =>$valueExplode[12],
    // 'NB_STAT_INTERIEURS' =>$valueExplode[13],
    // 'NB_STAT_EXTERIEURS' =>$valueExplode[14],
    // 'AU_INCLUS_INFO_F' =>$valueExplode[15],
    // 'AU_INCLUS_INFO_A' =>$valueExplode[16],
    // 'IND_VACANT' =>$valueExplode[17],
    // 'SUPERFICIE_TOTALE' =>$valueExplode[18],
    // 'UM_SUPERFICIE_TOTALE' =>$valueExplode[19]
    // )
    // );
    }
    }
    unlink($zipFolder."UNITES_DETAILLEES.TXT");


    // =================================
    $unitesSile = file_get_contents($zipFolder."UNITES_SOMMAIRES.TXT");
    $unitesSResult = preg_split($pattern, $unitesSile);
    foreach($unitesSResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);
    $csSql = $conn->query("SELECT * FROM UNITES_SOMMAIRES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO UNITES_SOMMAIRES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]')";
    $conn->query($insertSql);

    // $wpdb->insert('UNITES_SOMMAIRES', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'SEQ' =>$valueExplode[1],
    // 'TYPE_UNITE_SOM' =>$valueExplode[2],
    // 'NB_TOTAL_UNITES' =>$valueExplode[3],
    // 'NB_UNITES_VACANTES' =>$valueExplode[4],
    // 'AU_UNITE_REVENU_INFO_F' =>$valueExplode[5],
    // 'AU_UNITE_REVENU_INFO_A' =>$valueExplode[6]
    // )
    // );
    }
    }
    unlink($zipFolder."UNITES_SOMMAIRES.TXT");


    // =================================
    $unitesSile = file_get_contents($zipFolder."VALEURS_FIXES.TXT");
    $unitesSResult = preg_split($pattern, $unitesSile);
    foreach($unitesSResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM VALEURS_FIXES WHERE DOMAINE = '".$valueExplode[0]."' and
    VALEUR='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO VALEURS_FIXES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]')";
    $conn->query($insertSql);

    // $wpdb->insert('VALEURS_FIXES', array(
    // 'DOMAINE' =>$valueExplode[0],
    // 'VALEUR' =>$valueExplode[1],
    // 'DESCRIPTION_ABREGEE_FRANCAISE' =>$valueExplode[2],
    // 'DESCRIPTION_ABREGEE_ANGLAISE' =>$valueExplode[3],
    // 'DESCRIPTION_FRANCAISE' =>$valueExplode[4],
    // 'DESCRIPTION_ANGLAISE' =>$valueExplode[5]
    // )
    // );
    }
    }
    unlink($zipFolder."VALEURS_FIXES.TXT");

    // =================================
    $visitesLibresile = file_get_contents($zipFolder."VISITES_LIBRES.TXT");
    $visitesLibresileResult = preg_split($pattern, $visitesLibresile);
    foreach($visitesLibresileResult as $value)
    {
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('Ã©',"é",$value1));
    $valueExplode=explode(",",$replaceValue);

    $csSql = $conn->query("SELECT * FROM VISITES_LIBRES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and
    SEQ='".$valueExplode[1]."' ");

    if($csSql->num_rows===0){
    $insertSql = "INSERT INTO VALEURS_FIXES
    VALUES
    ('$valueExplode[0]','$valueExplode[1]','$valueExplode[2]','$valueExplode[3]','$valueExplode[4]','$valueExplode[5]','$valueExplode[6]','$valueExplode[7]','$valueExplode[8]','$valueExplode[9]')";
    $conn->query($insertSql);

    // $wpdb->insert('VISITES_LIBRES', array(
    // 'NO_INSCRIPTION' =>$valueExplode[0],
    // 'SEQ' =>$valueExplode[1],
    // 'DATE_DEBUT' =>$valueExplode[2],
    // 'DATE_FIN' =>$valueExplode[3],
    // 'HEURE_DEBUT' =>$valueExplode[4],
    // 'HEURE_FIN' =>$valueExplode[5],
    // 'COMMENTAIRES_F' =>$valueExplode[6] ,
    // 'COMMENTAIRES_A' =>$valueExplode[7] ,
    // 'CODE_VISITE_CARAVANE' =>$valueExplode[8] ,
    // 'LIEN_VISITE_VIRT' =>$valueExplode[9]
    // )
    // );
    }
    }
    unlink($zipFolder."VISITES_LIBRES.TXT");

    unlink($zipFolder."INSCRIPTIONS.TXT");
    $conn->query("INSERT INTO action_log (ACTION)VALUES ('new data record added. Zip file name : ".$files1[$i]."' )");

    }
    }
    }
    }
    }

    $sql = "SELECT * FROM INSCRIPTIONS";
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
    $divider="-";
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $row['NOM_RUE_COMPLET']);
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // trim
    $text = trim($text, $divider);
    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);
    // lowercase
    $post_name = strtolower($text);


    $new_post = array(
        'post_author'   => 1,
        'post_date'     => current_time('mysql'),
        'post_date_gmt' => current_time('mysql', 1),
        'post_content'  => $row['NO_INSCRIPTION'],
        'post_title'    => $row['NOM_RUE_COMPLET'],
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