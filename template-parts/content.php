<div class="project-card">
        <div class="cards-side cards-side1">
        <?php
            if( is_single() ) :
                the_post_thumbnail();
            else : ?>
                <a href="<?php the_permalink( ) ?>"><?php the_post_thumbnail(); ?></a>
            <?php 
                 endif
            ?> 

            <div>
                <?php the_title( ) ?>
            </div>
        </div>
        <div class="cards-side cards-side2">
            <a>Live</a>
            <?php 
                if(!is_single()) :    ?>
                <div class="category-wrapper">
                    <i class="fas fa-folder"></i>         
                    <?php the_category(' &#183; '); ?>
                </div>
            <?php
              endif
            ?>

                    
       <?php 
            if(!is_single()) :    ?>
            <div class="tags-wrapper">
                <?php 
                $before = '';
                $seperator = ''; // blank instead of comma
                $after = '';
                
                the_tags( $before, $seperator, $after );
                ?>
            </div>
        <?php
            endif
        ?>
       </div>
    </div>
