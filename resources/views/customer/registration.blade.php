<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register Customer</title>
    <link rel="stylesheet" href="../customer/register/style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <html>

    <head>
        <meta charset="utf-8">
        <title>Form</title>
        <link href="../customer/register/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <!-- Body of Form starts -->
        <div class="container">
            <form action="{{ url('customer/processRegister') }}" method="post" autocomplete="on">
                @csrf
                <!---ID--->
                <div class="box">
                    <label for="id" class="fl fontLabel"> ID: </label>
                    <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="id" required name="id" placeholder="ID" class="textBox">
                    </div>
                    <div class="clr"></div>
                </div>
                <!---ID--->
                <!---Email ---->
                <div class="box">
                    <label for="email" class="fl fontLabel"> Email: </label>
                    <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="email" required name="email" placeholder="Email" class="textBox">
                    </div>
                    <div class="clr"></div>
                </div>
                <!--Email ----->
                <!---Password------>
                <div class="box">
                    <label for="password" class="fl fontLabel"> Password </label>
                    <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="Password" required name="password" placeholder="Password" class="textBox">
                    </div>
                    <div class="clr"></div>
                </div>
                <!---Password---->
                <!--First name-->
                <div class="box">
                    <label for="name" class="fl fontLabel"> Full Name: </label>
                    <div class="new iconBox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="fr">
                        <input type="text" name="name" placeholder="Full Name" class="textBox" autofocus="on"
                            required>
                    </div>
                    <div class="clr"></div>
                </div>
                <!--First name-->
                <!--Address-->
                <div class="box">
                    <label for="address" class="fl fontLabel"> Address: </label>
                    <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="text" required name="address" placeholder="Address" class="textBox">
                    </div>
                    <div class="clr"></div>
                </div>
                <!--Address-->
                <!---Phone No.------>
                <div class="box">
                    <label for="phone" class="fl fontLabel"> Phone: </label>
                    <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="text" required name="phone" maxlength="12" placeholder="Phone"
                            class="textBox">
                    </div>
                    <div class="clr"></div>
                </div>
                <!---Phone No.---->
                <!---Photo.------>
                <div class="box">
                    <label for="photo" class="fl fontLabel">Photo:</label>
                    <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="file" required name="photo" accept="image/*" class="textBox">
                    </div>
                    <div class="clr"></div>
                </div>
                <!---Phone No.---->
                <!--Terms and Conditions------>
                <div class="box terms">
                    <input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
                </div>
                <!--Terms and Conditions------>
                <!---Submit Button------>
                <div class="box" style="background: #2d3e3f">
                    <input type="Submit" name="Submit" class="submit" value="SUBMIT">
                </div>
                <!---Submit Button----->
            </form>
        </div>
        <!--Body of Form ends--->
    </body>

    </html>
    <!-- partial -->
</body>

</html>
