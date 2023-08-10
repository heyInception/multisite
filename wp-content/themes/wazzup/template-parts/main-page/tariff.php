<section id="plan" class="tariff">
    <div class="container">
        <div class="tariff__row tariff__row_padding">
            <div class="tariff__title">
                <h2><?php _e('Выберите свой тариф', 'wazzup'); ?></h2>
            </div>
            <div class="tariff__row">
                <div class="tabs" data-tabs="tariff">
                    <ul class="tabs__nav">
                        <?php if (have_rows('tariff_tabs')) : ?>
                            <?php while (have_rows('tariff_tabs')) : the_row(); ?>
                                <li class="tabs__nav-item"><button class="tabs__nav-btn" type="button"><?php the_sub_field('title_tab'); ?></button></li>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found 
                            ?>
                        <?php endif; ?>
                    </ul>
                    <div class="tabs__content">
                        <?php if (have_rows('tariff_tabs')) : ?>
                            <?php while (have_rows('tariff_tabs')) : the_row(); ?>
                                <?php if (have_rows('tariff_card')) : ?>
                                    <div class="tabs__panel">
                                        <?php while (have_rows('tariff_card')) : the_row(); ?>
                                            <div class="tariff__card">
                                                <div class="tariff__name <?php if (get_sub_field('tariff_popular') == 1) echo 'tariff__name_pro' ?>"><?php the_sub_field('tariff_name'); ?></div>
                                                <?php if (get_sub_field('tariff_popular') == 1) : ?>
                                                    <div class="tariff__popular"><span>Популярный</span></div>
                                                <?php else : ?>
                                                    <?php // echo 'false'; 
                                                    ?>
                                                <?php endif; ?>
                                                <div class="tariff__price">
                                                    <div class="wz-price">
                                                        <span><?php the_sub_field('tariff_price'); ?></span>
                                                        <span class="currency">₽</span>
                                                    </div>
                                                    <?php if (get_sub_field('tariff_price_old')) : ?>
                                                        <del><?php the_sub_field('tariff_price_old'); ?> ₽</del>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="tariff__price-description">
                                                    <span><?php the_sub_field('tariff_price_description'); ?></span>
                                                    <span class="tooltip">
                                                        <button class="tooltip__btn" id="popcorn" aria-describedby="vigodno"><img src="<?php echo get_template_directory_uri(); ?>/img/wz-tariff-open.svg" alt="">
                                                            <span class="tooltip__txt" role="tooltip" id="tooltip">
                                                                <span><?php the_sub_field('tariff_price_tooltip'); ?></span>
                                                            </span>
                                                        </button>
                                                    </span>
                                                </div>
                                                <div class="tariff__divider">
                                                    <span></span>
                                                </div>
                                                <ul class="tariff__list">
                                                    <?php if (have_rows('tariff_list_1')) : ?>
                                                        <?php while (have_rows('tariff_list_1')) : the_row(); ?>
                                                            <li class="tariff__list-item">
                                                                <div class="tariff__icon <?php the_sub_field('tariff_icon'); ?>"></div>
                                                                <div class="tariff__content"><?php the_sub_field('tariff_content'); ?></div>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                    <?php if (have_rows('tariff_list_2')) : ?>
                                                        <?php while (have_rows('tariff_list_2')) : the_row(); ?>
                                                            <li class="tariff__list-item">
                                                                <div class="tariff__icon <?php the_sub_field('tariff_icon'); ?>"></div>
                                                                <div class="tariff__content"><?php the_sub_field('tariff_content'); ?></div>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                    <?php if (have_rows('tariff_list_3')) : ?>
                                                        <?php while (have_rows('tariff_list_3')) : the_row(); ?>
                                                            <li class="tariff__list-item">
                                                                <div class="tariff__icon <?php the_sub_field('tariff_icon'); ?>"></div>
                                                                <div class="tariff__content">
                                                                    <?php the_sub_field('tariff_content'); ?>
                                                                    <span class="tooltip">
                                                                        <button class="tooltip__btn" id="reference" aria-describedby="vigodno"><img src="<?php echo get_template_directory_uri(); ?>/img/wz-tariff-open.svg" alt="">
                                                                            <span class="tooltip__txt" role="tooltip" id="tooltipTwo">
                                                                                <span><?php the_sub_field('tariff_list_tooltip'); ?></span>
                                                                            </span>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                                <?php $tariff_button = get_sub_field('tariff_button'); ?>
                                                <?php if ($tariff_button) : ?>
                                                    <div class="tariff__button">
                                                        <a href="<?php echo esc_url($tariff_button['url']); ?>" target="<?php echo esc_attr($tariff_button['target']); ?>"><button class="btn-reset btn-main btn-green"><?php echo esc_html($tariff_button['title']); ?></button></a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php else : ?>
                                    <?php // no rows found 
                                    ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found 
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>