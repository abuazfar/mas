<style>
    .parallax {
        /* The image used */
        background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() . '/images/kelas.jpg' ); ?>);

        /* Set a specific height */
        height: 560px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }
</style>

<?php
/**
 * Welcome Section
*/  

$section_title  = get_theme_mod( 'education_zone_welcome_section_title' );
?>
<div class="container">
    <?php  
        $header_query = new WP_Query( 
                array( 
                        'p'         => $section_title,
                        'post_type' => 'page'
                    )
                );
            if( $section_title && $header_query->have_posts() ){ 
                while( $header_query->have_posts() ){ 
                    $header_query->the_post(); ?>
                    <div class="header-part">
                        <?php if( has_post_thumbnail() ){
                            ?>
                                <div class="image-holder">
                                    <?php the_post_thumbnail( 'university-zone-welcome-thumb', array( 'itemprop' => 'image' ) ) ?>
                                </div>
                            <?php
                            }
                        ?>
                        <div class="caption-holder">
                            <?php
                                // the_title('<h2 class="section-title">','</h2>');
                                the_content(); 
                            ?>
                            <!-- <a href="<?php the_permalink(); ?>" class="btn-readmore"><?php esc_html_e('Read More','university-zone'); ?></a> -->
                        </div>
                    </div>
                <?php   
                }
            wp_reset_postdata();
        } 
    ?>
</div>
<h2 style="text-align: center;">Data Kolektif<br>MAS Al-Irsyad Tengaran</h2>
<div class="statcounter-wrap parallax">
    <?php 
    $first_stats_number  = get_theme_mod( 'education_zone_first_stats_number' );
    $first_stats_title   = get_theme_mod( 'education_zone_first_stats_title' );
    $second_stats_number = get_theme_mod( 'education_zone_second_stats_number' );
    $second_stats_title  = get_theme_mod( 'education_zone_second_stats_title' );
    $third_stats_number  = get_theme_mod( 'education_zone_third_stats_number' );
    $third_stats_title   = get_theme_mod( 'education_zone_third_stats_title' );
    $fourth_stats_number = get_theme_mod( 'education_zone_fourth_stats_number' );
    $fourth_stats_title  = get_theme_mod( 'education_zone_fourth_stats_title' );
 
    if( $first_stats_number || $first_stats_title || $second_stats_number || $second_stats_title || $third_stats_number || $third_stats_title || $fourth_stats_number || $fourth_stats_title ){ ?>
        
        <div class="container">
        
            <div class="row">
            <?php if( $first_stats_number && $first_stats_title ){ ?>
                <div class="col">
                    <div class="text" style="padding:2px;border-radius:25px;border: 3px solid #2e3192;opacity: 0.6;">
                        <h3 class="number"><?php echo esc_html( $first_stats_number ); ?></h3>
                        <i class="fa fa-users fa-2x"></i>
                        <span><?php echo esc_html( $first_stats_title ); ?></span>            
                    </div>
                </div>
                
            <?php } if( $second_stats_number && $second_stats_title ){ ?>
                <div class="col">
                    <div class="text" style="padding:2px;border-radius:25px;border: 3px solid #2e3192;opacity: 0.6; ">
                        <h3 class="number"><?php echo esc_html( $second_stats_number ); ?></h3>
                        <i class="fa fa-chalkboard-teacher fa-2x"></i>
                        <span><?php echo esc_html( $second_stats_title ); ?></span>            
                    </div>
                </div>
                
            <?php } if( $third_stats_number && $third_stats_title ){ ?>
                <div class="col">
                    <div class="text" style="padding:2px;border-radius:25px;border: 3px solid #2e3192;opacity: 0.6; ">
                        <h3 class="number"><?php echo esc_html( $third_stats_number ); ?></h3>
                        <i class="fa fa-store-alt fa-2x"></i>
                        <span><?php echo esc_html( $third_stats_title ); ?></span>    
                    </div>
                </div>
                
            <?php }  if( $fourth_stats_number && $fourth_stats_title ){ ?>
                <div class="col">
                    <div class="text" style="padding:2px;border-radius:25px;border: 3px solid #2e3192;opacity: 0.6; ">
                        <h3 class="number"><?php echo esc_html( $fourth_stats_number ); ?></h3>
                        <i class="fa fa-user-friends fa-2x"></i>
                        <span><?php echo esc_html( $fourth_stats_title ); ?></span>
                    </div>
                </div>
                
            <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>