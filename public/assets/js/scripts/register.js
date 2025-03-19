let typingTimer;

let submitErrors = {
    email: true,
    password: true,
    fName: true,
    lName: true,
    phone: true,
    pCode: true
};

let invalidInputs = [];

const doneTypingInterval = 200;

const emailHelp = document.getElementById("emailHelp");
const emailError = document.getElementById("emailError");
const emailInput = document.getElementById("email");

const passwordInput = document.getElementById("password");
const passwordHelp = document.getElementById("passwordHelp");
const passwordError = document.getElementById("passwordError");

const firstNameInput = document.getElementById("firstName");
const firstNameHelp = document.getElementById("firstNameHelp");
const firstNameError = document.getElementById("firstNameError");

const lastNameInput = document.getElementById("lastName");
const lastNameHelp = document.getElementById("lastNameHelp");
const lastNameError = document.getElementById("lastNameError");

const phoneNumberInput = document.getElementById("phoneNumber");
const phoneNumberHelp = document.getElementById("phoneNumberHelp");
const phoneNumberError = document.getElementById("phoneNumberError");

const postalCodeHelp = document.getElementById("postalCodeHelp");
const postalCodeError = document.getElementById("postalCodeError");
const postalCodeInput = document.getElementById("postalCode");

const regsiterForm = document.getElementById("registerForm");

const toggleShowPasswordBtn = document.getElementById("toggleShowPassword");

emailInput.addEventListener(InputType.Input, () => validateEmail());
emailInput.addEventListener(InputType.Unfocus, () => validateEmail());

passwordInput.addEventListener(InputType.Input, () => validatePassword());
passwordInput.addEventListener(InputType.Unfocus, () => validatePassword());

firstNameInput.addEventListener(InputType.Input, () => validateFirstName());
firstNameInput.addEventListener(InputType.Unfocus, () => validateFirstName());

lastNameInput.addEventListener(InputType.Input, () => validateLastName());
lastNameInput.addEventListener(InputType.Unfocus, () => validateLastName());

phoneNumberInput.addEventListener(InputType.Input, () => validatePhoneNumber());
phoneNumberInput.addEventListener(InputType.Unfocus, () => validatePhoneNumber());


postalCodeInput.addEventListener(InputType.Input, () => validatePostalCode());
postalCodeInput.addEventListener(InputType.Unfocus, () => validatePostalCode());

// regsiterForm.addEventListener(InputType.Submit, async function (event) { registerUser(event); });

toggleShowPasswordBtn.addEventListener(InputType.Click, () => showPassword());

function validateEmail() {
    ShowIndicator(emailHelp, false);
    if (emailError) ShowIndicator(emailError, false);

    if (emailInput.value.length < 1) {
        ShowIndicator(emailHelp, TextColor.Danger, "Required", true)
        submitErrors.email = true;
        return;
    };

    if (!RunRegexTest(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/, emailInput.value)) {
        ShowIndicator(emailHelp, TextColor.Danger, "Required, enter a valid email. e.g. user@domain.com", true);
        submitErrors.email = true;
    }
    else {
        ShowIndicator(emailHelp, false);
        submitErrors.email = false;
    }
}

