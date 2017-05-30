
function teste(){
    var idade = prompt("Digite sua idade: ");
    if(idade<18){
        alert("Voce é menor, tem autorização para acessar essa página!");
    }else{
        alert("Seja bem vinda ao sistema!");
        window.location.href = "principal.php";   
    }
}


