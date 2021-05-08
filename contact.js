(function() {
    const form = document.querySelector('#contactForm');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }
            checkValidity();
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();

document.getElementById("message").addEventListener("input", updateRequirementMessage);
function updateRequirementMessage() {
    let message = document.getElementById("message").value;
    let T = message.length;
    let notify;
    if (T < 50) {
        notify = "Your message needs " + (50 - T) + " more letters.";
        document.getElementById('remaining-letters').innerHTML = notify.fontcolor("red");
    }
    else if (T <= 500) {
        notify = "You have " + (500 - T) + " letters left. Please write some more if can.";
        document.getElementById('remaining-letters').innerHTML = notify.fontcolor("green");
    }
    else {
        notify = "Your message is exceeding " + (T - 500) + " letters.";
        document.getElementById('remaining-letters').innerHTML = notify.fontcolor("red");
    }
}

