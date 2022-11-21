
const searchField = document.getElementById('searchField');
const allUsersDiv = document.getElementById('allUsersDiv');
const searchIcon = document.getElementById('searchIcon');
const closeIcon = document.getElementById('closeIcon');


if (!searchField.value) {
    closeIcon.classList.add('invisible');
    // searchField.placeholder = "Select an user to start chat";
}

closeIcon.onclick = () => {
    closeIcon.classList.add('invisible');
    searchIcon.classList.remove('invisible');
    searchField.classList.remove('active');
    searchField.value = '';
}



searchField.onkeyup = () => {
    // Toggle search and active buttpon
    closeIcon.classList.remove('invisible');
    searchIcon.classList.add('invisible');

    const searchValue = searchField.value;
    if (!searchValue) {
        searchField.classList.remove('active');
    } else {
        searchField.classList.add('active');
    }
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search/php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const data = xhr.response;
                allUsersDiv.innerHTML = data;
            }
        }
    }

    // Send header
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Send request
    xhr.send('searchValue=' + searchValue);
}


setInterval(() => {
    // Create a request
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const data = xhr.response;
                if (!searchField.classList.contains('active')) {
                    allUsersDiv.innerHTML = data;
                }
            }
        }
    }
    // Send request
    xhr.send();
}, 500)