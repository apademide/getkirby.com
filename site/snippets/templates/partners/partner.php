<a href="<?= $partner->url() ?>"
	 class="<?= $partner->blurred()->isTrue() ? 'blurred' : '' ?>">
	<article class="columns items-center"
					 style="--columns: 4; --columns-sm: 4; --gap: var(--spacing-6)">
		<figure style="--span: 1; --aspect-ratio: 1/1; overflow: hidden">
			<?php if ($avatar = $partner->avatar()): ?>
				<?= $avatar->resize(200) ?>
			<?php elseif ($image = $partner->image()): ?>
				<?= $image ?>
			<?php endif ?>
		</figure>
		<header style="--span: 3; --span-sm: 3">
			<h3
				class="h3 truncate"><?= $partner->excerptTitle()->or($partner->title()) ?></h3>
			<p class="font-mono text-sm color-gray-600 truncate">
				<?= $partner->location() ?>
			</p>
		</header>
	</article>
</a>
