<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap cdn link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Patient Info</title>
</head>
<body>
   
<section class="mb-4 mt-4">
    <div class="container">
        <div class="row">
            @if(session()->has('message'))
            <div class="alert alert-success alerd-dismissible fade show col-md-8 m-auto mb-4">
                {{ session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-8 m-auto border border-success">
            <h1 class="text-center">Patients Info </h1>
                <form action="{{route('patient.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Telephone" class="form-label">Telephone</label>
                        <input type="text" class="form-control"name="telephone" id="telephone">       
                    </div>
                    <div class="mb-3">
                        <label for="Patient_Name" class="form-label">Name</label>
                        <input type="text" class="form-control"name="patient_name" id="patient_name">       
                    </div>
                    <div class="mb-3">
                        <label for="Date_of_Birth" class="form-label">Pateint Date of Birth</label>
                        <input type="date" class="form-control"name="patient_dob" id="patient_dob">       
                    </div>
                    <div class="mb-3">
                        <label for="Patient ID No" class="form-label">Patient ID No</label>
                        <input type="text" class="form-control"name="patient_idno" id="patient_idno">       
                    </div>
                    <div class="mb-3">
                        <label for="Patient_Address" class="form-label">Patient Address</label>
                        <input type="text" class="form-control"name="patient_address" id="patient_address">       
                    </div>
                    <div class="mb-3">
                        <label for="Patient_County" class="form-label">Patient County</label>
                        <input type="text" class="form-control"name="patient_county" id="patient_county">       
                    </div>
                    <div class="mb-3">
                        <label for="Patient_Sub_County" class="form-label">Patient Sub County</label>
                        <input type="text" class="form-control"name="sub_county" id="sub_county">       
                    </div>
                    <div class="mb-3">
                        <label for="Patient_Email" class="form-label">Patient Email</label>
                        <input type="email" class="form-control"name="patient_email" id="patient_email">       
                    </div>
                    <div class="mb-3">
                        <label for="Patient_Gender" class="form-label">Patient Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patient_gender" value="male"id="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patient_gender" value="female" id="Female">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Patient_Marital_Status" class="form-label">Patient Marital Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patient_marital_status" value="single" id="Male">
                            <label class="form-check-label" >
                                Single
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="patient_marital_status" value="married" id="Female">
                            <label class="form-check-label" >
                                Married
                            </label>
                        </div>
       
                    </div>
                    <hr>
                    <h1>Kin Details</h1>
                    <div class="mb-3">
                        <label for="Kin_Name" class="form-label">Kin Name</label>
                        <input type="text" class="form-control"name="kin_name" id="kin_name">       
                    </div>
                    <div class="mb-3">
                        <label for="Kin_DOB" class="form-label">Kin Date of Birth</label>
                        <input type="date" class="form-control"name="kin_dob" id="kin_dob">       
                    </div>
                    <div class="mb-3">
                        <label for="Kin_IDNO" class="form-label">Kin IDNo</label>
                        <input type="text" class="form-control"name="kin_idno" id="kin_idno">       
                    </div>
                    <div class="mb-3">
                        <label for="Kin_Gender" class="form-label">Kin Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kin_gender" value="male"id="Male">
                            <label class="form-check-label" >
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kin_gender" value="female" id="Female">
                            <label class="form-check-label" >
                                Female
                            </label>
                        </div>
      
                    </div>
                    <div class="mb-3">
                        <label for="Kin_Relationship" class="form-label">Relationship to Kin</label>
                        <input type="text" class="form-control"name="kin_relationship" id="kin_relationship">       
                    </div>
                    <div class="mb-3">
                        <label for="Kin_Telephone" class="form-label">Kin Telephone No.</label>
                        <input type="text" class="form-control"name="kin_telephone" id="kin_telephone">       
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success text-white form-control" name="submit" value="submit">
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>    
</body>
</html>