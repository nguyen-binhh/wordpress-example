<?php

/**
 * Front page template
 * 
 * @package binh
 */
get_header();
?>

<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <section class="hero">
            <div class="wrap-content">
                <?php
                // Truy vấn để lấy các bài viết có category name là "hero"
                $hero_posts_query = new WP_Query(array(
                    'category_name' => 'hero', // Tên của category
                ));

                if ($hero_posts_query->have_posts()) :
                    while ($hero_posts_query->have_posts()) : $hero_posts_query->the_post();
                ?>
                <div class="content-left">
                    <h2 class="heading">Nhi Khoa Nancy</h2>
                    <h1><?php the_title(); ?></h1>
                    <div class="paragraph">
                        <?php the_content(); ?>
                    </div>
                    <div class="content-left-btn">
                        <button class="btn">XEM THÊM</button>
                    </div>
                </div>
                <div class="content-right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-image.png"
                        class="img-fluid rounded-top" alt="">
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // reset lại truy vấn
                else :
                    echo 'Không có bài viết trong category "hero".';
                endif;
                ?>
            </div>
        </section>

        <section class="features">
            <?php
            // Truy vấn để lấy các bài viết có category là "features" (ngoại trừ bài viết đầu tiên)
            $features_posts_query = new WP_Query(array(
                'category_name' => 'features', // Tên của category
                'posts_per_page' => -1, // Lấy tất cả các bài viết trong category
                'offset' => 1 // Bỏ qua bài viết đầu tiên
            ));

            if ($features_posts_query->have_posts()) :
                // Khởi tạo mảng để lưu trữ các bài viết
                $posts_array = array();

                while ($features_posts_query->have_posts()) : $features_posts_query->the_post();
                    // Thêm bài viết vào mảng
                    $posts_array[] = $post;
                endwhile;

                // Đảo ngược thứ tự của mảng
                $posts_array = array_reverse($posts_array);

                // Hiển thị các bài viết
                foreach ($posts_array as $post) :
                    setup_postdata($post);
            ?>
            <div class="feature">
                <div>
                    <h3><?php the_title(); ?></h3>
                    <div class="feature-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
                wp_reset_postdata(); // reset lại truy vấn
            else :
                echo 'Không có bài viết trong category "features".';
            endif;
            ?>
        </section>

        <section class="specialist">
            <div class="specialist_top">
                <div class="specialist_heading">
                    <h2>Chuyên Khoa</h2>
                </div>
                <div class="specialist_btn">
                    Xem tất cả
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow-narrow-right.png"
                        class="img-fluid rounded-top" alt="">
                </div>
            </div>

            <div class="specialist_bottom">
                <p>Tại Nancy chúng tôi có đầy đủ các chuyên khoa để chăm sóc tận tâm và <br>đầy trách nhiệm.
                </p>
                <div class="specialist_bottom-img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/Illustration.png"
                        class="img-fluid rounded-top" alt="">
                </div>
                <div class="specialist_bottom-content">
                    <div class="list-card">
                        <?php
                        // Truy vấn để lấy các bài viết có category là "specialist"
                        $specialist_posts_query = new WP_Query(array(
                            'category_name' => 'specialist', // Tên của category
                            'posts_per_page' => -1 // Lấy tất cả các bài viết trong category
                        ));

                        if ($specialist_posts_query->have_posts()) :
                            // Khởi tạo mảng để lưu trữ các bài viết
                            $posts_array = array();

                            while ($specialist_posts_query->have_posts()) : $specialist_posts_query->the_post();
                                // Thêm bài viết vào mảng
                                $posts_array[] = $post;
                            endwhile;

                            // Đảo ngược thứ tự của mảng
                            $posts_array = array_reverse($posts_array);

                            // Hiển thị các bài viết
                            foreach ($posts_array as $post) :
                                setup_postdata($post);
                        ?>
                        <div class="card" style="width: 33%; height: 100%;">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-top" alt="">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <div class="card-text"><?php the_content(); ?></div>
                                <div class="card_btn">
                                    <button>Xem chi tiết</button>
                                </div>
                            </div>
                        </div>
                        <?php
                            endforeach;
                            wp_reset_postdata(); // reset lại truy vấn
                        else :
                            echo 'Không có bài viết trong category "specialist".';
                        endif;
                        ?>
                    </div>


                </div>
            </div>
        </section>

    </main>
</div>

<!-- <?php get_footer() ?> -->

<!-- <div class="card" style="width: 33%; height: 100%;">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/specialist-img-1.png"
        class="img-fluid rounded-top" alt="">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Chuyên khoa Tim mạch, phòng ngừa và bảo vệ trẻ em trước những vấn
            đề
            tim mạch</p>
        <div class="card_btn">
            <button>Xem chi tiết</button>
        </div>
    </div>
</div> -->