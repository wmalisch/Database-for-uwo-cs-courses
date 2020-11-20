function check_direction(n) {
    var table, rows, a, b;
    table = document.getElementById('table');
    rows = table.rows;
    a = rows[1].getElementsByTagName('td')[n];
    b = rows[2].getElementsByTagName('td')[n];

    // If the table is currently descending
    if(a.innerHTML.toLowerCase() > b.innerHTML.toLowerCase()){
        if(n==0){
            sort_asc_number();
        }else{
            sort_asc_name();
        }

    // If the table is ascending
    }else{
        if(n==0){
            sort_desc_number();
        }else{
            sort_desc_name();
        }
        
    }
}

function sort_asc_number() {
    var table, rows, a, b;
    var still_switching = true;
    table = document.getElementById('table');
    while(still_switching){
        still_switching = false;
        rows = table.rows;
        for (var i = 1; i < (rows.length-1); i++){

            a = rows[i].getElementsByTagName("td")[0];
            b = rows[i+1].getElementsByTagName("td")[0];
            // Still descending
            if(a.innerHTML.toLowerCase() > b.innerHTML.toLowerCase()){
                rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
                still_switching = true;
            }
        }
    }
}

function sort_desc_number() {
    var table, rows, a, b;
    var still_switching = true;
    table = document.getElementById('table');
    while(still_switching){
        still_switching = false;
        rows = table.rows;
        for (var i = 1; i < (rows.length-1); i++){

            a = rows[i].getElementsByTagName("td")[0];
            b = rows[i+1].getElementsByTagName("td")[0];
            // Still ascending
            if(a.innerHTML.toLowerCase() < b.innerHTML.toLowerCase()){
                rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
                still_switching = true;
            }
        }
    }
}

function sort_asc_name(){
    var table, rows, a, b;
    var still_switching = true;
    table = document.getElementById('table');
    while(still_switching){
        still_switching = false;
        rows = table.rows;
        for (var i = 1; i < (rows.length-1); i++){

            a = rows[i].getElementsByTagName("td")[1];
            b = rows[i+1].getElementsByTagName("td")[1];
            // Still descending
            if(a.innerHTML.toLowerCase() > b.innerHTML.toLowerCase()){
                rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
                still_switching = true;
            }
        }
    }
}

function sort_desc_name(){
    var table, rows, a, b;
    var still_switching = true;
    table = document.getElementById('table');
    while(still_switching){
        still_switching = false;
        rows = table.rows;
        for (var i = 1; i < (rows.length-1); i++){

            a = rows[i].getElementsByTagName("td")[1];
            b = rows[i+1].getElementsByTagName("td")[1];
            // Still ascending
            if(a.innerHTML.toLowerCase() < b.innerHTML.toLowerCase()){
                rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
                still_switching = true;
            }
        }
    }
}