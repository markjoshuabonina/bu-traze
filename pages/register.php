<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


  <!-- ===CSS=== -->
  <link rel="stylesheet" type="text/css" href="css/registration.css">

    <title>Responsive Regisration Form </title> 
</head>

<body>
    <div class="container">
        <form id="form-register">
        <div class="card mb-5 mt-5">
            <div class="card-header">
                <h2 class="d-flex justify-content-center mb-3">Account Registration</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>First Name</label>
                        <input name="firstName" type="text" class="form-control" id="f-name" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Middle Name</label>
                        <input name="middleName" type="text" class="form-control" id="m-name">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Last Name</label>
                        <input name="lastName" type="text" class="form-control" id="l-name">
                    </div>
                </div>
                

                <div class="row">                   
                    <div class="form-group col-md-4">
                        <label>Home Address</label>
                        <input name="homeAddress" type="text" class="form-control" id="home-add">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email Address</label>
                        <input name="emailAddress" type="text" class="form-control" id="email-add">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contact Number</label>
                        <input name="contactNumber" type="text" class="form-control" id="con-num" placeholder="(09)">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Register As</label>
                        <select class="form-control" id="sel-user" >
                            <!-- <option selected>Register As</option> -->
                            <option> Select User</option>
                            <option value="Student"> Student</option>
                            <option value="Employee"> Employee</option>
                            <option value="Visitor"> Visitor</option>
                        </select>
                    </div>
                </div>


                <div class="row">                   
                    <div class="form-group col-md-4" id="dept">
                        <label>Department</label>
                        <select id="inputState" class="form-control">
                            <option> Computer Department</option>
                            <option> Nursing Department</option>
                            <option> Educ Department</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4" id="course">
                        <label>Course</label>
                        <select id="inputState" class="form-control">
                            <option> BSIT</option>
                            <option> BSIS</option>
                            <option> BSCS</option>
                        </select>
                    </div>
                </div>

                <div class="row">                   
                    <div class="form-group col-md-4" id="id-frnt">
                        <div class="d-flex label-id">
                            <label id="upl-main-id"></label>
                        </div>
                        <label id="upl-frnt-id" class="sub-lbl"></label>
                        <input name="uploadFrontId" type="file" class="" id="frnt-id">
                    </div>
                    <div class="form-group col-md-4" id="id-bck">
                        <div class="d-flex label-std-id">
                            <label></label>
                        </div>
                        <label id="upl-bck-id" class="sub-lbl"></label>
                        <input name="uploadBackId" type="file" class="" id="bck-id">
                    </div>
                </div>

                <div class="row mb-5">                   
                    <div class="form-group col-md-4" id="vax-card">
                        <div class="d-flex label-vax-crd">
                            <label id="upl-vax-crd"></label>
                        </div>
                        <input name="uploadFrontId" type="file" class="" id="usr">
                    </div>
                </div>

                <center>
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                </center>
            </div>
            
            <div class="card-footer">
                Bicol University
            </div>
        </div>

            </form>
        </div>


        <script type="text/javascript" src="js/register.js"></script>
</body>
</html>