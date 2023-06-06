function validRegistration(reg) {
    let errorEmail = document.getElementById("errorEmail");
    let errorPhone = document.getElementById("errorPhone");
    let errorAge = document.getElementById("errorAge");
    let email = reg.email.value;
    let phone = reg.phone.value;
    let age = reg.age.value;
    let isvalid = true;
    errorEmail.innerHTML = "";
    errorPhone.innerHTML = "";
    errorAge.innerHTML = "";

    let validEmailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let validphoneRegex = /^(\+?880|0)1[3456789]\d{8}$/;
    if (email == "") {
        errorEmail.innerHTML = "Invalid Email format.";
        isvalid = false;
    } else if (!validEmailRegex.test(email)) {
        errorEmail.innerHTML = "Invalid Email format.";
        isvalid = false;
    }

    if (phone == "") {
        errorPhone.innerHTML = "Invalid Phone Number.";
        isvalid = false;
    } else if (!validphoneRegex.test(phone)) {
        errorPhone.innerHTML = "Invalid Phone Number.";
        isvalid = false;
    }

    if (0 > age || age > 200 || isNaN(age)) {
        errorAge.innerHTML = "Invalid Age.";
        isvalid = false;
    }
    return isvalid;
}
