<?php
$time = date('G');
?>
<?php if ($time < 20): ?>
  <p>※ 営業時間外です</p>
<?php else: ?>
  <p>ようこそ</p>
<?php endif; ?>
