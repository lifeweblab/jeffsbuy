<?php global $deeplive; ?>

<?php get_header(); ?>
    <div class="single_top">










    <?php while(have_posts()) : the_post(); ?>
        <div class="container">
            <div class="single_grid">
                <div class="grid images_3_of_2">
                    <ul id="etalage">
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full', array( 'class' => 'img-responsive etalage_thumb_image' )); ?>
                                <?php the_post_thumbnail('full', array( 'class' => 'img-responsive etalage_source_image' )); ?>
                                </a>
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/2.png" class="img-responsive" />
                            <img class="etalage_source_image" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/2.png" class="img-responsive" title="" />
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/3.png" class="img-responsive" />
                            <img class="etalage_source_image" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/3.png" class="img-responsive" />
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/4.png" class="img-responsive" />
                            <img class="etalage_source_image" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/4.png" class="img-responsive" />
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="desc1 span_3_of_2">
                    <ul class="back">
                        <li><i class="back_arrow"> </i>Back to <a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    </ul>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <!-- <div class="dropdown_top"> -->
                    <!-- <div class="dropdown_left"> -->
                    <!-- <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'> -->
                    <!-- <option value="0">Select size</option>	 -->
                    <!-- <option value="1">M</option> -->
                    <!-- <option value="2">L</option> -->
                    <!-- <option value="3">XL </option> -->
                    <!-- <option value="4">Fs</option> -->
                    <!-- <option value="5">S </option> -->
                    <!-- <option value="5"></option> -->
                    <!-- <option value="5"></option> -->
                    <!-- </select> -->
                    <!-- </div> -->
                    <!-- <ul class="color_list"> -->
                    <!-- <li> -->
                    <!-- <a href="#"> <span class="color1"> </span></a> -->
                    <!-- </li> -->
                    <!-- <li> -->
                    <!-- <a href="#"> <span class="color2"> </span></a> -->
                    <!-- </li> -->
                    <!-- <li> -->
                    <!-- <a href="#"> <span class="color3"> </span></a> -->
                    <!-- </li> -->
                    <!-- <li> -->
                    <!-- <a href="#"> <span class="color4"> </span></a> -->
                    <!-- </li> -->
                    <!-- <li> -->
                    <!-- <a href="#"> <span class="color5"> </span></a> -->
                    <!-- </li> -->
                    <!-- </ul> -->
                    <!-- <div class="clearfix"></div> -->
                    <!-- </div> -->
                    <!-- <div class="simpleCart_shelfItem"> -->
                    <!-- <div class="price_single"> -->
                    <!-- <div class="head"> -->
                    <!-- <h2><span class="amount item_price">$45.00</span></h2> -->
                    <!-- </div> -->
                    <!-- <div class="head_desc"><a href="#">12 reviews</a><img src="images/review.png" alt="" /></li> -->
                    <!-- </div> -->
                    <!-- <div class="clearfix"></div> -->
                    <!-- </div> -->
                    <!-- <div class="single_but"><a href="" class="item_add btn_3" value=""></a></div> -->
                    <!-- <div class="size_2-right"><a href="#" class="item_add item_add1 btn_5" value="" />Add to Cart </a> -->
                    <!-- </div> -->

                    <!-- </div> -->
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- <div class="single_social_top"> -->
            <!-- <ul class="single_social"> -->
            <!-- <li> -->
            <!-- <a href="#"> <i class="s_fb"> </i> -->
            <!-- <div class="social_desc">Share<br> on facebook</div> -->
            <!-- <div class="clearfix"> </div> -->
            <!-- </a> -->
            <!-- </li> -->
            <!-- <li> -->
            <!-- <a href="#"> <i class="s_twt"> </i> -->
            <!-- <div class="social_desc">Tweet<br> this product</div> -->
            <!-- <div class="clearfix"> </div> -->
            <!-- </a> -->
            <!-- </li> -->
            <!-- <li> -->
            <!-- <a href="#"> <i class="s_google"> </i> -->
            <!-- <div class="social_desc">Google+<br> this product</div> -->
            <!-- <div class="clearfix"> </div> -->
            <!-- </a> -->
            <!-- </li> -->
            <!-- <li class="last"> -->
            <!-- <a href="#"> <i class="s_email"> </i> -->
            <!-- <div class="social_desc">Email<br> a Friend</div> -->
            <!-- <div class="clearfix"> </div> -->
            <!-- </a> -->
            <!-- </li> -->
            <!-- </ul> -->
            <!-- </div> -->
            <ul class="menu_drop">
                <li class="item1">
                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/product_arrow.png">Description</a>
                    <ul>
                        <li class="subitem2"><?php the_content(); ?> </li>
                    </ul>
                </li>
                <li class="item3">
                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/product_arrow.png">Additional information</a>
                    <ul>
                        <li class="subitem2"><?php the_content(); ?></li>
                    </ul>
                </li>
                <li class="item5">
                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/product_arrow.png">Reviews</a>
                    <ul>
                        <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </a></li>
                        <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore </a></li>
                        <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    <?php endwhile; ?>











        <h3 class="m_2">Related Products</h3>
        <div class="container">
            <div class="box_3">
                <div class="col-md-3">
                    <div class="content_box">
                        <a href="single.html">
                            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/1080x1440.png" class="img-responsive" alt="Onno Products">
                        </a>
                    </div>
                    <h4><a href="single.html">Products er Title One</a></h4>
                    <!-- <p>$ 199</p> -->
                </div>
                <div class="col-md-3">
                    <div class="content_box">
                        <a href="single.html">
                            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/1080x1440.png" class="img-responsive" alt="Onno Products">
                        </a>
                    </div>
                    <h4><a href="single.html">products er Title Two</a></h4>
                    <!-- <p>$ 199</p> -->
                </div>
                <div class="col-md-3">
                    <div class="content_box">
                        <a href="single.html">
                            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/1080x1440.png" class="img-responsive" alt="Onno Products">
                        </a>
                    </div>
                    <h4><a href="single.html">Products er Title Three</a></h4>
                    <!-- <p>$ 199</p> -->
                </div>
                <div class="col-md-3">
                    <div class="content_box">
                        <a href="single.html">
                            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/1080x1440.png" class="img-responsive" alt="Onno Products">
                        </a>
                    </div>
                    <h4><a href="single.html">Products er Title Four</a></h4>
                    <!-- <p>$ 199</p> -->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!--------------Footer--------------->
<?php get_footer(); ?>