<?php
/*Sen is cool*/
// https://stackoverflow.com/questions/9139202/how-to-parse-a-csv-file-using-php


    $html='<table border="1" class="dataframe table table-striped table-dark"><thead><tr style="text-align: right;"><th></th><th onclick="orderTable(0)" >Customer</th><th onclick="orderTable(1)">Device_Name</th><th onclick="orderTable(2)">Percent_Uptime</th><th onclick="orderTable(3)">Last_Sent</th><th onclick="orderTable(4)">Current_Status</th></tr></thead><tbody>';

    $csvFile = file('../example_data.csv');
    $data =[];
    $index=0;
    $lock=0;
    foreach ($csvFile as $line) {
    	if ($lock!=0){
	        $data = str_getcsv($line);
	        $html=$html.'<tr> <th>'.$index.'</th> <td>'.$data[0].'</td> <td >'.$data[1].'</td> <td>'.$data[2].'</td> <td>'.$data[3].'</td> <td>'.$data[4].'</td> </tr>';
    	
        	$index=$index+1;
    	}
    	$lock=1;
    }


    $html=$html.'</tbody></table>';
    echo($html)

?>