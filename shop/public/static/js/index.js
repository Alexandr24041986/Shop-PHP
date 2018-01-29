jQuery(document).ready(function() {
    'use strict';

    jQuery('form#registr').submit(
        function(event) {
            event.preventDefault();
            let name = jQuery('#name').val();
            let login = jQuery('#login').val();
            let email = jQuery('#email').val();
            let pwd = jQuery('#pwd').val();
            if (!name || !login || !pwd || email) {
                return;
            }

            let user_data = {
                name: name,
                login: login,
                email: email,
                pwd: pwd,
                state: 'user'
            };


            user_data = 'user_data=' + JSON.stringify(user_data);


            jQuery.ajax({
                url: 'reg_user', // обработчик данных на сервере
                type: 'post', // метод, которым отправляем данные
                data: user_data, // отправляемые данные (строка json)
                success: function(response) {
                    console.log("memo", response);
                    switch (response) {
                        case 'pwd is wrong':
                            document.getElementById('memo').innerHTML = 'pwd is wrong';
                            break;
                        case 'user not found':
                            document.getElementById('memo').innerHTML = 'user not found';
                            break;
                        case 'user':
                            window.location = "/user.php";
                            break;
                        case 'admin':
                            window.location = "/admin.php";
                            break;
                    }
                },
                // функция, которая отработае, если не получится соедениться с сервером
                error: function(err) {
                    console.log("Error", err);
                }
            });
        }
    )

});