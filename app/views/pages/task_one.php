<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Registration</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Registration</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php if (!empty($data['error'])) : ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach ($data["error"] as $key => $value) : ?>
                                            <li><?= $value ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <form class="form-valide-with-icon needs-validation" novalidate action="<?php echo BASE_URL; ?>/pages/add" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">First name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        <input type="text" name="first_name" class="form-control" id="validationCustomUsername" placeholder="Enter your firstname" required>
                                        <div class="invalid-feedback">
                                            Please Enter your first name.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Last name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        <input type="text" name="last_name" class="form-control" id="validationCustomUsername" placeholder="Enter your lastname" required>
                                        <div class="invalid-feedback">
                                            Please Enter your last name.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Date of Birth</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-sun"></i> </span>
                                        <input type="date" name="dob" class="form-control" id="validationCustomUsername" placeholder="Select your date of birth" required>
                                        <div class="invalid-feedback">
                                            Please Select your date of birth.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Select Your country</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-flag"></i> </span>
                                        <select name="country" class="form-select" id="countries" required tabindex="2">
                                            <option value="">Select Your Country</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please Select your country.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">City</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-globe"></i> </span>
                                        <input type="text" name="city" class="form-control" id="validationCustomUsername" placeholder="Enter your city" required>
                                        <div class="invalid-feedback">
                                            Please Enter your city.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                                        <input type="text" name="address" class="form-control" id="validationCustomUsername" placeholder="Enter your address" required>
                                        <div class="invalid-feedback">
                                            Please Enter Address.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Card Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
                                        <input type="number" name="card_number" class="form-control" id="validationCustomUsername" placeholder="XXXX-XXXX-XXXX-XXXX" max="9999999999999999" required maxlength="16">
                                        <div class="invalid-feedback">
                                            Please Enter your card number.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Card Expiry Year</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
                                        <input type="number" name="expiry_year" class="form-control" id="date" placeholder="YYYY" step="1" min="<?= date('Y') ?>" max="2025" required>
                                        <div class="invalid-feedback">
                                            Please Enter Card Expiry Year.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Card Expiry Month</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
                                        <select name="expiry_month" class="form-control default-select" id="validationCustomUsername" required>
                                            <option value="">Select Your Card Expiry Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">Match</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please Enter Card Expiry Month.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Card Cvv/Cvc/Cid</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
                                        <input type="number" name="card_cvv" class="form-control" id="validationCustomUsername" placeholder="Enter your card cvv/cvc/cid" required maxlength="3" max="999">
                                        <div class="invalid-feedback">
                                            Please Enter your card cvv/cvc/cid.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <label class="text-label form-label" for="validationCustomUsername">Profile Picture</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Upload</span>
                                        <div class="form-file">
                                            <input type="file" name="profile_photo" class="form-file-input form-control" required accept="image/*">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please Enter your card cvv/cvc/cid.
                                        </div>
                                    </div>

                                </div>


                                <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                <button type="reset" class="btn btn-light">cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>