$(document).ready(function(){

    $("#login").click(function(){
        $('.error_message').remove();

        let email = $("#email").val();
        let password = $("#psw").val();
        let save = $('#remember').is(":checked");

        //checking for blank fields
        if( email =='' || password =='')
        {
            const inputs = $('input[type="email"],input[type="password"]');
            inputs.css("border","2px solid red");
            inputs.css("box-shadow","0 0 3px red");
            addErrorMessage("Пожалуйста, заполните все поля.");
        }
        else if(!(
            validateEmail(email)))
        {
            const inputs = $('input[type="email"]');
            inputs.css("border","2px solid red");
            inputs.css("box-shadow","0 0 3px red");
            addErrorMessage('Неправильный адрес электронной почты');
        }
        else
        {
            $.post("/Assets/php/login.php",{ email: email, psw:password, save: save},
                function(data) {
                    if(data=='Successfully Logged in...')
                    {
                        $("form")[0].reset();
                        document.getElementById('01').style.display='none';
                        user.email = email;
                        if (typeof hideRegForm === "function") {
                            hideRegForm();
                        }
                    }
                    else {
                        addErrorMessage(data)
                    }
                })
        }
    });
});

function validateEmail(email)
{
    const filter=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

    return filter.test(email);
}

function addErrorMessage(message)
{
    const container = document.getElementById("container_login");
    const errorMessage = document.createElement("div");
    errorMessage.classList.add("error_message")
    const newContent = document.createTextNode(message);

    errorMessage.appendChild(newContent);
    container.prepend(errorMessage);
}