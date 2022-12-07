<?php
/**
 * 
 */
$blockACF = get_field('_contacts');
if (!empty($blockACF) && $blockACF["isShow"]) :
  $fields = $blockACF['fields'];
?>
 <div class="contacts-items">

  <?php 
  // var_dump($fields['items']);
  if(!empty($fields['items'])) :
  foreach($fields['items'] as $item) : ?>
    <div class="contacts-item">
      <h4><?php echo $item['name']; ?></h4>
      <?php if(!empty($item['tel'])) :?>
        <div>
        <a href="tel:<?php echo $item['tel']; ?>">Тел.:<?php echo $item['tel']; ?></a>
        </div>
      <?php endif;?>
      <?php if(!empty($item['email'])) :?>
        <div>
        <a href="email:<?php echo $item['email']; ?>">Email.:<?php echo $item['email']; ?></a>
        </div>
        <?php endif;?>
      <?php if(!empty($item['address'])) :?>
        <div>
        <p ><?php echo $item['address']; ?></p>
        </div>
        <?php endif;?>
      <?php if(!empty($item['wa'])) :?>
        <div>
        <a href="https://wa.me/<?php echo $item['wa']; ?>" target="_blank">WhatsApp.:<?php echo $item['wa']; ?></p>
        </div>
        <?php endif;?>
    </div>
    <?php endforeach;
    endif; ?>

  </div>

<?php endif; ?>