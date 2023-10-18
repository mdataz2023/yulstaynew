<?php
/*
	Template Name: Residential Form
*/
get_header();

?>

        <style>
            .tab-container {
            display: flex;
            gap: 8px;
            justify-content: center;
        }
        
        .tab-button {
            display: inline-block;
            width: 120px;
            text-align: center;
            white-space: nowrap;
            background-color: #333;
            height: 46px;
            padding: 0 20px;
            border: 1px solid #333;
            border-radius: .25rem;
            font-size: .9rem;
            text-transform: uppercase;
            line-height: 46px;
            font-weight: 700;
            color: #fff;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        
        .tab-button.active {
            background-color: #00b5d9;
            color: #fff;
        }
        
        .tab-content {
            display: none;
            padding: 20px;
        }
        
        .tab-content.active {
            display: block;
        }
        
        </style>

        <div class="pxp-content">
            <div class="pxp-submit-property pxp-content-wrapper mt-100">
                <div class="tab-container">
                    <button class="tab-button active" onclick="openTab(event, 'tab1')">SALE</button>
                    <button class="tab-button" onclick="openTab(event, 'tab2')">PURCHASE</button>
                </div>

                <div id="tab1" class="container tab-content active">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header">Sales</h1>
                        </div>
                    </div>
                    <div class="row mt-4 mt-md-5">
                        <div class="col-sm-12 col-lg-8">
                            <h3>Basic Information</h3>
                            <div class="mt-3 mt-md-4">
                                <div class="form-group">
                                    <label for="pxp-submit-property-title">Title</label>
                                    <input type="text" class="form-control" id="pxp-submit-property-title" placeholder="Enter property title">
                                </div>
                                <div class="form-group">
                                    <label for="pxp-submit-property-overview">Overview</label>
                                    <textarea class="form-control" id="pxp-submit-property-overview" rows="6" placeholder="Describe the property..."></textarea>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Key Details</h3>
                            <div class="row mt-3 mt-md-4">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-type">Type</label>
                                        <select class="custom-select" id="pxp-submit-property-type">
                                            <option value="">Select type</option>
                                            <option value="">Apartment</option>
                                            <option value="">House</option>
                                            <option value="">Townhome</option>
                                            <option value="">Multi-Family</option>
                                            <option value="">Land</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-status">Status</label>
                                        <select class="custom-select" id="pxp-submit-property-status">
                                            <option value="">Select status</option>
                                            <option value="">For Rent</option>
                                            <option value="">For Sale</option>
                                            <option value="">To Let</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-built">Year Built</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-built">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-stories">Stories</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-stories">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-rooms">Room Count</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-rooms">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-parking">Parking Spaces</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-parking">
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Amenities</h3>
                            <div class="row mt-3 mt-md-4">
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-wifi"></span> Internet</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-car"></span> Garage</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-sun-o"></span> Air Conditioning</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-bullseye"></span> Dishwasher</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-recycle"></span> Disposal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-clone"></span> Balcony</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-futbol-o"></span> Gym</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-smile-o"></span> Playroom</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-glass"></span> Bar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Photo Gallery</h3>
                            <form class="dropzone needsclick mt-3 mt-md-4" id="demo-upload" action="/upload">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload.<br>
                                    <span class="note needsclick">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="pxp-submit-property-side rounded-lg mt-4 mt-md-5 mt-lg-0">
                                <h3>Main Details</h3>
                                <div class="row mt-3 mt-md-4">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-price">Price</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-price" placeholder="Enter price">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-plabel">Price Label</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-plabel" placeholder="Enter price label">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-beds">Beds</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-beds" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-baths">Baths</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-baths" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-size">Size (sq ft)</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-size" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-submit-property-side rounded-lg mt-4 mt-md-5">
                                <h3>Location</h3>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-address">Address</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-address" placeholder="Enter address">
                                    </div>
                                    <div id="pxp-submit-property-map"></div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="mt-4 mt-md-5">
                        <a href="#" class="pxp-submit-property-btn">Submit Property</a>
                    </div>
                </div>
                <div id="tab2" class="container tab-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header">Purchase</h1>
                        </div>
                    </div>
                    <div class="row mt-4 mt-md-5">
                        <div class="col-sm-12 col-lg-8">
                            <h3>Basic Information</h3>
                            <div class="mt-3 mt-md-4">
                                <div class="form-group">
                                    <label for="pxp-submit-property-title">Title</label>
                                    <input type="text" class="form-control" id="pxp-submit-property-title" placeholder="Enter property title">
                                </div>
                                <div class="form-group">
                                    <label for="pxp-submit-property-overview">Overview</label>
                                    <textarea class="form-control" id="pxp-submit-property-overview" rows="6" placeholder="Describe the property..."></textarea>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Key Details</h3>
                            <div class="row mt-3 mt-md-4">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-type">Type</label>
                                        <select class="custom-select" id="pxp-submit-property-type">
                                            <option value="">Select type</option>
                                            <option value="">Apartment</option>
                                            <option value="">House</option>
                                            <option value="">Townhome</option>
                                            <option value="">Multi-Family</option>
                                            <option value="">Land</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-status">Status</label>
                                        <select class="custom-select" id="pxp-submit-property-status">
                                            <option value="">Select status</option>
                                            <option value="">For Rent</option>
                                            <option value="">For Sale</option>
                                            <option value="">To Let</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-built">Year Built</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-built">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-stories">Stories</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-stories">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-rooms">Room Count</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-rooms">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-parking">Parking Spaces</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-parking">
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Amenities</h3>
                            <div class="row mt-3 mt-md-4">
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-wifi"></span> Internet</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-car"></span> Garage</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-sun-o"></span> Air Conditioning</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-bullseye"></span> Dishwasher</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-recycle"></span> Disposal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-clone"></span> Balcony</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-futbol-o"></span> Gym</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-smile-o"></span> Playroom</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-glass"></span> Bar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Photo Gallery</h3>
                            <form class="dropzone needsclick mt-3 mt-md-4" id="demo-upload" action="/upload">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload.<br>
                                    <span class="note needsclick">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="pxp-submit-property-side rounded-lg mt-4 mt-md-5 mt-lg-0">
                                <h3>Main Details</h3>
                                <div class="row mt-3 mt-md-4">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-price">Price</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-price" placeholder="Enter price">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-plabel">Price Label</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-plabel" placeholder="Enter price label">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-beds">Beds</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-beds" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-baths">Baths</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-baths" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label for="pxp-submit-property-size">Size (sq ft)</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-size" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-submit-property-side rounded-lg mt-4 mt-md-5">
                                <h3>Location</h3>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-address">Address</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-address" placeholder="Enter address">
                                    </div>
                                    <div id="pxp-submit-property-map"></div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="mt-4 mt-md-5">
                        <a href="#" class="pxp-submit-property-btn">Submit Property</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function openTab(evt, tabName) {
            var i, tabcontent, tabbuttons;
        
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
        
            tabbuttons = document.getElementsByClassName("tab-button");
            for (i = 0; i < tabbuttons.length; i++) {
                tabbuttons[i].classList.remove("active");
            }
        
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }
        
        </script>

<?php get_footer(); ?>