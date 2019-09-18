<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KEDEL-ზე რეგისტრაცია</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="registration">
    <div class="container mt-2 mb-4">
        <div class="row justify-content-md-center">
            <div class="col-sm-4 border border-primary shadow rounded pt-2">
                <div class="col-sm-12">
                    <h3>KEDEL-ზე რეგისტრაცია</h3>
                    <form method="post" id="singnupFrom" autocomplete="off">
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
                                <em id="cp"><span class="text-danger">პაროლი არ ემთხვევა!</span></em>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" name="condition" id="condition">ვეთანხმები <a href="#">რეგისტრაციის წესებს</a></label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">რეგისტრაცია</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="static/js/main.js"></script>
</body>
</html>