function validatePassword() {
    if(passwordError) ShowIndicator(passwordError, false);
    const errors = [];

    if (passwordInput.value.length < 1) {
        ShowIndicator(passwordHelp, TextColor.Danger, "Required", true)
        return;
    }

    if (passwordInput.value.length < 8) errors.push("should be atleast 8 characters");
    if (!RunRegexTest(/[A-Z]/, passwordInput.value)) errors.push("must contain a capital letter");
    if (!RunRegexTest(/\d/, passwordInput.value)) errors.push("must contain a numbers");
    if (!RunRegexTest(/[.\-@#$%&*+!]/, passwordInput.value)) errors.push("must contain a special character from these . - @ # $ % & * + !");
    
    if (errors.length === 0) {
        ShowIndicator(passwordHelp, false);
        submitErrors.password = false;
    }
    else {
        ShowIndicator(passwordHelp, TextColor.Danger, "Required, " + errors.join(", "), true);
        submitErrors.password = true;
    }
}

function validateFirstName () {
    ShowIndicator(firstNameHelp, false);
    if(firstNameError) ShowIndicator(firstNameError, false);

    if (firstNameInput.value.length < 1) {
        ShowIndicator(firstNameHelp, TextColor.Danger, "Required, ", true);
        submitErrors.fName = true;
    }
    else if (firstNameInput.value.length < 2) {
        ShowIndicator(firstNameHelp, TextColor.Danger, "Required, should be 2 characters long", true);
        submitErrors.fName = true;
    }
    else {
        submitErrors.fName = false;
    }
}

function validateLastName () {
    ShowIndicator(lastNameHelp, false);
    if(lastNameError) ShowIndicator(lastNameError, false);

    if (lastNameInput.value.length < 1) {
        ShowIndicator(lastNameHelp, TextColor.Danger, "Required, ", true);
        submitErrors.lName = true;
    }
    else if (lastNameInput.value.length < 2) {
        ShowIndicator(lastNameHelp, TextColor.Danger, "Required, should be 2 characters long", true);
        submitErrors.lName = true;
    }
    else {
        submitErrors.lName = false;
    }
}

function validatePhoneNumber() {
    if (phoneNumberError) ShowIndicator(phoneNumberError, false);
    ShowIndicator(phoneNumberHelp, false);
    
    let phone = phoneNumberInput.value;

    if (phone.length < 1) {
        ShowIndicator(phoneNumberHelp, TextColor.Danger, "Required", true);
        submitErrors.phone = true;
    } else if (phone.replace(/\D/g, "").length < 10) {
        ShowIndicator(phoneNumberHelp, TextColor.Danger, "Invalid", true);
        submitErrors.phone = true;
    } else {
        submitErrors.phone = false;
    }

    phoneNumberInput.value = formatPhone(phone);
}

function formatPhone(input) {
    let numbers = input.replace(/\D/g, "");

    if (numbers.length > 10) {
        numbers = numbers.substring(0, 10);
    }

    if (numbers.length > 6) {
        return `(${numbers.substring(0, 3)}) ${numbers.substring(3, 6)}-${numbers.substring(6)}`;
    } else if (numbers.length > 3) {
        return `(${numbers.substring(0, 3)}) ${numbers.substring(3)}`;
    } else if (numbers.length > 0) {
        return `${numbers}`;
    } else {
        return "";
    }
}

function validatePostalCode() {
    ShowIndicator(postalCodeHelp, false);
    if(postalCodeError) ShowIndicator(postalCodeError, false);
    clearTimeout(typingTimer);

    if (postalCodeInput.value.length < 1) {
        ShowIndicator(postalCodeHelp, TextColor.Danger, "Required" , true);
        submitErrors.pCode = true;
        return;
    }

    typingTimer = setTimeout(() => {
        getPostalData(postalCodeInput.value).then(data => {
            let placeName = data.places[0]["place name"];

            if (!placeName) {
                ShowIndicator(postalCodeHelp, TextColor.Danger, "Required, no city found.", true);
                submitErrors.pCode = true;
                return;
            }

            ShowIndicator(postalCodeHelp, TextColor.Secondary, placeName, true);
            submitErrors.pCode = false;
        }).catch(error => {
            ShowIndicator(postalCodeHelp, TextColor.Danger, "Required, no city found.", true);
            submitErrors.pCode = true;
            return;
        });
    }, doneTypingInterval);
}

function setSubmitButtonStatus() {
    pass = Object.values(submitErrors).every(value => !value);

    // if all false meaning there are no errors
    if (!pass) {
        validateEmail();
        validatePassword();
        validateFirstName();
        validateLastName();
        validatePhoneNumber();
        validatePostalCode();
    }

    return pass;
}

function registerUser(event) {
    event.preventDefault();

    if (setSubmitButtonStatus()) {
        let formData = {
            email: emailInput.value,
            password: passwordInput.value,
            first_name: firstNameInput.value,
            last_name: lastNameInput.value,
            phone_number: phoneNumberInput.value.replace(/\D/g, ""),
            postal_code: postalCodeInput.value
        };

        fetch(`${API_BASE_URL}/register`, {
            method: MethodTypes.POST,
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": CSRF_TOKEN
            },
            body: JSON.stringify(formData)
        })
        .then(
            response => response.json()
        )
        .then(
            data => {
                if (data.status === StatusTypes.VALIDATION_ERROR) {
                    showServerValidationErrors(data.message);
                }

                if (data.status === StatusTypes.SUCCESS) {
                    registerationComplete(data.message);
                }
            }
        )
        .catch(error => console.log("fetch error: " + error));
    }
}

function showServerValidationErrors(message) {
    invalidInputs = [];

    if (message.email) {
        ShowIndicator(emailHelp, TextColor.Danger, message.email, true);
        submitErrors.email = true;
        invalidInputs.push(emailInput);
    }
    
    if (message.password) {
        ShowIndicator(passwordHelp, TextColor.Danger, message.password, true);
        submitErrors.password = true;
        invalidInputs.push(passwordInput);
    }
    
    if (message.first_name) {
        ShowIndicator(firstNameHelp, TextColor.Danger, message.first_name, true);
        submitErrors.fName = true;
        invalidInputs.push(firstNameInput);
    }
    
    if (message.last_name) {
        ShowIndicator(lastNameHelp, TextColor.Danger, message.last_name, true);
        submitErrors.lName = true;
        invalidInputs.push(lastNameInput);
    }
    
    if (message.phone_number) {
        ShowIndicator(phoneNumberHelp, TextColor.Danger, message.phone_number, true);
        submitErrors.phone = true;
        invalidInputs.push(phoneNumberInput);
    }
    
    if (message.postal_code) {
        ShowIndicator(postalCodeHelp, TextColor.Danger, message.postal_code, true);
        submitErrors.pCode = true;
        invalidInputs.push(postalCodeInput);
    }

    console.log(invalidInputs);
    showInvalidInputs();
}

function showInvalidInputs() {
    if (invalidInputs.length > 0) {
        invalidInputs[0].focus();

        invalidInputs = [];

        console.log(invalidInputs);
    }
}

function showPassword() {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleShowPasswordBtn.innerHTML = "HIDE";
    } else  {
        passwordInput.type = "password";
        toggleShowPasswordBtn.innerHTML = "SHOW";
    }
}

function registerationComplete(message) {
    document.getElementById("registerFormSection").style.display = "none";
    const sectionDone = document.getElementById("registerDoneSetion");
    sectionDone.style.display = "block"
    sectionDone.querySelector("p").innerHTML = message;
}
