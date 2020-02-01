<?php
/*Sen is cool*/
// https://stackoverflow.com/questions/9139202/how-to-parse-a-csv-file-using-php
	$num=$_POST['num'];

	// echo($num);
	$html='<table border="1" class="dataframe table table-striped table-dark"><thead><tr style="text-align: right;"><th></th>';


	$Customer='<th onclick="orderTable(0)" >Customer</th>';
	$Device_Name ='<th onclick="orderTable(1)">Device_Name</th>';
	$Percent_Uptime='<th onclick="orderTable(2)">Percent_Uptime</th>';
	$Last_Sent='<th onclick="orderTable(3)">Last_Sent</th>';
	$Current_Status='<th onclick="orderTable(4)">Current_Status</th>';




	if ($num==0){
		$Customer='<th onclick="orderTable2(0)" >Customer</th>';
	}
	else if($num==1){
		$Device_Name ='<th onclick="orderTable2(1)">Device_Name</th>';
	}
	else if ($num==2){
		$Percent_Uptime='<th onclick="orderTable2(2)">Percent_Uptime</th>';
	}
	else if($num==3){
		$Last_Sent='<th onclick="orderTable2(3)">Last_Sent</th>';
	}
	else if ($num==4){
		$Current_Status='<th onclick="orderTable2(4)">Current_Status</th>';
	}




	$html=$html.$Customer;
	$html=$html.$Device_Name;
	$html=$html.$Percent_Uptime;
	$html=$html.$Last_Sent;
	$html=$html.$Current_Status;
	$html=$html.'</tr></thead><tbody>';



	function sortFunction( $a, $b ) {
	    return strtotime($a) - strtotime($b);
	}


	$csvFile = file('../example_data.csv');
    $data = [];
    $lock=0;
    foreach ($csvFile as $line) {
    	if ($lock!=0){
	        $data[] = str_getcsv($line);
	        $sortMain[]=str_getcsv($line)[$num];
        }
    	$lock=1;
    }
    // array_multisort($sortMain, SORT_DESC, $data);
    if ($num==3){
    	foreach ($sortMain as $line){
    		$sortMain2[]=strtotime($line);
    	}
    	// echo($sortMain2);
    	array_multisort($sortMain2, SORT_ASC, $data);
    }
    else{
    	array_multisort($sortMain, SORT_ASC, $data);
	}

    $index=0;
    foreach ($data as $line){
		$html=$html.'<tr> <th>'.$index.'</th> <td>'.$line[0].'</td> <td >'.$line[1].'</td> <td>'.$line[2].'</td> <td>'.$line[3].'</td> <td>'.$line[4].'</td> </tr>';
    	
       	$index=$index+1;
    }

    $html=$html.'</tbody></table>';
    echo($html)


?>