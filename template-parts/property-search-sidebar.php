<div class="col-sm-4">
            <div>
            <!-- Nav tabs -->
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sale">
                <div class="sale-form">

                  <form method="get">
                    <div class="form-group"><label>Enter Your Keyword</label><input type="text" class="form-control" name="keyword" placeholder="Search by location, zip, area" value="<?php if(isset($_GET['keyword'])){echo $_GET['keyword'];} ?>" /></div>
                    <div class="form-group"><label>Property Status</label><select type="text" name="status" class="form-control" >
                      <option value="any"><?php echo __('Any', 'realtor'); ?></option>
                      <?php

                      if(isset($_GET['status']))
                      {
                        realtor_select_property_statuses($_GET['status']);
                      }
                      else
                      {
                        realtor_select_property_statuses("");

                      }

                      ?>

                    </select></div>
                    <div class="form-group"><label>Property Type</label><select name="type" type="text" class="form-control" >
		                    <option value="any"><?php echo __('Any', 'realtor'); ?></option>
		                    <?php

		                    if(isset($_GET['type']))
		                    {
			                    realtor_select_property_types($_GET['type']);
		                    }
		                    else
		                    {
			                    realtor_select_property_types("");

		                    }

		                    ?>
                    </select></div>
                    <div class="row form-group">
                      <div class="col-sm-6"><label>No. Beds</label><select type="text" name="beds" class="form-control" >
                      <option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>No. Baths</label><select type="text" name="baths" class="form-control" >
                      <option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-6"><label>Min. Area (Sqft)</label><select type="text" name="minarea" class="form-control" >
                      <option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Max. Area (Sqft)</label><select type="text" name="maxarea" class="form-control" >
                      <option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-6"><label>Price From</label><select type="text" name="pricefrom" class="form-control" >
                      <option>Any</option><option>Any</option>
                    </select></div>
                      <div class="col-sm-6"><label>Price To</label><select type="text" name="priceto" class="form-control" >
                      <option>Any</option><option>Any</option>
                    </select></div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-6"><label>Parking</label><select type="text" name="garage" class="form-control" >
                          <option>Any</option><option>Any</option>
                        </select></div>
                    </div>

                    <div class="form-group">
                      <input type="submit" value="Find Properties" class="btn btn-success" />
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