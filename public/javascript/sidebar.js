const sidebar = document.getElementById('sidebar')
const menuButton = document.getElementById('menu-button')
const mainWindow = document.getElementById('main-window')

menuButton.addEventListener('click', () => {
    if (sidebar.classList.contains('w-[270px]')) {
        sidebar.classList.remove('w-[270px]')
        sidebar.classList.add('hidden', 'max-w-0')
    } else {
        sidebar.classList.remove('hidden', 'max-w-0')
        sidebar.classList.add('w-[270px]')
    }

    mainWindow.classList.toggle('ml-80')

    if (menuButton.classList.contains('bx-menu')) {
        menuButton.classList.remove('bx-menu')
        menuButton.classList.add('bx-x')
    } else {
        menuButton.classList.remove('bx-x')
        menuButton.classList.add('bx-menu')
    }
})
