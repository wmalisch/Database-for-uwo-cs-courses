function check_if_num(num) {
    num = num.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1');
}
//"this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1');"