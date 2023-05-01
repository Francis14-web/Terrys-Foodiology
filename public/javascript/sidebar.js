const sidebar = document.getElementById('sidebar')
const menuButton = document.getElementById('menu-button')
const mainWindow = document.getElementById('main-window')

menuButton.addEventListener('click', () => {
    if (sidebar.classList.contains('max-w-sidebar')) {
        sidebar.classList.remove('max-w-sidebar')
        sidebar.classList.add('hidden', 'max-w-0')
    } else {
        sidebar.classList.remove('hidden', 'max-w-0')
        sidebar.classList.add('max-w-sidebar')
    }

    mainWindow.classList.toggle('ml-[270px]')

    if (menuButton.classList.contains('bx-menu')) {
        menuButton.classList.remove('bx-menu')
        menuButton.classList.add('bx-x')
    } else {
        menuButton.classList.remove('bx-x')
        menuButton.classList.add('bx-menu')
    }
})
