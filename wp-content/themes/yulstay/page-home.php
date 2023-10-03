<!doctype html>

<?php
error_reporting(0);
$zipFolder    = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/';
$unzipFolder    = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/';
$backupFolder    = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/backup/';
$files1 = scandir($zipFolder);
$pattern = '/[\n]/';
global $wpdb;

$zip = new ZipArchive;
for ($i=0; $i <count($files1) ; $i++) {
  $explode=explode(".zip",$files1[$i]);
  if(count($explode)>1){
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
   $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
   $valueExplode=explode(",",$replaceValue);
    $tablename =  "ADDENDA";
    if(count($wpdb->get_results("SELECT * FROM ADDENDA WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and NO_ADDENDA = '".$valueExplode[1]."' and ORDRE_AFFICHAGE = '".$valueExplode[3]."' ", OBJECT ))===0){
      $wpdb->insert( $tablename, array(
          'NO_INSCRIPTION' =>$valueExplode[0],
          'NO_ADDENDA' =>$valueExplode[1],
          'CODE_LANGUE' =>$valueExplode[2],
          'ORDRE_AFFICHAGE' =>$valueExplode[3],
          'CHAMP_INUTILISE_1' =>$valueExplode[4],
          'CHAMP_INUTILISE_2' =>$valueExplode[5],
          'TEXTE' =>$valueExplode[6]
          )
        );
    }

}
unlink($zipFolder."ADDENDA.TXT");

$bureauxFile = file_get_contents($zipFolder."BUREAUX.TXT");
$bureauxResult = preg_split($pattern, $bureauxFile);
foreach($bureauxResult as $value)
{
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
    if(count($wpdb->get_results("SELECT * FROM BUREAUX WHERE CODE = '".$valueExplode[0]."'", OBJECT ))==0){
      $wpdb->insert('BUREAUX', array(
          'CODE' =>$valueExplode[0],
          'FIRME_CODE' =>$valueExplode[1],
          'NOM_LEGAL' =>$valueExplode[2],
          'NO_CIVIQUE' =>$valueExplode[3],
          'NOM_RUE' =>$valueExplode[4],
          'BUREAU' =>$valueExplode[5],
          'MUNICIPALITE' =>$valueExplode[6],
          'PROVINCE' =>$valueExplode[7],
          'CODE_POSTAL' =>$valueExplode[8],
          'TELEPHONE_1' =>$valueExplode[9],
          'TELEPHONE_2' =>$valueExplode[10],
          'POSTE_2' =>$valueExplode[11],
          'TELEPHONE_FAX' =>$valueExplode[12],
          'COURRIEL' =>$valueExplode[14],
          'SITE_WEB' =>$valueExplode[15],
          'DIRECTEUR_CODE' =>$valueExplode[16],
          'URL_LOGO_BUREAU' =>$valueExplode[17]
          )
        );
    }
}
unlink($zipFolder."BUREAUX.TXT");

$caracteristiquesFile = file_get_contents($zipFolder."CARACTERISTIQUES.TXT");
$caracteristiquesResult = preg_split($pattern, $caracteristiquesFile);
foreach($caracteristiquesResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
    $valueExplode=explode(",",$replaceValue);
    if(count($wpdb->get_results("SELECT * FROM CARACTERISTIQUES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and TCAR_CODE = '".$valueExplode[1]."' and SCARAC_CODE = '".$valueExplode[2]."'", OBJECT ))==0){
      $wpdb->insert('CARACTERISTIQUES', array(
          'NO_INSCRIPTION' =>$valueExplode[0],
          'TCAR_CODE' =>$valueExplode[1],
          'SCARAC_CODE' =>$valueExplode[2],
          'NOMBRE' =>$valueExplode[3],
          'INFORMATIONS_FRANCAISES' =>$valueExplode[4],
          'INFORMATIONS_ANGLAISES' =>$valueExplode[5],
          'MONTANT' =>$valueExplode[6]
          )
        );
    }
}
unlink($zipFolder."CARACTERISTIQUES.TXT");

// =================================
$depensesFile = file_get_contents($zipFolder."DEPENSES.TXT");
$depensesResult = preg_split($pattern, $depensesFile);
foreach($depensesResult as $value)
{
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
    $valueExplode=explode(",",$replaceValue);
    if(count($wpdb->get_results("SELECT * FROM DEPENSES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and TDEP_CODE = '".$valueExplode[2]."' and PART_DEPENSE = '".$valueExplode[7]."'", OBJECT ))==0){
      $wpdb->insert('DEPENSES', array(
          'NO_INSCRIPTION' =>$valueExplode[0],
          'TDEP_CODE' =>$valueExplode[1],
          'MONTANT_DEPENSE' =>$valueExplode[2],
          'ANNEE' =>$valueExplode[3],
          'ANNEE_EXPIRATION' =>$valueExplode[4],
          'FREQUENCE' =>$valueExplode[5],
          'PART_DEPENSE' =>$valueExplode[6],
          'AU_DEPENSE_INFO_F' =>$valueExplode[7],
          'AU_DEPENSE_INFO_A' =>$valueExplode[8]
          )
        );
    }
}
unlink($zipFolder."DEPENSES.TXT");

// =================================
$firmesFile = file_get_contents($zipFolder."FIRMES.TXT");
$firmesResult = preg_split($pattern, $firmesFile);
foreach($firmesResult as $value)
{
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
    $valueExplode=explode(",",$replaceValue);
    if(count($wpdb->get_results("SELECT * FROM FIRMES WHERE CODE = '".$valueExplode[0]."' ", OBJECT ))==0){
      $wpdb->insert('FIRMES', array(
          'CODE' =>$valueExplode[0],
          'NOM_LEGAL' =>$valueExplode[1],
          'NO_CERTIFICAT' =>$valueExplode[2],
          'TYPE_CERTIFICAT' =>$valueExplode[3],
          'BANNIERE_CODE' =>$valueExplode[4],
          'FIRME_PRINCIPALE' =>$valueExplode[5],
          'COURTIER_CODE' =>$valueExplode[6]
          )
        );
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

    $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
    $valueExplode=explode(",",$replaceValue);
    if(count($wpdb->get_results("SELECT * FROM INSCRIPTIONS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' ", OBJECT ))==0){
      $wpdb->insert('INSCRIPTIONS', array(
          'NO_INSCRIPTION' =>$valueExplode[0],
          'CHAMP_INUTILISE_1' =>$valueExplode[1],
          'COURTIER_INSCRIPTEUR_1' =>$valueExplode[2],
          'BUREAU_INSCRIPTEUR_1' =>$valueExplode[3],
          'COURTIER_INSCRIPTEUR_2' =>$valueExplode[4],
          'BUREAU_INSCRIPTEUR_2' =>$valueExplode[5],
          'PRIX_DEMANDE' =>$valueExplode[6],
          'UM_PRIX_DEMANDE' =>$valueExplode[7],
          'DEVISE_PRIX_DEMANDE' =>$valueExplode[8],
          'PRIX_LOCATION_DEMANDE' =>$valueExplode[9],
          'UM_PRIX_LOCATION_DEMANDE' =>$valueExplode[10],
          'DEVISE_PRIX_LOCATION_DEMANDE' =>$valueExplode[11],
          'CHAMP_INUTILISE_36' =>$valueExplode[12],
          'CODE_DECLARATION_VENDEUR' =>$valueExplode[13],
          'IND_REPRISE_FINANCE' =>$valueExplode[14],
          'IND_INTERNET' =>$valueExplode[15],
          'IND_ECHANGE_POSSIBLE' =>$valueExplode[16],
          'CHAMP_INUTILISE_37' =>$valueExplode[17],
          'CHAMP_INUTILISE_3' =>$valueExplode[18],
          'CHAMP_INUTILISE_4' =>$valueExplode[19],
          'DATE_MISE_EN_VIGUEUR' =>$valueExplode[20],
          'CHAMP_INUTILISE_38' =>$valueExplode[21],
          'MUN_CODE' =>$valueExplode[22],
          'QUARTR_CODE' =>$valueExplode[23],
          'PRES_DE' =>$valueExplode[24],
          'NO_CIVIQUE_DEBUT' =>$valueExplode[25],
          'NO_CIVIQUE_FIN' =>$valueExplode[26],
          'NOM_RUE_COMPLET' =>str_replace('~',", ",$valueExplode[27]),
          'APPARTEMENT' =>$valueExplode[28],
          'CODE_POSTAL' =>$valueExplode[29],
          'CHAMP_INUTILISE_39' =>$valueExplode[30],
          'CHAMP_INUTILISE_40' =>$valueExplode[31],
          'CHAMP_INUTILISE_41' =>$valueExplode[32],
          'CHAMP_INUTILISE_5' =>$valueExplode[33],
          'CHAMP_INUTILISE_6' =>$valueExplode[34],
          'CHAMP_INUTILISE_7' =>$valueExplode[35],
          'CHAMP_INUTILISE_8' =>$valueExplode[36],
          'CHAMP_INUTILISE_9' =>$valueExplode[37],
          'CHAMP_INUTILISE_10' =>$valueExplode[38],
          'CHAMP_INUTILISE_11' =>$valueExplode[39],
          'CHAMP_INUTILISE_12' =>$valueExplode[40],
          'CHAMP_INUTILISE_13' =>$valueExplode[41],
          'CHAMP_INUTILISE_14' =>$valueExplode[42],
          'DATE_OCCUPATION' =>$valueExplode[43],
          'DELAI_OCCUPATION_FRANCAIS' =>$valueExplode[44],
          'DELAI_OCCUPATION_ANGLAIS' =>$valueExplode[45],
          'CHAMP_INUTILISE_42' =>$valueExplode[46],
          'CHAMP_INUTILISE_43' =>$valueExplode[47],
          'CHAMP_INUTILISE_44' =>$valueExplode[48],
          'DATE_FIN_BAIL' =>$valueExplode[49],
          'CHAMP_INUTILISE_52' =>$valueExplode[50],
          'CHAMP_INUTILISE_15' =>$valueExplode[51],
          'CHAMP_INUTILISE_45' =>$valueExplode[52],
          'CATEGORIE_PROPRIETE' =>$valueExplode[53],
          'GENRE_PROPRIETE' =>$valueExplode[54],
          'TYPE_BATIMENT' =>$valueExplode[55],
          'TYPE_COPROPRIETE' =>$valueExplode[56],
          'NIVEAU' =>$valueExplode[57],
          'NB_ETAGES' =>$valueExplode[58],
          'ANNEE_CONTRUCTION' =>$valueExplode[59],
          'CODE_ANNEE_CONSTRUCTION' =>$valueExplode[60],
          'CHAMP_INUTILISE_16' =>$valueExplode[61],
          'FACADE_BATIMENT' =>$valueExplode[62],
          'PROFONDEUR_BATIMENT' =>$valueExplode[63],
          'IND_IRREGULIER_BATIMENT' =>$valueExplode[64],
          'UM_DIMENSION_BATIMENT' =>$valueExplode[65],
          'SUPERFICIE_BATIMENT' =>$valueExplode[66],
          'UM_SUPERFICIE_BATIMENT' =>$valueExplode[67],
          'SUPERFICIE_HABITABLE' =>$valueExplode[68],
          'UM_SUPERFICIE_HABITABLE' =>$valueExplode[69],
          'CHAMP_INUTILISE_17' =>$valueExplode[70],
          'FACADE_TERRAIN' =>$valueExplode[71],
          'PROFONDEUR_TERRAIN' =>$valueExplode[72],
          'IND_IRREGULIER_TERRAIN' =>$valueExplode[73],
          'UM_DIMENSION_TERRAIN' =>$valueExplode[74],
          'SUPERFICIE_TERRAIN' =>$valueExplode[75],
          'UM_SUPERFICIE_TERRAIN' =>$valueExplode[76],
          'CHAMP_INUTILISE_46' =>$valueExplode[77],
          'ANNEE_EVALUATION' =>$valueExplode[78],
          'EVALUATION_MUNICIPALE_TERRAIN' =>$valueExplode[79],
          'EVALUATION_MUNICIPALE_BATIMENT' =>$valueExplode[80],
          'NB_PIECES' =>$valueExplode[81],
          'NB_CHAMBRES' =>$valueExplode[82],
          'NB_CHAMBRES_SOUS_SOL' =>$valueExplode[83],
          'NB_CHAMBRES_HORS_SOL' =>$valueExplode[84],
          'NB_SALLES_BAINS' =>$valueExplode[85],
          'NB_SALLES_EAU' =>$valueExplode[86],
          'CHAMP_INUTILISE_47' =>$valueExplode[87],
          'CHAMP_INUTILISE_48' =>$valueExplode[88],
          'CHAMP_INUTILISE_18' =>$valueExplode[89],
          'CHAMP_INUTILISE_19' =>$valueExplode[90],
          'CHAMP_INUTILISE_20' =>$valueExplode[91],
          'CHAMP_INUTILISE_21' =>$valueExplode[92],
          'DEPENSES_TOT_EXPLOITATION' =>$valueExplode[93],
          'CHAMP_INUTILISE_22' =>$valueExplode[94],
          'CHAMP_INUTILISE_23' =>$valueExplode[95],
          'NOM_PLAN_EAU' =>$valueExplode[96],
          'CHAMP_INUTILISE_24' =>$valueExplode[97],
          'CHAMP_INUTILISE_25' =>$valueExplode[98],
          'NB_CHAUFFE_EAU_LOUE' =>$valueExplode[99],
          'INCLUS_FRANCAIS' =>str_replace('~',", ",$valueExplode[100]),
          'INCLUS_ANGLAIS' =>str_replace('~',", ",$valueExplode[101]),
          'EXCLUS_FRANCAIS' =>$valueExplode[102],
          'EXCLUS_ANGLAIS' =>$valueExplode[103],
          'NB_UNITES_TOTAL' =>$valueExplode[104],
          'CHAMP_INUTILISE_26' =>$valueExplode[105],
          'CHAMP_INUTILISE_27' =>$valueExplode[106],
          'CHAMP_INUTILISE_28' =>$valueExplode[107],
          'CHAMP_INUTILISE_29' =>$valueExplode[108],
          'CHAMP_INUTILISE_30' =>$valueExplode[109],
          'CHAMP_INUTILISE_31' =>$valueExplode[110],
          "CHAMP_INUTILISE_32"=>$valueExplode[111],
          "CHAMP_INUTILISE_49"=>$valueExplode[112],
          "DATE_MODIF"=>$valueExplode[113],
          "FREQUENCE_PRIX_LOCATION"=>$valueExplode[114],
          "CODE_STATUT"=>$valueExplode[115],
          "POURC_QUOTE_PART"=>$valueExplode[116],
          "UTILISATION_COMMERCIALE"=>$valueExplode[117],
          "CHAMP_INUTILISE_2"=>$valueExplode[118],
          "NOM_DU_PARC"=>$valueExplode[119],
          "CHAMP_INUTILISE_50"=>$valueExplode[120],
          "CHAMP_INUTILISE_51"=>$valueExplode[121],
          "RAISON_SOCIALE"=>$valueExplode[122],
          "EN_OPER_DEPUIS"=>$valueExplode[123],
          "IND_FRANCHISE"=>$valueExplode[124],
          "CHAMP_INUTILISE_33"=>$valueExplode[125],
          "CHAMP_INUTILISE_34"=>$valueExplode[126],
          "CHAMP_INUTILISE_35"=>$valueExplode[127],
          "IND_OPT_RENOUV_BAIL"=>$valueExplode[128],
          "ANNEE_MOIS_ECHEANCE_BAIL"=>$valueExplode[129],
          "URL_VISITE_VIRTUELLE_FRANCAIS"=>$valueExplode[130],
          "URL_VISITE_VIRTUELLE_ANGLAIS"=>$valueExplode[131],
          "URL_DESC_DETAILLEE"=>$valueExplode[132],
          "IND_TAXES_PRIX_DEMANDE"=>$valueExplode[133],
          "IND_TAXES_PRIX_LOCATION_DEMANDE"=>$valueExplode[134],
          "COURTIER_INSCRIPTEUR_3"=>$valueExplode[135],
          "BUREAU_INSCRIPTEUR_3"=>$valueExplode[136],
          "COURTIER_INSCRIPTEUR_4"=>$valueExplode[137],
          "BUREAU_INSCRIPTEUR_4"=>$valueExplode[138],
          "COURTIER1_TYPE_DIVUL_INTERET"=>$valueExplode[139],
          "COURTIER2_TYPE_DIVUL_INTERET"=>$valueExplode[140],
          "COURTIER3_TYPE_DIVUL_INTERET"=>$valueExplode[141],
          "COURTIER4_TYPE_DIVUL_INTERET"=>$valueExplode[142],
          "IND_VENTE_SANS_GARANTIE_LEGALE"=>$valueExplode[143],
          "LATITUDE"=>$valueExplode[144],
          "LONGITUDE"=>$valueExplode[145],
          "TYPE_SUPERFICIE_HABITABLE"=>$valueExplode[146],
          "REV_POT_BRUT_RES"=>$valueExplode[147],
          "REV_POT_BRUT_COMM"=>$valueExplode[148],
          "REV_POT_BRUT_STAT"=>$valueExplode[149],
          "REV_POT_BRUT_AU"=>$valueExplode[150],
          "DATE_REV_BRUT_POT"=>$valueExplode[151],
          "PARTICULARITE_CONSTRUCTION"=>$valueExplode[152],
          "AU_GENRE_PROPRIETE_INFO_F"=>$valueExplode[153],
          "AU_GENRE_PROPRIETE_INFO_A"=>$valueExplode[154],
          "PRIX_DEMANDE_TAXE_INCL"=>$valueExplode[155],
          "IND_VISITES_INTERACTIVES"=>$valueExplode[156]
          )
        );
    }else{
        $wpdb->update('INSCRIPTIONS', array('CODE_STATUT'=>$valueExplode[115]), array("NO_INSCRIPTION" => $valueExplode[0]));
    }
}
unlink($zipFolder."INSCRIPTIONS.TXT");


// =================================
$liensAdditionnelsFile = file_get_contents($zipFolder."LIENS_ADDITIONNELS.TXT");
$liensAdditionnelsResult = preg_split($pattern, $liensAdditionnelsFile);
foreach($liensAdditionnelsResult as $value)
{
    $value1= str_replace('�',"",$value);
    $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
    $valueExplode=explode(",",$replaceValue);
    if(count($wpdb->get_results("SELECT * FROM LIENS_ADDITIONNELS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ = '".$valueExplode[1]."'  ", OBJECT ))==0){
      $wpdb->insert('LIENS_ADDITIONNELS', array(
          'NO_INSCRIPTION' =>$valueExplode[0],
          'SEQ' =>$valueExplode[1],
          'TYPE_LIEN' =>$valueExplode[2],
          'LIEN_FRANCAIS' =>$valueExplode[3],
          'LIEN_ANGLAIS' =>$valueExplode[4]
          )
        );
    }
}
unlink($zipFolder."LIENS_ADDITIONNELS.TXT");

// =================================
$membresFile = file_get_contents($zipFolder."MEMBRES.TXT");
$membresResult = preg_split($pattern, $membresFile);
foreach($membresResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM MEMBRES WHERE CODE = '".$valueExplode[0]."' ", OBJECT ))==0){
    $wpdb->insert('MEMBRES', array(
          'CODE' =>$valueExplode[0],
          'BUR_CODE' =>$valueExplode[1],
          'NO_CERTIFICAT' =>$valueExplode[2],
          'TYPE_CERTIFICAT' =>$valueExplode[3],
          'NOM' =>$valueExplode[4],
          'PRENOM' =>$valueExplode[5],
          'TITRE_PROFESSIONNEL' =>$valueExplode[6],
          'CHAMP_INUTILISE_1' =>$valueExplode[7],
          'TELEPHONE_1' =>$valueExplode[8],
          'TELEPHONE_2' =>$valueExplode[9],
          'TELEPHONE_FAX' =>$valueExplode[10],
          'COURRIEL' =>$valueExplode[11],
          'SITE_WEB' =>$valueExplode[12],
          'CHAMP_INUTILISE_2' =>$valueExplode[13],
          'CODE_LANGUE' =>$valueExplode[14],
          'PHOTO_URL' =>$valueExplode[15],
          'DATE_MODIFICATION' =>$valueExplode[16],
          'NOM_SOCIETE' =>$valueExplode[17],
          'TYPE_SOCIETE_DESC_F' =>$valueExplode[18],
          'TYPE_SOCIETE_DESC_A' =>$valueExplode[19],
          'LIEN_VIDEO_F' =>$valueExplode[20],
          'LIEN_VIDEO_A' =>$valueExplode[21],
          'PRESENTATION_F' =>$valueExplode[22],
          'PRESENTATION_A' =>$valueExplode[23]
          )
        );
    }
}
unlink($zipFolder."MEMBRES.TXT");


// =================================
$membresMSFile = file_get_contents($zipFolder."MEMBRES_MEDIAS_SOCIAUX.TXT");
$membresMSResult = preg_split($pattern, $membresMSFile);
foreach($membresMSResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM MEMBRES_MEDIAS_SOCIAUX WHERE MEMBRE_CODE = '".$valueExplode[0]."' ", OBJECT ))==0){
    $wpdb->insert('MEMBRES_MEDIAS_SOCIAUX', array(
          'MEMBRE_CODE' =>$valueExplode[0],
          'TYPE_MEDIA_SOCIAL' =>$valueExplode[1],
          'LIEN_MEDIA_SOCIAL' =>$valueExplode[2]
          )
        );
    }
}
unlink($zipFolder."MEMBRES_MEDIAS_SOCIAUX.TXT");

