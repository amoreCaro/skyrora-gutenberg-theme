<section id="section-<?php echo get_row_index(); ?>" class="banner--landing banner--description section banner js-viewport-checker">
    <?php if (get_field('innovation_media_type') === 'video') { ?>
        <div class="banner__video">
            <video autoplay playsinline muted loop class="bv-video">
                <source src="<?php skyrora_print_escaped_field('innovation_video', 'url'); ?>" type="video/mp4" />
            </video>
        </div>
    <?php } else { ?>
        <div id="bannerVideoId"
            data-src="<?php skyrora_print_escaped_field('innovation_image', 'url'); ?>"
            class="banner__video banner--image">
            <div class="bv-video-wrap bv-video-wrap-0" style="position: relative; overflow: hidden; z-index: 10;">
                <video autoplay playsinline muted loop
                    poster="<?php skyrora_print_escaped_field('innovation_image', 'url'); ?>"
                    class="bv-video"
                    preload="metadata"
                    style="position: absolute; z-index: 1;">

                    <source src="<?php skyrora_print_escaped_field('innovation_image', 'url'); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    <?php } ?>

    <div class="container">
        <div class="banner__content">
            <div class="banner__content-txt">

                <?php if (get_field('innovation_pretitle')) { ?>
                    <span class="title-sub">
                        <?php skyrora_print_escaped_field('innovation_pretitle')  ?>
                    </span>
                <?php } ?>

                <?php if (get_field('innovation_title')) { ?>
                    <h1>
                        <?php skyrora_print_escaped_field('innovation_title')  ?>
                    </h1>
                <?php } ?>

                <?php if (get_field('innovation_content')) { ?>
                    <p>
                        <?php skyrora_print_escaped_field('innovation_content')  ?>
                    </p>
                <?php } ?>
            </div>

            <?php if (have_rows('innovation_list')) : ?>
                <div class="banner__content-list">
                    <ul>

                        <?php while (have_rows('innovation_list')) : the_row(); ?>

                            <?php $text = get_sub_field('innovation_list_text'); ?>

                            <?php if ($text) : ?>
                                <li>
                                    <a href="#">
                                        <?php skyrora_print_escaped_field($text); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                        <?php endwhile; ?>

                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>