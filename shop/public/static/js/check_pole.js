function check_pole(str) {
    if (str === "") {
        document.getElementById('memo').innerHTML = 'Поле не может быть пустым';
        return false;
    }
    if (str.indexOf(" ", str.length - 1) >= 0) {
        str = str.substr(0, str.length - 1);
    } else if (str.lastIndexOf(" ", 0) >= 0) {
        str = str.substr(1, str.length - 1);
    } else {
        return str;
    }


    return check_pole(str);
}