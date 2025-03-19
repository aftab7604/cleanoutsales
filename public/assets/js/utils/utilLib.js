function ShowIndicator(obj, className = "from-text text-dark", message = "Please wait...", show) {
    obj.innerHTML = message;
    obj.className = "form-text " + className;
    obj.style.display = show ? "block" : "none";
}

function RunRegexTest(rgx, str) {
    return rgx.test(str)
}

const TextColor = {
    Primary: "text-primary",
    Secondary: "text-secondary",
    Success: "text-success",
    Danger: "text-danger",
    Warning: "text-warning",
    Info: "text-info",
    Light: "text-light",
    Dark: "text-dark",
}

const InputType = {
    Input: "input",
    Focus: "focus",
    Unfocus: "blur",
    Submit: "submit",
    Click: "click"
}

const MethodTypes = {
    POST: "POST",
    GET: "GET"
}

const StatusTypes = {
    ERROR: "error",
    VALIDATION_ERROR: "validationError",
    SUCCESS: "success"
}

const CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const API_BASE_URL = window.APP_URL;