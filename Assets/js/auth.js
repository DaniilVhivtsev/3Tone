$(document).ready(function(){

    $("#reg_user").click(function(){
        $('.error_message').remove();

        let email = $("#Email").val();
        let password = $("#password").val();
        let firstName = $('#First_name').val();
        let lastName = $('#Last_name').val();

        //checking for blank fields
        if( email === '' || password === '' || firstName === '' || lastName === '')
        {
            const inputs = $('input[type="email"],input[type="password"],input[type="text"]');
            inputs.css("border","2px solid red");
            inputs.css("box-shadow","0 0 3px red");
            addErrorMessage("Пожалуйста, заполните все поля.");
        }
        else if(!(validateEmail(email)))
        {
            const inputs = $('input[type="email"]');
            inputs.css("border","2px solid red");
            inputs.css("box-shadow","0 0 3px red");
            addErrorMessage('Неправильный адрес электронной почты');
        }
        else
        {
            $.post("/Assets/php/register.php",{ First_name: firstName, Last_name: lastName ,Email: email, psw:password},
                function(data) {
                    if(data=='Success')
                    {
                        $("form")[1].reset();
                        document.getElementById('reg_form').style.display='none';
                        createCongratulations();
                        user.email = email;
                    }
                    else {
                        addErrorMessage(data);
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
    const container = document.getElementById("registration");
    const form = document.getElementById("reg_form");
    const errorMessage = document.createElement("div");
    errorMessage.classList.add("error_message")
    const newContent = document.createTextNode(message);

    errorMessage.appendChild(newContent);
    container.insertBefore(errorMessage, form);
}

function createCongratulations(){
    const container = document.getElementById("registration");
    const congrats = document.createElement("h2");
    congrats.classList.add("reg_state")
    const content = document.createTextNode("Спасибо за регистрацию!");
    congrats.appendChild(content);
    container.appendChild(congrats);
}

function hideRegForm() {
    document.getElementById("reg_form").style.display = "none";
    document.getElementById("reg_state").style.display = "block";
}

function showRegForm() {
    document.getElementById("reg_form").style.display = "block";
    document.getElementById("reg_state").style.display = "none";
}