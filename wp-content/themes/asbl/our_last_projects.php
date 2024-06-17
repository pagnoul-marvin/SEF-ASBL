<?php
/*
Template Name: Our last projects
*/
get_header()
?>

<main>

    <section class="odd_unlinked_section spacing" itemscope itemtype="https://schema.org/Organization">

        <?php component('unlinked_section.section', [
            'field_name' => 'first_project'
        ]); ?>

    </section>

</main>

<?php get_footer() ?>