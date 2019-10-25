<?php get_header(); ?>

  <main class="l-main">
    <div class="l-hero">
      <picture class="hero__image">
        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-sp.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-sp@2x.jpg 2x" media="(max-width: 767px)">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero.jpg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero@2x.jpg 2x" alt="板野なおのポートフォリオサイト">
      </picture>
      <div class="hero__body">
        <p class="l-hero__title"><span class="hero__tag">&lt;em&gt;</span><span class="hero__em">やさしい</span><span
            class="hero__tag">&lt;/em&gt;</span><br><span
            class="hero__text">フロントエンドエンジニアを目指して<?php
            $date = '2019-08-01 15:00:00';
            $day1 = new Datetime($date);
            $day2 = new Datetime();
            $day1 ->modify('noon');
            $day2 ->modify('noon');
            $interval = $day2->diff($day1);
            $interval_day = (int)$interval->format('%a');
            echo esc_html("{$interval_day}日");
            ?>
            </span><br><span class="hero__name">板野なおのポートフォリオサイト</span>
        </p>
      </div>
    </div>
    <!-- /.l-hero -->
    <section class="l-section l-container">
      <div class=" l-update">
        <h2 class="heading -tertiary">ポートフォリオ更新履歴</h2>
        <dl class="update__wrap">
        <?php
          $loop = new WP_Query(array("post_type" => "update"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post(); ?>

            <dt class="update__date"><?php the_time( get_option( 'date_format' ) ); ?></dt>
            <dd class="update__content"><?php the_title(); ?></dd>


        <?php endwhile; endif;  ?>
        </dl>

      </div>
    </section>

    <section class="l-section profile" id="profile-id">
      <div class="l-container -narrow text-center">
        <hgroup>
          <h2 class="heading -primary">プロフィール</h2>
          <h3 class="heading -secondary">音楽よりも、料理よりも、<br>今は勉強がたのしい</h3>
        </hgroup>

        <section class="l-profile__primary">
          <div class="profile__picture text-center">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile-sp.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile-sp@2x.jpg 2x" media="(max-width: 767px)">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profile@2x.jpg 2x" alt="板野なおのプロフィール写真">
            </picture>
          </div>


          <div class="profile__content">
            <dl class="profile__list">
              <dt>名前</dt>
              <dd>板野なお</dd>
              <dt>生年月日</dt>
              <dd><time datetime="1990-03-20">1990年3月20日</time></dd>
              <dt>出身</dt>
              <dd>京都</dd>
              <dt>前職</dt>
              <dd>オムライス屋さん</dd>
              <dt>勉強中</dt>
              <dd>
                <ul>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>Javascript</li>
                </ul>
              </dd>
              <dt>趣味</dt>
              <dd>
                <ul>
                  <li>音楽</li>
                  <li>歌</li>
                  <li>ゲーム</li>
                </ul>
              </dd>
              <dt>休日</dt>
              <dd>
                <ul>
                  <li>クローゼットで録音</li>
                  <li>勉強</li>
                </ul>
              </dd>
            </dl>
            <p class="profile__text">
              <time datetime="2019-08-01">8月1日</time>よりフロントエンドエンジニアを目指す</p>
          </div>
          <!-- /.profile__content -->
        </section>
        <!-- /.l-profile -primary -->
      </div>
      <!-- /.l-container -narrow -->
    </section>
    <!-- /.l-section -->


    <div class="l-section l-container -narrow -detail">
      <section class="profile__detail -primary">
        <div class="detail__content">
          <h3 class="detail__title">音楽活動を通して<br>Webやアプリケーションの可能性、<br>影響力を身にしみて感じた。</h3>

          <p class="detail__text">元々は飲食店で調理、販売、接客の仕事をしていましたが、この先長く働くためにもっと専門性を身に付けたいと考えるようになりました。</p>
          <p class="detail__text">また、自身の音楽活動を通してWebやアプリケーションの可能性、影響力を身にしみて感じていたことから、以前からこの業界に興味と憧れがありました。</p>
        </div>
        <!-- /.detail__content -->
        <picture class="detail__img -music">
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/music-sp.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/music-sp@2x.png 2x" media="(max-width: 767px)">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/music.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/music.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/music@2x.png 2x" alt="ヘッドフォンのイラスト">
        </picture>
      </section>
      <!-- /.profile__detail-1 -->


      <section class="profile__detail -secondary">
        <div class="detail__content">
          <h3 class="detail__title">目に見えない部分まで、<br>きちんと閲覧者の気持ちを考えて作る。</h3>
          <p class="detail__text">Webの勉強をしているうちに、「やさしい」Webサイトというのは、目に見えない部分まできちんと閲覧者の気持ちを考えて作られていることを知りました。</p>
          <p class="detail__text">
            誰もが気持ちよく利用できるサービスを作ることに魅力を感じましたし、私自身もこれまでの音楽活動で、ひとりでも多くの人に見てもらえる、気づいてもらえることの重要性を痛感していたので、作り手としてもこれを意識することはとても大切な事だと感じました。
          </p>
          <!-- <p class="detail__text">まだまだ勉強を始めたばかりですが、この先、誰に対しても「自分が作ったから大丈夫」と思えるようなアクセシビリティを意識したものを作れるエンジニアになりたいです。</p> -->
        </div>

        <picture class="detail__img -pc">
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc2-sp.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc2-sp@2x.png 2x" media="(max-width: 767px)">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc2.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc2.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pc2@2x.png 2x" alt="パソコンのイラスト">
        </picture>
      </section>
      <!-- /.profile-detail-2 -->
    </div>
    <!-- /.l-container -narrow -->


    <section class="l-section skill" id="skill-id">
      <div class="js-skillContainer l-container -narrow">
        <hgroup class="text-center">
          <h2 class="heading -primary">できること</h2>
          <h3 class="heading -secondary">Web制作の楽しさを知り<br>できること日々更新中</h3>
        </hgroup>
        <ul class="js-skill skill__wraper">
          <li class="l-skill__contents skill__item html">HTML</li>
          <li class="l-skill__contents skill__item css">CSS</li>
          <li class="l-skill__contents skill__item javascript">javascript</li>
          <li class="l-skill__contents skill__item jquery">jQuery</li>
          <li class="l-skill__contents skill__item php">PHP</li>
          <li class="l-skill__contents skill__item mysql">MySQL</li>
          <li class="l-skill__contents skill__item xd">Adobe XD</li>
          <li class="l-skill__contents skill__item wordpress">WordPress</li>
          <li class="l-skill__contents skill__item sass">Sass</li>
          <li class="l-skill__contents skill__item cubase">cubase10</li>
        </ul>
      </div>
      <!-- /.l-container -narrow -->
    </section>
    <!-- /.l-section -->

    <section class="l-section  work" id="work-id">
      <div class="l-container">
        <hgroup class="text-center">
          <h2 class="heading -primary">作ったもの</h2>
          <h3 class="heading -secondary">HTML CSS PHP MySQL<br>約３ヶ月の軌跡</h3>
        </hgroup>
        <div class="l-work__container">
          <?php
            $loop = new WP_Query(array("post_type" => "works"));
              if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post(); ?>
          <article class="l-grid">
            <div class="card">
              <h3 class="card__title"><?php the_title(); ?></h3>
              <!-- timeタグの付け方 -->
              <p class="card__tag -new"><?php echo esc_html(get_post_meta($post->ID,'date',true)); ?></p>
              <figure><?php the_post_thumbnail(''); ?></figure>
              <dl class="card__list">
                <dt>期間:</dt>
                <dd><?php echo esc_html(get_post_meta($post->ID,'period',true)); ?></dd>
                <dt>言語:</dt>
                <dd><?php echo esc_html(get_post_meta($post->ID,'program',true)); ?></dd>
              </dl>
              <div class="button -more js-moreButton"><span class="screen-reader-text">詳細を見る</span></div>
              <div class="js-cardText card__text"><?php the_content(); ?></div>
              <div class="card__button">
                  <?php if(get_post_meta($post->ID,'github',true)){
                          echo '<a href="'.get_post_meta($post->ID,'github',true).'" class="button -primary" target="_blank">Github</a>';
                        }
                  ?>
              </div>
              <!-- /.card__button -->
            </div>
            <!-- /.card -->
          </article>
          <!-- /.l-grid -->
          <?php endwhile; endif; ?>
        </div>
        <!-- /.l-work__container -->
      </div>
      <!-- /.l-container -narrow -->
    </section>
    <!-- /.l-section -->
  </main>
<?php get_footer(); ?>
