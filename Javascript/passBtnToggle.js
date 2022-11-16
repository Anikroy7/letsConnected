

//---------- Password toggle button control
const passField = document.getElementById('passwordField');
console.log(passField);
passField.onkeyup = () => {
    if (!passField.value.length) {
        toggleBtn.classList.add('fa-disabled');
    } else {
        toggleBtn.classList.remove('fa-disabled');
    }
}

const toggleBtn = document.getElementById('passwordEye');
toggleBtn.onclick = () => {
    if (passField.type == 'password') {
        passField.type = 'text';
        toggleBtn.classList.remove('fa-eye');
        toggleBtn.classList.add('fa-eye-slash');
    } else {
        passField.type = 'password';
        toggleBtn.classList.remove('fa-eye-slash')
        toggleBtn.classList.add('fa-eye');
    }
}

