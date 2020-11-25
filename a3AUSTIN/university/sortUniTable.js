// Check if column is currently ascending or descending
function check_direction(n) {
    var table, rows, a, b;
    table = document.getElementById('table');
    rows = table.rows;
    a = rows[1].getElementsByTagName('td')[n];
    b = rows[2].getElementsByTagName('td')[n];

    // If the table is currently descending
    if(a.innerHTML.toLowerCase() > b.innerHTML.toLowerCase()){
        if(n==3){
            sort_asc_province();
        }else{
            sort_asc_name();
        }

    // If the table is ascending
    }else{
        if(n==3){
            sort_desc_province();
        }else{
            sort_desc_name();
        }
        
    }
}

// Sort province column to be ascending
function sort_asc_province() {
    var table, rows, a, b;
    var still_switching = true;
    table = document.getElementById('table');
    while(still_switching){
        still_switching = false;
        rows = table.rows;
        for (var i = 1; i < (rows.length-1); i++){

            a = rows[i].getElementsByTagName("td")[3];
            b = rows[i+1].getElementsByTagName("td")[3];
            // Still descending
            if(a.innerHTML.toLowerCase() > b.innerHTML.toLowerCase()){
                rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
                still_switching = true;
            }
        }
    }
}

// Sort number column to be descending
function sort_desc_province() {
    var table, rows, a, b;
    var still_switching = true;
    table = document.getElementById('table');
    while(still_switching){
        still_switching = false;
        rows = table.rows;
        for (var i = 1; i < (rows.length-1); i++){

            a = rows[i].getElementsByTagName("td")[3];
            b = rows[i+1].getElementsByTagName("td")[3];
            // Still ascending
            if(a.innerHTML.toLowerCase() < b.innerHTML.toLowerCase()){
                rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
                still_switching = true;
            }
        }
    }
}

// Sort name column to be ascending
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

// Sort name column to be descending
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