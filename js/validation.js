function loginvalidation()
{
    var adminEmail = document.getElementById('adminEmail').value;
    var adminPassword = document.getElementById('adminPassword').value;

    if(adminEmail=='' || adminEmail===null)
    {
        document.getElementById('adminEmailError-msg').innerHTML='Email/Username cannot be Empty';
        return false;
    }
    if(adminPassword=='' || adminPassword===null)
    {
        document.getElementById('adminPasswordError-msg').innerHTML='Password cannot be Empty';
        return false;
    }
}