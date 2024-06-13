<?php

Kirby::plugin('vv/images', [

  'blueprints' => [
    'blocks/image' => __DIR__ . '/blueprints/blocks/image.yml',
    'files/image' => __DIR__ . '/blueprints/files/image.yml',
    'fields/image' => __DIR__ . '/blueprints/fields/image.yml',
  ],

  'snippets' => [
    'figure' => __DIR__ . '/snippets/figure.php',
    'blocks/image' => __DIR__ . '/snippets/blocks/image.php',
  ],
]);
