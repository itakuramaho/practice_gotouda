<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
require_once(ROOT . '/config.php');

$pageId = 'top';
$meta = array(
  'title'=> 'コミックビジネス',
  'description'=> 'コミックビジネス'
)
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <?php require_once(ROOT . '/parts/_baseHead.php'); ?>
</head>

<body data-pageid="<?php echo $pageId; ?>">
  <div class="wrap wrap--<?php echo $pageId; ?>">
    <?php require_once(ROOT . '/parts/_header.php'); ?>

    <div class="contents contents--<?php echo $pageId; ?>">
      <main>
        <section class="mv">
          <div class="mv__wrap">
            <img src="/assets/images/top/KV.png" alt="">
            <div class="mv__ttl">
              <p class="mv__ttl-01">the best cycle in it.</p>
              <p class="mv__ttl-sub">そして、回り出す。</p>
            </div>
          </div>
        </section>
        <section class="about">
          <div class="about__inner">
            <div class="about__wrap">
              <h2 class="heading-A">ABOUT</h2>
              <p class="about__txt">私たちコスミックビジネスは、福岡を中心に、</br>
              お客様の要望に合わせた最適なシステムを、</br>
              オーダーメイドで提供しています。</br>
              創業から半世紀にわたり培った技術力と、</br>
              変化するニーズへの対応力で、</br>お客様のビジネスを円滑にするサポートをし続けます。</p>
             <div class="common__wrap-btn">
              <a href="#about" class="common__btn">私たちについて</a>
            </div>
            </div>
          </div>
          <div class="about__swiper">
           <img src="./assets/images/top/swiper.png" alt="">
          </div>
        </section>
        <section class="servise">
          <div class="l-inner">
            <h2 class="heading-A">SERVISE</h2>
          <div class="servise__wrap ">
            <div class="servise__left">
              <img src="./assets/images/top/top_service_icon1.png" alt="">
            </div>
            <div class="servise__right">
              <div class="servise__right-01">
                <p class="servise__min">01</p>
                <div class="servise__right-01--wrap">
                  <p class="servise__ttl">SYSTEM<br/>INTEGRATION</p>
                  <p class="servise__sub">システムインテグレーション</p>
                  <p class="servise__txt">企画提案から構築、導入、運用までをワンストップで。</p>
                </div>
              </div>
              <div class="servise__right-01">
                <p class="servise__min">02</p>
                <div class="servise__right-01--wrap">
                  <p class="servise__ttl">ENGINEERING<br/>SERVICES</p>
                  <p class="servise__sub">システムインテグレーション</p>
                  <p class="servise__txt">企画提案から構築、導入、運用までをワンストップで。</p>
                </div>
              </div>
              <div class="servise__right-01">
                <p class="servise__min">03</p>
                <div class="servise__right-01--wrap">
                  <p class="servise__ttl">SOFTWARE MANAGED</br>SERVICES</p>
                  <p class="servise__sub">システムインテグレーション</p>
                  <p class="servise__txt">企画提案から構築、導入、運用までをワンストップで。</p>
                </div>
              </div>
               <div class="common__wrap-btn">
              <a href="#servise" class="common__btn">業務内容を詳しくみる</a>
            </div>
            </div>
          </div>
          <div class="servise__img">
            <div class="servise__img-left">
              <img src="./assets/images/top/top_01.png" alt="">
            </div>
                 <div class="servise__img-right">
              <img src="./assets/images/top/top_02.png" alt="">
            </div>
          </div>
          </div>
        </section>
        <section class="news ">
          <div class="l-inner">
            <h2 class="heading-A">NEWS</h2>
            <div class="news__wrap">
            <div class="news__cont">
              <p class="news__date">2022.1.28</p>
              <p class="news__txt">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <img src="./assets/images/common/arrows.png" alt="">
            </div>
            <div class="news__cont">
              <p class="news__date">2022.1.28</p>
              <p class="news__txt">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <img src="./assets/images/common/arrows.png" alt="">
            </div>
            <div class="news__cont">
              <p class="news__date">2022.1.28</p>
              <p class="news__txt">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <img src="./assets/images/common/arrows.png" alt="">
            </div>
          </div>
          <div class="recruit">
            <div class="recruit__wrap">
              <h2 class="heading-A">RECRUIT</h2>
            </div>
          </div>
        </div>
      </section>
      </main>
    </div>
    <?php require_once(ROOT . '/parts/_footer.php'); ?>
  </div>
</body>

</html>