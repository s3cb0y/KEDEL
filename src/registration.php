<!DOCTYPE html>
<html lang="ka">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KEDEL-ზე რეგისტრაცია</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/excel-bootstrap-table-filter-style.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<div class="container mt-2 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-sm-4 border border-primary shadow rounded pt-2">
            <div class="col-sm-12">
                <h3 style="text-align: center; color: lightseagreen;">KEDEL-ზე რეგისტრაცია</h3>
                <form method="post" id="singnupFrom" onSubmit="return validation()" autocomplete="off">
                    <div class="form-group">
                        <label class="font-weight-bold">ელ. ფოსტა</label>
                        <div class="input-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="მიუთითეთ მოქმედი ელ. ფოსტა">
                            <div class="input-group-append"><button type="button" class="btn btn-primary emailCheck"><i class="fa fa-envelope"></i></button></div>
                        </div>
                    </div>
                    <div id="next-form" class="collapse">
                        <div class="form-group">
                            <label class="font-weight-bold">სახელი <small class="text-dark"><em>ეს იქნება შენი მომხმარებლის სახელი</em></small></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="ამოირჩიეთ მომხმარებლის სახელი">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">მობილური #</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="(500)-(0000000)">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">პაროლი</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">გაიმეორეთ პაროლი</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="***********">
                            <em id="cp" style="display: none;"><span class="text-danger">პაროლი არ ემთხვევა!</span></em>
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox" name="condition" id="condition"> ვეთანხმები <a href="javascript:;">რეგისტრაციის წესებს</a></label>
                        </div>
                        <div class="form-group" align="center">
                            <button class="btn btn-success" type="submit">რეგისტრაცია</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(function(e) {
    function emailCheck(){
        if(!$("#email").val().length){
            $("#email").addClass('is-invalid');
            return false;
        }else{
            var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,})$/;
            if(regMail.test($("#email").val()) == false){
                $("#email").addClass('is-invalid');
                return false;
            }else{
                $("#email").removeClass('is-invalid');
                $('#next-form').collapse('show');
            }
        }
    }

    function validation(){
        if(!$("#username, #phone, #password, #cpassword").val().length){
            $("#username, #phone, #password, #cpassword").addClass('is-invalid');
            return false;
        }else{
            $("#username, #phone, #password, #cpassword").removeClass('is-invalid');
        }

        if($("#password").val()!=$("#cpassword").val()){
            $("#cpassword").addClass('is-invalid');
            $("#cp").show();
            return false;
        }
    }

    $("#username").on("keyup",function(){
        if (!$("#username").val().length) {
            $("#username").addClass('is-invalid');
            return false;
        }else{
            $("#username").removeClass('is-invalid');
        }
    });

    $("#phone").on("keyup",function(){
        if(!$("#phone").val().length){
            $("#phone").addClass('is-invalid');
            return false;
        }else{
            $("#phone").removeClass('is-invalid');
        }
    });

    $("#password").on("keyup",function(){
        if(!$("#password").val().length){
            $("#password").addClass('is-invalid');
            return false;
        }else{
            $("#password").removeClass('is-invalid');
        }
    });

    $("#cpassword").on("keyup",function(){
        if(!$("#cpassword").val().length){
            $("#cpassword").addClass('is-invalid');
            return false;
        }else{
            $("#cpassword").removeClass('is-invalid');
        }
    });

    $(".emailCheck").click(function(){
        return emailCheck();
    });
});
</script>