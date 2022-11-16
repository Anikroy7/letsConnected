console.log('hello users');

const searchField = document.getElementById('searchField');
const searchBtn = document.getElementById('searchBtn');
const emptySearchErrorField = document.getElementById('emptySearchError');

searchBtn.onclick = () => {

    if (!searchField.value) {
        emptySearchErrorField.classList.remove('hidden');
        searchField.placeholder = "Select an user to start chat";

    } else {
        emptySearchErrorField.classList.add('hidden');

    }
}