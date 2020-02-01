//Sen Qiao Copyright 2020


//generate table
function displayTable(){
	$.ajax({
        url: 'controller/read.php',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
        	$("#mainTable").empty();
        	// alert(data)
            $("#mainTable").append(data.replace(/\\/g,''));
            // alert(data)
        }
    });

}

//
function orderTable(number){
	$.ajax({
        url: 'controller/order.php',
        type: 'POST',
        data: { num: number},
        success: function (e) {
        	$("#mainTable").empty();
            $("#mainTable").append(e.replace(/\\/g,''));
        }
    });

}


function orderTable2(number){
	$.ajax({
        url: 'controller/reverseorder.php',
        type: 'POST',
        data: { num: number},
        success: function (e) {
        	$("#mainTable").empty();
            $("#mainTable").append(e.replace(/\\/g,''));
        }
    });

}


$(document).ready(function(){
	displayTable();
});