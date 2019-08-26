<?php

use humhub\libs\Html;
use humhub\widgets\PanelMenu;

\humhub\modules\freshdesk\Assets::register($this);
?>

<div class="panel panel-default panel-freshdesk" id="panel-freshdesk">
    <?= PanelMenu::widget(['id' => 'panel-freshdesk']); ?>
  <div class="panel-heading">
    <?= Yii::t('FreshdeskModule.base', '<strong>Freshdesk</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<script type="text/javascript" src="https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.js"></script>
<style type="text/css" media="screen, projection">
	@import url(https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.css);
</style>
<iframe title="Feedback Form" class="freshwidget-embedded-form" src="<?= $freshdeskUrl; ?>" id="freshwidget-embedded-form" width="100%" height="500" scrolling="no" allowtransparency="true" frameborder="0" name="iframeContainer"></iframe>
<?= Html::endTag('div'); ?>
</div>
</div>
