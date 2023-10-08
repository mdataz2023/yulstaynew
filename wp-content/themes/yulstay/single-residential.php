<?php

get_header();
global $wpdb;
$image_one = get_field('image_one');
$image_two = get_field('image_two');
$image_three = get_field('image_three');
$lang = get_bloginfo("language");
$language="A";
if ($lang == 'en-US'){
   $language="A";
}else{
   $language="F";
}
$inscriptionsData = $wpdb->get_row(" SELECT * FROM INSCRIPTIONS where NO_INSCRIPTION = '".get_the_content()."'", OBJECT );
$GENRES_PROPRIETES = $wpdb->get_row("SELECT * FROM GENRES_PROPRIETES WHERE GENRE_PROPRIETE ='".$inscriptionsData->GENRE_PROPRIETE."'", OBJECT );
$MUNICIPALITES = $wpdb->get_row("SELECT r.* FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );

?>

<div class="pxp-content">
    <div class="pxp-single-property-top pxp-content-wrapper mt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <p class="pxp-sp-top-address pxp-text-light">MLS<?php echo  $inscriptionsData->NO_INSCRIPTION;?></p>
                    <h2 class="pxp-sp-top-title"><?php
                    $property="";
                    $cityName="";
                     if ($lang == 'en-US'){
                        $property=$GENRES_PROPRIETES->DESCRIPTION_ANGLAISE;
                        $cityName=$MUNICIPALITES->DESCRIPTION_ANGLAISE;
                     }else{
                        $property=$GENRES_PROPRIETES->DESCRIPTION_FRANCAISE;
                        $cityName=$MUNICIPALITES->DESCRIPTION_FRANCAISE;
                     }
                     echo $property." for sale, ".$cityName;?></h2>
                    <p class="pxp-sp-top-address pxp-text-light">
                        <?php echo  $inscriptionsData->APPARTEMENT.' '. $inscriptionsData->CODE_POSTAL.', '.$inscriptionsData->NOM_RUE_COMPLET.$cityName;?>
                    </p>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="pxp-sp-top-btns mt-2 mt-md-0" style="display: none;">
                        <a href="#" class="pxp-sp-top-btn"><span class="fa fa-star"></span> Save</a>
                        <div class="dropdown">
                            <a class="pxp-sp-top-btn" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-share-alt"></span> Share
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><span class="fa fa-facebook"></span> Facebook</a>
                                <a class="dropdown-item" href="#"><span class="fa fa-twitter"></span> Twitter</a>
                                <a class="dropdown-item" href="#"><span class="fa fa-pinterest"></span> Pinterest</a>
                                <a class="dropdown-item" href="#"><span class="fa fa-linkedin"></span> LinkedIn</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix d-block d-xl-none"></div>
                    <div class="pxp-sp-top-feat mt-3 mt-md-0">
                        <div><?php
                                $UNITES_DETAILLEES = $wpdb->get_row("SELECT * FROM UNITES_DETAILLEES WHERE NO_INSCRIPTION='". $inscriptionsData->NO_INSCRIPTION."' ", OBJECT );
                                echo $UNITES_DETAILLEES->NB_CHAMBRES;?> <span>BD</span></div>
                        <div><?php echo $inscriptionsData->NB_SALLES_BAINS;?> <span>BA</span></div>
                        <div>
                            <?php echo $inscriptionsData->SUPERFICIE_HABITABLE;?>
                            <span><?php echo $inscriptionsData->UM_SUPERFICIE_HABITABLE;?></span>
                        </div>
                    </div>
                    <div class="pxp-sp-top-price mt-3 mt-md-0">
                        <?php echo $inscriptionsData->PRIX_DEMANDE.' $'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pxp-single-property-gallery-container mt-4 mt-md-5">
        <div class="pxp-single-property-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <?php
                        $results = $wpdb->get_results(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".get_the_content()."'", OBJECT );
                        $photoIndex=0;
                        foreach ($results as $page) {
                    ?>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="<?php
                         if($photoIndex==0){
                            echo "pxp-sp-gallery-main-img";
                         }else{
                         echo "pxp-cover" ;}?>">
                <a href="<?php echo $page->PhotoURL;?>" itemprop="contentUrl" data-size="<?php
                         if($photoIndex==0){
                            echo "1920x1280";
                         }else if($photoIndex==1){
                            echo "1920x1459";
                         }else if($photoIndex==2){
                            echo "1920x2560";
                         }else  {
                            echo "1920x1280";
                         }
                         ?>" class="pxp-cover" style="background-image: url(<?php echo $page->PhotoURL;?>);"></a>
                <figcaption itemprop="caption description"></figcaption>
            </figure>
            <?php
                       $photoIndex++; }
                    ?>

        </div>
        <a href="#" class="pxp-sp-gallery-btn">View Photos</a>
        <div class="clearfix"></div>
    </div>

    <div class="container mt-100">
        <div class="row">
            <div class="col-lg-8">
                <div class="pxp-single-property-section">
                    <h3>Key Details</h3>
                    <div class="row mt-3 mt-md-4">
                        <div class="col-sm-6">
                            <div class="pxp-sp-key-details-item">
                                <div class="pxp-sp-kd-item-label text-uppercase">Property Type</div>
                                <div class="pxp-sp-kd-item-value"><?php
                                 if ($lang == 'en-US'){
                                    echo $GENRES_PROPRIETES->DESCRIPTION_ANGLAISE;
                                }else{
                                     echo $GENRES_PROPRIETES->DESCRIPTION_FRANCAISE;
                                 }
                                ?></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pxp-sp-key-details-item">
                                <div class="pxp-sp-kd-item-label text-uppercase">Year Built</div>
                                <div class="pxp-sp-kd-item-value"><?php echo $inscriptionsData->ANNEE_CONTRUCTION?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pxp-sp-key-details-item">
                                <div class="pxp-sp-kd-item-label text-uppercase">Number of Rooms</div>
                                <div class="pxp-sp-kd-item-value"><?php
                                echo $inscriptionsData->NB_PIECES;?></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pxp-sp-key-details-item">
                                <div class="pxp-sp-kd-item-label text-uppercase">Number of Bedroom</div>
                                <div class="pxp-sp-kd-item-value"><?php echo $inscriptionsData->NB_CHAMBRES;?></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pxp-sp-key-details-item">
                                <div class="pxp-sp-kd-item-label text-uppercase">Number of Bathroom</div>
                                <div class="pxp-sp-kd-item-value"><?php
                                echo $inscriptionsData->NB_SALLES_BAINS;?></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pxp-sp-key-details-item">
                                <div class="pxp-sp-kd-itemabel text-uppercase">Parking Spaces</div>
                                <div class="pxp-sp-kd-item-value">2</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Overview</h3>
                    <div class="mt-3 mt-md-4">
                        <h4>Description</h4>
                        <p><?php
                    $remarques = $wpdb->get_row(" SELECT * FROM REMARQUES where NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION."' and CODE_LANGUE='".$language."'", OBJECT );
                    echo $remarques->TEXTE==""?"-<br>":$remarques->TEXTE;
                    ?><span class="pxp-dots">...</span>
                            <span class="pxp-dots-more">
                                <span class="addendaFontSize"><br>Addenda <br></span>
                                <?php
                                 $results = $wpdb->get_results("SELECT * FROM ADDENDA WHERE NO_INSCRIPTION = '".get_the_content()."' and CODE_LANGUE='".$language."'", OBJECT );
                                 foreach ($results as $page) {
                                    echo $page->TEXTE.'<br/>';
                                 }
                    ?></span>
                        </p>
                        <a href="#" class="pxp-sp-more text-uppercase"><span class="pxp-sp-more-1">Continue Reading
                                <span class="fa fa-angle-down"></span></span><span class="pxp-sp-more-2">Show Less <span
                                    class="fa fa-angle-up"></span></span></a>
                    </div>
                </div>

                <div class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Amenities</h3>
                    <div class="row mt-3 mt-md-4">
                        <div class="col-sm-6 col-lg-4">
                            <div class="pxp-sp-amenities-item"><b><?php _e('Property Type','theme-text-domain'); ?> -
                                </b><?php
                            if ($lang == 'en-US'){
                                echo $GENRES_PROPRIETES->DESCRIPTION_ANGLAISE;
                            }else{
                                 echo $GENRES_PROPRIETES->DESCRIPTION_FRANCAISE;
                             }
                            ?></div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="pxp-sp-amenities-item"><b><?php _e('Living Area','theme-text-domain'); ?> - </b><?php
                            echo $inscriptionsData->SUPERFICIE_HABITABLE;
                            ?></div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="pxp-sp-amenities-item">
                                <b><?php _e('Year of construction','theme-text-domain'); ?> - </b><?php
                            echo $inscriptionsData->ANNEE_CONTRUCTION;?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="pxp-sp-amenities-item">
                                <b><?php _e('Deed of sale Signature','theme-text-domain'); ?> - </b><?php
                        if ($lang == 'en-US'){
                            echo $inscriptionsData->DELAI_OCCUPATION_ANGLAIS;
                        }else{
                            echo $inscriptionsData->DELAI_OCCUPATION_FRANCAIS;
                         }
                         ?>
                            </div>
                        </div>
                        <?php
                        $results = $wpdb->get_results("SELECT * FROM CARACTERISTIQUES WHERE NO_INSCRIPTION = '".get_the_content()."' ", OBJECT );
                        $Proximity="";
                        foreach ($results as $page) {
                            $SOUS_TYPE_CARACTERISTIQUES = $wpdb->get_row("SELECT * FROM SOUS_TYPE_CARACTERISTIQUES WHERE CODE ='".$page->SCARAC_CODE."' AND TCAR_CODE='".$page->TCAR_CODE."' ", OBJECT );
                            $TYPE_CARACTERISTIQUES = $wpdb->get_row("SELECT * FROM TYPE_CARACTERISTIQUES WHERE  CODE='".$page->TCAR_CODE."' ", OBJECT );

                        if($TYPE_CARACTERISTIQUES->DESCRIPTION_ANGLAISE==="Proximity"){
                            if ($lang == 'en-US'){
                                $Proximity=($Proximity===""?$SOUS_TYPE_CARACTERISTIQUES->DESCRIPTION_ANGLAISE:$Proximity.", ".$SOUS_TYPE_CARACTERISTIQUES->DESCRIPTION_ANGLAISE);
                            }else{
                                $Proximity=($Proximity===""?$SOUS_TYPE_CARACTERISTIQUES->DESCRIPTION_FRANCAISE:$Proximity.", ".$SOUS_TYPE_CARACTERISTIQUES->DESCRIPTION_FRANCAISE);
                             }
                        }else{
                   ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="pxp-sp-amenities-item">
                                <b><?php
                                   if ($lang == 'en-US'){
                                    echo $SOUS_TYPE_CARACTERISTIQUES->DESCRIPTION_ANGLAISE;
                                }else{
                                    echo $inscriptionsData->DESCRIPTION_FRANCAISE;
                                 }
                               ?> - </b>
                                <?php
                                  if ($lang == 'en-US'){
                                    echo $TYPE_CARACTERISTIQUES->DESCRIPTION_ANGLAISE;
                                }else{
                                    echo $TYPE_CARACTERISTIQUES->DESCRIPTION_FRANCAISE;
                                 }
                               ?>
                            </div>
                        </div>
                        <?php }
                    }
                    if($Proximity!==""){
                        ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="pxp-sp-amenities-item"><b><?php _e('Proximity','theme-text-domain'); ?> - </b>
                                <?php echo $Proximity?></div>
                        </div>
                        <?php
                       }?>
                    </div>
                </div>

                <div class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Explore the Area</h3>
                    <div id="pxp-sp-map" class="mt-3"></div>
                </div>

                <!-- <div class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Monthly Payment</h3>
                    <div class="pxp-calculator-view mt-3 mt-md-4">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 align-self-center mt-3 mt-lg-0">
                                <div class="pxp-calculator-data">
                                    <div class="row justify-content-between">
                                        <div class="col-8">
                                            <div class="pxp-calculator-data-label"><span
                                                    class="fa fa-minus"></span>Principal and Interest</div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="pxp-calculator-data-sum" id="pxp-calculator-data-pi">$ 534</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pxp-calculator-form mt-3 mt-md-4">
                        <input type="hidden" id="pxp-calculator-form-property-taxes" value="$1,068">
                        <input type="hidden" id="pxp-calculator-form-hoa-dues" value="$2,036">

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-term">Purchase price</label>
                                    <input type="text" class="form-control pxp-form-control-transform"
                                        id="pxp-calculator-form-interest" data-type="percent" value="4.45%">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-interest">Interest rate</label>
                                    <input type="text" class="form-control pxp-form-control-transform"
                                        id="pxp-calculator-form-interest" data-type="percent" value="4.45%">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-price">Amortization</label>
                                    <select class="custom-select" id="pxp-calculator-form-term">
                                        <option value="30">30 Years Fixed</option>
                                        <option value="20">20 Years Fixed</option>
                                        <option value="15">15 Years Fixed</option>
                                        <option value="10">10 Years Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-7 col-sm-7 col-md-8">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-down-price">Mortgage amount</label>
                                            <input type="text" class="form-control pxp-form-control-transform"
                                                id="pxp-calculator-form-down-price" data-type="currency"
                                                value="$519,800">
                                        </div>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-down-percentage">Down payment</label>
                                            <select class="custom-select" id="pxp-calculator-form-term">
                                                <option value="30">30 Years Fixed</option>
                                                <option value="20">20 Years Fixed</option>
                                                <option value="15">15 Years Fixed</option>
                                                <option value="10">10 Years Fixed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Welcome Tax</h3>
                    <div class="pxp-calculator-view mt-3 mt-md-4">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 align-self-center mt-3 mt-lg-0">
                                <div class="pxp-calculator-data">
                                    <div class="row justify-content-between">
                                        <div class="col-8">
                                            <div class="pxp-calculator-data-label"><span
                                                    class="fa fa-minus"></span>Principal and Interest</div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="pxp-calculator-data-sum" id="pxp-calculator-data-pi">$ 534</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pxp-calculator-form mt-3 mt-md-4">
                        <input type="hidden" id="pxp-calculator-form-property-taxes" value="$1,068">
                        <input type="hidden" id="pxp-calculator-form-hoa-dues" value="$2,036">

                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-interest">Interest</label>
                                    <input type="text" class="form-control pxp-form-control-transform"
                                        id="pxp-calculator-form-interest" data-type="percent" value="4.45%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Purchasing Power</h3>
                    <div class="pxp-calculator-view mt-3 mt-md-4">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 align-self-center mt-3 mt-lg-0">
                                <div class="pxp-calculator-data">
                                    <div class="row justify-content-between">
                                        <div class="col-8">
                                            <div class="pxp-calculator-data-label"><span
                                                    class="fa fa-minus"></span>Principal and Interest</div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="pxp-calculator-data-sum" id="pxp-calculator-data-pi">$ 534</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pxp-calculator-form mt-3 mt-md-4">
                        <input type="hidden" id="pxp-calculator-form-property-taxes" value="$1,068">
                        <input type="hidden" id="pxp-calculator-form-hoa-dues" value="$2,036">

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-term">Payment</label>
                                    <input type="text" class="form-control pxp-form-control-transform"
                                        id="pxp-calculator-form-interest" data-type="percent" value="4.45%">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-interest">Payment frequency</label>
                                    <select class="custom-select" id="pxp-calculator-form-term">
                                        <option value="30">30 Years Fixed</option>
                                        <option value="20">20 Years Fixed</option>
                                        <option value="15">15 Years Fixed</option>
                                        <option value="10">10 Years Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-price">Interest rate</label>
                                    <input type="text" class="form-control pxp-form-control-transform"
                                        id="pxp-calculator-form-price" data-type="currency" value="$5,198,000">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-7 col-sm-7 col-md-8">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-down-price">Amortization period</label>
                                            <select class="custom-select" id="pxp-calculator-form-term">
                                                <option value="30">30 Years Fixed</option>
                                                <option value="20">20 Years Fixed</option>
                                                <option value="15">15 Years Fixed</option>
                                                <option value="10">10 Years Fixed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-down-percentage">Down payment</label>
                                            <input type="text" class="form-control pxp-form-control-transform"
                                                id="pxp-calculator-form-down-percentage" data-type="percent"
                                                value="10%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Payment Calculator</h3>
                    <div class="pxp-calculator-view mt-3 mt-md-4">
                        <div class="row">
                            <div class="col-sm-12 col-lg-4 align-self-center">
                                <div class="pxp-calculator-chart-container">
                                    <canvas id="pxp-calculator-chart"></canvas>
                                    <div class="pxp-calculator-chart-result">
                                        <div class="pxp-calculator-chart-result-sum">$11,277</div>
                                        <div class="pxp-calculator-chart-result-label">per month</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-8 align-self-center mt-3 mt-lg-0">
                                <div class="pxp-calculator-data">
                                    <div class="row justify-content-between">
                                        <div class="col-8">
                                            <div class="pxp-calculator-data-label"><span
                                                    class="fa fa-minus"></span>Principal and Interest</div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="pxp-calculator-data-sum" id="pxp-calculator-data-pi"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pxp-calculator-data">
                                    <div class="row justify-content-between">
                                        <div class="col-8">
                                            <div class="pxp-calculator-data-label"><span
                                                    class="fa fa-minus"></span>Property Taxes</div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="pxp-calculator-data-sum" id="pxp-calculator-data-pt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pxp-calculator-data">
                                    <div class="row justify-content-between">
                                        <div class="col-8">
                                            <div class="pxp-calculator-data-label"><span class="fa fa-minus"></span>HOA
                                                Dues</div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="pxp-calculator-data-sum" id="pxp-calculator-data-hd"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pxp-calculator-form mt-3 mt-md-4">
                        <input type="hidden" id="pxp-calculator-form-property-taxes" value="$1,068">
                        <input type="hidden" id="pxp-calculator-form-hoa-dues" value="$2,036">

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-term">Term</label>
                                    <select class="custom-select" id="pxp-calculator-form-term">
                                        <option value="30">30 Years Fixed</option>
                                        <option value="20">20 Years Fixed</option>
                                        <option value="15">15 Years Fixed</option>
                                        <option value="10">10 Years Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-interest">Interest</label>
                                    <input type="text" class="form-control pxp-form-control-transform"
                                        id="pxp-calculator-form-interest" data-type="percent" value="4.45%">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="pxp-calculator-form-price">Home Price</label>
                                    <input type="text" class="form-control pxp-form-control-transform"
                                        id="pxp-calculator-form-price" data-type="currency" value="$5,198,000">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-7 col-sm-7 col-md-8">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-down-price">Down Payment</label>
                                            <input type="text" class="form-control pxp-form-control-transform"
                                                id="pxp-calculator-form-down-price" data-type="currency"
                                                value="$519,800">
                                        </div>
                                    </div>
                                    <div class="col-5 col-sm-5 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-down-percentage">&nbsp;</label>
                                            <input type="text" class="form-control pxp-form-control-transform"
                                                id="pxp-calculator-form-down-percentage" data-type="percent"
                                                value="10%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div hidden class="pxp-single-property-section mt-4 mt-md-5">
                    <h3>Schools in Marina District</h3>
                    <ul class="nav nav-tabs pxp-nav-tabs mt-3 mt-md-4">
                        <li class="nav-item"><a class="nav-link active" href="#elementary"
                                data-toggle="tab">Elementary</a></li>
                        <li class="nav-item"><a class="nav-link" href="#middle" data-toggle="tab">Middle</a></li>
                        <li class="nav-item"><a class="nav-link" href="#high" data-toggle="tab">High</a></li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="elementary" role="tabpanel">
                            <table class="table table-responsive pxp-table">
                                <thead>
                                    <tr>
                                        <th scope="col">School</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Grades</th>
                                        <th scope="col">Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Harvest Collegiate High School</td>
                                        <td>Public</td>
                                        <td>9-11</td>
                                        <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harvest Collegiate High School</td>
                                        <td>Public</td>
                                        <td>9-11</td>
                                        <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="middle" role="tabpanel">
                            <table class="table table-responsive pxp-table">
                                <thead>
                                    <tr>
                                        <th scope="col">School</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Grades</th>
                                        <th scope="col">Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Harvest Collegiate High School</td>
                                        <td>Public</td>
                                        <td>9-11</td>
                                        <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harvest Collegiate High School</td>
                                        <td>Public</td>
                                        <td>9-11</td>
                                        <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="high" role="tabpanel">
                            <table class="table table-responsive pxp-table">
                                <thead>
                                    <tr>
                                        <th scope="col">School</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Grades</th>
                                        <th scope="col">Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Harvest Collegiate High School</td>
                                        <td>Public</td>
                                        <td>9-11</td>
                                        <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harvest Collegiate High School</td>
                                        <td>Public</td>
                                        <td>9-11</td>
                                        <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                    class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pxp-single-property-section pxp-sp-agent-section mt-4 mt-md-5 mt-lg-0">
                    <h3>Listed By</h3>
                    <?php
                            $MEMBRES = $wpdb->get_row("SELECT * FROM MEMBRES WHERE CODE ='".$inscriptionsData->COURTIER_INSCRIPTEUR_1."'", OBJECT );
                        ?>
                    <div class="pxp-sp-agent mt-3 mt-md-4">
                        <a href="<?php echo site_url()."/team/".strtolower($MEMBRES->PRENOM."-". $MEMBRES->NOM)?>"
                            class="pxp-sp-agent-fig pxp-cover rounded-lg"
                            style="background-image: url('<?php echo $MEMBRES->PHOTO_URL?>'); background-position: top center"></a>
                        <div class="pxp-sp-agent-info">
                            <div class="pxp-sp-agent-info-name"><a
                                    href="<?php echo site_url()."/team/".strtolower($MEMBRES->PRENOM."-". $MEMBRES->NOM)?>"><?php echo $MEMBRES->PRENOM." ". $MEMBRES->NOM?></a>
                            </div>
                            <div class="pxp-sp-agent-info-rating"><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="pxp-sp-agent-info-email"><a
                                    href="mailto:<?php echo $MEMBRES->COURRIEL?>"><?php echo $MEMBRES->COURRIEL?></a>
                            </div>
                            <div class="pxp-sp-agent-info-phone"><span
                                    class="fa fa-phone"></span><?php echo $MEMBRES->TELEPHONE_1?></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pxp-sp-agent-btns mt-3 mt-md-4">
                            <a href="#pxp-contact-agent" class="pxp-sp-agent-btn-main" data-toggle="modal"
                                data-target="#pxp-contact-agent"><span class="fa fa-envelope-o"></span> Contact
                                Agent</a>
                            <a href="#pxp-contact-agent" class="pxp-sp-agent-btn" data-toggle="modal"
                                data-target="#pxp-contact-agent"><span class="fa fa-calendar-check-o"></span> Request
                                Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pxp-contact-agent" tabindex="-1" role="dialog" aria-labelledby="pxpContactAgentModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="pxpContactAgentModal">Contact
                    <?php echo $MEMBRES->NOM." ".$MEMBRES->PRENOM?></h5>
                <!-- <form class="mt-4">
                    <div class="form-group">
                        <label for="pxp-contact-agent-name">Name</label>
                        <input type="text" class="form-control" id="pxp-contact-agent-name">
                    </div>
                    <div class="form-group">
                        <label for="pxp-contact-agent-email">Email</label>
                        <input type="text" class="form-control" id="pxp-contact-agent-email">
                    </div>
                    <div class="form-group">
                        <label for="pxp-contact-agent-phone">Phone</label>
                        <input type="text" class="form-control" id="pxp-contact-agent-phone">
                    </div>
                    <div class="form-group">
                        <label for="pxp-contact-agent-message">Message</label>
                        <textarea class="form-control" id="pxp-contact-agent-message"
                            rows="4">I would like more information about Beautiful House in Marina on 542 29th Avenue.</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <a href="#" class="pxp-agent-contact-modal-btn">Send Message</a>
                    </div>
                </form> -->

                <?php
                if($MEMBRES->PRENOM." ". $MEMBRES->NOM=="Sebaaly Ralph"){
                echo do_shortcode('[contact-form-7 id="a5998d6" title="Sebaaly Ralph Property Contact"]');
                }
                ?>
                <?php
                if($MEMBRES->PRENOM." ". $MEMBRES->NOM=="Michael Ghannoum")
{
    echo do_shortcode('[contact-form-7 id="bedd78f" title="Michael Ghannoum Property Contact"]');
}            ?>
                <?php
                if($MEMBRES->PRENOM." ". $MEMBRES->NOM=="Cynthia Dahoud")
{
    echo do_shortcode('[contact-form-7 id="026505a" title="Cynthia Dahoud Property Contact"]');
}            ?>
                <?php
                if($MEMBRES->PRENOM." ". $MEMBRES->NOM=="Parvez Coowar")
{
    echo do_shortcode('[contact-form-7 id="08b0a05" title="Parvez Coowar Property Contact"]');
}
            ?>
                <?php
                if($MEMBRES->PRENOM." ". $MEMBRES->NOM=="Christian Daoud")
{
    echo do_shortcode('[contact-form-7 id="a5998d6" title="Christian Daoud Property Contact"]');
}
?>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pxp-signin-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSigninModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="pxpSigninModal">Welcome back!</h5>
                <form class="mt-4">
                    <div class="form-group">
                        <label for="pxp-signin-email">Email</label>
                        <input type="text" class="form-control" id="pxp-signin-email"
                            placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="pxp-signin-pass">Password</label>
                        <input type="password" class="form-control" id="pxp-signin-pass"
                            placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="pxp-agent-contact-modal-btn">Sign In</a>
                    </div>
                    <div class="form-group mt-4 text-center pxp-modal-small">
                        <a href="#" class="pxp-modal-link">Forgot password</a>
                    </div>
                    <div class="text-center pxp-modal-small">
                        New to Resideo? <a href="javascript:void(0);" class="pxp-modal-link pxp-signup-trigger">Create
                            an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pxp-signup-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSignupModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="pxpSignupModal">Create an account</h5>
                <form class="mt-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pxp-signup-firstname">First Name</label>
                                <input type="text" class="form-control" id="pxp-signup-firstname"
                                    placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pxp-signup-lastname">Last Name</label>
                                <input type="text" class="form-control" id="pxp-signup-lastname"
                                    placeholder="Enter last name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pxp-signup-email">Email</label>
                        <input type="text" class="form-control" id="pxp-signup-email"
                            placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="pxp-signup-pass">Password</label>
                        <input type="password" class="form-control" id="pxp-signup-pass"
                            placeholder="Create a password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="pxp-agent-contact-modal-btn">Sign Up</a>
                    </div>
                    <div class="text-center mt-4 pxp-modal-small">
                        Already have an account? <a href="javascript:void(0);"
                            class="pxp-modal-link pxp-signin-trigger">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALbrsESmR55p0PLDbeL-SQ_YPuRpucYrw&amp;libraries=geometry&amp;libraries=places">
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe-ui-default.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/gallery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/infobox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/Chart.min.js"></script>


<script>
(function($) {
    "use strict";
    var map;
    var styles;
    var marker = [];
    // Property map marker position
    var propLat = '<?php echo $inscriptionsData->LATITUDE;?>';
    var propLng = '<?php echo $inscriptionsData->LONGITUDE;?>';

    var options = {
        zoom: 14,
        mapTypeId: 'Styled',
        panControl: false,
        zoomControl: true,
        mapTypeControl: true,
        scaleControl: false,
        streetViewControl: true,
        overviewMapControl: false,
        scrollwheel: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_BOTTOM,
        },
        fullscreenControl: true,
    };


    styles = [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
            "color": "#e9e9e9"
        }, {
            "lightness": 17
        }]
    }];

    var info = new InfoBox({
        disableAutoPan: false,
        maxWidth: 200,
        pixelOffset: new google.maps.Size(-70, -44),
        zIndex: null,
        boxClass: 'poi-box',
        boxStyle: {
            'background': '#fff',
            'opacity': 1,
            'padding': '5px',
            'box-shadow': '0 1px 2px 0 rgba(0, 0, 0, 0.13)',
            'width': '140px',
            'text-align': 'center',
            'border-radius': '3px'
        },
        closeBoxMargin: "28px 26px 0px 0px",
        closeBoxURL: "",
        infoBoxClearance: new google.maps.Size(1, 1),
        pane: "floatPane",
        enableEventPropagation: false
    });

    function CustomMarker(latlng, map, classname) {
        this.latlng_ = latlng;
        this.classname = classname;

        this.setMap(map);
    }

    CustomMarker.prototype = new google.maps.OverlayView();

    CustomMarker.prototype.draw = function() {
        var me = this;
        var div = this.div_;

        if (!div) {
            div = this.div_ = document.createElement('div');
            div.classList.add(this.classname);

            var panes = this.getPanes();
            panes.overlayImage.appendChild(div);
        }

        var point = this.getProjection().fromLatLngToDivPixel(this.latlng_);

        if (point) {
            div.style.left = point.x + 'px';
            div.style.top = point.y + 'px';
        }
    };

    function addPropMarker(propLat, propLng, map) {
        var latlng = new google.maps.LatLng(propLat, propLng);
        marker = new CustomMarker(latlng, map, 'pxp-single-marker');
    }

    setTimeout(function() {
        if ($('#pxp-sp-map').length > 0) {
            map = new google.maps.Map(document.getElementById('pxp-sp-map'), options);
            var styledMapType = new google.maps.StyledMapType(styles, {
                name: 'Styled',
            });
            var center = new google.maps.LatLng(propLat, propLng);

            map.mapTypes.set('Styled', styledMapType);
            map.setCenter(center);
            map.setZoom(15);

            addPropMarker(propLat, propLng, map);

            google.maps.event.trigger(map, 'resize');
        }
    }, 300);
})(jQuery);
</script>
<?php get_footer(); ?>