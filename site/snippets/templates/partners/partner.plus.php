<a href="<?= $partner->url() ?>"
	 class="<?= $partner->isBlurred() ? 'blurred' : '' ?>">
	<article>
		<h3 class="h3 truncate flex mb-3 items-center">
			<span class="mr-3"
						title="Certified Kirby Partner"><?= icon('verified') ?></span>
			<?= $partner->title() ?>
		</h3>
		<figure>
			<div style="--aspect-ratio: 3/2" class="mb-3">
				<?php if ($image = $partner->card()): ?>
					<?= $image->resize(800) ?>
				<?php elseif ($image = $partner->avatar()): ?>
					<span class="p-6 bg-light">
						<img class="shadow-xl bg-white" style="width: auto; height: 100%;"
								 src="<?= $image->resize(650)->url() ?>">
					</span>
				<?php endif ?>
			</div>
			<figcaption class="font-mono text-sm mb-6">
				<p>
					<?= $partner->subtitle() ?>
				</p>
				<p class="color-gray-600">
					<?= $partner->location() ?>
				</p>
			</figcaption>
		</figure>
		<div class="prose text-base">
			<?= $partner->summary() ?>
		</div>
	</article>
</a>
