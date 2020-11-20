
document.getElementById('newNumber').maxLength = "4";
document.getElementById('newName').maxLength = "50";

function check_if_num(num) {
    var event = num || window.event;
    var char;
    if(event === 'paste'){
        char = event.clipboardData.getData('text/plain');
    }else{
        char = String.fromCharCode(char);
    }
    var num = /[0-9]/;
    if(!num.test(char)){
        event.returnValue = false;
        if(event.preventDefault) {
            event.preventDefault();
        }
    }
}