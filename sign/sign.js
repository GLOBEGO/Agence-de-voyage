function checksubmit(){
    var option=document.getElementsByName('sexe');
    if (!(option[0].checked || option[1].checked)) {
        alert("choisir votre sexe");
        return false;
    }

}
function check(){
    const mot = document.getElementById("password").value;
    const confmot = document.getElementById("conf").value;
    const msg = document.getElementById("msg");
    const btn = document.getElementById("sub");
    if(confmot != mot){
        msg.textContent = "mot de passe incompatible";
        msg.style.backgroundColor = "#ff4500";
        msg.style.color = "#FFFFFF";
        btn.disabled = true;
    }
    else{
        msg.textContent = "mot de passe compatible";
        msg.style.backgroundColor = "#62ce66";
        msg.style.color = "#FFFFFF";
        btn.disabled = false;
    }
}