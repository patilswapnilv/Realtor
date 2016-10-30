<?php
 /*
 * Template Name: Property Listing
 *
 * Property Listing Template
 *
 */
get_header();

?>

<article>
  <div class="article">
  	<?php get_template_part('template-parts/page-title'); ?>
    <div class="page-result">
    <div class="container">
    	<div class="row">
      	<div class="col-sm-6">
        	<h4>Property Name & Title Here</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
          <span class="line"></span>
        </div>
        <div class="col-sm-6 sort-item">
        	<!--<a href="javascript:;" class="sort">Sort By: Default Order <i class="fa fa-angle-down"></i></a><span class="">View As:</span> <a href="javascript:;" class="list-view"><i class="fa fa-th-list" aria-hidden="true"></i></a><a href="javascript:;" class="grid-view active"><i class="fa fa-th" aria-hidden="true"></i></a>-->
        </div>
      </div>
      </div>
    </div>
    <section class="section-inner">
      <div class="container">
        <div class="row">
        	<div class="col-sm-4">
          	<div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sale" aria-controls="home" role="tab" data-toggle="tab">Sale</a></li>
              <li role="presentation"><a href="#rent" aria-controls="profile" role="tab" data-toggle="tab">Rent</a></li>
              <li role="presentation"><a href="#aprtment" aria-controls="messages" role="tab" data-toggle="tab">Apparment</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sale">
              	<div class="sale-form">
                	<form>
                  	<div class="form-group"><label>Enter Your Keyword</label><input type="text" class="form-control" placeholder="Search by location, zip, area" /></div>
                    <div class="form-group"><label>Property Status</label><select type="text" class="form-control" >
                    	<option>Select Property Status</option><option>Select Property Status</option>
                    </select></div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>No. Beds</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>No. Baths</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>Min. Area (Sqft)</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Max. Area (Sqft)</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>Price From</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Price To</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="form-group">
                    	<input type="button" value="Find Properties" class="btn btn-success" />
                    </div>
                  </form>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="rent">
              	<div class="sale-form">
                	<form>
                  	<div class="form-group"><label>Enter Your Keyword</label><input type="text" class="form-control" placeholder="Search by location, zip, area" /></div>
                    <div class="form-group"><label>Property Status</label><select type="text" class="form-control" >
                    	<option>Select Property Status</option><option>Select Property Status</option>
                    </select></div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>No. Beds</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>No. Baths</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>Min. Area (Sqft)</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Max. Area (Sqft)</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>Price From</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Price To</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="form-group">
                    	<input type="button" value="Find Properties" class="btn btn-success" />
                    </div>
                  </form>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="aprtment">
              	<div class="sale-form">
                	<form>
                  	<div class="form-group"><label>Enter Your Keyword</label><input type="text" class="form-control" placeholder="Search by location, zip, area" /></div>
                    <div class="form-group"><label>Property Status</label><select type="text" class="form-control" >
                    	<option>Select Property Status</option><option>Select Property Status</option>
                    </select></div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>No. Beds</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>No. Baths</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>Min. Area (Sqft)</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Max. Area (Sqft)</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                    	<div class="col-sm-6"><label>Price From</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Price To</label><select type="text" class="form-control" >
                    	<option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="form-group">
                    	<input type="button" value="Find Properties" class="btn btn-success" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          	<div class="left-container">
            	<h3>Featured Properties</h3>
              <div class="s-property">
              	<div class="row">
                	<div class="col-xs-5"><img src="images/small-property.png" width="137" height="137" alt="" class="img-responsive" /></div>
                  <div class="col-xs-7 s-property-detail">
                  	<h5>Awesome villa for sale</h5>
                    <span class="price">$625,000</span>
                    <div class="r-property-space">
                    <div class="row">
                      <div class="col-sm-6"><i class="sqm"></i>161 Sqm</div>                      
                      <div class="col-sm-6"><i class="bed"></i>Beds: 2</div>
                      <div class="col-sm-6"><i class="bath"></i>Baths: 2</div>
                      <div class="col-sm-6"><i class="garage"></i>Garage: 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="s-property">
              	<div class="row">
                	<div class="col-xs-5"><img src="images/small-property.png" width="137" height="137" alt="" class="img-responsive" /></div>
                  <div class="col-xs-7 s-property-detail">
                  	<h5>Awesome villa for sale</h5>
                    <span class="price">$625,000</span>
                    <div class="r-property-space">
                    <div class="row">
                      <div class="col-sm-6"><i class="sqm"></i>161 Sqm</div>                      
                      <div class="col-sm-6"><i class="bed"></i>Beds: 2</div>
                      <div class="col-sm-6"><i class="bath"></i>Baths: 2</div>
                      <div class="col-sm-6"><i class="garage"></i>Garage: 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="s-property">
              	<div class="row">
                	<div class="col-xs-5"><img src="images/small-property.png" width="137" height="137" alt="" class="img-responsive" /></div>
                  <div class="col-xs-7 s-property-detail">
                  	<h5>Awesome villa for sale</h5>
                    <span class="price">$625,000</span>
                    <div class="r-property-space">
                    <div class="row">
                      <div class="col-sm-6"><i class="sqm"></i>161 Sqm</div>                      
                      <div class="col-sm-6"><i class="bed"></i>Beds: 2</div>
                      <div class="col-sm-6"><i class="bath"></i>Baths: 2</div>
                      <div class="col-sm-6"><i class="garage"></i>Garage: 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="s-property">
              	<div class="row">
                	<div class="col-xs-5"><img src="images/small-property.png" width="137" height="137" alt="" class="img-responsive" /></div>
                  <div class="col-xs-7 s-property-detail">
                  	<h5>Awesome villa for sale</h5>
                    <span class="price">$625,000</span>
                    <div class="r-property-space">
                    <div class="row">
                      <div class="col-sm-6"><i class="sqm"></i>161 Sqm</div>                      
                      <div class="col-sm-6"><i class="bed"></i>Beds: 2</div>
                      <div class="col-sm-6"><i class="bath"></i>Baths: 2</div>
                      <div class="col-sm-6"><i class="garage"></i>Garage: 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="javascript:;" class="property-link">All Properties <i class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>
          </div>
        	<div class="col-sm-8">
          	<div class="p-image"><img src="images/property-img-big.jpg" width="773" height="374" alt="" class="img-responsive" /></div>
            <div class="p-box p-detail">
            	<h4>Property Description</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
