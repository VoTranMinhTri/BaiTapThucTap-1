//Dropdown
function show(gt,id) {
    document.querySelector('.textbox').value = gt;
    document.querySelector('.idve').value = id;
}
let dropdown = document.querySelector('.dropdown');
let btndropdown = document.querySelector('.btn-dropdown');
dropdown.onclick = function() {
    dropdown.classList.toggle('active');
}
btndropdown.onclick = function() {
    dropdown.classList.toggle('active');
}
