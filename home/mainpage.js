const ToggleBtn = document.querySelector('.toggle_btn')
const ToggleBtnIcon = document.querySelector('.toggle_btn i')
const dropDownMenu = document.querySelector('.dropdown')

ToggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    ToggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-bars fa-2x'
    : 'fa-solid fa-xmark fa-2x'
}