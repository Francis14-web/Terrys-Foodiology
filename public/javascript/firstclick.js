const chatBox = document.getElementById ('chat-box')
const chatMessage = document.getElementById ('chat-message')


chatMessage.addEventListener("click", () =>{
    chatMessage.classList.add("hidden")
    chatBox.classList.remove("hidden")
})