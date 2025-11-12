const nome = document.querySelector('#username')
const email = document.querySelector('#email')
const senha = document.querySelector('#password')
const confirmaSenha = document.querySelector('#password-confirmation')
const form = document.querySelector("form")

form.addEventListener('submit', (e) =>{

    let enviarform = true

    if(!nome.value){
        console.log('o nome esta vazio')
        enviarform = false
    }

    if(!email.value){
        console.log("o email esta vazio")
        enviarform = false
    }

    if(!senha.value){
        console.log("a senha esta vazia")
        enviarform = false
    }

    if(!confirmaSenha.value){
        console.log("confirmaçao de senha esta vazia")
        enviarform = false
    }
    
    if (!enviarform){
        e.preventDefault()
    }
})