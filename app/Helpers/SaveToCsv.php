<?php

namespace App\Helpers;

use App\Helpers\Contracts\ExportData;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class SaveToCsv implements ExportData{
    public function export(array $exportData, string $fileName = null){
        $result = $this->exportCsvFile($exportData, $fileName);

        return $result;
    }

    private function exportCsvFile($data, $fileName){
        $csvData = $this->prepareData($data);
        $fileName = $fileName ?? $this->getFileName();
        $done = Storage::disk('public')->put($fileName.'.csv', $csvData);
        $result = $done ? Storage::disk('public')->path($fileName.'.csv') : false;

        return $result;
    }

    private function prepareData($data, $colDelimiter = ',', $rowDelimiter = "\r\n"){
        $resultCSV = '';
        foreach($data as $row){
            $cols = array();
            $row = is_array($row) ? $row : [$row];
            foreach($row as $col_val){
                if( $col_val && preg_match('/[",;\r\n]/', $col_val) ){
                    if( $rowDelimiter === "\r\n" ){
                        $col_val = str_replace( "\r\n", '\n', $col_val );
                        $col_val = str_replace( "\r", '', $col_val );
                    }
                    elseif( $rowDelimiter === "\n" ){
                        $col_val = str_replace( "\n", '\r', $col_val );
                        $col_val = str_replace( "\r\r", '\r', $col_val );
                    }
                    $col_val = str_replace( '"', '""', $col_val );
                    $col_val = '"'. $col_val .'"';
                }
                $cols[] = ($col_val === NULL) ? 'NULL' : $col_val;
            }
            $resultCSV .= implode($colDelimiter, $cols) . $rowDelimiter;
        }
        $resultCSV = rtrim($resultCSV, $rowDelimiter);

        $inputCharset = $this->getCharset($resultCSV) ?? "UTF-8";
        $resultCSV = iconv($inputCharset, "cp1251//IGNORE",  $resultCSV);

        return $resultCSV;
    }

    private function getCharset($data){
        return mb_detect_encoding($data);
    }

    private function getFileName(){
        return Carbon::now()->format('Y_m_d_H_i_s_u');
    }
}
