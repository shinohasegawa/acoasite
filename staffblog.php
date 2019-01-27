<?php get_header(); ?>
<!-- メインイメージ -->
<div id="aicatch"><img src="<?php echo get_template_directory_uri(); ?>/images/secondary.jpg" alt="アコア"></div>
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


<!-- 事業案内 -->
<section>
 <?php
        $args = array(
         'include' => array(8)
         ); ?>
         <?php $my_posts = get_pages( $args ); ?>
         <?php
         foreach ( $my_posts as $post ) :
           setup_postdata( $post ); ?>
           <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
       <?php endforeach;?>
       <?php wp_reset_postdata(); ?>
<div class="row">
<?php
  $mypages = get_pages( array( 'post_type' => 'page','sort_order' => 'asc','child_of' => 8) );

  foreach( $mypages as $post ):setup_postdata($post); ?>
  <section class="col-md-4">
    <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail_top',
             array('alt' => the_title_attribute('echo=0'),
             'class' => 'img-fluid mx-auto d-block')); ?>
           </a>
    <p class="entry"><?php echo get_the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">[詳細ページへ]</a></p>
    
  </section>
  <?php endforeach; ?>

</div>	
</section>
<!-- 事業案内終了 -->

    </div>
    </article>	

<?php get_footer(); ?>