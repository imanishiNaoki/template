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
    <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
</head>

<body>
    <header id="header">
        <div class="header">
            <div class="container">
                <h1 class="header-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> In-Production </a>
                </h1>
                <nav>
                    <div class="navi">
                        <div class="navi-overlay"></div>
                        <ul class="navi-list">
                            <li class="navi-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                    class="navi-item-link">HOME</a></li>
                            <li class="navi-item"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
                                    class="navi-item-link">ABOUT</a></li>
                            <li class="navi-item"><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>"
                                    class="navi-item-link">SERVICE</a></li>
                            <li class="navi-item"><a href="<?php echo esc_url( home_url( '/price/' ) ); ?>"
                                    class="navi-item-link">PRICE</a></li>
                            <!--                 <li class="navi-item"><a href="/blog.html" class="navi-item-link">BLOG</a></li> -->
                            <li class="navi-item"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
                                    class="navi-item-link">CONTACT</a></li>
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