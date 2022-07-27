<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A3',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => '',
    'font_path' => base_path('public/dist/fonts/fontPdf/'),
	'font_data' => [
		'samim' => [
		   'R'  => 'Samim.ttf',
                    'B' =>  'Samim.ttf', //optional
		   'useOTL' => 0xFF,
		   'useKashida' => 75,
		],
	]
];
