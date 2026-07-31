<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Ecotourism;
use App\Models\Facility;
use App\Models\Umkm;

echo "ECOTOURISM:\n";
foreach (Ecotourism::all() as $e) {
    echo "ID: {$e->id} => image: '{$e->image}'\n";
}

echo "\nFACILITY:\n";
foreach (Facility::all() as $f) {
    echo "ID: {$f->id} => image: '{$f->image}'\n";
}

echo "\nUMKM:\n";
foreach (Umkm::all() as $u) {
    echo "ID: {$u->id} => image: '{$u->image}'\n";
}
