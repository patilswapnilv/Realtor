<?php
get_header();

?>

<article>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="article">
   <?php get_template_part('template-parts/page-title'); ?>
    <div class="page-result">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
                  <h4><?php the_title(); ?></h4>
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
            <div class="p-image"><img src="<?php echo the_post_thumbnail_url('realtor_property_single');?>" alt="" class="img-responsive" /></div>
            <div class="p-box p-detail">
              <h4><?php echo __('Property Description', 'realtor'); ?></h4>
              <p><?php the_content(); ?></p>
              
            </div>
            <div class="p-box p-features">
              <?php
                    $all_features=array();
                    $features_col_1=array();
                    $features_col_2=array();
                    $features_col_3=array();

                    foreach (get_post_meta(get_the_id(),'features',true) as $key => $value) {
                      foreach ($value as $sub_key => $sub_value) {
                        array_push($all_features, $sub_value);
                      }
                    }
                    $size=sizeof($all_features);

                    if($size > 2)
                    {
                      $differenciator = 0;
                      
                      if(($size-1) % 2 == 1)
                      {
                        $differenciator = 1;

                      }
                      $one_third_of_the_size = ($size-$differenciator) / 3;

                      for($i=0;$i<$one_third_of_the_size;$i++)
                      {
                        array_push($features_col_1, $all_features[$i]);
                      }
                      
                      $two_third_of_the_size =$one_third_of_the_size*2;

                      for($j=$one_third_of_the_size;$j<$two_third_of_the_size;$j++)
                      {
                        array_push($features_col_2, $all_features[$j]);
                      }
                      for($j=$two_third_of_the_size;$j<($size-$differenciator);$j++)
                      {
                        array_push($features_col_3, $all_features[$j]);
                      }
                      if($differenciator > 0)
                      {
                        array_push($features_col_1, $all_features[$size-1]);
                      }
                    }
                    else if ($size == 2)
                    {
                      array_push($features_col_1, $all_features[0]);
                      array_push($features_col_2, $all_features[1]);
                    }
                    else if ($size == 1)
                    {
                      array_push($features_col_1, $all_features[0]);
                    }
                    ?>
              <h4><?php echo __('Property Features', 'realtor'); ?></h4>
              <div class="row">
                <div class="col-sm-4">
                  <ul>
                    <?php
                      foreach ($features_col_1 as $sub_key => $sub_value) {
                        echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i>'.$sub_value.'</li>';
                      }
                    ?>
                  </ul>
              </div>
                <div class="col-sm-4">
                  <ul>
                    <?php
                      foreach ($features_col_2 as $sub_key => $sub_value) {
                        echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i>'.$sub_value.'</li>';
                      }
                    ?>
                  </ul>
              </div>
                <div class="col-sm-4">
                  <ul>
                      <?php
                      foreach ($features_col_3 as $sub_key => $sub_value) {
                        echo '<li><i class="fa fa-caret-right" aria-hidden="true"></i>'.$sub_value.'</li>';
                      }
                    ?>
                  </ul>
              </div>
              </div>
              
            </div>
            <div class="p-box p-floreplan">
              
              <h4>Floor Plan & Other Attachments</h4>
              <div class="owl-outer">
                <div id="owl-floor-plan" class="owl-carousel owl-theme">

                  <?php

                    foreach (get_post_meta(get_the_id(),'attachments') as $key => $value) {
                    echo '<div class="item"><img src="'.wp_get_attachment_image_src($value,'realtor_attachments')[0].'" width="185" height="auto" alt="" /></div>                                ';
                    }

                  ?>
                </div>
                <a href="javascript:;" class="left-arrow"><span class="ti-arrow-circle-left"></span></a><a href="javascript:;" class="right-arrow"><span class="ti-arrow-circle-right"></span></a>
              </div>
              <div class="custom-galery">
                <input class="no-icheck gal" type="checkbox" id="op">
                <div class="lower"></div>
                <div class="overlay overlay-hugeinc">
                  <label for="op"></label>
                  <nav>
                    <!-- Owl carousel -->
                    <div class="owl-carousel owl-theme carousel-full-width owl-demo-3">
                      <?php

                        foreach (get_post_meta(get_the_id(),'attachments') as $key => $value) {
                          echo '<div class="item" style="background-image: url(\''.wp_get_attachment_image_src($value,'realtor_attachments')[0].'\');"></div>';
                        }

                      ?>
                    </div>
                    <!-- End Owl carousel -->
                    <div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-chevron-left"></i></div><div class="owl-next" style=""><i class="fa fa-chevron-right"></i></div></div>
                  </nav>
                </div>
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
<?php endwhile; ?>
<?php get_footer(); ?>