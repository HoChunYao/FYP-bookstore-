<?php
include("header.php");
?>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="CSS_folder/register.css">
    <style>
    h1 {
        text-align: center;
    }
    h2 {
        margin: 0;
    }
    #multi-step-form-container {
        margin-top: 5rem;
        padding: 0 120px;
    }
    .text-center {
        text-align: center;
    }
    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }
    .pl-0 {
        padding-left: 0;
    }
    .button {
        padding: 0.7rem 1.5rem;
        border: 1px solid #4361ee;
        background-color: #4361ee;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }
    .submit-btn {
        border: 1px solid #0e9594;
        background-color: #0e9594;
    }
    .mt-3 {
        margin-top: 2rem;
        display: flex;
        flex-direction: column;
    }
    .d-none {
        display: none;
    }
    .form-step {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        padding: 3rem;
    }
    .font-normal {
        font-weight: normal;
    }
    ul.form-stepper {
        counter-reset: section;
        margin-bottom: 3rem;
        width: 50%;
    }
    ul.form-stepper .form-stepper-circle {
        position: relative;
    }
    ul.form-stepper .form-stepper-circle span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
    }
    .form-stepper-horizontal {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
    ul.form-stepper > li:not(:last-of-type) {
        margin-bottom: 0.625rem;
        -webkit-transition: margin-bottom 0.4s;
        -o-transition: margin-bottom 0.4s;
        transition: margin-bottom 0.4s;
    }
    .form-stepper-horizontal > li:not(:last-of-type) {
        margin-bottom: 0 !important;
    }
    .form-stepper-horizontal li {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: start;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }
    .form-stepper-horizontal li:not(:last-child):after {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        height: 1px;
        content: "";
        top: 32%;
    }
    .form-stepper-horizontal li:after {
        background-color: #dee2e6;
    }
    .form-stepper-horizontal li.form-stepper-completed:after {
        background-color: #4da3ff;
    }
    .form-stepper-horizontal li:last-child {
        flex: unset;
    }
    ul.form-stepper li a .form-stepper-circle {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin-right: 0;
        line-height: 1.7rem;
        text-align: center;
        background: rgba(0, 0, 0, 0.38);
        border-radius: 50%;
    }
    .form-stepper .form-stepper-active .form-stepper-circle {
        background-color: #4361ee !important;
        color: #fff;
    }
    .form-stepper .form-stepper-active .label {
        color: #4361ee !important;
    }
    .form-stepper .form-stepper-active .form-stepper-circle:hover {
        background-color: #4361ee !important;
        color: #fff !important;
    }
    .form-stepper .form-stepper-unfinished .form-stepper-circle {
        background-color: #f8f7ff;
    }
    .form-stepper .form-stepper-completed .form-stepper-circle {
        background-color: #0e9594 !important;
        color: #fff;
    }
    .form-stepper .form-stepper-completed .label {
        color: #0e9594 !important;
    }
    .form-stepper .form-stepper-completed .form-stepper-circle:hover {
        background-color: #0e9594 !important;
        color: #fff !important;
    }
    .form-stepper .form-stepper-active span.text-muted {
        color: #fff !important;
    }
    .form-stepper .form-stepper-completed span.text-muted {
        color: #fff !important;
    }
    .form-stepper .label {
        font-size: 1rem;
        margin-top: 0.5rem;
    }
    .form-stepper a {
        cursor: default;
    }
    .mt-3 input[type="text"],input[type="password"],
    input[type="email"],input[type="tel"]{
        width: 100%;
        height: 45px;
        padding: 10px 5px;
    }
    .mt-3 label{
        padding: 5px 0;
    }
    #userAccountSetupForm{
        padding: 20px 0;
    }
    .space-button{
        display: inline-flex;
        justify-content: space-between;
    }
    h1{
        height: 100px;
        justify-content: center;
        display: flex;
        align-items: center;
    }
    .button_submit-btn:hover{
        padding: 0.7rem 1.5rem;
        background-color: lightgreen;
    }
    .button_submit-btn{
        padding: 0.7rem 1.5rem;
        border: 1px solid #4361ee;
        background-color: #4361ee;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }
    .button_submit-btn:visited{
        padding: 0.7rem 1.5rem;
        border: 1px solid #4361ee;
        background: rgba(0, 0, 0, 0.38);
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <h1>User Registeration </h1>
    <div id="multi-step-form-container">
        <!-- Form Steps / Progress Bar -->
        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
            <!-- Step 1 -->
            <li class="form-stepper-active text-center form-stepper-list" step="1">
                <a class="mx-2">
                    <span class="form-stepper-circle">
                        <span>1</span>
                    </span>
                    <div class="label">User Detail</div>
                </a>
            </li>
            <!-- Step 2 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                <a class="mx-2">
                    <span class="form-stepper-circle text-muted">
                        <span>2</span>
                    </span>
                    <div class="label text-muted">Address</div>
                </a>
            </li>
            <!-- Step 3 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                <a class="mx-2">
                    <span class="form-stepper-circle text-muted">
                        <span>3</span>
                    </span>
                    <div class="label text-muted">Completed</div>
                </a>
            </li>
        </ul>
        <!-- Step Wise Form Content -->
        <form id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data" method="POST">
            <!-- Step 1 Content -->
            <section id="step-1" class="form-step">
                <h2 class="font-normal">Account Basic Details</h2>
                <!-- Step 1 input fields -->
                <div class="mt-3">
                    <label>Username</label>
                    <input type="text" name="reg_username"class="login" placeholder="Your username" required>
                    <label>Full Name</label>
                    <input type="text" name="reg_name"class="login" placeholder="Your Full Name" required>
                    <label>Email</label>
                    <input type="email" name="reg_email"class="login" placeholder="Email" required>
                    <label>Phone Number</label>
                    <input type="tel" name="reg_tel"class="login" placeholder="Phone Number" required>
                    <label>Password</label>
                    <input type="password"name="reg_pass" class="login" id="pass1" placeholder="Password" required>
                    <label>Confirm password</label>
                    <input type="password" name="reg_con_pass"class="login" id="pass2" placeholder="Confirm Password" required>
                </div>
                <div class="mt-3">
                    <button class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
                </div>
            </section>
            <!-- Step 2 Content, default hidden on page load. -->
            <section id="step-2" class="form-step d-none">
                <h2 class="font-normal">Address</h2>
                <!-- Step 2 input fields -->
                <div class="mt-3">
                    <label>Number</label>
                    <input type="text" name="no"class="login" placeholder="No." required>
                    <label>Address line 1</label>
                    <input type="text" name="address_line1"class="login" placeholder="Address line 1" required>
                    <label>Address line 2</label>
                    <input type="text" name="address_line2"class="login" placeholder="Address line 2" required>
                    <label>state</label>
                    <input type="text" name="state"class="login" placeholder="State" required>
                    <label>Postcode</label>
                    <input type="text" name="postcode"class="login" placeholder="Postcode" required>
                </div>
                <div class="mt-3">
                    <div class="space-button">
                        <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                        <button class="button btn-navigate-form-step" type="button" step_number="3">Next</button>
                    </div>
                </div>
            </section>
            <!-- Step 3 Content, default hidden on page load. -->
            <section id="step-3" class="form-step d-none">
                <h2 class="font-normal">Completed</h2>
                <!-- Step 3 input fields -->
                <div class="mt-3">
                    <h2> Thank You , Because of choosing us .</h2>
                </div>
                <div class="mt-3">
                    <div class="space-button">
                        <button class="button btn-navigate-form-step" type="button" step_number="2">Prev</button>
                        <button class="button_submit-btn" type="submit">Save</button>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <script>
        /**
 * Define a function to navigate betweens form steps.
 * It accepts one parameter. That is - step number.
 */
const navigateToFormStep = (stepNumber) => {
    /**
     * Hide all form steps.
     */
    document.querySelectorAll(".form-step").forEach((formStepElement) => {
        formStepElement.classList.add("d-none");
    });
    /**
     * Mark all form steps as unfinished.
     */
    document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
        formStepHeader.classList.add("form-stepper-unfinished");
        formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
    });
    /**
     * Show the current form step (as passed to the function).
     */
    document.querySelector("#step-" + stepNumber).classList.remove("d-none");
    /**
     * Select the form step circle (progress bar).
     */
    const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
    /**
     * Mark the current form step as active.
     */
    formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
    formStepCircle.classList.add("form-stepper-active");
    /**
     * Loop through each form step circles.
     * This loop will continue up to the current step number.
     * Example: If the current step is 3,
     * then the loop will perform operations for step 1 and 2.
     */
    for (let index = 0; index < stepNumber; index++) {
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector('li[step="' + index + '"]');
        /**
         * Check if the element exist. If yes, then proceed.
         */
        if (formStepCircle) {
            /**
             * Mark the form step as completed.
             */
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
            formStepCircle.classList.add("form-stepper-completed");
        }
    }
};
/**
 * Select all form navigation buttons, and loop through them.
 */
document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
    /**
     * Add a click event listener to the button.
     */
    formNavigationBtn.addEventListener("click", () => {
        /**
         * Get the value of the step.
         */
        const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
        /**
         * Call the function to navigate to the target form step.
         */
        navigateToFormStep(stepNumber);
    });
});
</script>
</body>
</html>
<?php
include("footer.php");
?>