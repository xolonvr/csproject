function hidesee() {
    let password_condition = document.getElementsByClassName("pw")[0];
    let repassword_condition = document.getElementsByClassName("pw")[1];
    if (password_condition.type === "password") {
        password_condition.type = "text";
        repassword_condition.type = "text";
        document.getElementById("password-condition").innerHTML = "Hide password";
    } else if (password_condition.type === "text"){
        password_condition.type = "password";
        repassword_condition.type = "password";
        document.getElementById("password-condition").innerHTML = "Show password";

    }
}