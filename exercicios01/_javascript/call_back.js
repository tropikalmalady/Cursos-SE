window.onload = function() {
    let fotoStatic = document.getElementById("icone").src;
    let menu = document.getElementsByTagName("li");
    let fotos = ["_imagens/home.png", "_imagens/especificacoes.png", "_imagens/fotos.png", "_imagens/multimidia.png", "_imagens/contato.png"];
    for (let i=0; i<menu.length; i++) {
        menu[i].onmouseover = function() {
            mudaFoto(fotos[i]);
        }
        menu[i].onmouseout = function() {
            mudaFoto(fotoStatic);
        }
    }
}
function mudaFoto(foto) {
    document.getElementById("icone").src=foto;
}