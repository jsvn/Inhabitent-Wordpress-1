<!-- This file is used to markup the public-facing widget. -->

<?php if( strlen( trim( $monday_friday ) ) > 0): ?>
<p>
  <span class="day_of_week">Monday to Friday: </span><?php echo $monday_friday ?>
</p>
<? endif; ?>

<?php if( strlen( trim( $saturday ) ) > 0): ?>
<p>
  <span class="day_of_week">Saturday: </span><?php echo $saturday ?>
</p>
<? endif; ?>

<?php if( strlen( trim( $sunday ) ) > 0): ?>
<p>
  <span class="day_of_week">Sunday: </span><?php echo $sunday ?>
</p>
<? endif; ?>