// =================================
$photosFile = file_get_contents($zipFolder."PHOTOS.TXT");
$photosResult = preg_split($pattern, $photosFile);
foreach($photosResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM PHOTOS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ='".$valueExplode[1]."' ", OBJECT ))==0){
    $wpdb->insert('PHOTOS', array(
            'NO_INSCRIPTION' =>$valueExplode[0],
            'SEQ' =>$valueExplode[1],
            'NOM_FICHIER_PHOTO' =>$valueExplode[2],
            'CODE_DESCRIPTION_PHOTO' =>$valueExplode[3],
            'DESCRIPTION_FRANCAISE' =>$valueExplode[4],
            'DESCRIPTION_ANGLAISE' =>$valueExplode[5],
            'PhotoURL' =>$valueExplode[6],
            'NO_VERSION' =>$valueExplode[7],
            'DATE_MODIFICATION' =>$valueExplode[8]
          )
        );
    }
}
unlink($zipFolder."PHOTOS.TXT");

// =================================
$piecesUnitesFile = file_get_contents($zipFolder."PIECES_UNITES.TXT");
$piecesUnitesResult = preg_split($pattern, $piecesUnitesFile);
foreach($piecesUnitesResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM PIECES_UNITES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ_UNITE_DET='". $valueExplode[1]."' and SEQ='".$valueExplode[2]."' ", OBJECT ))==0){
    $wpdb->insert('PIECES_UNITES', array(
            'NO_INSCRIPTION' =>$valueExplode[0],
            'SEQ_UNITE_DET' =>$valueExplode[1],
            'SEQ' =>$valueExplode[2],
            'PIECE_CODE' =>$valueExplode[3],
            'AU_PIECE_INFO_F' =>$valueExplode[4],
            'AU_PIECE_INFO_A' =>$valueExplode[5],
            'NIVEAU' =>$valueExplode[6],
            'AU_NIVEAU_INFO_F' =>$valueExplode[7],
            'AU_NIVEAU_INFO_A' =>$valueExplode[8],
            'DIMENSIONS' =>$valueExplode[9],
            'IND_IRREGULIER' =>$valueExplode[10],
            'COUVRE_PLANCHER_CODE' =>$valueExplode[11],
            'AU_COUVRE_PLANCHER_F' =>$valueExplode[12],
            'AU_COUVRE_PLANCHER_A' =>$valueExplode[13],
            'IND_FOYER_POELE' =>$valueExplode[14],
            'INFO_SUPP_F' =>$valueExplode[15],
            'INFO_SUPP_A' =>$valueExplode[16]
          )
        );
    }
}
unlink($zipFolder."PIECES_UNITES.TXT");

