
    <?php the_content(); ?>

        <!-- <div class="uk-container">
                <div class="news-item uk-grid">
                    <div class="news-image uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                        <img src="http://hai/wp-content/uploads/2016/11/solutions-300x225.jpg" alt="image">
                    </div>
                    <div class="container uk-width-small-1-1 uk-width-medium-2-3 uk-width-large-2-3">
                        <h4><b>Основные вопросы, прошлой конференции</b></h4> 
                        <p>1.обеспечение безопасности конструкций а при и другая и прочай байда, связанная с нашим факультетом апечение безопасности конструкций а при и другая и прочай байда, связанная с нашим факультетом а</p> 
                    </div>
                </div>
        </div> -->

        <a class="news-item uk-panel uk-panel-box uk-panel-hover" href="">
            <div class="uk-panel-teaser">
                <img src="http://hai/wp-content/uploads/2016/11/solutions-300x225.jpg" alt="image">
            </div>
                <h4 class="uk-panel-title"><b>Основные вопросы, прошлой конференции</b></h4> 
                <p>Обеспечение безопасности конструкций а при и другая и прочай байда, связанная с нашим факультетом апечение безопасности конструкций а при и другая и прочай байда, связанная с нашим факультетом а</p> 
        </a>

    <?php 
        if( is_front_page() ){
            get_template_part('templates/bottom-section-content'); 
        }
    ?>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
