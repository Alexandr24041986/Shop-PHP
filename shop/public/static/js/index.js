jQuery(document).ready(function() {
    'use strict';


    jQuery('form#registr').submit(
        function(event) {

            event.preventDefault();
            let login = checkInput(jQuery('#login').val());
            let email = checkInput(jQuery('#email').val());
            let pwd = checkInput(jQuery('#pwd').val());
            console.log('данные ушли');
            if (!name || !login || !pwd || email) {
                return;
            }

            let user_data = {
                user_name: user_name,
                login: login,
                email: email,
                pwd: pwd,
                state: 'user'
            };


            user_data = 'user_data=' + JSON.stringify(user_data);


            jQuery.ajax({
                url: '/registration', // обработчик данных на сервере
                type: 'post', // метод, которым отправляем данные
                data: user_data, // отправляемые данные (строка json)
                success: function(response) {
                    console.log("memo", response);
                    switch (response) {
                        case 'user yes':
                            document.getElementById('memo').innerHTML = 'login already exists';
                            break;
                        case 'not add':
                            document.getElementById('memo').innerHTML = 'user not found';
                            break;
                        case 'user add':
                            document.getElementById('memo').innerHTML = 'Пользователь зарегистрирован';
                            window.location = "/user_account";
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