// =================================
$remarquesFile = file_get_contents($zipFolder."REMARQUES.TXT");
$remarquesResult = preg_split($pattern, $remarquesFile);
foreach($remarquesResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM REMARQUES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and NO_REMARQUE='".$valueExplode[1]."' and ORDRE_AFFICHAGE='".$valueExplode[2]."' ", OBJECT ))==0){
    $wpdb->insert('REMARQUES', array(
            'NO_INSCRIPTION' =>$valueExplode[0],
            'NO_REMARQUE' =>$valueExplode[1],
            'CODE_LANGUE' =>$valueExplode[2],
            'ORDRE_AFFICHAGE' =>$valueExplode[3],
            'CHAMP_INUTILISE_1' =>$valueExplode[4],
            'CHAMP_INUTILISE_2' =>$valueExplode[5],
            'TEXTE' =>$valueExplode[6]
          )
        );
    }
}
unlink($zipFolder."REMARQUES.TXT");

// =================================
$renovationsFile = file_get_contents($zipFolder."RENOVATIONS.TXT");
$renovationsResult = preg_split($pattern, $renovationsFile);
foreach($renovationsResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM RENOVATIONS WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ='".$valueExplode[1]."' ", OBJECT ))==0){
    $wpdb->insert('RENOVATIONS', array(
            'NO_INSCRIPTION' =>$valueExplode[0],
            'SEQ' =>$valueExplode[1],
            'RENOVATION_TYPE' =>$valueExplode[2],
            'ANNEE' =>$valueExplode[3],
            'CHAMP_INUTILISE_1' =>$valueExplode[4],
            'INFORMATIONS_FRANCAISES' =>$valueExplode[5],
            'INFORMATIONS_ANGLAISES' =>$valueExplode[6],
            'MONTANT' =>$valueExplode[7]
          )
        );
    }
}
unlink($zipFolder."RENOVATIONS.TXT");

