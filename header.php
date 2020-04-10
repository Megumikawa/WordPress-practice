<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php echo esc_attr( bloginfo('charset'))?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="header-wrapper">
      <header class="header">
        <nav id="js_btn_menu" class="btn-menu">
          <img class="btn-menu-close" src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-closed.svg" alt="ハンバーガーメニューを閉じる" width="22" height="22">
          <img class="btn-menu-open" src="<?php echo get_template_directory_uri(); ?>/images/hamburger.svg" alt="ハンバーガーメニュー" width="20" height="14">
        </nav>
        <h1 class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Feuille" width="72" height="38"></a></h1>
        <nav class="pc-global-menu">
          <ul>
            <li><a href="#">NEW ITEM</a></li>
            <li class="js-category-icon"><a href="category.html">CATEGORY<img src="<?php echo get_template_directory_uri(); ?>/images/nav-downarrow.svg" alt="カテゴリーの詳細を表示" width="6" height="4"></a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">GUIDE</a></li>
          </ul>
          <!-- ▼カテゴリーメガメニュ▼ -->
          <div class="js-category-icon">
            <div class="megamenu">
              <ul class="megamenu-content">
                <li><a href="#">ピアス</a></li>
                <li><a href="#">イヤリング</a></li>
                <li><a href="#">その他</a></li>
              </ul>
              <div class="all-item"><a href="#">全てのアイテム</a></div>
            </div>
          </div>
          <!-- ▲カテゴリーメガメニュ▲ -->
        </nav>

        <!-- ▼SP用nav▼ -->
        <nav class="header-nav">
          <ul>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" alt="検索する" width="21" height="20"></a></li>
            <li class="sp-cart-icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.svg" alt="カートページへ" width="20" height="20"><span class="sp-cart-counter">0</span></a></li>
          </ul>
        </nav>
        <div class="pc-header-nav">
          <nav class="pc-nav-block">
            <ul>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/login-icon.svg" alt="マイページへログインする" width="16" height="18">LOGIN</a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/favorite-icon.svg" alt="お気に入り画面へアクセスする" width="20" height="18">FAVORITE</a></li>
              <li class="pc-cart-icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.svg" alt="ショッピングカートへアクセスする" width="20" height="20"><span class="pc-cart-counter">0</span></a></li>
            </ul>
          </nav>
          <form id="search_form">
            <div class="pc-search-block">
              <input id="searchbox" name="searchbox" type="search" placeholder="SEARCH ITEMS">
              <input id="submit" type="submit" value="">
            </div>
          </form>
        </div>
      </header>
    </div>
    <!-- ▼ハンバーガーメニュー始まり▼ -->
    <div id="js_menu_contents" class="hamburger-container">
      <section class="hamburger-checked-items">
        <h2 class="hamburger-title-block">CHECKED ITEMS</h2>
        <p class="hamburger-sub-title">閲覧履歴</p>
        <ul class="checked-items">
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sp/checked-items-01.png" alt="ピアス閲覧商品" width="126" height="126"><P class="checked-items-price">¥00,000</p></li>
          <li><img src="<?php echo get_template_directory_uri();?>/images/sp/checked-items-02.png" alt="ピアス閲覧商品" width="126" height="126"><P class="checked-items-price">¥00,000</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sp/checked-items-03.png" alt="ピアス閲覧商品" width="126" height="126"><P class="checked-items-price">¥00,000</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sp/checked-items-04.png" alt="ピアス閲覧商品" width="126" height="126"><P class="checked-items-price">¥00,000</p></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sp/checked-items-05.png" alt="ピアス閲覧商品" width="126" height="126"><P class="checked-items-price">¥00,000</p></li>
        </ul>
      </section>
      <div class="hamburger-main">
        <ul class="hamburger-main-menu">
          <li><a href="#">ログイン</a></li>
          <li><a href="#">新規会員登録</a></li>
          <li id="js_hamburger_search_category" class="hamburger-search-category">
            <a>カテゴリーから探す</a>
            <ul id="js_humburger_category_child" class="hamburger-category-child">
              <li><a href="category.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-arrow.svg" alt="子カテゴリーへアクセス" width="63" height="63">子カテゴリー名</a></li>
              <li><a href="category.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-arrow.svg" alt="子カテゴリーへアクセス" width="63" height="63">子カテゴリー名</a></li>
              <li><a href="category.html"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-arrow.svg" alt="子カテゴリーへアクセス" width="63" height="63">子カテゴリー名</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="hamburger-footer">
        <ul class="hamburger-footer-menu">
          <li><a href="#">新着情報</a></li>
          <li><a href="#">ショッピングガイド</a></li>
          <li><a href="#">新着アイテム</a></li>
          <li><a href="#">ショッピングカート</a></li>
          <li><a href="#">プライバシーポリシー</a></li>
          <li><a href="#">特定商取引に基づく表示</a>
          <li><a href="#">会社概要</a></li>
          <li><a href="#">よくあるご質問</a>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
        <ul class="hamburger-sns-block">
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-instagram.svg" alt="インスタグラムへアクセスする" width="57" height="57"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-twitter.svg" alt="ツイッターへアクセスする" width="71" height="57"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-facebook.svg" alt="フェイスブックへアクセスする" width="57" height="57"></a></li>
        </ul>
        <p class="js-btn-close"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/hamburger-closed.svg" alt="ハンバーガーメニューを閉じる" width="22" height="22">閉じる</p>
      </div>
    </div>
    <!-- ▲ハンバーガーメニュー終わり▲ -->
