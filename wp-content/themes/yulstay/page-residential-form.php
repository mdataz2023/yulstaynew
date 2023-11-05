<?php
/*
	Template Name: Residential Form
*/
get_header();

?>

        <div class="pxp-content mb-100">
            <div class="pxp-contact pxp-content-wrapper banner-mtop">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header">Residential Form</h1>
                            <p class="pxp-text-light">Three offices to better serve you</p>
                        </div>
                    </div>
                </div>

                <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url(https://mdataz.com/yulstaynew/wp-content/uploads/2023/09/ph-big.jpg); background-position: 50% 80%;"></div>
                </div>

                <div class="container mt-100">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div style="display:flex; justify-content: space-between; align-items: center;">
                                <div>
                                    <h2 class="pxp-section-h2" id="form-title">Select your form</h2>
                                </div>
                                <div>
                                    <select class="contact-dropbtn" id="select-form">
                                        <option value="default">select form</option>
                                        <option value="investment-form">Investments</option>
                                        <option value="purchase-form">Purchase</option>
                                        <option value="sale-form">Sale</option>
                                        <option value="rental-form">Rental & Management</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div id="form-id">
                                <div id="default-content">Default Content</div>
                                <div id="investment-form-content" style="display: none;">
                                    <?php echo do_shortcode('[contact-form-7 id="714498e" title="Investments"]'); ?>
                                </div>
                                <div id="purchase-form-content" style="display: none;">
                                    <?php echo do_shortcode('[contact-form-7 id="714498e" title="Investments"]'); ?>
                                </div>
                                <div id="sale-form-content" style="display: none;">
                                    <?php echo do_shortcode('[contact-form-7 id="35457d9" title="Sale"]'); ?>
                                </div>
                                <div id="rental-form-content" style="display: none;">
                                    <?php echo do_shortcode('[contact-form-7 id="35457d9" title="Sale"]'); ?>
                                </div>
                            </div>
                        </div>
                
                        
                        <script>
                            const selectForm = document.getElementById('select-form');
                            const formTitle = document.getElementById('form-title');
                            const formId = document.getElementById('form-id');
                        
                            selectForm.addEventListener('change', () => {
                                
                                const selectedOption = selectForm.value;
                        
                                Array.from(formId.children).forEach(section => {
                                    section.style.display = 'none';
                                });
                        
                                const selectedContent = document.getElementById(selectedOption + '-content');
                                if (selectedContent) {
                                    selectedContent.style.display = 'block';
                                }
                        
                                formTitle.textContent = selectForm.options[selectForm.selectedIndex].text;
                            });
                        
                            document.getElementById('default-content').style.display = 'block';
                        </script>

                        <div class="col-sm-12 col-lg-6" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-big.jpg);">
                            
                        </div>
                    </div>
                </div>

<?php get_footer(); ?>