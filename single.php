<?php get_header();?>

    
   
     <!-- Start Posts -->
    <section class="posts">
        <!-- Get Posts Dynamically With Loop -->
        <?php  
            // Check if there are posts
            if(have_posts()){
               the_post(); 
        ?>
        <div class="post single-post">
            <!-- Make Edit Post -->            
            <?php edit_post_link('<i class="fa fa-pencil"></i> Edit'); ?>
            <!-- Start Post -->
            <div class="row">              
                <div class="col-md-6 col-sm-6 col-xs-6 ">
                    <?php the_post_thumbnail( ' ' , ['class' => 'img-responsive img-thumbnail'] );  ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 ">
                    <div class="post-header">
                        <span class="category text-uppercase"> 
                            <i class="fa fa-folder-open-o" ></i> 
                            <?php the_category(' ||  <i class="fa fa-folder-open-o" ></i> ') ?>
                        </span>
                        <h3 class="post-title">
                           <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>                       
                        <span class="post-date"> <i class="fa fa-calendar fa-fw fa-lg"></i> <?php the_time('F j, Y'); ?></span>
                        <span class="post-auther"> <i class="fa fa-user fa-fw fa-lg"></i> <?php the_author_posts_link(); ?></span>
                        <span class="post-tags"> 
                            <i class="fa fa-tags"></i>
                            <?php 
                                if(has_tag()){
                                    the_tags('<b>Tags: </b>');
                                }else{
                                    echo '<b>Tags: No Tags</b>';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-comment">
                        <div class="comment pull-left">
                            <i class='fa fa-comments-o'></i>  <?php comments_popup_link('0 Comments' , '1 Comment' , '% Comments' , 'comment' , 'Comments Locked'); ?>
                        </div>
                        <div class="share pull-right">
                            Share 
                            <i class='fa fa-twitter'></i>
                            <i class='fa fa-instagram'></i>
                            <i class='fa fa-facebook'></i>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- End Post -->
        </div>
        <?php                           
             
            } //End If Condition 

            //  Get Previous Pages 
            echo '<div class="post-pagination">';
            if(get_previous_post_link()){
                echo "<span class='prev'>"; previous_post_link('%link' , 'Previous Article: %title'); echo "</span>";
            }else{
                echo '<span class="no-prev">Previous Article: None</span>';
            }
            //  Get Next Pages 
            if(get_next_post_link()){
                echo "<span class='next'>"; next_post_link('%link' , 'Next Article: %title'); echo "</span>";
            }else{
                echo '<span class="no-next">Next Article: None</span>';
            }
            echo '</div>';

            //Display Comments
            comments_template();
        ?>

        
    </section>
    <!-- End Posts -->



   
    <div class="clearfix"></div>

    
   
<?php get_footer(); #Impement Footer and include scripts?>