// =================================
$unitesDFile = file_get_contents($zipFolder."UNITES_DETAILLEES.TXT");
$unitesDResult = preg_split($pattern, $unitesDFile);
foreach($unitesDResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM UNITES_DETAILLEES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ='".$valueExplode[1]."' and TYPE_UNITE_DET='".$valueExplode[2]."' ", OBJECT ))==0){
    $wpdb->insert('UNITES_DETAILLEES', array(
      'NO_INSCRIPTION' =>$valueExplode[0],
            'SEQ' =>$valueExplode[1],
            'TYPE_UNITE_DET' =>$valueExplode[2],
            'NB_PIECES' =>$valueExplode[3],
            'NB_CHAMBRES' =>$valueExplode[4],
            'INCLUS_CHAUFFAGE' =>$valueExplode[5],
            'INCLUS_ELECTRICITE' =>$valueExplode[6],
            'INCLUS_EAU_CHAUDE' =>$valueExplode[7],
            'INCLUS_TAXE_EAU' =>$valueExplode[8],
            'INCLUS_PELOUSE' =>$valueExplode[9],
            'INCLUS_DENEIGEMENT' =>$valueExplode[10],
            'INCLUS_MEUBLE' =>$valueExplode[11],
            'INCLUS_SEMI_MEUBLE' =>$valueExplode[12],
            'NB_STAT_INTERIEURS' =>$valueExplode[13],
            'NB_STAT_EXTERIEURS' =>$valueExplode[14],
            'AU_INCLUS_INFO_F' =>$valueExplode[15],
            'AU_INCLUS_INFO_A' =>$valueExplode[16],
            'IND_VACANT' =>$valueExplode[17],
            'SUPERFICIE_TOTALE' =>$valueExplode[18],
            'UM_SUPERFICIE_TOTALE' =>$valueExplode[19]
          )
        );
    }
}
unlink($zipFolder."UNITES_DETAILLEES.TXT");


