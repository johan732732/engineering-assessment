<?php

$randomCalification = rand(1, 5);

for ($i = 1; $i <= 5; $i++) {
?>
    <i class="fa-<?= ($i <= $randomCalification ? 'solid' : 'regular'); ?> fa-star text-warning"></i>
<?php
}
?>