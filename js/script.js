function validateForm() {
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var phone = document.getElementById('phone');
    var age = document.getElementById('age');
    var pw = document.getElementById('pw');
    var cpw = document.getElementById('cpw');
    var error = document.getElementById('error');

    console.log('Testing');

    if(name.value.trim() == "")
    {
        alert("User Name Is Empty");
        return false;
    }
    if(email.value.trim() == "")
    {
        alert("User Name Is Empty");
        return false;
    }
    if(phone.value.trim() == "")
    {
        alert("User Name Is Empty");
        return false;
    }
    if(age.value.trim() == "")
    {
        alert("User Name Is Empty");
        return false;
    }
    if(pw.value.trim() == "")
    {
        alert("User Name Is Empty");
        return false;
    }
    if(cpw.value.trim() == "")
    {
        alert("User Name Is Empty");
        return false;
    }
    else
    {
        return true;
    }
}

function ValidateEmail()
{
    var email = document.getElementById('email');
    var myForm = document.getElementById('myForm');

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
    {
        return (true)
    }
    alert("You have entered an invalid email address!")
    return (false)
}