// =================================
$unitesSile = file_get_contents($zipFolder."UNITES_SOMMAIRES.TXT");
$unitesSResult = preg_split($pattern, $unitesSile);
foreach($unitesSResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM UNITES_SOMMAIRES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ='".$valueExplode[1]."' ", OBJECT ))==0){
    $wpdb->insert('UNITES_SOMMAIRES', array(
            'NO_INSCRIPTION' =>$valueExplode[0],
            'SEQ' =>$valueExplode[1],
            'TYPE_UNITE_SOM' =>$valueExplode[2],
            'NB_TOTAL_UNITES' =>$valueExplode[3],
            'NB_UNITES_VACANTES' =>$valueExplode[4],
            'AU_UNITE_REVENU_INFO_F' =>$valueExplode[5],
            'AU_UNITE_REVENU_INFO_A' =>$valueExplode[6]
          )
        );
    }
}
unlink($zipFolder."UNITES_SOMMAIRES.TXT");


// =================================
$unitesSile = file_get_contents($zipFolder."VALEURS_FIXES.TXT");
$unitesSResult = preg_split($pattern, $unitesSile);
foreach($unitesSResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM VALEURS_FIXES WHERE DOMAINE = '".$valueExplode[0]."' and VALEUR='".$valueExplode[1]."' ", OBJECT ))==0){
    $wpdb->insert('VALEURS_FIXES', array(
            'DOMAINE' =>$valueExplode[0],
            'VALEUR' =>$valueExplode[1],
            'DESCRIPTION_ABREGEE_FRANCAISE' =>$valueExplode[2],
            'DESCRIPTION_ABREGEE_ANGLAISE' =>$valueExplode[3],
            'DESCRIPTION_FRANCAISE' =>$valueExplode[4],
            'DESCRIPTION_ANGLAISE' =>$valueExplode[5]
          )
        );
    }
}
unlink($zipFolder."VALEURS_FIXES.TXT");

