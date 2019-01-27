<?php get_header(); ?>
              <div class = "parallax">
                <main class="main"> 
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/main.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/main02.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/main03.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                </main>
          </div>
          <article>
              <section class="news">
                    <h2 class="category">NEWS</h2>
                    <div class="frame">
                        <h3>新着情報</h3>
                        <ul class="list-unstyled">
                            <?php
                            $myposts = get_posts('category_name=news&posts_per_page=5');
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                <li>
                                    <span class="date"><?php the_time('Y/m/d'); ?></span>
                                    <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                </li>
                                <?php endforeach;
                            wp_reset_postdata();?>
                        </ul>   
                    </div>
                    <div class="linkbox"><a href="staffblog.php">READ MORE</a></div>
              </section>  
              <section class="pilates">
                  <h2 class="category">ピラティスとは？</h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pilaties.jpg" alt="ピラティスとは" width="500">
                  <p>ピラティスとは身体と頭と心の調和を中心としたエクササイズであり、第一に身体に対する感覚・意識・知識を
                      高め、自身の身体を見つめ直し、エクササイズを通して、姿勢、筋肉の使い方・動き方を改善していくメソッドです。
                  </p>
                  <p class="fontL">【ピラティスの主な効果】</p>
                  <p>
                  柔軟性・関節の可動域を高めること、筋肉のバランスを整えること、腰痛、肩こり等の慢性疲労の緩和や身心の緊張をほぐす効果があります。
                  </p>
                  <div class="linkbox"><a href="pilaties.php">READ MORE</a></div>
              </section>
              <section class="acoa">
                  <h2 class="category">アコアについて</h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/acoa.jpg" alt="アコアについて" width="500">
                  <p>アコアは2005年9月に青山・表参道にマシンピラティス専門の本格的スタジオとしてオープンいたしました。</p>
                  <p>フィットネスクラブや多くのピラティススタジオで行われているマットピラティスのグループとは異なり、アコアでは安全に・効果的に・効率的に理想の身体
                      動きに近づけるよう、お客様一人ひとりに合わせた完全パーソナル、カスタムメイドなプライベートレッスンを行っています。
                  </p>
                  <div class="linkbox"><a href="first.php">READ MORE</a></div>
              </section>
          <section class="graph">
              <h2 class="category">アコアの特徴</h2>
              <div class="graph__area01">
                  <p><i class="fas fa-tag"></i>アコアレッスン満足度</p>
                  <canvas id="graph__area01--my-chart">Canvas not suppoted....</canvas>
              </div>
              <div class="graph__area02">
                  <p><i class="fas fa-tag"></i>アコア男女比</p>
                  <canvas id="graph__area02--my-chart">Canvas not suppoted....</canvas>
              </div>
              <div class="graph__area03">
                  <p><i class="fas fa-tag"></i>レッスン参加者年代</p>
                  <canvas id="graph__area03--my-chart">Canvas not suppoted....</canvas>
              </div>
              <div class="graph__area04">
                  <p><i class="fas fa-tag"></i>参加のきっかけとなった悩み</p>
                  <canvas id="graph__area04--my-chart">Canvas not suppoted....</canvas>
              </div>
          </section>
          </article>
          <?php get_footer();?>
         