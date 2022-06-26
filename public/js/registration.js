$(document).ready(function(){
    $('.form-row').on('submit',function(){
        if($('#name').val()==""){
            alert('Please enter your name');
            return false;
        }else if($('#Email').val()==""){
            alert('Please enter your email');
            return false;
        }else if($('#pnumber').val()==""){
            alert('Please enter your phone number');
            return false;
        }else if($('#password').val()==""){
            alert('Please enter password');
            return false;
        }else if($('#confirm_password').val()==""){
            alert('Please enter confirm password');
            return false;
        }else if ($('#password').val() != $('#confirm_password').val()) {
            alert('Please enter same password');
            return false;
        }else{
            alert("Your form has been successfully submited");
        }
    });
});