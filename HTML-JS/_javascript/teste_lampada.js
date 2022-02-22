let quebrada = false;

window.onload = function() {
    setInterval("relogio()",1);
    document.getElementById("count").innerHTML="A lâmapada foi consertada " + localStorage.getItem("count") + " vezes.";
    document.getElementById("luz").onmousemove = mudaLampada("lampada-acesa");
    document.getElementById("luz").onmouseout = mudaLampada("lampada-apagada");
    document.getElementById("luz").onclick = mudaLampada("lampada-quebrada");
    document.getElementById("button").onclick = function() {
        let count=localStorage.getItem("count");
        if(quebrada) {
            localStorage.setItem("count", ++count);
        }
        document.getElementById("count").innerHTML="A lâmapada foi consertada " + localStorage.getItem("count") + " vezes.";
        quebrada = false;
        document.getElementById("luz").src="_imagens/lampada-apagada.jpg"
    }
}

function mudaLampada(status) {
    return function () {
        if (!quebrada) {
            document.getElementById("luz").src="_imagens/" + status + ".jpg";
            if (status=='lampada-quebrada') {
                quebrada = true;
                document.getElementById("button").innerHTML="Consertar lâmpada";
            }
        }
    }
}

function relogio() {
    let now = new Date();
    let clock = now.getHours().toLocaleString('pt-BR', {minimumIntegerDigits: 2,useGrouping: false}) + ":" 
    + now.getMinutes().toLocaleString('pt-BR', {minimumIntegerDigits: 2,useGrouping: false}) + ":" 
    + now.getSeconds().toLocaleString('pt-BR', {minimumIntegerDigits: 2,useGrouping: false});
    document.getElementById("relogio").innerHTML = clock;
}