<?php
/*
	Template Name: Контакты
*/
get_header();
?>
<main class="page">

<section class="contacts">
      <div class="wrapper">
        <?php include(TEMPLATEPATH . "/src/components/_contacts/_contacts.php");?>
        <br>
        <br>
        <?php include(TEMPLATEPATH . "/src/components/_contacts-map/_contacts-map.php");?>
        <div class="contacts-map">
          <iframe class="contacts-map" src="https://yandex.ru/map-widget/v1/?z=12&amp;ol=biz&amp;oid=215300002137" frameborder="0"></iframe>
        </div>
        <br>
        <br>
      </div>
    </section>
</main>
<?php get_footer(); ?>