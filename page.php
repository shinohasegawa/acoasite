<?php get_header(); ?>
<!-- メインイメージ -->
<div id="aicatch"><img src="<?php echo get_template_directory_uri(); ?>/images/page.jpg" alt="アコア"></div>
<!-- メインイメージ終了 -->
<?php  if (have_posts()):
    while (have_posts()) : the_post(); ?>        
    <h2><?php the_title(); ?></h2>
    <article id="secondary">
      <div id="bread">
          <ul class="breadcrumb">
              <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="/" itemprop="url">
                  <span itemprop="title">ホーム</span>
                  </a>
              </li>
              <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <span itemprop="title"><?php the_title(); ?></span>
              </li>
          </ul>
      </div>

<!-- コンテンツ -->      
 
  <?php
    $myposts = get_posts('category_name=news&posts_per_page=5');
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php endforeach;
    wp_reset_postdata();?>
    <?php the_content();        
  endwhile;       
  endif; ?>

  <!--ブログページ用-->
<?php if(is_page( array( 516 ) ) ): ?>
<?php
    $myposts = get_posts('category_name=news&posts_per_page=9');
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <ul class="staffblog">
        <li>
            <span class="date"><?php the_time('Y/m/d'); ?></span>
            <span class="title">
            <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            <p class="blogimg">
            <?php the_post_thumbnail('thumbnail'); ?></p></a></span>
            <p class="entry"><?php echo get_the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>">[詳細ページへ]</a></p>
        </li>
    </ul> 
        <?php endforeach;
        wp_reset_postdata();?>

<?php else: ?>

<?php endif; ?>

</article>
<?php get_footer(); ?>