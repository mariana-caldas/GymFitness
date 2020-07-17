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
        $classes = new WP_Query($args);

        while($classes->have_posts()): $classes->the_post();
    ?>
        <li class="gym-class card gradient">
            <?php the_post_thumbnail('mediumSize'); ?>
            
        </li>
        <div class="card-content">
            <a href="<?php the_permalink(); ?>" title="Check the Class Description">
                <h3><?php the_title(); ?></h3>
            </a>
            <p><?php the_field('class_days'); ?></p>
            <?php
                $start_time = get_field('start_time');
                $end_time = get_field('end_time');
            ?>
            <p><?php echo $start_time . " to " . $end_time ?></p>    
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php }

?>