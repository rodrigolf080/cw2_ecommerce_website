<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");
?>

<!-- Account form -->
        <div class="registerContainer">
            <div class="col-12">
                <h1 class="changeDetH1">Change Account Details</h1>
                    <form action="editCustomer.php" method="post">
                        <div class="row">
                            <div class="col-6 form-group lead">
                                <label for="firstNameInput">First Name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                            </div>

                            <div class="col-6 form-group lead">
                                <label for="lastNameInput">Last Name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                            </div>

                            <div class="col-6 form-group lead">
                                <label for="emailInput">E-mail Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" readonly>
                            </div>

                            <div class="col-6 form-group lead">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                            </div>

                            <div class="col-12 form-group lead">
                                <label for="address">Street Address</label>
                                <textarea type="text" class="form-control" id="address" name="address" placeholder="Street Address"></textarea>
                            </div>

                            <div class="col-7 form-group lead">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>

                            <div class="col-5 form-group lead">
                                <label for="post">Post Code</label>
                                <input type="text" class="form-control" id="postCode" name="post" placeholder="Post Code">
                            </div>

                            <input type="hidden" id="mongoId" required>

                            <div class="col-12 text-right registerBtn">
                                <button type="submit" class="btn btn-info btn-lg">Save</button>
                            </div>
                        </div>
                    </form>
                    
                    <form action="changePassword.php" method="post">
                        <h1 class="changeDetH1">Change Password</h1>
                        <div class="row">
                            <div class="col-6 form-group lead">
                                <label for="pwdCurrent">Current Password</label>
                                <input type="password" class="form-control" id ="passwordCurrent" name="pwdCurrent" placeholder="Current Password" required>
                            </div>

                            <div class="col-6 form-group lead">
                                <label for="pwdInput">New Password</label>
                                <input type="password" class="form-control" id="passwordNew" name="pwdNew" placeholder="Password" required>
                            </div>

                            <div class="col-6 form-group lead">
                                <label for="pwdRepeat">Repeat New Password</label>
                                <input type="password" class="form-control" id="passwordRepeat" name="pwdRepeat" placeholder="Repeat Password" required>
                            </div>

                            <div class="col-12 text-right registerBtn">
                                <button type="submit" class="btn btn-info btn-lg">Save</button>
                            </div>
                        </div>
                    </form>    
            </div>
        </div>
<script>
//Global variables 
    var request = new XMLHttpRequest();
    console.log('request: ' + request);

    //Check login when page loads
    window.onload = checkLogin;
    //Load customer data 
    window.onload = loadCustomer;

    //Checks whether user is logged in.
    function checkLogin(){
        //Create event handler that specifies what should happen when server responds
        request.onload = function(){
            console.log('responseText - ' + request.responseText);
            if(request.responseText === "ok"){
            }
            else {
                window.location.replace("login.php");
            }
        };
        //Set up and send request
        request.open("GET", "check_login.php");
        request.send();
    }

    

    function loadCustomer(){
        //Create event handler that specifies what should happen when server responds
        request.onload = function(){
        //Check HTTP status code
        if(request.status === 200){
            //Add data from server to page
            console.log('responseText - ' + request.responseText);
            displayCustomer(request.responseText);
        } 
        else
            alert("Error communicating with server: " + request.status);
        };

        //Set up request and send it
        request.open("GET", "customer.php");
        request.send();
    }



//Loads customer into page
function displayCustomer(jsonCustomer){
        //Convert JSON to array of product objects
        var custArray = JSON.parse(jsonCustomer)

        //Output customer data
        document.getElementById("firstName").value = custArray.firstName;
        document.getElementById("lastName").value = custArray.lastName;
        document.getElementById("phone").value = custArray.phone;
        document.getElementById("email").value = custArray.email;
        document.getElementById("address").value = custArray.address;
        document.getElementById("city").value = custArray.city;
        document.getElementById("postCode").value = custArray.postCode;
        document.getElementById("email2").value = custArray.email;
        console.log(jsonCustomer);
    }

</script>


<?php
        outputFooter("Home");
?>
