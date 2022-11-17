const registerBtn = document.getElementById('registerBtn');
const form = document.getElementById('registrationForm');
const errorDiv = document.getElementById('error_div');
console.log(form, 'this is form');
form.onsubmit = (event) => {
    event.preventDefault();
}

registerBtn.onclick = () => {
    const xhr = new XMLHttpRequest();
    console.log(xhr, 'heloo submit');
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const data = xhr.response;
                console.log(data);
                if (data === 'successfull') {
                    location.href = "users.php";
                } else {
                    errorDiv.textContent = data;
                    errorDiv.style.display = 'block'
                }
            }
        }

    }
    const formData = new FormData(form);
    console.log(formData, 'form form data'); // Creating form data object
    xhr.send(formData);    // Send data to php file 
}


