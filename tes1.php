<!-- KRISNA HENDRA -->
<?php  
$arr = [      
	"bkd" => [          
		"eselon" => [              
			[                  
				"nama" => "wahyu",                  
				"alamat" => "malang"              
			],         
		],         
		"jfu" => [             
			[                 
				"nama" => "agung",
				"alamat" => "malang"             
			]         
		],     
	],     
	"Dinas Pendidikan" => [         
		"jfu" => [             
			[             
			"nama" => "bawon",             
			"alamat" => "malang"             
			]         
		],     
		] 
    ]; 
echo "<pre>";
// 1
echo "<b>Nomor 1</b> <br>";
$data = each($arr);
echo $data[0]."<br>";

// 2
echo "<b>Nomor 2</b> <br>";
foreach($arr as $a=>$b){
	foreach($b as $key=>$value){
		foreach($value as $kunci){
			echo $kunci['nama']." adalah pegawai ".$key." ".$a."<br>";
		}
	}
}
?>