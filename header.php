<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:site_name" content="In-Production" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg" type="image/svg+xml">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-img.jpg" />
    <?php if( is_home( "/" ) ){ ?>
    <title>埼玉県のWEB制作会社 | In-Production</title>
    <meta name="description" content="革新的な未来を創造する、イノベーションを提供します。" />
    <meta property="og:url" content="https://in53-production.com/" />
    <meta property="og:title" content="埼玉県のWEB制作会社 | In-Production" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="革新的な未来を創造する、イノベーションを提供します。" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="埼玉県のWEB制作会社 | In-Production">
    <meta name="twitter:description" content="革新的な未来を創造する、イノベーションを提供します。">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
    <?php }?>
    <?php if( is_page( "about" ) ){ ?>
    <title>会社概要 | 埼玉県のWEB制作会社 | In-Production</title>
    <meta name="description" content="弊社はWebデザイン・制作・運用を通じて、お客様のビジネスの成長を支援しています。" />
    <meta property="og:url" content="https://in53-production.com/about/" />
    <meta property="og:title" content="会社概要 | 埼玉県のWEB制作会社 | In-Production" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="弊社はWebデザイン・制作・運用を通じて、お客様のビジネスの成長を支援しています。" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="会社概要 | 埼玉県のWEB制作会社 | In-Production">
    <meta name="twitter:description" content="弊社はWebデザイン・制作・運用を通じて、お客様のビジネスの成長を支援しています。">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
    <?php }?>
    <?php if( is_page( "service" ) ){ ?>
    <title>サービス | 埼玉県のWEB制作会社 | In-Production</title>
    <meta name="description" content="デザイン・コーディング・CMS構築・ドメイン・ホスティング等、一般的なWebサイト制作に関する全ての業務を提供しています。" />
    <meta property="og:url" content="https://in53-production.com/service/" />
    <meta property="og:title" content="サービス | 埼玉県のWEB制作会社 | In-Production" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="デザイン・コーディング・CMS構築・ドメイン・ホスティング等、一般的なWebサイト制作に関する全ての業務を提供しています。" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="サービス | 埼玉県のWEB制作会社 | In-Production">
    <meta name="twitter:description" content="デザイン・コーディング・CMS構築・ドメイン・ホスティング等、一般的なWebサイト制作に関する全ての業務を提供しています。">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
    <?php }?>
    <?php if( is_page( "price" ) ){ ?>
    <title>料金プラン | 埼玉県のWEB制作会社 | In-Production</title>
    <meta name="description" content="お客様が弊社にご依頼の際にはシンプルプラン、スタンダードプラン、フルオーダープランから選んでいただきます。" />
    <meta property="og:url" content="https://in53-production.com/price/" />
    <meta property="og:title" content="料金プラン | 埼玉県のWEB制作会社 | In-Production" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="お客様が弊社にご依頼の際にはシンプルプラン、スタンダードプラン、フルオーダープランから選んでいただきます。" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="料金プラン | 埼玉県のWEB制作会社 | In-Production">
    <meta name="twitter:description" content="お客様が弊社にご依頼の際にはシンプルプラン、スタンダードプラン、フルオーダープランから選んでいただきます。">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
    <?php }?>
    <?php if( is_page( "contact" ) ){ ?>
    <title>お問い合わせ | 埼玉県のWEB制作会社 | In-Production</title>
    <meta name="description" content="お客さまの要望にフレキシブルにご対応させて頂きます。" />
    <meta property="og:url" content="https://in53-production.com/contact/" />
    <meta property="og:title" content="お問い合せ | 埼玉県のWEB制作会社 | In-Production" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="お客さまの要望にフレキシブルにご対応させて頂きます。" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="お問い合せ | 埼玉県のWEB制作会社 | In-Production">
    <meta name="twitter:description" content="おお客さまの要望にフレキシブルにご対応させて頂きます。">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
    <?php }?>
    <?php if( is_page( "thanks" ) ){ ?>
    <title>お問合せを受け付けました | 埼玉県のWEB制作会社 | In-Production</title>
    <meta name="description" content="お送り頂きました内容を確認の上、3営業日以内に折り返しご連絡させて頂きます。" />
    <meta property="og:url" content="https://in53-production.com/thanks/" />
    <meta property="og:title" content="お問合せを受け付けました | 埼玉県のWEB制作会社 | In-Production" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="お送り頂きました内容を確認の上、3営業日以内に折り返しご連絡させて頂きます。" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="お問合せを受け付けました | 埼玉県のWEB制作会社 | In-Production">
    <meta name="twitter:description" content="お送り頂きました内容を確認の上、3営業日以内に折り返しご連絡させて頂きます。">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
    <?php }?>
    <meta name="twitter:site" content="@yumejanai60">
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
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
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