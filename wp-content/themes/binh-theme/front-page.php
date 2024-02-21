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
        <!-- HERO -->
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

        <!-- FEATURES -->
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

        <!-- SPECIALIST -->
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
                        <div class="card" style="width: 315px; height: 100%;">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-top"
                                alt="">
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

        <!--  DOCTORS  -->
        <section class="doctors">
            <div class="doctor_background-left">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/decord.png"
                    class="img-fluid rounded-top" alt="">
            </div>
            <div class="doctor_background-right">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/decord-2.png"
                    class="img-fluid rounded-top" alt="">
            </div>
            <div class="doctors_wrap-top">
                <div class="doctors_left">
                    <div class="doctors_left-heading">
                        <h2>Tham vấn <br>
                            Bác sĩ</h2>
                    </div>
                    <div class="doctors_left-nav">
                        <ul class="doctors_left-list">
                            <li class="doctors_left-item">
                                <span class="doctors_left-item-link active">Tất cả</span>
                            </li>
                            <li class="doctors_left-item">
                                <span class="doctors_left-item-link">Dinh dưỡng</span>
                            </li>
                            <li class="doctors_left-item">
                                <span class="doctors_left-item-link">Tim Mạch</span>
                            </li>
                            <li class="doctors_left-item">
                                <span class="doctors_left-item-link">Tổng Quát</span>
                            </li>
                            <li class="doctors_left-item">
                                <span class="doctors_left-item-link">Xương khớp</span>
                            </li>
                        </ul>
                        <div class="doctors_left-desc">
                            <span>Phòng khám đa khoa chúng tôi có những Bác sĩ hàng đầu trong lãnh vực<br> chăm sóc sức
                                khoẻ
                                nhi
                                nói riêng và các lãnh vực khám bệnh nói chung.<br> Các Bác sĩ nổi tiếng với trên 20 kinh
                                nghiệm...</span>
                        </div>
                    </div>

                </div>

                <div class="doctors_right">
                    <?php
                    // Truy vấn để lấy các bài viết có category là "doctors"
                    $doctors_posts_query = new WP_Query(array(
                        'category_name' => 'doctors', // Tên của category
                        'posts_per_page' => -1 // Lấy tất cả các bài viết trong category
                    ));

                    if ($doctors_posts_query->have_posts()) :
                        while ($doctors_posts_query->have_posts()) : $doctors_posts_query->the_post();
                    ?>
                    <div class="doctors_right-item">
                        <div class="doctors_right-item-img">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" class="img-fluid"
                                alt="">
                            <?php endif; ?>
                        </div>
                        <div class="doctors_right-item-content">
                            <h4 class="doctors_right-item-content-heading"><?php the_title(); ?></h4>
                            <div class="doctors_right-item-content-desc"><?php the_content(); ?></div>
                            <div class="doctors_right-item-content-bottom">
                                <div class="doctors_right-item-content-bottom-rating">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                        class="img-fluid" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                        class="img-fluid" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                        class="img-fluid" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                        class="img-fluid" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="doctors_right-item-content-bottom-btn">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/dot-btn.png"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // Reset lại truy vấn
                    else :
                        echo 'Không có bài viết trong category "doctors".';
                    endif;
                    ?>
                </div>
            </div>
            <div class="doctor_wrap-banner">
                <div class="doctor_wrap-banner-content">
                    <div class="doctor_wrap-banner-content-left">
                        <h2 class="doctor_wrap-banner-content-left-title">
                            Sử dụng tiện ích đặt ký khám ?
                        </h2>
                        <h3 class="doctor_wrap-banner-content-left-heading">
                            Cùng Phòng khám Nancy trải nghiệm dịch vụ mới.
                        </h3>
                    </div>
                    <div class="doctor_wrap-banner-content-right">
                        <div class="doctor_wrap-banner-content-right-btn">
                            <button>Đăng ký khám ngay !</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="doctor_wrap-comment">
                <div class="doctor_wrap-comment-top">
                    <h2 class="doctor_wrap-comment-top-heading">
                        Niềm tin - Chất lượng - Hạnh phúc
                    </h2>
                    <p class="doctor_wrap-comment-top-desc">
                        Chất lượng phục vụ tốt luôn là nền móng của niềm tin! Phòng khám Nhi khoa Nancy<br> chúng tôi
                        luôn chú trọng chất lượng phục vụ và chất lượng chăm sóc sức khoẻ để<br> Quý khách hàng luôn
                        vững tin vào phòng khám
                    </p>
                </div>
                <div class="doctor_wrap-comment-bottom">
                    <?php
                    // Truy vấn để lấy các bài viết có category là "comments"
                    $comments_posts_query = new WP_Query(array(
                        'category_name' => 'comments', // Tên của category
                        'posts_per_page' => -1 // Lấy tất cả các bài viết trong category
                    ));

                    if ($comments_posts_query->have_posts()) :
                        while ($comments_posts_query->have_posts()) : $comments_posts_query->the_post();
                    ?>
                    <div class="doctor_wrap-comment-bottom-item">
                        <div class="doctor_wrap-comment-bottom-item-rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star.png"
                                class="img-fluid" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/star-empty.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="doctor_wrap-comment-bottom-item-desc">
                            <?php the_content(); ?>
                        </div>
                        <div class="doctor_wrap-comment-bottom-item-user">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" class="img-fluid"
                                alt="">
                            <?php endif; ?>
                            <div class="doctor_wrap-comment-bottom-item-user-name">
                                Khách hàng<br>
                                <?php the_title(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // Reset lại truy vấn
                    else :
                        echo 'Không có bài viết trong category "comments".';
                    endif;
                    ?>

                </div>
                <div class="doctor_wrap-comment-bottom-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/icon-slider.png"
                        class="img-fluid rounded-top" alt="">
                </div>
            </div>
        </section>

    </main>
</div>
<script>
const links = document.querySelectorAll(".doctors_left-item-link");

links.forEach((link) => {
    link.addEventListener("click", function(event) {
        links.forEach((link) => {
            link.classList.remove("active");
        });
        this.classList.add("active");
    });
});
</script>

<?php get_footer() ?>