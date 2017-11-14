<?php use Fisharebest\Webtrees\Html; ?>
<?php use Fisharebest\Webtrees\I18N; ?>

<h2 class="wt-page-title">
	HOME PAGE
</h2>

<div class="row">
	<?php if (empty($main_blocks) || empty($side_blocks)): ?>
		<div class="col-sm-12 wt-main-blocks">
			<?php foreach ($main_blocks + $side_blocks as $block_id => $block): ?>
				<?php if ($block->loadAjax()): ?>
					<div class="wt-ajax-load" data-ajax-url="<?= Html::escape(Html::url('index.php', ['ctype' => 'gedcom', 'block_id' => $block_id, 'ajax' => 1])) ?>">
					</div>
				<?php else: ?>
					<?= $block->getBlock($block_id) ?>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	<?php else: ?>
		<div class="col-sm-8 wt-main-blocks">
			<?php foreach ($main_blocks as $block_id => $block): ?>
				<?php if ($block->loadAjax()): ?>
					<div class="wt-ajax-load" data-ajax-url="<?= Html::escape(Html::url('index.php', ['ctype' => 'gedcom', 'block_id' => $block_id, 'ajax' => 1])) ?>">
					</div>
				<?php else: ?>
					<?= $block->getBlock($block_id) ?>
				<?php endif ?>
			<?php endforeach ?>
		</div>
		<div class="col-sm-4 wt-side-blocks">
			<?php foreach ($side_blocks as $block_id => $block): ?>
				<?php if ($block->loadAjax()): ?>
					<div class="wt-ajax-load" data-ajax-url="<?= Html::escape(Html::url('index.php', ['ctype' => 'gedcom', 'block_id' => $block_id, 'ajax' => 1])) ?>">
					</div>
				<?php else: ?>
					<?= $block->getBlock($block_id) ?>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	<?php endif ?>
</div>