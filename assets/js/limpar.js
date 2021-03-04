function limpar(){
    document.getElementById('name').value=''
    document.getElementById('email').value=''
    document.getElementById('subject').value=''
    document.getElementById('message').value=''

location.reload()
    
}
var btlimpar = document.getElementById('btLimpar')
btlimpar.addEventListener('click',limpar)