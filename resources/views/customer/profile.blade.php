<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../customer/register/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-picture {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px 0;
        }

        .profile-picture img {
            width: 150px;
            border-radius: 50%;
        }

        .profile-details input {
            margin-bottom: 10px;
        }

        .profile-button {
            margin-top: 20px;
        }

        .experience {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-experience {
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .labels {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">

                <div class="profile-picture">
                    <img class="rounded-circle mt-5" width="150px" src="{{ url('img/' . $customer->customerPhoto) }}">
                    <span class="font-weight-bold">{{ $customer->customerName }}</span>
                    <span class="text-black-50">{{ $customer->customerEmail }}</span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{ url('customer/customerUpdate') }}" method="post">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">ID</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    placeholder="ID" value="{{ $customer->customerID }}" readonly>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Email" value="{{ $customer->customerEmail }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Full name" value="{{ $customer->customerName }}">
                            </div>
                        </div>
                        <div class="row mt-3">

                            <div class="col-md-12">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Address" value="{{ $customer->customerAddress }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone number" value="{{ $customer->customerPhone }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Photo</label>
                                <div class="fr">
                                    <input type="file" required name="photo" accept="image/*" class="form-control-file textBox" value="{{ $customer->customerPhoto }}">
                                </div>
                                <div class="clr"></div>
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-outline-dark" type="submit">Save Profile</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>
