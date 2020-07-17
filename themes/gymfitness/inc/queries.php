<?php

function gymfitness_classes_list(){ ?>
  <ul class="classes-list">
    <?php 
        $args = array(
            'post_type' => 'gymfitness-classes',
            'post_status' => 'publish',
            'orderby' => 'title', 
            'order' => 'ASC', 
        );   
        $theClasses = new WP_Query($args);

        while($theClasses->have_posts()): $theClasses->the_post();
    ?>
        <li class="gym-class card gradient">
            <?php the_post_thumbnail('mediumSize'); ?>
            
        </li>
        <div class="card-content">
            <a href="<?php the_permalink(); ?>" title="Check the Class Description">
                <h3><?php the_title(); ?></h3>
            </a>    
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php }

?>