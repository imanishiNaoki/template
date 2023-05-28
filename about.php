<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="ページの内容を表す文章" />
    <meta property="og:url" content="ページのURL" />
    <meta property="og:title" content="ページのタイトル" />
    <meta property="og:type" content="ページのタイプ" />
    <meta property="og:description" content="記事の抜粋" />
    <meta property="og:image" content="画像のURL" />
    <meta name="twitter:card" content="カード種類" />
    <meta name="twitter:site" content="@Twitterユーザー名" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="appIDを入力" />
    <title>テンプレート</title>
    <link href="/css/reset.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <header id="header">
      <div class="header">
        <div class="container">
          <h1 class="header-logo">
            <a href="/index.html"> In-Production </a>
          </h1>
          <nav>
            <div class="navi">
              <div class="navi-overlay"></div>
              <ul class="navi-list">
                <li class="navi-item"><a href="/index.html" class="navi-item-link">HOME</a></li>
                <li class="navi-item"><a href="/about.html" class="navi-item-link">ABOUT</a></li>
                <li class="navi-item"><a href="/service.html" class="navi-item-link">SERVICE</a></li>
                <li class="navi-item"><a href="/price.html" class="navi-item-link">PRICE</a></li>
                <!--                 <li class="navi-item"><a href="/blog.html" class="navi-item-link">BLOG</a></li> -->
                <li class="navi-item"><a href="/contact.html" class="navi-item-link">CONTACT</a></li>
              </ul>
            </div>
          </nav>
          <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </header>
    <main id="main" class="single">
      <section class="section" id="single">
        <div class="single-key">
          <h2 class="section-title"><span>ABOUT</span></h2>
        </div>
        <div class="container">
          <div class="single-item">
            <h3 class="single-sub"><span>次世代の技術を提供</span></h3>
            <p class="single-text">弊社はWebデザイン・制作・運用を通じて、お客様のビジネスの成長を支援しています。</p>
            <p class="single-text">高い品質と美しさを追求し、使いやすく親しみやすいWebサイトを提供することで、お客様のビジネスをより魅力的にし、成果を最大化することが私たちの使命です。</p>
            <p class="single-text">豊富な実績をもとに、緻密な戦略の立案からWebサイトの構築、そして運用・改善まで、ワンストップでサポートしています。</p>
            <p class="single-text">最新のテクノロジーを駆使し、時代の変化にも柔軟に対応できる体制を整えています。</p>
            <p class="single-text">お客様の課題に共感し、最高のパフォーマンスを発揮するWebサイトを提供します。</p>
          </div>
          <div class="single-table-row">
            <table>
              <tbody>
                <tr>
                  <th class="single-header">社名</th>
                  <td class="single-data">In-Production</td>
                </tr>
                <tr>
                  <th class="single-header">設立</th>
                  <td class="single-data">2023年 5月 29日</td>
                </tr>
                <tr>
                  <th class="single-header">所在地</th>
                  <td class="single-data">〒354-0015<br />埼玉県富士見市</td>
                </tr>
                <tr>
                  <th class="single-header">代表</th>
                  <td class="single-data">今西　尚希</td>
                </tr>
                <tr>
                  <th class="single-header">業務内容</th>
                  <td class="single-data">
                    WEBサイト制作・運用<br />
                    バックエンド・API開発
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
    <footer id="footer">
      <div class="footer">
        <small>&copy;2023 Imanishi Naoki</small>
      </div>
    </footer>
    <script src="/js/script.js"></script>
  </body>
</html>
