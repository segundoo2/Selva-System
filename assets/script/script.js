function validarLogin() {
    var usuario = "adm"
    var senha = "rs"
    var formUser = document.querySelector('input#user')
    var formPassword = document.querySelector('input#password')

    if (formPassword.value.length == 0 || formUser.value.length == 0){
        alert ("[ERRO] Você precisa digitar usuário e senha")
    }  
    if (formUser.value != usuario || formPassword.value != senha) {
        alert ("[ERRO] Login invalido!")
    } else {
        window.location.href = 'home.html'
    }     
}