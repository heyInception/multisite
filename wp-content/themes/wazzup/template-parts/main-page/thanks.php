<section class="thanks">
    <div class="container">
        <div class="thanks__row thanks__row_padding">
            <div class="thanks__column ">
                <div class="thanks__title">
                    <h2><?php _e('Продавцы скажут вам «спасибо»', 'wazzup'); ?></h2>
                </div>
                <div class="thanks__subtitile"><?php _e('Работать в CRM станет проще, быстрее и удобнее. В системе будет полный порядок, а продавцы не будут делать для этого дополнительной работы.', 'wazzup'); ?></div>
                <div class="thanks__widget">
                    <div class="thanks__wrap">
                        <span><?php _e('Им больше <br> не нужно', 'wazzup'); ?></span>
                    </div>
                </div>
                <div class="thanks__row">
                    <div class="thanks__tabs">
                        <div class="tabs" data-tabs="thanks">
                            <ul class="tabs__nav">
                                <?php if (have_rows('tabs_thanks')) : ?>
                                    <?php while (have_rows('tabs_thanks')) : the_row(); ?>
                                        <li class="tabs__nav-item"><button class="tabs__nav-btn" type="button"><?php the_sub_field('title'); ?></button></li>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <?php // no rows found 
                                    ?>
                                <?php endif; ?>
                            </ul>
                            <div class="tabs__content">
                                <?php if (have_rows('tabs_thanks')) : ?>
                                    <?php while (have_rows('tabs_thanks')) : the_row(); ?>
                                        <div class="tabs__panel">
                                            <div class="tabs__wrap">
                                                <div class="thanks__head"><?php the_sub_field('content_title'); ?></div>
                                                <div class="thanks__text">
                                                    <?php the_sub_field('content'); ?>
                                                </div>
                                            </div>
                                            <?php $img = get_sub_field('img'); ?>
                                            <?php if ($img) : ?>
                                                <div class="tabs__wrap">
                                                    <div class="thanks__img">
                                                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <?php // no rows found 
                                    ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="thanks__accordion">
                        <?php if (have_rows('tabs_thanks')) : ?>
                            <?php while (have_rows('tabs_thanks')) : the_row(); ?>
                                <div class="thanks__item">
                                    <div class="thanks__heading" data-accordion-element-trigger><span><?php the_sub_field('title'); ?></span></div>
                                    <div data-accordion-element-content class="thanks__content">
                                        <div class="thanks__head"><?php the_sub_field('content_title'); ?></div>
                                        <div class="thanks__text">
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                        <?php $img = get_sub_field('img'); ?>
                                        <?php if ($img) : ?>
                                            <div class="tabs__wrap">
                                                <div class="thanks__img">
                                                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found 
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="thanks__button">
                    <?php echo do_shortcode('[wz-translate language="ru_RU"]<a href=""><button class="btn-reset btn-green btn-main">' . __('Попробывать бесплатно', 'wazzup') . '</button></a>[/wz-translate]') ?>
                    <?php echo do_shortcode('[wz-translate language="en_US"]<a href=""><button class="btn-reset btn-green btn-main">' . __('Попробывать бесплатно', 'wazzup') . '</button></a>[/wz-translate]') ?>
                </div>
            </div>
        </div>
    </div>
</section>