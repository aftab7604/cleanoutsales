let invalidInputs = [];

let submitErrors = {
    email: true,
    password: true
};

const emailInput = document.getElementById("email");
const emailHelp = document.getElementById("emailHelp");

const passwordInput = document.getElementById("password");
const passwordHelp = document.getElementById("passwordHelp");

const loginForm = document.getElementById("loginForm");

toggleShowPasswordBtn = document.getElementById("toggleShowPassword");

emailInput.addEventListener(InputType.Input, () => validateEmail());
emailInput.addEventListener(InputType.Unfocus, () => validateEmail());

passwordInput.addEventListener(InputType.Input, () => validatePassword());
passwordInput.addEventListener(InputType.Unfocus, () => validatePassword());

// loginForm.addEventListener(InputType.Submit, async function (e) { loginUser(e); });

toggleShowPasswordBtn.addEventListener(InputType.Click, () => showPassword());

function validateEmail() {
    ShowIndicator(emailHelp, false);

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

function setSubmitButtonStatus() {
    pass = Object.values(submitErrors).every(value => !value);

    // if all false meaning there are no errors
    if (!pass) {
        validateEmail();
        validatePassword();
    }

    return pass;
}

function loginUser(e) {
    e.preventDefault();
    
    if (setSubmitButtonStatus()) {
        let formData = {
            email: emailInput.value,
            password: passwordInput.value
        };

        fetch(`${API_BASE_URL}/login`, {
            method: MethodTypes.POST,
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": CSRF_TOKEN
            },
            body: JSON.stringify(formData)
        })
        .then(res => res.json())
        .then(
            data => {
                if (data.status === StatusTypes.VALIDATION_ERROR) {
                    showServerValidationErrors(data.message);
                }

                if (data.status === StatusTypes.SUCCESS) {
                    loginComplete(data.message);
                }

                if (data.status === StatusTypes.ERROR) {
                    console.log("error:", data.message);
                }
            }
        )
        .catch(error => console.log("fetch error:", error));
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