<?php
/*
	Template Name: Tpl. Page
*/
get_header();

// FIXME: если я добавил поле для страницы, а потом его удалил, то поле нужно отвязывать, иначе оно остается на этой же странице
// Решение сделать галочку isShow, чтобы блок не показывался на странице, но нужно вообще отвязывать его

// Регистрирую список компонентов ACF

$fieldsACF =  [
    '_banner', 
];
$fields = array();
// Делаю проверку какой компонент есть на странице, и создаю массив с позицией блока на странице и полями компонента
foreach ($fieldsACF as $field) {

    if (have_rows($field)) {
        $getField = get_field($field);
        $fields[$field] = array(
            "fields" => $getField,
            "position" => $getField["position"]
        );
    }
}

function cmp_function($a, $b)
{
    return ($a['position'] > $b['position']);
}
// Делаю сортировку блоков По возрастанию:
uasort($fields, 'cmp_function');
?>
<!-- Tpl. Page -->
<main class="page">
    <?php  
    /* 
    $fieldACF =  get_field('_template');
    var_dump($fieldACF);
        */
    ?>

    <?php foreach ($fields as $field => $value) {
        
        include(TEMPLATEPATH . "/src/components/$field/$field.php");
    } ?>
</main>
<!-- Tpl. Page -->

<?php get_footer('old'); ?>