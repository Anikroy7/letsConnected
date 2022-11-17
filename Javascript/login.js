const loginBtn = document.getElementById('loginBtn');
const form = document.getElementById('loginForm');
const errorDiv = document.getElementById('error_div');

console.log('hello login');

form.onsubmit = (event) => {
    event.preventDefault();
}

loginBtn.onclick = () => {
    const xhr = new XMLHttpRequest();
    // console.log(xhr, 'heloo submit');
    xhr.open("POST", "php/user_login.php", true);
    console.log(xhr);
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
    const formData = new FormData(form);// Creating form data object
    xhr.send(formData);    // Send data to php file 
}


