<?php if (!empty($bread_crumb)): ?>
<div class="row">
	<div class="span12">
		<ul class="breadcrumb">
			<?php foreach ($bread_crumb as $item): ?>
				<?php if (isset($item['href'])): ?>
				<li><a href="<?=$item['href']?>"><?=$item['label']?></a> <span class="divider">/</span></li>
				<?php else: ?>
				<li class="active"><?=$item['label']?></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php endif; ?>