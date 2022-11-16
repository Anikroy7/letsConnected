const registerBtn = document.getElementById('registerBtn');
const form = document.getElementById('registrationForm');
console.log(form, 'this is form');
form.onsubmit = (event) => {
    event.preventDefault();
}

registerBtn.onclick = () => {
    console.log('heloo submit');
    let xsr = new XMLHttpRequest();
    xsr.open('POST', 'php/signup.php', true);
    xsr.onload = () => {
        if (xsr.readyState === XMLHttpRequest.DONE) {
            const data = xsr.response;
            console.log(data);
        }
    }
    const formData = new FormData(form); // Creating form data object
    xsr.send(formData);   // Send data to php file
}