// =================================
$visitesLibresile = file_get_contents($zipFolder."VISITES_LIBRES.TXT");
$visitesLibresileResult = preg_split($pattern, $visitesLibresile);
foreach($visitesLibresileResult as $value)
{
  $value1= str_replace('�',"",$value);
  $replaceValue= str_replace('"',"",str_replace('MontrÃ©al',"Montréal",$value1));
  $valueExplode=explode(",",$replaceValue);
  if(count($wpdb->get_results("SELECT * FROM VISITES_LIBRES WHERE NO_INSCRIPTION = '".$valueExplode[0]."' and SEQ='".$valueExplode[1]."' ", OBJECT ))==0){
    $wpdb->insert('VISITES_LIBRES', array(
            'NO_INSCRIPTION' =>$valueExplode[0],
            'SEQ' =>$valueExplode[1],
            'DATE_DEBUT' =>$valueExplode[2],
            'DATE_FIN' =>$valueExplode[3],
            'HEURE_DEBUT' =>$valueExplode[4],
            'HEURE_FIN' =>$valueExplode[5],
            'COMMENTAIRES_F' =>$valueExplode[6] ,
            'COMMENTAIRES_A' =>$valueExplode[7] ,
            'CODE_VISITE_CARAVANE' =>$valueExplode[8] ,
            'LIEN_VISITE_VIRT' =>$valueExplode[9]
          )
        );
    }
}
unlink($zipFolder."VISITES_LIBRES.TXT");


$getResultInscription=$wpdb->get_results("SELECT * FROM INSCRIPTIONS", OBJECT );
foreach($getResultInscription as $value)
{
  if(count($wpdb->get_results("SELECT * FROM ".$wpdb->prefix."posts where post_content='$value->NO_INSCRIPTION'", OBJECT ))==0){
    // // Create post object
    $postType="";
    if($value->CATEGORIE_PROPRIETE=="T"){
      $postType="rental-property";
    }
    if($value->CATEGORIE_PROPRIETE=="R"){
      $postType='residential';
    }
    if($value->CATEGORIE_PROPRIETE=="M"){
      $postType='multi-residential';
    }
    $my_post = array(
      'post_title'    => wp_strip_all_tags( $value->NOM_RUE_COMPLET ),
      'post_content'  => $value->NO_INSCRIPTION,
      'post_status'   => 'publish',
      'post_type'   => $postType,
      'post_author'   => 1,
      'post_category' => array(1 )
    );

    // // Insert the post into the database
    $insertId= wp_insert_post( $my_post );
  //   $wpdb->insert('wp_icl_translate', array(
  //     'job_id'    => 1,
  //     'content_id'  =>0,
  //     'field_type'   => "original_id",
  //     'field_wrap_tag'   =>"",
  //     'field_format'   => "",
  //     'field_translate' =>0,
  //     'field_data'   => $insertId,
  //     'field_data_translated'   =>$insertId,
  //     'field_finished'   => 1,
  //   )
  // );
  }
}

unlink($zipFolder."INSCRIPTIONS.TXT");

}
}
}
}

