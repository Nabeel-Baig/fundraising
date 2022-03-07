<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'CommonFile/css.blade.php'; ?>
    <title>Sign Up</title>
    <style>


    </style>
</head>

<body>
    <section class="mt-4">

        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 m-auto ms-0">
                    <a class="brandong-logo" href="home.blade.php"><img class="w-100" src="Assets/Images/logo/mainLogo.png" alt="Assets/Images/logo/mainLogo.png"></a>

                </div>
                <div class="col-6 col-lg-4 text-end me-0 m-auto">
                    <div>
                        <a href="sign-in.php" class="see-all">Sign In </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="step1">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-5">Step 1 to 3</div>
                    <h2>Let’s start with the basics</h2>
                    <p>
                        We're here to guide you through your fundraising journey.
                    </p>
                </div>
                <div class="col-lg-7 sign-up-form">
                    <div class="row">
                        <form class="row" onsubmit="submitform(event,1)">
                            <div class="col-lg-6">
                                <label for="" class="form-label">What's your name?</label>
                                <input required type="text" class="bg-transparent form-control py-3" id="" placeholder="First Name">
                                <p class="text-danger err-field d-none" id="first-name">This Field Is Required</p>
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="form-label" style="visibility: hidden;">Email</label>
                                <input required type="text" class="bg-transparent form-control py-3" id="" placeholder="This FieldName">
                                <p class="text-danger err-field d-none" id="last-name"> This Field Is Required</p>
                            </div>
                            <div class="mt-5">
                                <div class="col-lg-12">
                                    <label for="" class="form-label">Where do you live?</label>
                                    <select required class="bg-transparent form-select py-3" placeholder="Select Country" aria-label="Default select example">
                                        <option value="">Select your country</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="BE">Belgium</option>
                                        <option value="CA">Canada</option>
                                        <option value="DK">Denmark</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IT">Italy</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NO">Norway</option>
                                        <option value="PT">Portugal</option>
                                        <option value="ES">Spain</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                    </select>
                                    <p class="text-danger err-field d-none" id="select-country">Select Country</p>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <input required type="text" class="bg-transparent form-control py-3" id="" placeholder="Your Country Zip Code">
                                    <p class="text-danger err-field d-none" id="zip-code"> This Field Is Required</p>
                                </div>
                                <div class="col-lg-12">
                                    <label for="" class="form-label mt-5">What are you fundraising for?</label>
                                    <input required type="text" class="bg-transparent form-control py-3" id="" placeholder="What are you fundraising for?">
                                    <p class="text-danger err-field d-none" id="first-name">This Field Is Required</p>
                                </div>
                                <div class="col-lg-12 text-end mt-5">
                                    <button class="startedBtn border-0 w-100">NEXT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-none" id="step2">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-5">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <a href="javascript:void(0)" onclick="goToPreviousStep(1)" class="startedBtn border-0"><i class="fa fa-angle-left mx-2" aria-hidden="true"></i>Back</a>
                            </div>
                            <div class="col-lg-3">
                                 Step 2 to 3
                            </div>
                        </div>

                    </div>
                    <h2>Set your fundraising goal</h2>

                </div>
                <div class="col-lg-7 sign-up-form">
                    <div class="row">
                        <form class="row" onsubmit="submitform(event,2)">
                            <div class="col-lg-8">
                                <label for="" class="form-label">How much would you like to raise?</label>
                                <div class="input-group">

                                    <input required type="number" class="bg-transparent form-control py-3 amount-field" id="" placeholder="Enter Amount">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text py-3 border-1 rounded-0">$</span>
                                    </div>
                                </div>
                                <p class="text-danger err-field d-none" id="first-name">This Field Is Required</p>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-8">
                                    <p>
                                        Start fundraising platform fee is 5%. Keep in mind that transaction fees, including credit and debit charges, are deducted from each donation.
                                    </p>
                                    <p class="bg-secondary p-3 border-0 rounded text-light">
                                        To receive money raised, please make sure the person withdrawing has an address and bank account in the selected country of residence.
                                    </p>
                                    <div class="col-lg-12 text-end mt-5">
                                        <button type="submit" class="startedBtn border-0 w-100">NEXT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-none" id="step3">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-5">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <a href="javascript:void(0)" onclick="goToPreviousStep(2)" class="startedBtn border-0"><i class="fa fa-angle-left mx-2" aria-hidden="true"></i>Back</a>
                            </div>
                            <div class="col-lg-3">
                                Step 3 to 3
                            </div>
                        </div>

                    </div>
                    <h2>Create an account to save and continue</h2>

                </div>
                <div class="col-lg-7 sign-up-form">
                    <div class="row">
                        <form class="row" onsubmit="submitform(event,3)">
                            <div class="col-lg-8">
                                <label for="" class="form-label">Email Address</label>
                                <input required type="email" class="bg-transparent form-control py-3" id="" placeholder="Email Address">
                                <p class="text-danger err-field d-none" id="first-name">This Field Is Required</p>
                            </div>
                            <div class="col-lg-8 mt-4">
                                <label for="" class="form-label">Password</label>
                                <input required type="password" class="bg-transparent form-control py-3" id="" placeholder="Password">
                                <p class="text-danger err-field d-none" id="last-name"> This Field Is Required</p>
                            </div>
                            <div class="col-lg-8 mt-4">
                                <div class="form-check">
                                    <input required class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Receive tips to help you make the most of your fundraiser, and updates about important causes. Unsubscribe anytime.
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-8 text-end mt-5">
                                <button type="submit" class="startedBtn border-0 w-100">NEXT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    const stepOne = document.getElementById("step1")
    const stepTwo = document.getElementById("step2")
    const stepThree = document.getElementById("step3")

    function submitform(event, stepNumber) {
        event.preventDefault()
        const formData = new FormData(event.target)
        if (stepNumber === 1) {
            stepOne.classList.add('d-none')
            stepTwo.classList.remove('d-none')
            stepThree.classList.add('d-none')
        }
        if (stepNumber === 2) {
            stepOne.classList.add('d-none')
            stepTwo.classList.add('d-none')
            stepThree.classList.remove('d-none')
        }
        if (stepNumber === 3) {
            event.target.reset()
        }
        return
    }

    function goToPreviousStep(previousStep) {
        if (previousStep == 1) {
            stepOne.classList.remove('d-none')
            stepTwo.classList.add('d-none')
            stepThree.classList.add('d-none')
        }
        if (previousStep == 2) {
            stepOne.classList.add('d-none')
            stepTwo.classList.remove('d-none')
            stepThree.classList.add('d-none')
        }
    }
</script>

</html>
