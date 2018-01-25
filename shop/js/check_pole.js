function check_pole(str) {
    if (str === "") {
        document.getElementById('memo').innerHTML = 'Поле не может быть пустым';
        return false;
    }



    return check_pole(str);
}