const input_field = document.getElementById('input_field');
const sendBtn = document.getElementById('sendBtn');
const form = document.getElementById('chatForm');
const chat_msg_container = document.getElementById('chat_msg_container');

form.onsubmit = (event) => {
    event.preventDefault();
}

sendBtn.onclick = () => {
    console.log('send btn clicked');
    const xhr = new XMLHttpRequest();
    console.log('send btn clicked');
    xhr.open("POST", "php/insert_chat.php", true);
    console.log(xhr);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                input_field.value = '';
            }
        }
    }
    const formData = new FormData(form);
    xhr.send(formData);    // Send data to php file 
}


setInterval(() => {
    // Create a request
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get_chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const data = xhr.response;
                chat_msg_container.innerHTML = data;
            }
        }
    }
    // Send request
    const formData = new FormData(form);
    xhr.send(formData);
}, 500)