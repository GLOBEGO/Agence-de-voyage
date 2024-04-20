function check() {
    const mot = document.getElementById("password").value;
    const confmot = document.getElementById("conf").value;
    var msg = document.getElementById("msg");

    if(confmot != mot){
        msg.textContent = "mot de passe incompatible";
        msg.style.backgroundColor = "#ff4500";
        msg.style.color = "#FFFFFF";
        
    }
}