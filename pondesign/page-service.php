<?php get_header(); ?>
<div class="Title-Box">
  <h1 class="Title">SERVICE</h1>
  <span class="Subtitle">事業内容</span>
</div>
</section>
<div class="Breadcrumb">
  <?php custom_breadcrumb(); ?>
</div>
<main class="Main Contents-Inner">
  <section class="Service">
    <div class="Service-Inner">
      <article class="Article">
        <img src="<?php echo esc_url(get_theme_file_uri('resources/images/service/service1.jpg')) ?>" alt="" width="445" height="280" decoding="async" loading="lazy" />
        <div class="Service-Text-Box">
          <h2 class="Service-Ttl">Webサイト制作</h2>
          <p class="Service-Text">
            新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。
            サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
          </p>
        </div>
      </article>
      <article class="Article">
        <img src="<?php echo esc_url(get_theme_file_uri('resources/images/service/service2.jpg')) ?>" alt="" width="445" height="280" decoding="async" loading="lazy" />
        <div class="Service-Text-Box">
          <h2 class="Service-Ttl">Webサイト運用</h2>
          <p class="Service-Text">
            サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。
            日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。
            また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
          </p>
        </div>
      </article>
      <article class="Article">
        <img src="<?php echo esc_url(get_theme_file_uri('resources/images/service/service3.jpg')) ?>" alt="" width="445" height="280" decoding="async" loading="lazy" />
        <div class="Service-Text-Box">
          <h2 class="Service-Ttl">アプリ開発</h2>
          <p class="Service-Text">
            スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
          </p>
        </div>
      </article>
    </div>
  </section>
</main>
<?php get_template_part('contact'); ?>
<?php get_footer(); ?>