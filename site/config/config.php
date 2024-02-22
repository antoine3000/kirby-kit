<?php
require __DIR__ . '/../plugins/kirby3-dotenv/global.php';
loadenv(['dir' => __DIR__ . '/../../', 'file' => '.env.production']);

return [
  'debug' => true,
  'panel' => ['install' => true],
];
