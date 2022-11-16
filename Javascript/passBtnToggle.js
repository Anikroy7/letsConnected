


//---------- Password toggle button control
const passField = document.getElementById('passwordField');

passField.onkeyup = () => {
    if (!passField.value.length) {
        toggleBtn.classList.add('fa-disabled');
        console.log(passField.value.length);
        console.log(passField.value);
    } else {
        toggleBtn.classList.remove('fa-disabled');
        console.log(passField.value);

    }
}

const toggleBtn = document.getElementById('passwordEye');
toggleBtn.onclick = () => {
    if (passField.type == 'password') {
        passField.type = 'text';
        toggleBtn.classList.remove('fa-eye');
        toggleBtn.classList.add('fa-eye-slash');
        console.log(toggleBtn);
    } else {
        passField.type = 'password';
        toggleBtn.classList.remove('fa-eye-slash')
        toggleBtn.classList.add('fa-eye');
    }
}

