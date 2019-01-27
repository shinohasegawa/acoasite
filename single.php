<?php get_header(); ?>
<!-- メインイメージ -->
<div id="aicatch"><img src="<?php echo get_template_directory_uri(); ?>/images/single.jpg" alt="アコア" width="1600"></div>
      <div id="bread">
          <ul class="breadcrumb">
              <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="/" itemprop="url">
                  <span itemprop="title">ホーム</span>
                  </a>
              </li>
              <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <span itemprop="title">スタッフブログ</span>
              </li>
              <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <span itemprop="title"><?php the_title(); ?></span>
              </li>
          </ul>
      </div>
<!-- メインイメージ終了 -->
<!-- コンテンツ -->
<h2>スタッフブログ</h2>
<article id="secondary">
    <section class="single">
      <?php  if (have_posts()):
        while (have_posts()) : the_post(); ?>        
        <h3><?php the_title(); ?></h3>         
      <?php the_content();        
      endwhile;       
      endif; ?> 

      <?php    
        if (have_posts()):      
        while(have_posts()):the_post();         
        get_template_part( 'content', get_post_format() );     
        endwhile; 
        endif; ?>


  <div class="pagenav">          
    <span class="old"><?php previous_post_link('%link' ); ?></span>          
    <span class="new"><?php next_post_link('%link' ); ?></span>  
  </div>
  </section>
  </article> 

<!-- コンテンツ終了 -->
<?php get_footer(); ?>