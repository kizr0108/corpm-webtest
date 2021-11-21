<?php
/*
Template Name: MtoBテンプレート
*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>


    <!--- meta data --->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content=",,">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--- stylesheet --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/MtoB.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/media-MtoB.css" media="screen">
    <!--- javascript --->

    <!--- idea
        Lazy Loadなど、動作を軽くする方法
        SEO対策
        を後で実装すること。
    --->
    <?php if( is_user_logged_in() ) : ?>
    <style>
        @media screen and (max-width:560px) {
            .header {
                position: absolute;
                top: 46px;
            }

            .box-nav-header.is_open {
                position: absolute;
                top: 106px;
            }
        }

        @media screen and (min-width:560px) {
            .header {
                top: 32px;
            }

    </style>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="wrapper-wide">
            <h1 class="logo-img">M-Vision brain</h1>
            <div class="hamburger-menu">
                <input type="checkbox" id="checkbox-hamburger">
                <label for="checkbox-hamburger" class="hamburger"><span></span></label>
            </div>
            <div class="box-nav-header">
                <nav class="nav-header">
                    <ul>
                        <li>
                            <a href="#demand">
                                <dl class="linktext-nav-header">
                                    <dt>DEMAND</dt>
                                    <dd>サービスの対象</dd>
                                </dl>
                            </a>
                        </li>

                        <li>
                            <a href="#about">
                                <dl class="linktext-nav-header">
                                    <dt>ABOUT</dt>
                                    <dd>サービス概要</dd>
                                </dl>
                            </a>
                        </li>
                        <li>
                            <a href="#feature">
                                <dl class="linktext-nav-header">
                                    <dt>FEATURE</dt>
                                    <dd>サービスの特徴</dd>
                                </dl>
                            </a>
                        </li>
                        <li>
                            <a href="#report">
                                <dl class="linktext-nav-header">
                                    <dt>REPORT</dt>
                                    <dd>評価項目</dd>
                                </dl>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <dl class="linktext-nav-header">
                                    <dt>CONTACT</dt>
                                    <dd>お問い合わせ</dd>
                                </dl>
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="" class="CTA-header">資料請求</a>
            </div>
        </div>
    </header>


    <main>
        <div class="area-top-view">
            <div class="wrapper">
                <p class="title-top-view">過去の脳MRI画像から<br>
                    新しいユーザー体験を<br class="br-sp">生み出す</p>
                <p class="subtitle-top-view"><span><strong class="text-dot">認知症リスク評価</strong>プログラム</span> <br class="br-sp">M-Vision brain</p>

                <a href="" class="btn-CTA">資料請求</a>
            </div>
        </div>

        <div class="area-demand" id="demand">
            <div class="wrapper">
                <h2 class="title-eng">DEMAND</h2>
                <p class="title-text">
                    認知症リスクのある方に予防をお勧めするために、<br class="br-pc">
                    認知症リスクを定量的に評価する検査が必要とされています。
                </p>
                <div class="flex-2col-pc">
                    <div>
                        <dl class="imgarea-demand">
                            <dt><img src="<?php echo get_template_directory_uri(); ?>/img/bar-graph.jpg" alt="" class="img-demand"></dt>
                            <dd>
                                <p class="text-reference">出典：「認知症施策推進総合戦略（新オレンジプラン）～認知症高齢者等にやさしい地域づくりに向けて～の概要」（厚生労働省）を基に作成</p>
                            </dd>
                        </dl>
                        <p class="text-normal">現在、高齢者のおよそ6人に1人が、10年後にはおよそ4人に1人が認知症になると推計されており、医療業界の中でも関心が高まってきています。</p>
                    </div>
                    <div>
                        <dl class="imgarea-demand">
                            <dt><img src="<?php echo get_template_directory_uri(); ?>/img/pie-chart.jpg" alt="" class="img-demand"></dt>
                            <dd>
                                <p class="text-reference">出典：「都市部における認知症有病率と認知症の生活機能障害への対応」（厚生労働省）を基に作成</p>
                            </dd>
                        </dl>
                        <p class="text-normal">脳萎縮を伴うアルツハイマー型と、脳血管の劣化を伴う脳血管性型が大部分を占め、根治療法が未だ存在しないため発症予防が重視されていますが、認知症リスクを評価する検査は確立されていませんでした。</p>
                    </div>
                </div>
            </div>
            <div class="bg-arrow-object"></div>
        </div>

        <div class="area-about" id="about">
            <div class="wrapper">
                <div class="flex-2col-pc">
                    <div class="l-60">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/M-Vision-logo.png" alt="" class="logo-m-vision">
                        <p class="title-about">M-Vision brainは、受診者の<strong class="text-dot">脳の健康状態</strong>（認知症リスク）
                            <strong class="text-dot">を数値化</strong>・評価し、レポートの作成を行う新しいサービスです。
                        </p>
                        <p class="text-normal">弊社創立者の一人である森進教授主導の下、米国Johns Hopkins大学で開発されたAI技術をもとに認知症リスクとなる脳健康状態の測定を可能にしました。M-Visionは本技術とHIMEDIC社で蓄積された4万例以上のビッグデータを使い、脳健康状態の解釈を行っています。
</p>
                    </div>
                    <div class="r-40">
                        <div class="img-about"></div>
                        <a href="javascript:void(0)" class="link-detail-about"><span>レポートを拡大表示する</span></a>
                    </div>
                </div>
            </div>
            <div class="empty-anchor-feature" id="feature"></div>
        </div>
        <!----- slider ----->
        <div class="img-detail-fullscreen">
            <div class="wrapper">
                <div class="slider-displayarea">
                    <div class="slider-list-fullscreen">
                        <div class="slider-item-1"></div>
                        <div class="slider-item-2"></div>
                        <div class="slider-item-3"></div>
                        <div class="slider-item-4"></div>
                        <div class="slider-item-5"></div>
                    </div>
                </div>
                <span class="counter-slider"></span>
                <span class="arrow-slider-previous"></span>
                <span class="arrow-slider-next"></span>
                <span class="close-slider"></span>
            </div>
        </div>

        <div class="area-feature wrapper">
            <h2 class="title-eng">FEATURE</h2>
            <p class="title-text">M-Vision brainの3つの特徴</p>
            <div class="flex-2col-pc">
                <div class="box-feature-wide">
                    <h3 class="subttl-feature-wide">脳全体の包括的評価</h3>
                    <p class="text-normal center">認知症リスクをもれなく評価するには、海馬だけでなく、脳全体を評価する必要があります。<br class="br-pc">
                        当サービスでは、認知症の様々なタイプに対応した脳の全体の萎縮パターンと脳血管病変を解析し、<br class="br-pc">
                        4万件を超えるビッグデータを基にした解釈を行っています。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-feature.jpg" alt="" class="img-feature">
                </div>
                <div class="box-feature-left">
                    <h3 class="subttl-feature">過去のMRI画像からレポート作成</h3>
                    <p class="text-normal">既に過去に頭部MRIを撮影している受診者様であれば、足を運んでいただくことなくレポートを作成可能です。速やかに、低コストで当サービスを開始していただけます。</p>
                </div>
                <div class="box-feature-right">
                    <h3 class="subttl-feature">MRI機器の性能に左右されない</h3>
                    <p class="text-normal">弊社のM-Vision brainでは、高解像度MRI画像だけでなく低解像度MRI画像でも認知症リスクの評価が可能です。脳MRI画像をお持ちの多くの医療機関様でご利用いただけます。</p>
                </div>
            </div>
        </div>

        <div class="area-report" id="report">
            <div class="wrapper">
                <div class="flex-2col-pc">
                    <div class="imgarea-report-pc">
                    </div>
                    <div class="textarea-report">
                        <h2 class="title-eng">REPORT</h2>
                        <p class="title-text">M-Vision brainの評価項目</p>
                        <p class="text-normal">脳MRI画像から異常信号や各部位の体積を分析、「 脳全体の萎縮評価」「血管性病変評価」を行い、脳の健康状態に影響を及ぼす「血糖・血圧・内臓脂肪・飲酒」に関するデータと併せてレポートを作成、認知症予防をサポートします。</p>
                        <div class="imgarea-report-sp"></div>
                        <a href="" class="btn-wide">評価法に関するエビデンス</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="area-contact" id="contact">
            <div class="wrapper">
                <h2 class="title-eng">CONTACT</h2>
                <p class="title-text white">資料のご請求・お問い合わせはこちら</p>
                <div class="flex-2col-pc white">
                    <a href="" class="btn-CTA">資料請求</a>
                    <p class="maillink-contact">corporate.M0707@gmail.com</p>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer white">
        <div class="wrapper">Copyright &copy; 2021 corporate M All Rights Reserved.</div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <?php wp_footer(); ?>
</body>

</html>
