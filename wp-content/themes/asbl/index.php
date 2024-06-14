<?php

require BASE_PATH . '../../../vendor/autoload.php';

use App\Models\BlogEntries;
use Core\Database;

try {
    $db = new Database(BASE_PATH . '.env.local.ini');
    $blog_form = new BlogEntries($db);
    $blog_messages = $blog_form->getBlogMessage();
} catch (PDOException $e) {
    echo 'fail';
}
?>

?>
<?php get_header(); ?>

<main>

    <section class="odd spacing">

        <?php component('linked_section.section', [
            'field_name' => 'who_are_we',
            'page' => 'Qui sommes-nous ?'
        ]); ?>

    </section>

    <section class="even spacing">

        <?php component('linked_section.section', [
            'field_name' => 'projects',
            'page' => 'Nos derniers projets'
        ]); ?>

    </section>

    <section class="odd spacing">

        <?php component('linked_section.section', [
            'field_name' => 'shop',
            'page' => 'Nos magasins de seconde main'
        ]); ?>

    </section>

    <section class="even spacing">

        <?php component('linked_section.section', [
            'field_name' => 'contact',
            'page' => 'Nous contacter'
        ]); ?>

    </section>

    <section class="odd spacing">

        <?php component('linked_section.section', [
            'field_name' => 'gallery',
            'page' => 'Galerie photos'
        ]); ?>

    </section>

    <section class="even spacing">

        <?php component('linked_section.section', [
            'field_name' => 'support',
            'page' => 'Nous soutenir'
        ]); ?>

    </section>

    <section class="odd spacing">

        <?php component('linked_section.section', [
            'field_name' => 'faq',
            'page' => 'F.A.Q.'
        ]); ?>

    </section>

    <section class="even_unlinked_section spacing" id="blog">

        <h2 class="blog_title"><?= get_field('fb_title') ?></h2>

        <?php if(isset($blog_messages)): ?>

            <?php foreach ($blog_messages as $message):  ?>

                <article class="blog_article">

                    <h3 class="no_display">Avis de <?= $message['firstname'] ?></h3>

                    <p class="blog_article_name"><?= $message['firstname'] ?> <?= $message['lastname'] ?></p>

                    <time datetime="<?= date('j F Y', strtotime($message['created_at'])) ?>" class="blog_article_time"><?= date('j F Y', strtotime($message['created_at'])) ?></time>

                    <p class="blog_article_message"><?= $message['message'] ?></p>

                </article>

            <?php endforeach; ?>

        <?php else: ?>

        <p>Aucun message n&rsquo;a &eacute;t&eacute; publi&eacute;</p>

        <?php endif; ?>

        <div class="center">
            <p>Les champs dot&eacute;s d&rsquo;une &laquo;&ast;&raquo; sont obligatoires.</p>
        </div>

        <form action="" method="post" id="blog_form">

            <fieldset class="flex_container">

                <legend>Vos coordonn&eacute;es</legend>

                <div>

                    <label class="label_positioning" for="firstname"><?= get_field('fb_firstname_label') ?></label>

                    <input placeholder="<?= get_field('fb_firstname_label_placeholder') ?>" type="text" name="firstname"
                           id="firstname" required>

                </div>

                <div>

                    <label class="label_positioning" for="lastname"><?= get_field('fb_lastname_label') ?></label>

                    <input placeholder="<?= get_field('fb_lastname_label_placeholder') ?>" type="text" name="lastname"
                           id="lastname" required>

                </div>

            </fieldset>

            <fieldset class="flex_container">

                <legend>Votre message</legend>

                <div>

                    <label class="label_positioning" for="message"><?= get_field('fb_message_textarea') ?></label>

                    <textarea placeholder="<?= get_field('fb_message_textarea_placeholder') ?>"
                              name="message" id="message" rows="10" required></textarea>

                </div>

            </fieldset>

        </form>

    </section>

</main>

<?php get_footer(); ?>
