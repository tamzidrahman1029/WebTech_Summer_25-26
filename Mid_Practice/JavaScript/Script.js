window.onload = function()
{
    calculateTotal();
}

let unitPrice = 500;
let total = 0;

function calculateTotal()
{
    let quantity = document.getElementById("Quantity").value;

    if(quantity <= 0)
    {
        alert("Quantity can not be zero or negative");
        document.getElementById("Quantity").value = 1;
        quantity = 1;
    }

    total = unitPrice * quantity;

    document.getElementById("TotalPrice").value = total + " Tk";

    if(total > 2000)
    {
        document.getElementById("Coupon").innerHTML =
        "You are now eligible for a coupon.";
    }
    else
    {
        document.getElementById("Coupon").innerHTML = "";
    }

    deliveryCharge();
}

function deliveryCharge()
{
    let charge = 0;

    let option = document.getElementById("Delivery").value;

    if(option == "Inside Dhaka")
    {
        charge = 50;
    }
    else
    {
        charge = 120;
    }

    document.getElementById("FinalPrice").value =
    (total + charge) + " Tk";
}

function showButton()
{
    let check = document.getElementById("Check");

    if(check.checked)
    {
        document.getElementById("Submit").style.display = "block";
    }
    else
    {
        document.getElementById("Submit").style.display = "none";
    }
}