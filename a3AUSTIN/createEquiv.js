function checkUni() {
    var selected = document.getElementById('outsideCourse');
    var selected_string = selected.options[selected.selectedIndex].innerText;
    var uniId = selected_string.substr(0,selected_string.indexOf('-'));
    var hidden_input = document.getElementById('university');
    hidden_input.value=uniId;
}