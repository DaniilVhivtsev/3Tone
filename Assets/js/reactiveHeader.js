// Get the modal
const modal = document.getElementById('01');
const logout = document.getElementById('logout');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    switch (event.target) {
        case modal:
            modal.style.display = "none";
            break;
        case logout:
            logout.style.display = "none";
            break;
    }
}

const signIn = document.getElementById('sign_in');
const header = document.getElementById('left_header');
const userName = document.createElement("div");
userName.classList.add("nav_link");
userName.classList.add("sign_in")
userName.onclick = function () {
    document.getElementById("logout").style.display='block';
};

let user = {
    value : name,
    get email() {
        return this.value;
    },
    set email(value) {
        this.value = value;
        this.updateUser();
    },
    updateUser: function() {
        if(user.email !== '') {
            let newContent = document.createTextNode(user.email);
            newContent.data=this.value;
            signIn.style.display='none';
            header.insertBefore(userName, signIn);
            userName.style.display='block';
            if(userName.firstChild !== null) {
                userName.removeChild(userName.firstChild);
            }
            userName.appendChild(newContent);
        }
        else {
            signIn.style.display='block';
            userName.style.display='none';
        }
    }
}
if(user.email !== '')
{
    user.updateUser();
}