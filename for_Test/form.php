<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="frm.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col-md-6 col-lg-6 form_column mx-auto mt-5 ml-5 offset-lg-4 d-flex justify-content-center align-item-center">
                    <fieldset>
                        <legend class="pb-4 ml-5 pl-5 pt-3 legn">............... Registration Form............</legend>
                    <form class="pl-2 pr-2" id="myForm" name="myForm" method="post" action="#">
                        <div class="form-row">
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control" name="fname" id="fname" value="" required>
                            <div class="error" id="fErr"></div>
                          </div>
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" name="lname" id="lname" value="" required>
                            <div class="error" id="lErr"></div>
                          </div>
                        </div>
                        <div class="form-row">
                         <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="state">State</label>
                            <select class="custom-select pl-2 pr-2" name="state" onchange="populate(this.id,'city')" id="state" required>
                              <option values="">---Choose---</option>.
                             <option value="kerala">KERALA</option>
                              <option value="tamilnadu">TAMILNADU</option>
                              <option value="karnataka">KARNATAKA</option>
                              <option value="mumbai">MUMBAI</option>
                              <option value="goa">GOA</option>
                              <option>BEEHAR</option>
                              <option>THELENGANA</option>
                              <option>DELHI</option>
                            </select>
                            <div class="error" id="stErr"></div>
                          </div>
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="City">City</label>
                            <select class="custom-select pl-2 pr-2" name="city"id="city">
                            <option values="">.....Choose...</option>
                              
                            </select>
                            <div class="error" id="ctErr"></div>
                          </div>
                          <div class="col-md-10 mb-3 pl-2 pr-2">
                            <label for="mob">Mobile</label>
                            <input name="tel1" class="mt-3"type="tel" name="tel"id="tel" pattern="[0-9]{3}" placeholder="000" aria-label="3-digit area code" size="2"/>-
             <input name="tel2" type="tel" pattern="[0-9]{3}" placeholder="000" aria-label="3-digit prefix" size="2"/> -
            <input name="tel3" type="tel" pattern="[0-9]{4}" placeholder="0000" aria-label="4-digit number" size="3"/>
                          
            <div class="error" id="telErr"></div>
        </div>
                        
                         
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="lname">Password</label>
                            <input type="text" class="form-control" name="pwd" id="pwd" required>
                            <div class="error" id="pErr"></div>
                          </div>
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="lname">Confirm Password</label>
                            <input type="text" class="form-control" name="cpwd"id="cpwd" value="" required>
                            <div class="error" id="cErr"></div>
                            <div class="error" id="pcErr"></div>
                          </div>
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="mail" id="mail" value="" required>
                            <div class="error" id="mErr"></div>
                          </div>
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="dob">DOB</label>
                            <input type="date" class="form-control"   min='2000-01-01' max='2021-12-01' name="dob" id="dob" onblur="getAge()" required>
                            <div class="error" id="dErr"></div>
                          </div>
                          <div class="col-md-6 mb-2 pl-2 pr-2">
                            <label for="dob">Age</label>
                            <input type="text" class="form-control age"  name="age" id="age"  value="" readonly>
                          </div>
                          <div class="col-md-6 mb-2 pl-2 pr-2">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="des" id="des"  required>
                            <div class="error" id="desErr"></div>
                          </div>
                         <div class="col-md-5 mt-4 mb-5 pl-3 pr-2 offset-lg-8">
                        <button class="btn btn-primary" id="btn" onclick="validation()">Submit</button>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    
   
      <script src="form.js"></script>
       
    


 


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>