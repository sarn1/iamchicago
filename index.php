<?php get_header(); ?>
<main role="main">
<?php if (have_posts()) :
while (have_posts()) : the_post(); ?>

  <aside>
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail();
    }
    else {
      echo '<img src="/wp-content/uploads/2016/03/default_side_image.jpg" alt="Are You Chicago" title="Are You Chicago">';
    }
    ?>
  </aside>

  <article>
    <?php
      if (is_front_page()) {
        echo '<img src="/wp-content/uploads/2016/03/900-north-michigan-shops.jpg" class="north_michigan_shops" alt="900 North Michigan Shops" title="900 North Michigan Shops">';

        if (!empty(get_post_meta(get_the_ID(),'homepage_subtext',true))) {
          echo '<div class="subtext">'.get_post_meta(get_the_ID(), 'homepage_subtext', true).'</div>';
        }
      }
    ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>

  <div class="_clear"></div>

  <?php endwhile;
  elseif (is_404()) : ?>
  <article>
  <h1>We're sorry...</h1>
  <p>Looks like we can't find the page you are looking for!</p>
  </article>

<?php endif; ?>

  <ul class="boxes">
    <li><a href="/casting-call/"></a><img src="/wp-content/uploads/2016/03/Casting_Call.jpg" alt="Casting Call" title="Casting Call"></a></li>
    <li><a href="/why-go-local/"><img src="/wp-content/uploads/2016/03/Why_Go_Local.jpg" alt="Why Go Local?" title="Why Go Local?"></a></li>
    <li><a href="/the-faqs/"><img src="/wp-content/uploads/2016/03/The_FAQs.jpg" alt="The FAQs" title="The FAQs"></a></li>
    <li><a href="/the-media"><img src="/wp-content/uploads/2016/03/Media.jpg" alt="Media" title="Media"></a></li>
  </ul>
</main>
<?php get_footer(); ?>