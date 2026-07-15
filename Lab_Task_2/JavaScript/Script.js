console.log("html connected");

let attempt=0;
let lock=false;

function collect_data()
{
    let isNameValid=collect_name();
    let isPasswordValid=collect_password();
    return false;
}

function collect_name()
{
    let UserName=document.getElementById("UserName").value;
    if(UserName === "")
    {
        document.getElementById("NameError").innerHTML="Name can not be Empty";
        return false;
    }

    else if(UserName == "AIUB")
    {
        document.getElementById("NameError").innerHTML="Correct UserName";
        return true;
    }
    
    console.log(UserName);
    return true;

}

function collect_password()
{
    let Password=document.getElementById("Password").value;
    
    if(Password === "")
    {
        document.getElementById("PassError").innerHTML="Password must be filled"
        return false;
    }

    else if(Password == "$_student")
    {
        document.getElementById("PassError").innerHTML="Correct Password";
        return true;
    }

    console.log(Password);
    return true;

}
