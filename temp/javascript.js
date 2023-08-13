
$('#cpf , #cnpj, #tel').on('focus', function () {
    var id=$(this).attr("id");
    if(id == "cpf"){VMasker(document.querySelector("#cpf")).maskPattern("999.999.999-99");}
    if(id == "cnpj"){VMasker(document.querySelector("#cnpj")).maskPattern("99.999.999/9999-99")};
    if(id == "tel"){VMasker(document.querySelector("#tel")).maskPattern("(99)99999-9999")};
});

//Retorno do root
function getRoot()
{
    var root="http://"+document.location.hostname+"/def/";
    return root;
}


function getCaptcha()
{
    grecaptcha.ready(function() {
        grecaptcha.execute
        ('6LfgQtomAAAAAC96go5ZWu2E2DEFgFD9VhiECdFg', {action: 'submit'}).then(function(token){
            const gRecaptchaResponse=document.querySelector("#g-recaptcha-response").value=token;
        });
      });
}
getCaptcha();


//Ajax do formulário de cadastro
$("#formCadastro").on('submit',function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
        url: getRoot()+'controllers/controllerCadastro.php',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            if(response.retorno == 'erro'){
                $('.retornoCad').empty();
                getCaptcha();
                $.each(response.erros, function(key,value){
                    $('.retornoCad').append(value+'<br>');
                });
            }else{
                $('.retornoCad').append('Dados inseridos com sucesso');
            }
        }
    });
});


//Ajax do formulário de login
$("#formLogin").on('submit',function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
        url: getRoot()+'controllers/controllerLogin.php',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
           if(response.retorno == 'success'){
                window.location.href=response.page;
           }else{
                getCaptcha();
                if(response.tentativas == true){
                    $('.formLogin').hide();
                }
                $('.resultadoForm').empty();
                $.each(response.erros, function(key,value){
                    $('.resultadoForm').append(value+'<br>');
                });
           }  
        }
    });
});

//CapsLock
$("#senha").keypress(function(e){
    kc=e.keyCode?e.keyCode:e.which;
    sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
    if(((kc>=65 && kc<=90) && !sk)||(kc>=97 && kc<=122)&&sk){
        $(".resultadoForm").html("Caps Lock Ligado");
    }else{
       $(".resultadoForm").empty(); 
    }
});



