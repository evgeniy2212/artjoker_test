<?php

namespace App\Helpers\Contracts;

Interface ExportData {
    public function export(array $exportData, string $fileName = null);
}
