
    $('#editor').wysiwyg();
    
    $('#tipoemenda').hide();

    function buttonSolicita() {
        let btnsubmit = document.getElementById("btnsubmit");
        btnsubmit.disabled = true;
        btnsubmit.innerText = "Enviando...";
    }
    
    $(".FormSubmitApp").submit(function (e) {
        e.preventDefault();
  
        var form = $(this);
        var load = $(".ajax_load");
        var flashClass = "ajax_response";
        var flash = $("." + flashClass);
  
        form.ajaxSubmit({
            "url": form.attr("action"),
            "type": "POST",
            "dataType": "json",
            "beforeSend": function () {
                load.fadeIn(200).css("display", "flex");
                if($("#btnsubmit").length > 0) { buttonSolicita(); }
            },
            "success": function (data) {
              console.log(data);


            if (data.codigo == '3') { 

                Swal.fire({
                    title: data.title,
                    text: data.msg,
                    icon: data.tipo,
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: data.btn,
                    cancelButtonText: "Não"
                  }).then((result) => {
                    if (result.isConfirmed) {
                      
                        $("#modalanexos").modal({
                            show: true
                        });
    
                    } else {
                        if (data.retorno != '') {
                            if (data.retorno == 'R') {
                                window.location.reload();
                            } else {
                                window.location.href=data.retorno;
                            }
                        }
                    }
                  });

            } else {

              Swal.fire({	
                  text: data.msg,
                  title: data.title,
                  confirmButtonText: data.btn,
                  confirmButtonColor: '#417EBD',
                  type: data.tipo,
                  icon: data.tipo
              }).then(() => {

                    if (data.retorno != '') {
                        if (data.retorno == 'R') { 
                        window.location.reload();
                        } else {
                        window.location.href=data.retorno;
                        }
                    }
                    
                 });
            }

      
            },
            "complete": function () {
                load.fadeOut(200);
                if (form.data("reset") === true) {
                    form.trigger("reset");
                }
            },
            "error": function (data) {
                console.log(data);
            }
        });
    });

    $(".closemodalfiles").on('click', function() {
        window.location.reload();

    })

   $('#filter').keyup(function() {
        let palavra = $(this).val();

        $.ajax({
            type: "POST", 
            url: '/api/' + $("#idcliente").val() + '/geral_gabinete_lista',
            dataType: 'html',
            data: {palavra:palavra},
            beforeSend: function () { 

            },
            success: function(data) {
                $('#lista').html(data);
            },
            error: function(error) {
                 //alert('it broke');
                console.log(error);
            },
            complete: function() {

            }
        })
   })




    $(".select2").select2({
        width: '100%' // need to override the changed default
    });
  
    $(".select2-multiple").select2({
      maximumSelectionLength: 100
    });
  
    $("#tipomateria").change(function () {

        var texto = $(this).find('option:selected').data('texto');
        var tipo = $(this).find('option:selected').data('sim');
        $("#corpo").text(texto);
        $("#corpo").prop("readonly", false);


        if (tipo == 'S') {
            //$("#tipoemenda").prop("hidden", false);
            
            $('#tipoemenda').show();
            $("#matemenda").prop("hidden", false);
            $("#tipomatda").prop("hidden", false);
            $("#sim").prop("checked", true);
            $("#emenda").val(1);
        } else {
            //$("#tipoemenda").prop("hidden", true);
            $('#tipoemenda').hide();
            
            $("#matemenda").prop("hidden", true);
            $("#tipomatda").prop("hidden", true);
            $("#nao").prop("checked", true);
            $("#emenda").val(2);
            $('#escolhaemenda').val('');
            $('#escolhamatemenda').val('');
        }


        
        let idtipo = $("#tipomateria").val();

        $.ajax({
            type: 'POST',
            url: '/api/' + $("#idcliente").val() + '/verificarcampos_materia',
            dataType: "json",
            data: {idmateria: idtipo},

            success: function(data) {
                
                
                if (data.temcorpo == 'N') {
                    $("#corpo").val("");
                    $("#corpomateria").hide();
                    $("#corpomateria").css('display', 'none');
                } else {
                    $("#corpo").val("");
                    $("#corpomateria").show();

                }

                if (data.temjustifica == 'N') {
                    $("#just_materia").hide();
                } else {
                    $("#just_materia").show();
                }

                if (data.temdestinatario == 'N') {
                    $("#campodestinarios").hide();
                } else if (data.temdestinatario == 'S' || data.temdestinatario == '') {
                    $("#campodestinarios").show();
                }

            }, 
            
            error: function () {
                alert('it broke');
            },
        })

    })

    $("#tipomat").change(function () {

        $("#emendade").select2({
            ajax: { 
             url: '/api/' + $("#idcliente").val() + '/listamaterias/' + $("#tipomat").find(':selected').val(),
             type: "get",
             dataType: 'json',
             data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
             },
             processResults: function (response) {
               return {
                  results: response
               };
             },
             cache: false
            }
           });
    });

    $(document).ready(function() {
        $("#filter").on('input', function() {
            $("#textoia_e2").prop('disabled', $(this).val().length < 1)
            $("#textoia_e").prop('disabled', $(this).val().length < 1)
            $("#justificativa").prop('disabled', $(this).val().length < 1)
        })
    });

    // if($("#textoia_e2").attr("disabled", true) || ("#textoia_e").attr("disabled", true) || ("#justificativa").attr("disabled", true)){

    //     Swal.fire({
    //         title: "ATENÇÃO",
    //         text: "Preencha primeiro o preambulo",
    //         icon: "info",
    //         confirmButtonText: ,
    //     })

    // }


    $("#textoia_e").click(function (e) {

        textoia($(this),$('#tipomateria').find(":selected").text(),$('#filter').val())
      });

      $("#textoia_e2").click(function (e) {

        textoia($(this),$('#tipomateria').find(":selected").text(),$('#filter').val())
      });
      
      function textoia(textoia, acao, texto) {
      
      
        var load = $(".ajax_load");
      
        var texto_retorno = textoia.attr('data-texto-retorno');
        var id_ouv = textoia.attr('data-id');
        var texto_ = $("#"+texto_retorno).val();
        $.ajax({
          type: "POST",
          url: '/api/' + $("#idcliente").val() + '/textoia',
          dataType: "json",
          data: { texto_retorno: texto_, idd:id_ouv , acao_:acao, tex_:texto},
          beforeSend: function () { 
            load.fadeIn(200).css("display", "flex");
          },
          success: function (data) {
            load.fadeOut(200);
            if (data.data != '') {
              $("#"+texto_retorno).val('');
      
              let index = 0;
              function type() {
                if (index < data.data.length) {
                    $("#"+texto_retorno).val($("#"+texto_retorno).val() + data.data.charAt(index));
                    index++;
                    $("#"+texto_retorno).scrollTop($("#"+texto_retorno)[0].scrollHeight);
                    setTimeout(type, 15); // Atraso de 30ms entre cada letra
                }
              }
              type();
            }
      
      
      
          },
          error: function (data) {
            alert('it broke');
          }
        });
      }


    $("#destinatarios").select2({
        ajax: { 
         url: '/api/' + $("#idcliente").val() + '/destinatarios',
         type: "post",
         dataType: 'json',
         processResults: function (response) {
           return {
              results: response
           };
         },
         cache: false
        }
       });

      
    $("#EnviarDestinatario").click(function () {
            
        var pronome = $("#pronome").val();
        var nomefantasia = $("#nomefantasia").val();
        var nomecompleto = $("#nomecompleto").val();
        var cargo = $("#cargo").val();


        $.ajax({
            type: "POST",
            url: '/api/' + $("#idcliente").val() + '/incluirdestino',
            dataType: "json",
            data: {pronome: pronome, nomefantasia: nomefantasia, nomecompleto: nomecompleto, cargo: cargo},
            beforeSend: function () {
                $('#EnviarDestinatario').html('<i class="fas fa-2x fa-spinner fa-spin">');
            },
            success: function (data) {

                
                
                
                 },
            error: function () {
                alert('it broke');
            },
            complete: function () {
                $('#formdestino').trigger("reset");
                $('#modaldestino').modal('hide');
                
            }
        });
        
    });


    

    $(document).ready(function() {

        $("span.delete_rascunho").find("a.link_del_ras").click(function() {

            let idrascunho = $(this).attr("id");

            Swal.fire({
                title: "Tem certeza?",
                text: "Você realmente vai deletar o rascunho " + $(this).attr("id") + "?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sim, deletar!",
                cancelButtonText: "Cancelar"
              }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: "POST",
                        url: '/api/' + $("#idcliente").val() + '/deletarrascunho',
                        dataType: "json",
                        data: {
                            idrascunho: idrascunho
                        },
                        beforeSend: function() {
                            $("span.delete_rascunho").html('<i class="fas fa-2x fa-spinner fa-spin">');
                        },

                        success: function(data) {


                              Swal.fire({
                                title: data.title,
                                text: data.msg,
                                icon: data.tipo,
                                confirmButtonText: data.btn,
                              }).then(() => {

                                if (data.retorno != '') {
                                    if (data.retorno == 'R') {
                                    window.location.reload();
                                    } else {
                                    window.location.href=data.retorno;
                                    }
                                }
                                
                             });

                             $("span.delete_rascunho").show();

                        },

                        error: function (error) {
                            console.log(error);
                        },

                    })


                
                }
              });

        });
    });

    $('.submit_on_enter').keydown(function(event) {
        // enter has keyCode = 13, change it if you want to use another button
        if (event.keyCode == 13) {
          this.form.submit();
          return false;
        }
    });

    $('.login_enter').keydown(function(event) {
        // enter has keyCode = 13, change it if you want to use another button
        if (event.keyCode == 13) {
            $('#mybotao').click();
        }
    });

    $(".warning-disable-edit").click(function() {
        Swal.fire({
            title: "AVISO",
            text: "Essa matéria está em tramitação.",
            icon: "info",
            confirmButtonText: "OK",
        });
    });


    $(".warning-disable-delete").click(function() {
        Swal.fire({
            title: "AVISO",
            text: "Essa matéria está em tramitação.",
            icon: "info",
            confirmButtonText: "OK",
        });
    });

    $(document).ready(function() {
        $("#inscrever_tribuna").click(function() {

            let id_sessao = $("#idsessao").val();

            $.ajax({
                type: "POST",
                url: '/api/' + $("#idcliente").val() + '/inscrever_tribuna',
                dataType: "json",
                data: {
                    id_sessao: id_sessao
                },
                beforeSend: function() {
                    $("span.delete_rascunho").html('<i class="fas fa-2x fa-spinner fa-spin">');
                },

                success: function(data) {


                      Swal.fire({
                        title: data.title,
                        text: data.msg,
                        icon: data.tipo,
                        confirmButtonText: data.btn,
                        confirmButtonColor: '#256e4F'
                      }).then(() => {

                        if (data.retorno != '') {
                            if (data.retorno == 'R') {
                            window.location.reload();
                            } else {
                            window.location.href=data.retorno;
                            }
                        }
                        
                     });

                     $("span.delete_rascunho").show();

                },

                error: function (error) {
                    console.log(error);
                },

            })
        });
    });

    if ($("#vtipo").val() == 'R') {
        $("#tp_rascunho").prop('checked', true);
    } else {
        $("#tp_rascunho").prop('checked', false);
    }



    // selecione o canvas e crie o contexto
    const canvas = document.querySelector('#canvas');

    if (canvas !== null) {

    const ctx = canvas.getContext('2d');

    // variáveis para acompanhar o estado da assinatura
    let isSigning = false;
    let lastX = 0;
    let lastY = 0;

    // adicione um evento de mouse para começar a assinar
    canvas.addEventListener('mousedown', (e) => {
    isSigning = true;
    lastX = e.offsetX;
    lastY = e.offsetY;
    });

    // adicione um evento de mouse para continuar a assinar
    canvas.addEventListener('mousemove', (e) => {
    if (isSigning) {
        ctx.beginPath();
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
        lastX = e.offsetX;
        lastY = e.offsetY;
    }
    });

    // adicione um evento de mouse para parar de assinar
    canvas.addEventListener('mouseup', (e) => {
    isSigning = false;
    });

    // adicione um evento para limpar a assinatura
    document.querySelector('#clear').addEventListener('click', () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    document.querySelector('#signature').value = '';
    });

    // adicione um evento para salvar a assinatura como imagem e texto
    document.querySelector('#canvas').addEventListener('mouseup', () => {
    const signatureImage = canvas.toDataURL(); // salvar a assinatura como imagem
    const signatureText = document.querySelector('#signature').value; // obter texto adicional da assinatura
    console.log('Assinatura como imagem: ', signatureImage);
    console.log('Texto adicional da assinatura: ', signatureText);
    });




}