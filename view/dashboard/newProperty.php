
<!-- ============================ Page Title Start================================== -->
<div class="page-title" style="background:#f4f4f4 url(public/img/slider-1.jpg);" data-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ User Dashboard ================================== -->
<section class="gray pt-5 pb-5">
    <div class="container-fluid">
                    
        <div class="row">
            
            <div class="col-lg-3 col-md-4">
                <div class="property_dashboard_navbar">
                    
                    <div class="dash_user_avater">
                        <img src="public/img/user-3.jpg" class="img-fluid avater" alt="">
                        <h4>Sang Pham</h4>
                        <span>HCM VietNam</span>
                    </div>
                    
                    <div class="dash_user_menues">
                        <ul>
                            <li><a href="dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>
                            <li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li>
                            <li><a href="bookmark-list.html"><i class="fa fa-bookmark"></i>Saved Property<span class="notti_coun style-2">7</span></a></li>
                            <li><a href="my-property.html"><i class="fa fa-tasks"></i>My Properties</a></li>
                            <li><a href="messages.html"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
                            <li><a href="choose-package.html"><i class="fa fa-gift"></i>Choose Package<span class="expiration">10 days left</span></a></li>
                            <li class="active"><a href="submit-property-dashboard.html"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                            <li><a href="change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                        </ul>
                    </div>
                    
                    <div class="dash_user_footer">
                        <ul>
                            <li><a href="#"><i class="fa fa-power-off"></i></a></li>
                            <li><a href="#"><i class="fa fa-comment"></i></a></li>
                            <li><a href="#"><i class="fa fa-cog"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-9 col-md-8">
                <div class="dashboard-body">
        
                    <div class="dashboard-wraper">
                        <div class="row">
                            
                            <!-- Submit Form -->
                            <div class="col-lg-12 col-md-12">
                            
                                <div class="submit-page">
                                    
                                    <!-- Basic Information -->
                                    <div class="frm_submit_block">	
                                        <h3>Basic Information</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-12">
                                                    <label>Property Title<a href="#" class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></a></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Status</label>
                                                    <select id="status" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">For Rent</option>
                                                        <option value="2">For Sale</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Property Type</label>
                                                    <select id="ptypes" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">Houses</option>
                                                        <option value="2">Apartment</option>
                                                        <option value="3">Villas</option>
                                                        <option value="4">Commercial</option>
                                                        <option value="5">Offices</option>
                                                        <option value="6">Garage</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" placeholder="USD">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Area</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Bedrooms</label>
                                                    <select id="bedrooms" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Bathrooms</label>
                                                    <select id="bathrooms" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Gallery -->
                                    <div class="frm_submit_block">	
                                        <h3>Gallery</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-12">
                                                    <label>Upload Gallery</label>
                                                    <form action="https://themezhub.net/upload-target" class="dropzone dz-clickable primary-dropzone">
                                                        <div class="dz-default dz-message">
                                                            <i class="ti-gallery"></i>
                                                            <span>Drag & Drop To Change Logo</span>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Location -->
                                    <div class="frm_submit_block">	
                                        <h3>Location</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-6">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>State</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Zip Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Detailed Information -->
                                    <div class="frm_submit_block">	
                                        <h3>Detailed Information</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-12">
                                                    <label>Description</label>
                                                    <textarea class="form-control h-120"></textarea>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label>Building Age (optional)</label>
                                                    <select id="bage" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">0 - 5 Years</option>
                                                        <option value="2">0 - 10Years</option>
                                                        <option value="3">0 - 15 Years</option>
                                                        <option value="4">0 - 20 Years</option>
                                                        <option value="5">20+ Years</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label>Garage (optional)</label>
                                                    <select id="garage" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label>Rooms (optional)</label>
                                                    <select id="rooms" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-12">
                                                    <label>Other Features (optional)</label>
                                                    <div class="o-features">
                                                        <ul class="no-ul-list third-row">
                                                            <li>
                                                                <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                                                <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                                                <label for="a-2" class="checkbox-custom-label">Bedding</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
                                                                <label for="a-3" class="checkbox-custom-label">Heating</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                                                <label for="a-4" class="checkbox-custom-label">Internet</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                                                <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                                                <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                                                <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                                                <label for="a-8" class="checkbox-custom-label">Balcony</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                                                <label for="a-9" class="checkbox-custom-label">Icon</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                                                <label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                                                <label for="a-11" class="checkbox-custom-label">Beach</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                                                <label for="a-12" class="checkbox-custom-label">Parking</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Contact Information -->
                                    <div class="frm_submit_block">	
                                        <h3>Contact Information</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-4">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label>Phone (optional)</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>GDPR Agreement *</label>
                                        <ul class="no-ul-list">
                                            <li>
                                                <input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
                                                <label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="btn btn-theme" type="submit">Submit & Preview</button>
                                    </div>
                                                
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- row -->
                
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->
