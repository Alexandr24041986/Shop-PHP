jQuery(document).ready(function(){
    'use strict';

    jQuery('form#auth_form').submit(
        function(event){
            event.preventDefault();

            let login = jQuery('#login').val();
            let pwd = jQuery('#pwd').val();

            if(!login || !pwd){
                return;
            }

            let auth_data = {
                login: login,
                pwd: pwd
            };

            auth_data = 'auth_data=' + JSON.stringify(auth_data);

            jQuery.ajax({
                url: '/personal',
                type: 'post',
                data: auth_data,
                success: function(response){
                    switch (response) {
                        case 'pwd is wrong':
                            document.getElementById('memo').innerHTML = 'Указан не верный пароль';
                            break;
                        case 'user not found':
                            document.getElementById('memo').innerHTML = 'Пользователь не зарегистрирован';
                            break;
                        case 'user':
                            window.location = "/user_account";
                            break;
                        case 'admin':
                            window.location = "/personal/admin_account";
                            break;
                    }
                },
                error: function(err){
                    console.log("Error", err);
                }
            });
        }

    )
});