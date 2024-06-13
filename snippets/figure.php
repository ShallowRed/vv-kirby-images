<?php

/**
 * @see https://github.com/timnarr/kirby-imagex#readme
 */

$attrs ??= [];
$alt ??= $file->content()->alt();
$caption = $file->content()->caption();
$ratio   = $file->content()->ratio()->or('auto');

$defaultOptions = [
  'image' => $file,
  'imgAttributes' => [
    'shared' => [
      'alt' => $alt,
    ],
  ],
];

if ($ratio->value() !== 'auto') {
  $defaultOptions['ratio'] = $ratio;
}

$mergedOptions = A::merge($defaultOptions, $options ?? []);
?>
<figure <?= attr($attrs) ?>>
  <?php snippet('imagex-picture', $mergedOptions) ?>
  <?php if ($caption->isNotEmpty()) : ?>
  <figcaption>
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
