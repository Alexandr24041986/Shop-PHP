jQuery(document).ready(function() {
    'use strict';

    jQuery('form#reg_form').submit(
        function(event) {
            event.preventDefault();
            let name = check_entry_field(jQuery('#name').val());
            let login = check_entry_field(jQuery('#login').val());
            let pwd = check_entry_field(jQuery('#pwd').val());
            let email = check_entry_field(jQuery('#email').val());

            if (!login || !pwd || !name || !email) {
                return;
            }

            let auth_data = {
                name: name,
                login: login,
                pwd: pwd,
                email: email

            };

            auth_data = 'auth_data=' + JSON.stringify(auth_data);

            jQuery.ajax({
                url: '../models/auth_user.php',
                type: 'post',
                data: auth_data,
                success: function(response) {
                    console.log("memo", response);
                    switch (response) {
                        case 'pwd is wrong':
                            document.getElementById('memo').innerHTML = 'Пароль не верный';
                            break;
                        case 'user not found':
                            document.getElementById('memo').innerHTML = 'Такого пользователя не существует';
                            break;
                        case 'user':
                            window.location = "/user.php";
                            break;
                        case 'admin':
                            window.location = "/admin.php";
                            break;
                    }
                },
                error: function(err) {
                    console.log("Error", err);
                }
            });
        }

    )
});