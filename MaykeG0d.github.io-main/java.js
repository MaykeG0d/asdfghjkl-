
    function CopyTexto(id){
        var r = document.createRange();
        r.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        try {
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            console.log('Texto copiado com sucesso. ' + r);
        } catch (err) {
            console.log('Não foi possível copiar!');
        }
    }

    function exibiralerta() {
        alert('Mensagem enviada')
    }
    
