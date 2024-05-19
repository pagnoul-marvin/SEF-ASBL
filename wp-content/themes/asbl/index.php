<?php
get_header();

?>

<main>

    <section>
        <h2><?= get_field('who_are_we_title') ?></h2>
        <p><?= get_field('who_are_we_text') ?></p>
        <a href="<?= esc_url(get_field('who_are_we_link')['url']); ?>"><?= esc_html(get_field('who_are_we_link')['title']); ?></a>
    </section>

</main>

<?php get_footer(); ?>
