function substituir(el) {
    var chars = {',':' ',';':' ','"':' ','\n':' ','\r':' '}; //substitui ',' por ';' e '"' por ''
    el.value = el.value.replace(/[,;"\n\r]/g, m => chars[m]); //substituir varios elementos por uma cadeia definida

    //el.value = el.value.replace(",", ";"); //substituir simples
    //el.value = el.value.replace(/[,""]/g,''); //substituir varios elementos por um outro

}