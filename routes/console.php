<?php

use Illuminate\Foundation\Inspiring;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('generate', function () {

	$data = \DB::table('studentprofiles')->get()->toArray();
	// dd($data);

	// $inputFileName = './public/excel-template/contoh.xlsx';
	// $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
	$start = microtime(TRUE);
	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();
	$getdata = $data;
	// echo "<pre>";
	// var_dump($getdata);
	// echo "</pre>";
	// exit;
	foreach ($getdata as $keyGet => $get) {
		$startRow = 18;
		$sheet->setCellValue('B' . $keyGet, $get->appl_id);
		$sheet->setCellValue('C'. $keyGet, $get->appl_fname);
		$sheet->setCellValue('D'. $keyGet, $get->appl_lname);
		$sheet->setCellValue('E'. $keyGet, $get->appl_address1);
		$sheet->setCellValue('F'. $keyGet, $get->appl_postcode);
		$sheet->setCellValue('G'. $keyGet, $get->appl_city);
		$sheet->setCellValue('H'. $keyGet, $get->appl_state);
		$sheet->setCellValue('I'. $keyGet, $get->appl_city_others);
		$sheet->setCellValue('J'. $keyGet, $get->appl_state_others);
		$sheet->setCellValue('K'. $keyGet, $get->appl_country);
		$sheet->setCellValue('L'. $keyGet, $get->appl_id);
		$sheet->setCellValue('M'. $keyGet, $get->appl_email);
		$sheet->setCellValue('N'. $keyGet, $get->appl_email_personal);
		$sheet->setCellValue('O'. $keyGet, $get->appl_username);
		$sheet->setCellValue('P'. $keyGet, $get->appl_password);
		$sheet->setCellValue('Q'. $keyGet, $get->appl_gender);
		$sheet->setCellValue('R'. $keyGet, $get->create_date);
		$sheet->setCellValue('S'. $keyGet, $get->update_date);
		if($keyGet > 10000) {
			break;
		}
	}
	$startRow++;


	// $spreadsheet = new Spreadsheet();
	// $sheet = $spreadsheet->getActiveSheet();
	// $sheet->setCellValue('A1', 'Hello World !');

	$writer = new Xlsx($spreadsheet);
	$writer->save('hello world.xlsx');
	echo (microtime(TRUE) - $start) . "\n";
	echo memory_get_peak_usage();
})->describe('Display an inspiring quote');


Artisan::command('cligen', function () {
	$cmd = <<<SCRIPT
	mysql -B -u root -p"wchkl2019" -e "SELECT * FROM studentprofiles;" db_nex_dash > test2.csv | sed "s/\"/\"\"/g;s/'/\'/;s/\t/\",\"/g;s/^/\"/;s/$/\"/;s/\n//g"
	SCRIPT;
	shell_exec($cmd);
    $this->comment('Your file has been generated! Thank you');
})->describe('Display an inspiring quote');