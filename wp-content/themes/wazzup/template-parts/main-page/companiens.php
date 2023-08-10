<section class="companiens">
    <div class="container">
        <div class="companiens__row">
            <div class="companiens__column">
                <div class="companiens__title">
                    <h4><?php _e('Лидер на рынке интеграций мессенджеров — <span class="companiens__title_green">14 000 компаний </span>уже с нами', 'wazzup'); ?></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="companiens companiens_light-green">
    <div class="container">
        <div class="companiens__row companiens__row_imgs">
            <div class="companiens__column companiens__column_imgs">
                <?php if (have_rows('companiens_images')) : ?>
                    <?php while (have_rows('companiens_images')) : the_row(); ?>
                        <?php $img = get_sub_field('img'); ?>
                        <?php if ($img) : ?>
                            <div class="companiens__img">
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found 
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>