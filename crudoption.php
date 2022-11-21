<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- custom style sheeet start in link  -->
    <link rel="stylesheet" href="crudstyle/style.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous">
</head>
<body>
      <div class="container pt-4">
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add User
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog w-75">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Enter User Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container py-3">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" class="form-control" maxlength="18"  placeholder="Enter your name" id="username" aria-describedby="usernae">
                            <div id="usernae" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input type="email" class="form-control" maxlength="40" placeholder="Enter your Email" id="useremail" aria-describedby="emailuser">
                            <div id="emailuser" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="usermobile" class="form-label">Mobile</label>
                            <input type="tel" class="form-control" maxlength="13" id="usermobile" placeholder="xxx-xxxxxxxx" aria-describedby="mobileuser">
                            <div id="mobileuser" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="userpass" class="form-label">Password</label>
                            <input type="password" class="form-control" maxlength="8" placeholder="*****" id="userpass">
                        </div>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary form-control">Submit</button>
                    </form>
                </div>
            </div>
        <div class="modal-footer text-center">
            copy@ write
                <!-- <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">X</button> -->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
            </div>
        </div>
    </div>
    
    <!-- using user date display detaile in this table -->
    <table class="table table-hover text-center my-5">
        <tr>
            <th>
                Sir No
            </th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Mobile
            </th>
            <th>
                Password
            </th>
            <th>
                Oparetion
            </th>
            
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>


      </div>
    

    <!-- Include Bootstrap’s  and JS started -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
     integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
     crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
 integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
 crossorigin="anonymous"></script>
</body>
</html>