?>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="pxp-header fixed-top pxp-animate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-md-2">
                    <!-- <a href="<?php bloginfo('url'); ?>/" class="pxp-logo text-decoration-none">Yulstay</a> -->
                    <a href="<?php bloginfo('url'); ?>/" class="pxp-logo text-decoration-none">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png"
                            style="height: 2.75rem;" alt="">
                    </a>
                </div>
                <div class="col-2 col-md-8 text-center">
                    <ul class="pxp-nav list-inline">
                        <li class="list-inline-item">
                            <a href="<?php bloginfo('url'); ?>/">Home</a>
                            <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="index.html">Version 1</a></li>
                                    <li><a href="index-2.html">Version 2</a></li>
                                    <li><a href="index-3.html">Version 3</a></li>
                                    <li><a href="index-4.html">Version 4</a></li>
                                    <li><a href="index-5.html">Version 5</a></li>
                                    <li><a href="index-6.html">Version 6</a></li>
                                </ul> -->
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Properties</a>
                            <ul class="pxp-nav-sub rounded-lg">
                                <li><a href="<?php bloginfo('url'); ?>/residential">Residential</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/multi-residential">Multi Residential</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/rental-property">Rental Property</a></li>
                            </ul>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php bloginfo('url'); ?>/team">Team</a>
                            <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="agents.html">All Agents</a></li>
                                    <li><a href="single-agent.html">Single Agent</a></li>
                                </ul> -->
                        </li>
                        <li class="list-inline-item pxp-is-last"><a href="<?php bloginfo('url'); ?>/contact">Contact
                                Us</a></li>
                        <li class="list-inline-item pxp-has-btns">
                            <div class="pxp-user-btns">
                                <a href="#" class="pxp-user-btns-signup pxp-signup-trigger">Sign Up</a>
                                <a href="#" class="pxp-user-btns-login pxp-signin-trigger">Sign In</a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php bloginfo('url'); ?>/join-our-team">Join Our Team</a>
                            <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="../light/index.html">Light</a></li>
                                    <li><a href="../dark/index.html">Dark</a></li>
                                </ul> -->
                        </li>
                        <li class="list-inline-item">
                                <a href="#">Yulstay +</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="blog.html">Pod Casts</a></li>
                                    <li><a href="single-post.html">Shop</a></li>
                                </ul>
                            </li>
                    </ul>
                </div>
                <div class="col-5 col-md-2 text-right">
                    <a href="javascript:void(0);" class="pxp-header-nav-trigger"><span class="fa fa-bars"></span></a>
                    <a href="javascript:void(0);" class="pxp-header-user pxp-signin-trigger"><span
                            class="fa fa-user-o"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="pxp-content">
        <div class="pxp-hero vh-100">
            <div class="pxp-hero-bg pxp-cover pxp-cover-bottom">
                <video style="width: 100%;" autoplay loop muted playsinline>
                    <source src="<?php echo get_template_directory_uri(); ?>/images/home-video-bg.mp4" type="video/mp4">
                    <!-- You can add additional source elements for different video formats (e.g., WebM, Ogg) -->
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="pxp-hero-opacity"></div>
            <div class="pxp-hero-caption">
                <div class="container">
                    <!-- <h1 class="text-white">Find your future home</h1> -->
                    <a href="<?php bloginfo('url'); ?>/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="pxp-hero vh-100">
                <div class="pxp-hero-bg pxp-cover pxp-cover-bottom" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-big.jpg);"></div>
                <div class="pxp-hero-opacity"></div>
                <div class="pxp-hero-caption">
                    <div class="container">
                        <h1 class="text-white">Find your future home</h1>

                        <form class="pxp-hero-search mt-4" action="properties.html">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option selected>Buy</option>
                                            <option value="1">Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control pxp-is-address" placeholder="Enter address...">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

        <?php

            $home_banner_title = get_field('home_banner_title');
            $home_team_section_title = get_field('home_team_section_title');
            $home_team_section_description = get_field('home_team_section_description');
            $home_team_section_link = get_field('home_team_section_link');
            $home_why_choose_us_section_backgroud_image = get_field('home_why_choose_us_section_backgroud_image');
            $home_why_choose_us_section_title = get_field('home_why_choose_us_section_title');
            $home_why_choose_us_section_description = get_field('home_why_choose_us_section_description');
            $home_properties_section_title = get_field('home_properties_section_title');
            $home_properties_section_descripton = get_field('home_properties_section_descripton');
            $home_properties_section_page_link = get_field('home_properties_section_page_link');
            $home_search_section_background_image = get_field('home_search_section_background_image');
            $home_search_section_title = get_field('home_search_section_title');
            $home_search_section_description = get_field('home_search_section_description');
            $home_search_section_link = get_field('home_search_section_link');

            ?>

        <div class="container mt-100">
            <h2 class="pxp-section-h2"><?php echo $home_team_section_title; ?></h2>
            <p class="pxp-text-light"><?php echo $home_team_section_description; ?></p>

            <div class="row mt-4 mt-md-5">
                <?php $the_query = new WP_Query( array('post_type' =>'team','posts_per_page' => '4',  'post__not_in'   => array( $id),) );?>
                <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

                <?php
										$thumbnail_id = get_post_thumbnail_id();
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                    $categories = get_the_category();

										?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="<?php the_permalink(); ?>" class="pxp-agents-1-item">
                        <?php if ( has_post_thumbnail() ) {
                                $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';
                            ?>
                        <div class="pxp-agents-1-item-fig-container rounded-lg">
                            <div class="pxp-agents-1-item-fig pxp-cover"
                                style="background-image: url(<?php echo $attachment_image; ?>); background-position: top center">
                            </div>
                        </div>
                        <?php } ?>
                        <div class="pxp-agents-1-item-details rounded-lg">
                            <div class="pxp-agents-1-item-details-name"><?php the_title(); ?></div>
                            <div class="pxp-agents-1-item-details-email"><span class="fa fa-phone"></span> <?php echo get_field('team_member_telephone'); ?></div>
                            <div class="pxp-agents-1-item-details-spacer"></div>
                            <div class="pxp-agents-1-item-cta text-uppercase">More Details</div>
                        </div>
                        <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span></span></div>
                    </a>
                </div>
                <?php endwhile; endif; ?>
                <!-- <div class="col-sm-12 col-md-6 col-lg-3">
                        <a href="single-agent.html" class="pxp-agents-1-item">
                            <div class="pxp-agents-1-item-fig-container rounded-lg">
                                <div class="pxp-agents-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-agent.jpg); background-position: top center"></div>
                            </div>
                            <div class="pxp-agents-1-item-details rounded-lg">
                                <div class="pxp-agents-1-item-details-name">Alayna Becker</div>
                                <div class="pxp-agents-1-item-details-email"><span class="fa fa-phone"></span> (456) 123-7890</div>
                                <div class="pxp-agents-1-item-details-spacer"></div>
                                <div class="pxp-agents-1-item-cta text-uppercase">More Details</div>
                            </div>
                            <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></span></div>
                        </a>
                    </div> -->
            </div>

            <a href="<?php bloginfo('url'); ?>/team" class="pxp-primary-cta text-uppercase mt-1 mt-md-4 pxp-animate">See
                All Agents</a>
        </div>

        <div class="pxp-services pxp-cover mt-100 pt-100 mb-200"
            style="background-image: url(<?php echo $home_why_choose_us_section_backgroud_image; ?>); background-position: 50% 60%;">
            <h2 class="text-center pxp-section-h2"><?php echo $home_why_choose_us_section_title; ?></h2>
            <p class="pxp-text-light text-center"><?php echo $home_why_choose_us_section_description; ?></p>

            <div class="container">
                <div class="pxp-services-container rounded-lg mt-4 mt-md-5">
                    <a href="properties.html" class="pxp-services-item">
                        <div class="pxp-services-item-fig">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-1.svg" alt="...">
                        </div>
                        <div class="pxp-services-item-text text-center">
                            <div class="pxp-services-item-text-title">Find your future home</div>
                            <div class="pxp-services-item-text-sub">We help you find a new home by offering<br>a smart
                                real estate experience</div>
                        </div>
                        <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
                    </a>
                    <a href="agents.html" class="pxp-services-item">
                        <div class="pxp-services-item-fig">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-2.svg" alt="...">
                        </div>
                        <div class="pxp-services-item-text text-center">
                            <div class="pxp-services-item-text-title">Experienced agents</div>
                            <div class="pxp-services-item-text-sub">Find an agent who knows<br>your market best</div>
                        </div>
                        <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
                    </a>
                    <a href="properties.html" class="pxp-services-item">
                        <div class="pxp-services-item-fig">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-3.svg" alt="...">
                        </div>
                        <div class="pxp-services-item-text text-center">
                            <div class="pxp-services-item-text-title">Buy or rent homes</div>
                            <div class="pxp-services-item-text-sub">Millions of houses and apartments in<br>your
                                favourite cities</div>
                        </div>
                        <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
                    </a>
                    <a href="submit-property.html" class="pxp-services-item">
                        <div class="pxp-services-item-fig">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-4.svg" alt="...">
                        </div>
                        <div class="pxp-services-item-text text-center">
                            <div class="pxp-services-item-text-title">List your own property</div>
                            <div class="pxp-services-item-text-sub">Sign up now and sell or rent<br>your own properties
                            </div>
                        </div>
                        <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid pxp-props-carousel-right mt-100">
            <h2 class="pxp-section-h2"><?php echo $home_properties_section_title; ?></h2>
            <p class="pxp-text-light"><?php echo $home_properties_section_descripton; ?></p>
            <div class="pxp-props-carousel-right-container mt-4 mt-md-5">
                <div class="owl-carousel pxp-props-carousel-right-stage">
                    <div>
                        <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">Chic Apartment in Downtown</div>
                                <div class="pxp-prop-card-1-details-price">$890,000</div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">2 BD <span>|</span> 2 BA
                                    <span>|</span> 920 SF
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                        </a>
                    </div>

                    <div>
                        <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">Colorful Little Apartment</div>
                                <div class="pxp-prop-card-1-details-price">$2,675</div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">1 BD <span>|</span> 1 BA
                                    <span>|</span> 500 SF
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                        </a>
                    </div>

                    <div>
                        <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">Cozy Two Bedroom Apartment</div>
                                <div class="pxp-prop-card-1-details-price">$960,000</div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">2 BD <span>|</span> 2 BA
                                    <span>|</span> 870 SF
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                        </a>
                    </div>

                    <div>
                        <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">Beautiful House in Marina</div>
                                <div class="pxp-prop-card-1-details-price">$5,198,000</div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">5 BD <span>|</span> 4.5 BA
                                    <span>|</span> 3,945 SF
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                        </a>
                    </div>

                    <div>
                        <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">Modern Residence</div>
                                <div class="pxp-prop-card-1-details-price">$7,995</div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">4 BD <span>|</span> 1.5 BA
                                    <span>|</span> 2,240 SF
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                        </a>
                    </div>

                    <div>
                        <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">Luxury Mansion</div>
                                <div class="pxp-prop-card-1-details-price">$5,430,000</div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">4 BD <span>|</span> 5 BA
                                    <span>|</span> 5,200 SF
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                        </a>
                    </div>
                </div>

                <a href="<?php echo $home_properties_section_page_link; ?>"
                    class="pxp-primary-cta text-uppercase mt-4 mt-md-5 pxp-animate">Browse All</a>
            </div>
        </div>

        <div class="pxp-cta-1 pxp-cover mt-100 pt-300"
            style="background-image: url(<?php echo $home_search_section_background_image; ?>); background-position: 50% 60%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="pxp-cta-1-caption pxp-animate-in">
                            <h2 class="pxp-section-h2"><?php echo $home_search_section_title; ?></h2>
                            <p class="pxp-text-light"><?php echo $home_search_section_description; ?></p>
                            <a href="<?php echo $home_search_section_link; ?>"
                                class="pxp-primary-cta text-uppercase mt-3 mt-md-5 pxp-animate">Search Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <h2 class="pxp-section-h2">Explore Our Neighborhoods</h2>
            <p class="pxp-text-light">Browse our comprehensive neighborhood listings</p>

            <div class="row mt-4 mt-md-5">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area">Bluemont</div>
                            <div class="pxp-areas-1-item-details-city">Arlington, VA</div>
                        </div>
                        <div class="pxp-areas-1-item-counter"><span>324 Properties</span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area">Overlake</div>
                            <div class="pxp-areas-1-item-details-city">Redmond, WA</div>
                        </div>
                        <div class="pxp-areas-1-item-counter"><span>158 Properties</span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area">College Terrace</div>
                            <div class="pxp-areas-1-item-details-city">Palo Alto, CA</div>
                        </div>
                        <div class="pxp-areas-1-item-counter"><span>129 Properties</span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area">Inner Sunset</div>
                            <div class="pxp-areas-1-item-details-city">San Francisco, CA</div>
                        </div>
                        <div class="pxp-areas-1-item-counter"><span>129 Properties</span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area">Upper West Side</div>
                            <div class="pxp-areas-1-item-details-city">New York City, NY</div>
                        </div>
                        <div class="pxp-areas-1-item-counter"><span>324 Properties</span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area">Marina District</div>
                            <div class="pxp-areas-1-item-details-city">San Francisco, CA</div>
                        </div>
                        <div class="pxp-areas-1-item-counter"><span>158 Properties</span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                    </a>
                </div>
            </div>

            <a href="properties.html" class="pxp-primary-cta text-uppercase mt-2 mt-md-4 pxp-animate">Explore
                Neighborhoods</a>
        </div>

    </div>


    <?php get_footer(); ?>