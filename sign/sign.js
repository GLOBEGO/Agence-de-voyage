function check() {
    const mot = document.getElementById("password").value;
    const confmot = document.getElementById("conf").value;
    var msg = document.getElementById("msg");

    if(confmot != mot){
        msg.textContent = "mot de passe incompatible";
        msg.style.backgroundColor = "#ff4500";
        msg.style.color = "#FFFFFF";
        
    }
    else{
        msg.textContent = "mot de passe compatible";
        msg.style.backgroundColor = "#62ce66";
        msg.style.color = "#FFFFFF";
    }
}