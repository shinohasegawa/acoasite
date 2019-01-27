<?php get_header(); ?>
              <div class = "parallax">
                <main class="main"> 
                    <p><img src="<?php echo get_template_directory_uri(); ?>/images/main.jpg" alt="アコア" id="target"></p>
                    <i class="fas fa-angle-left" id="prev"></i>
                    <i class="fas fa-angle-right" id="next"></i>
                    <nav class="main__nav">
                        <ul id="thumbnails">
                        <!-- <li><img src="<?php echo get_template_directory_uri(); ?>/images/main.jpg" alt="アコア" id="target"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/main02.jpg" alt="アコア" id="target"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/main03.jpg" alt="アコア" id="target"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/main04.jpg" alt="アコア" id="target"></li> -->
                        </ul>
                        <div id="play">
                        <i class="fa fa-play" aria-hidden="true"></i>再生
                        </div>
                        <div id="pause" class="hidden">     
                        <i class="fa fa-pause" aria-hidden="true"></i>停止
                        </div>
                    </nav>
                </main>
          </div>
          <article>
              <section class="news">
                    <h2 class="category">NEWS</h2>
                    <div class="frame">
                        <h3>新着情報</h3>
                        <dl>
                            <dt>2018年11月18日</dt>
                            <dd><span><a href="">【新スタジオにて再出発です。】</a></span><br>
                                11月18日（日）より、青山高野ビル6階へお引越し後、リニューアルオープンとなります。</dd>
                            <dt>2018年10月27日</dt>
                            <dd><span><a href="">【移転日詳細のご案内】</a></span><br>
                            移転日の詳細が決定いたしました。</dd>
                            <dt>2018年10月24日</dt>
                            <dd><span><a href="">【web予約ページ、緊急システムメンテナンスのご案内】</a></span><br>
                            10月27日（土）終日、緊急システムメンテナスによりサービス停止とさせていただきます。</dd>
                            <dt>2018年11月1日</dt>
                            <dd><span><a href="">【スタジオ移転のご案内。】</a></span><br>
                            ピラティススタジオアコアは、新スタジオへ移転し、営業することとなりました。</dd>
                            <dt>2018年11月1日</dt>
                            <dd><span><a href="">【12月の予約開始のご案内】</a></span><br></dd>
                        </dl>
    
                    </div>
                    <div class="slide">
                        <h3>スタッフブログ</h3>
                        <div class="slide__arw slide__arw--prev" id="slide__arw--prev"></div>
                        <div class="slide__arw slide__arw--next" id="slide__arw--next"></div>
                        <ul class="slide__list">
                            <li class="slide__list--item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/news01.jpg" alt="1" width="400"><p>アコアのレッスンについて</p></a></li>
                            <li class="slide__list--item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/news02.jpg" alt="2" width="400"><p>リハビリについて</p></a></li>
                            <li class="slide__list--item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/news03.jpg" alt="3" width="400"><p>男性の参加者も意外と多い</p></a></li>
                            <li class="slide__list--item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/news04.jpg" alt="4" width="400"><p>ピラティスを始めたきっかけ</p></a></li>
                            <li class="slide__list--item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/news05.jpg" alt="5" width="400"><p>マシンピラティスとは</p></a></li>
                            <li class="slide__list--item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/news07.jpg" alt="7" width="400"><p>場所のご案内</p></a></li>
                        </ul>
                    </div>
              </section>  
              <section class="pilates">
                  <h2 class="category">ピラティスとは？</h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pilates.jpg" alt="ピラティスとは" width="500">
                  <p>ピラティスとは身体と頭と心の調和を中心としたエクササイズであり、第一に身体に対する感覚・意識・知識を
                      高め、自身の身体を見つめ直し、エクササイズを通して、姿勢、筋肉の使い方・動き方を改善していくメソッドです。
                  </p>
                  <p class="fontL">【ピラティスの主な効果】</p>
                  <p>
                  柔軟性・関節の可動域を高めること、筋肉のバランスを整えること、腰痛、肩こり等の慢性疲労の緩和や身心の緊張をほぐす効果があります。
                  </p>
                  <div class="linkbox"><a href="">READ MORE</a></div>
              </section>
              <section class="acoa">
                  <h2 class="category">アコアについて</h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/acoa.jpg" alt="アコアについて" width="500">
                  <p>アコアは2005年9月に青山・表参道にマシンピラティス専門の本格的スタジオとしてオープンいたしました。</p>
                  <p>フィットネスクラブや多くのピラティススタジオで行われているマットピラティスのグループとは異なり、アコアでは安全に・効果的に・効率的に理想の身体
                      動きに近づけるよう、お客様一人ひとりに合わせた完全パーソナル、カスタムメイドなプライベートレッスンを行っています。
                  </p>
                  <div class="linkbox"><a href="">READ MORE</a></div>
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
         