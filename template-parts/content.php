<div class="project-card">
        <div class="cards-side cards-side1">
            <?php the_post_thumbnail(); ?>
          
            <div class="card-title">
                <?php the_title( ) ?>
            </div>
        </div>
        <div class="cards-side cards-side2">
            <a>Live</a>
            <?php 
                if(!is_single()) :    ?>
                <div class="category-wrapper">       
                    <?php the_content(); ?>
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
