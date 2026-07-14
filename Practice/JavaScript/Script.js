console.log("HTML Connected");

let a = 10;
let b = 20;

sum = a + b;

console.log(sum);

if(a > 0)
{
    console.log("Positive Number");
}
else
{
    console.log("Negative Number");
}

let i = 0;

for(i = 0; i < 5; i++)
{
    console.log("Value: ", i);
}

let j = 0;

while(j < 5)
{
    j++;
    console.log("Value From While Loop:", j);
}

let jj = 1;

do
{
    jj++;
    console.log("Value From Do While:", jj);
}
while(jj < 5);

let array = ["ABC","CDF"];

array.forEach((item,index)=>{
    console.log("Index:",index,"Item:",item);
});

array.map((item,index)=>{
    console.log("Index:",index,"Item:",item);
});



function collect_data()
{
    let isNameValid = collect_name();
    let isEmailValid = collect_Email();
    let isPasswordValid = collect_Password();
    let isAgeValid = collect_Age();
    let isDOBValid = collect_DOB();
    let isPhoneValid = collect_Phone();
    let isAddressValid = collect_Address();

    if(isNameValid && isEmailValid && isPasswordValid && isAgeValid && isDOBValid && isPhoneValid && isAddressValid)
    {
        alert("Form Submitted Successfully");
    }

    return false;
}



function collect_name()
{
    let UserName = document.getElementById("Fname").value;

    if(UserName === "")
    {
        alert("Name Can Not Be Empty");
        return false;
    }

    else if(UserName.length < 5)
    {
        alert("Name Must Be At Least 5 Characters");
        return false;
    }

    console.log(UserName);

    return true;
}



function collect_Email()
{
    let Email = document.getElementById("Email").value;

    if(Email === "")
    {
        alert("Email Can Not Be Empty");
        return false;
    }

    console.log(Email);

    return true;
}



function collect_Password()
{
    let Password = document.getElementById("Password").value;

    if(Password === "")
    {
        alert("Password Can Not Be Empty");
        return false;
    }

    else if(Password.length < 6)
    {
        alert("Password Must Be At Least 6 Characters");
        return false;
    }

    console.log(Password);

    return true;
}



function collect_Age()
{
    let Age = document.getElementById("Age").value;

    if(Age === "")
    {
        alert("Age Can Not Be Empty");
        return false;
    }

    console.log(Age);

    return true;
}



function collect_DOB()
{
    let DOB = document.getElementById("DOB").value;

    if(DOB === "")
    {
        alert("DOB Can Not Be Empty");
        return false;
    }

    console.log(DOB);

    return true;
}



function collect_Phone()
{
    let Phone = document.getElementById("Phone").value;

    if(Phone === "")
    {
        alert("Phone Number Can Not Be Empty");
        return false;
    }

    else if(Phone.length != 11)
    {
        alert("Phone Number Is Not Valid");
        return false;
    }

    console.log(Phone);

    return true;
}



function collect_Address()
{
    let Address = document.getElementById("Address").value;

    if(Address.trim() === "")
    {
        alert("Address Can Not Be Empty");
        return false;
    }

    console.log(Address);

    return true;
}