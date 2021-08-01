<?php get_header(); ?>
    
    <main>
      <!-- 写真たち -->
      <div class="loop_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg">
      </div>

      <!-- 最新記事 -->
      <section class="news_wrapper">
        <div class="container">
          <h2 class="text-center">最新記事</h2>
          <div class="to_prev">
            <a class="btn btn-outline-dark rounded-pill button_back">過去の記事を見る</a>
          </div>
          <div class="latest_articles">
            <div class="article border border-dark rounded">記事１</div>
            <div class="article border border-dark rounded">記事２</div>
            <div class="article border border-dark rounded">記事３</div>
          </div>
        </div>
      </section>

      <!-- 昆虫教室の予定 -->
      <section class="container section">
        <h1 class="schedule_title mb-5">昆虫教室の予定</h1>
        <div class="container">
          <h2 class="class_title">西宮教室</h2>
          <div class="padding_title">
            【17年ゼミよ！なぜ君は17年なのか？！ー今年アメリカで大発生した17年ゼミの知られざる謎を解き明かす！ー】<br>
            8月29日（日）<br>
            10：00-12：00（満席！）
          </div>
        </div>
        <hr>

        <div class="container">
          <h2 class="class_title">大阪教室</h2>
          <div class="padding_title">
            【カマキリ博士と大泉緑地公園昆虫観察会♪！ーカマキリを探しに行こう♪ー】
            8月1日（日）<br>
            13：00-15：00（満席！）
          </div>
        </div>
        <hr>
        
        <div class="container">
          <h2 class="online">オンライン教室</h2>
          <div class="padding_half">
            【ゴキブリやダンゴムシが世界を救う！？これで君も更にSDGsマイスターだ！ー食物連鎖、生物多様性から環境問題を家族で考えるー】<br>
            7月4日（日）<br>
            13：30-14：30（満席！）
          </div>
        </div>
      </section>

      <!-- カマキリ博士について -->
      <section class="section">
        <div class="container">
          <h1 class="padding_half about_title">カマキリ博士について</h1>
          <div class="container d-flex justify-content-around text-center align-items-center profile">
            <img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" class="rounded" width="400" alt="渡部 宏の写真">
            <div class="align-middle">
              <h1>渡部 宏</h1>
              <p>博士（農学）・気象予報士</p>
            </div>
          </div>
        </div>

        <div class="description_wrapper">
          <div class="container text-center description">
            <p>私は、3歳で自宅の庭で1匹の小さなカマキリと出会い、幼稚園や小学校に行くときは、<br>常にカマキリを持ち歩いているような少年で、その頃からの夢が「カマキリ博士」になることでした。<br>その夢と出会えたのも、その当時、まだ自然が多く残っていたからです。</p>
  
            <p>しかし、現在は自然環境の減少と共に、室内で楽しめる娯楽が増加しており、<br>また親は昆虫嫌いが多く、学校の先生も子供たちに自然体験させられるような経験や機会、<br>知識が不足し、子供に昆虫や自然に関する教育をしたくてもできないような現状です。<br>そのため、我々が子供たちに対して自然に興味をもてるようなきっかけ作りをしていくことは、<br>とても大切であると考えています。</p>
  
            <p>また、私はカマキリの研究で「博士（農学）」と「気象予報士」の資格を有し、<br>これまで様々な場所で子供からシニアまでを対象にして講演活動を行い、<br>また、大学での講師経験など豊富な教育経験を積んできました。<br>これらの経験を糧に、今後子供から保護者、シニアの方までが、<br>昆虫や自然を通じて生活や教育に役立て、生きる力を身につけるきっかけ作りをしていきたいと思っています。</p>
  
            <p>現在、大阪（箕面・北浜）・兵庫（西宮）・京都・奈良を中心に昆虫教室を開校したり、<br>全国様々な場所で日々講演活動を行っております。<br>今までのカマキリ道（人生）が皆様に少しでも参考になり、お役に立てれば光栄です。</p>
          </div>
        </div>

        <div class="container text-center profile_background">
          <div class="d-flex justify-content-around align-items-center">
            <div class="triangle">
              <h2>経歴</h2>
            </div>
            <div>
              <p>近畿大学 農学部 博士後期課程 修了</p>
              <p>近畿大学 農学部 水産学科・応用生命学科 生物学 非常勤講師</p>
              <p>帝塚山大学 現代生活学部 環境学 非常勤講師</p>
              <p>京都大学生態学研究センター 機関研究員・ポストドクター</p>
              <p>箕面公園昆虫館 非常勤職員</p>
              <p>ヒューマンアカデミー 気象予報士講座 アシスタント</p>
            </div>
          </div>
          <hr class="mb-5">
          <div class="d-flex flex-row-reverse justify-content-around align-items-center">
            <div class="triangle">
              <h2>現職</h2>
            </div>
            <div>
              <p>昆虫科学研究センターISRC 代表</p>
              <p>非営利団体 昆虫科学教育館</p>
              <p>帝塚山大学 自然と人間（環境）非常勤講師</p>
              <p>オフィスキイワード 文化人タレント</p>
              <p>建築物環境衛生管理技術者講習会 教授</p>
              <p>ライフデザイン阪急・阪神(文化サロン) 講師</p>
              <p>西宮市推進委員認定 講師</p>
            </div>
          </div>
          <hr>
        </div>
      </section>

      <!-- これまでの活動 -->
      <section class="container section">
        <h1 class="text-center mb-5">これまでの活動</h1>
        <div class="container">
          <ul class="experience">
            <li>これまでの講演活動</li>
            <p>小学校・幼稚園(大阪府・西宮・芦屋)、大学(龍谷・近畿大学)、ＹＭＣＡ、咲くやこの花館、パナホーム<br>ライフデザイン阪急阪神・デイサービス・ロータリークラブ・母学アカデミー・ママカフェ・ネッツトヨタ・地球温暖化適応会議等</p>
            <li>メディア出演</li>
            <p>テレビ大阪 科学deムチャミタス！・FMみのお・FM岸和田・FMキタ</p>
            <li>メディア協力
              <ul>
                <li>人間観察モニタリングにおける、香川照之さんのカマキリについてのコメント監修</li>
                <li>ダーウィンが来た！</li>
              </ul>
            </li>
            <li>取材</li>
            <p>毎日新聞・読売新聞・朝日新聞</p>
            <li>映画監修</li>
            <p>映画「写真の女」におけるカマキリ出演シーンの監修</p>
            <li>雑誌投稿</li>
            <p>昆虫と自然・ぴあじぇ～る</p>
          </ul>
        </div>
      </section>

      <!-- お問い合わせボタン -->
      <div class="text-center">
        <a class="btn btn-outline-secondary rounded-pill btn-lg contact_button">お問い合わせはこちら</a>
      </div>
    </main>

<?php get_footer(); ?>