<p>The readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.</p>
            </div>
            <div class="p-box p-features">
            	<h4>Property Features</h4>
              <div class="row">
              	<div class="col-sm-4">
                	<ul>
              				<li><i class="fa fa-caret-right" aria-hidden="true"></i>Pool</li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Security</li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Landscaped Garden</li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Gymnasium</li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Children's Play Area</li>
              		</ul>
              </div>
              	<div class="col-sm-3">
                	<ul>
              				<li><i class="fa fa-caret-right" aria-hidden="true"></i>Power Backup</li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Lift</li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Community <span class="strikethrough">Hall</span></li>  
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Internal Roads</li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>Jogging Track</li>
              		</ul>
              </div>
              	<div class="col-sm-5">
                	<ul>
              				<li><i class="fa fa-caret-right" aria-hidden="true"></i>Utility Stores</li> 
              				<li><i class="fa fa-caret-right" aria-hidden="true"></i><span class="strikethrough">Earthquake Resistant  Fire</span></li>
              				<li><i class="fa fa-caret-right" aria-hidden="true"></i>Extinguisher   Rainwater Harvest</li>
              				<li><i class="fa fa-caret-right" aria-hidden="true"></i>Gated Community</li>
              		</ul>
              </div>
              </div>
              
            </div>
            <div class="p-box p-floreplan">
            	<h4>Floor Plan & Other Attachments</h4>
              <div class="owl-outer">
                <div id="owl-floor-plan" class="owl-carousel owl-theme">                
                  <div class="item"><img src="images/flor-plan-1.jpg" width="185" height="169" alt="" /></div>                                
                  <div class="item"><img src="images/flor-plan-2.jpg" width="185" height="169" alt="" /></div>                                
                  <div class="item"><img src="images/flor-plan-3.jpg" width="185" height="169" alt="" /></div>                                
                  <div class="item"><img src="images/flor-plan-1.jpg" width="185" height="169" alt="" /></div>                                
                  <div class="item"><img src="images/flor-plan-2.jpg" width="185" height="169" alt="" /></div>                                
                  <div class="item"><img src="images/flor-plan-3.jpg" width="185" height="169" alt="" /></div>                                
                </div>
                <a href="javascript:;" class="left-arrow"><span class="ti-arrow-circle-left"></span></a><a href="javascript:;" class="right-arrow"><span class="ti-arrow-circle-right"></span></a>
              </div>
            </div>
            <div class="p-box p-contact-agent">
            	<h4>Contact Agent</h4>
              
              <div class="row">
              	<div class="col-sm-6 agent-detail">
                	<div class="agent-image"><img src="images/agent-image.jpg" width="369" height="193" alt="" class="img-responsive" /></div>
                  <div class="row">
                  	<div class="col-sm-6">
                    	<h5>Mandra Samsung</h5>
                  		<span class="company-broker">Company Broker</span>
                    </div>
                    <div class="col-sm-6">
                    	<ul class="social-media">
                        <li><a href="javascript:;" class="fb"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:;" class="tt"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="javascript:;" class="pin"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="javascript:;" class="gp"><i class="ei ei-social_googleplus"></i></a></li>
                        <li><a href="javascript:;" class="tm"><i class="fa fa-tumblr"></i></a></li>
                      </ul>  
                    </div>
                  </div>
                  
                  <p>It is a long established fact that a reader will be distra cted by the readable content of a page when looking at its layout the point of using Lorem Ipsum.</p>
                  <div class="contacts"><span><i class="fa fa-map-marker" aria-hidden="true"></i>99 Palace Road, Florida, USA</span> <span><i class="fa fa-phone" aria-hidden="true"></i>+1 234 5678 90</span>  <span><i class="fa fa-envelope" aria-hidden="true"></i>mail@contactte.com</span></div>
                  
                </div>
                <div class="col-sm-5">
                    <div class="sale-form contact-form">
                    <form>
                      <div class="form-group"><input type="text" class="form-control" placeholder="Full Name" /></div>
                      <div class="form-group"><input type="text" class="form-control" placeholder="Phone Number" /></div>
                      <div class="form-group"><input type="text" class="form-control" placeholder="Email Address" /></div>
                      <div class="form-group"><input type="text" class="form-control" placeholder="Message" /></div>
                      <div class="form-group"><img src="images/robot.jpg" class="img-responsive" alt="" /></div>
                      
                      <div class="form-group">
                        <input type="button" value="Contact Agent" class="btn btn-success" />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
                                    
          </div>
        </div>
      </div>     
    </section>
    
  </div>
  <h4 class="hidden">Realtor</h4>
</article>
<?php get_footer(); ?>