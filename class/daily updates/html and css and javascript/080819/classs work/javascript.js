function val  (){
    var fname = document.forms['RegForm']['fname'];
    var lname = document.forms['RegForm']['lname'];
    var email = document.forms['RegForm']['en'];
    var phone = document.forms['RegForm']['mb'];
    var password =document.forms['RegForm']['pw'];
    var cpassword = document.forms['RegForm']['cpw'];
    var address = document.forms['RegForm']['add'];
    var year = document.forms['RegForm']['yr'];
    var gender = document.forms['RegForm']['gn'];
    var cname = document.forms['RegForm']['c1'];
    if (fname.value == "") {
        window.alert("please enter your First name.");
        fname.focus();
        return false;
    }
    if (lname.value == "") {
        window.alert("please enter your Last name.");
        lname.focus();
        return false;
    }

    if (email.value == "") {
        window.alert("please enter your email address.");
        email.focus();
        return false;
    }
    if (email.value.indexof("@", 0) < 0) {
        window.alert("Please enter your valid email address.");
        email.focus();
        return false;
    }
    if (email.value.indexof(".", 0) < 0) {
        window.alert("Please enter your valid email address.");
        email.focus();
        return false;
    }
    if (phone.value == "") {
        alert("please enter your telephone number.");
        phone.focus();
        return false;
    }
    if (password.value == "") {

        window.alert("please enter your password.");
        password.focus();
        return false;
    }


    if (cpassword.value == "") {

        window.alert("please enter your password.");
        cpassword.focus();
        return false;
    }

    if (password != cpassword) {
        window.alert("\n confirm password doesnt match: please try again later");
        return false;
    }

    if (address.value == "") {
        window.alert("please enter your address.");
        address.focus();
        return false;
    }

    if (year.selectedIndex < 1) {

        window.alert("please enter your password.");
        year.focus();
        return false;
    }

    if (gender.selectedIndex < 1) {

        window.alert("please enter your password.");
        gender.focus();
        return false;
    }
    if (cname.selectedIndex < 1) {

        window.alert("please enter your password.");
        cname.focus();
        return false;
    }


    return false;
}