<?php

require BASE_PATH . '../../../vendor/autoload.php';

use App\Models\BlogEntries;
use Core\Database;

try {
    $db = new Database(BASE_PATH . '.env.local.ini');
    $blog_form = new BlogEntries($db);
    $blog_form->save();
    $blog_messages = $blog_form->getBlogMessage();
    $blog_errors = $blog_form->getErrors();
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

        <?php if (isset($blog_messages)): ?>

            <?php foreach ($blog_messages as $message): ?>

                <article class="blog_article">

                    <h3 class="no_display">Avis de <?= $message['firstname'] ?></h3>

                    <p class="blog_article_name"><?= $message['firstname'] ?> <?= $message['lastname'] ?></p>

                    <time datetime="<?= date('j F Y', strtotime($message['created_at'])) ?>"
                          class="blog_article_time"><?= date('j F Y', strtotime($message['created_at'])) ?></time>

                    <p class="blog_article_message"><?= $message['message'] ?></p>

                </article>

            <?php endforeach; ?>

        <?php else: ?>

            <p>Aucun message n&rsquo;a &eacute;t&eacute; publi&eacute;</p>

        <?php endif; ?>

        <div class="center">
            <p>Les champs dot&eacute;s d&rsquo;une &laquo;&ast;&raquo; sont obligatoires.</p>
        </div>

        <form action="<?= home_url() ?>" method="post" id="blog_form">

            <fieldset class="flex_container">

                <legend>Vos coordonn&eacute;es</legend>

                <div>

                    <label class="label_positioning" for="firstname"><?= get_field('fb_firstname_label') ?> <small
                                class="small">Le pr&eacute;nom doit au minimum contenir 3 caract&egrave;res, au plus
                            255 et ne peut pas contenir de chiffres.</small></label>

                    <input placeholder="<?= get_field('fb_firstname_label_placeholder') ?>" type="text" name="firstname"
                           id="firstname" required>

                    <?php if (isset($blog_errors['firstname'])) { ?>
                        <p class="validation_errors"><?= $blog_errors['firstname'] ?></p>
                    <?php } ?>

                </div>

                <div>

                    <label class="label_positioning" for="lastname"><?= get_field('fb_lastname_label') ?> <small
                                class="small">Le nom doit au minimum contenir 3 caract&egrave;res, au plus 255 et ne peut pas contenir de chiffres.</small></label>

                    <input placeholder="<?= get_field('fb_lastname_label_placeholder') ?>" type="text" name="lastname"
                           id="lastname" required>

                    <?php if (isset($blog_errors['lastname'])) { ?>
                        <p class="validation_errors"><?= $blog_errors['lastname'] ?></p>
                    <?php } ?>

                </div>

            </fieldset>

            <fieldset class="flex_container">

                <legend>Votre message</legend>

                <div>

                    <label class="label_positioning" for="message"><?= get_field('fb_message_textarea') ?> <small
                                class="small">Le message doit au minimum contenir 3 caract&egrave;res, au plus
                            500.</small></label>

                    <textarea placeholder="<?= get_field('fb_message_textarea_placeholder') ?>"
                              name="message" id="message" rows="10" required></textarea>

                    <?php if (isset($blog_errors['message'])) { ?>
                        <p class="validation_errors"><?= $blog_errors['message'] ?></p>
                    <?php } ?>

                </div>

            </fieldset>

            <?php component('forms.labels_and_input.submit_type'); ?>

        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($blog_errors)) { ?>
            <div id="validate">
                <p>Votre message a bien &eacute;t&eacute; envoy&eacute;&nbsp;! Nous vous remercions pour votre message&nbsp;!</p>
            </div>
        <?php } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($blog_errors)) { ?>
            <div id="not_validate">
                <p>Votre message n&rsquo;a pas &eacute;t&eacute; envoy&eacute;&nbsp;! Un ou plusieurs champ(s) ne
                    respecte(nt) pas les r&egrave;gles.</p>
            </div>
        <?php } ?>

    </section>

</main>

<?php get_footer(); ?>
