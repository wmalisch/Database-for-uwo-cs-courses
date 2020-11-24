function setDateSetUni(){
    var selected_month = document.getElementById('month');
    var selected_day = document.getElementById('day');
    var date = new Date();
    var month = date.getMonth();
    var day = date.getDate() - 1;
    selected_month.selectedIndex = month;
    selected_day.selectedIndex = day;
    checkUni();
}

function checkUni() {
    var selected = document.getElementById('outsideCourse');
    var selected_string = selected.options[selected.selectedIndex].innerText;
    var uniId = selected_string.substr(0,selected_string.indexOf('-'));
    var hidden_input = document.getElementById('university');
    hidden_input.value=uniId;
}