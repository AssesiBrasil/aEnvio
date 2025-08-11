let inputsCount = 0;

/* <h6 class="mb-0 fw-semibold"> ${name_arq} </h6> */

function handleFileSelection(input) {

    const file_list = document.getElementById("file-list");
    const arqfile = input.files[0];


    if (input.files.length > 0 && arqfile.size < 10000000) {
        const files_inputs = document.getElementById('files_inputs');
        const qinput = document.getElementById("qinput");
        // const deletefile = document.getElementsByClassName("deletefile");

        let xhr = new window.XMLHttpRequest();
        xhr.upload.addEventListener("progress", (evt) => {

            $('.progress-bar').width('0%');
            $('.perc-progress').html('0%');

            if (evt.lengthComputable) {
                let percentComplete = evt.loaded / evt.total;
                percentComplete = parseInt(percentComplete * 100);

                $('.progress-bar').width(percentComplete+'%');
                $('.perc-progress').html(percentComplete+'%');
            }

        }, false);

        // let name_arq = (desc_file.value != '') ? desc_file.value : arqfile.name;

        file_list.innerHTML += `<div class="card" id="delete_card_${inputsCount}">
                            <div class="card-body p-1">
                                <div class="clearfix d-flex deletecard align-items-baseline">

                                    <div class="avatar avatar-md style-1 rounded bg-light d-flex align-items-center justify-content-center m-0 mr-1">
                                        <i class="bi bi-file-earmark-medical-fill" style="font-size: 18px; padding: .4em .6em;"></i>
                                    </div>
                                    <div class="clearfix">
                                        <h6 class="mb-0 fw-semibold"> ${arqfile.name} </h6>
                                        <span class="text-muted fs-13"> ${arqfile.size} bytes </span>	
                                    </div>	
                                    <span class="ml-auto deletefile" id="${inputsCount}" style="cursor: pointer">&times;</span>

                                </div>

                                <div class="mt-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="progress" style="width: 90%; height: 5px;">
                                            <div class="progress-bar bg-purple" style="height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <div class="ml-1" style="width: 9%;">
                                            <span class="perc-progress"></span>
                                        </div>
                                    </div>
                                    <input type="text" name="desc_arq${inputsCount}" id="desc_arq" class="form-control mt-1" placeholder="Descrição do arquivo"> </br>

                                </div>
                            </div>
                            
                        </div>`;


        inputsCount++;
        const newInput = document.createElement("input");
        newInput.type = "file";
        newInput.name = `arquivo_${inputsCount}`;
        newInput.id = `anexo_solicita_${inputsCount}`;
        newInput.className = "inputs_file";
        newInput.style = "visibility: hidden";
        newInput.accept = "application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, application/pdf, .xls";
        newInput.onchange = function () {

            handleFileSelection(this);
        }
        
        qinput.value = inputsCount;

        document.getElementById("files_inputs").appendChild(newInput);

        document.getElementById("files_label").setAttribute("for", newInput.id);
    }


    $(document).ready(function() {

        $("div.deletecard").find("span.deletefile").click(function() {
    
            // console.log("aqui");
    
            let iddeletefile = $(this).attr("id");
            $('#anexo_solicita_'+iddeletefile).val('');
            $('#anexo_solicita_'+iddeletefile).remove();
            $("#delete_card_"+iddeletefile).remove(); 
            qinput.value -= 1;
            inputsCount--;

            if (inputsCount == 0) {
                document.getElementById("files_label").setAttribute("for", `anexo_solicita_${inputsCount}`);
            }

            const inputs_file = document.querySelectorAll(".inputs_file");
            let j = 0;
            for (j = 0; j < inputs_file.length; j++) {
                document.querySelectorAll(".inputs_file")[j].id = "anexo_solicita_"+j;
                document.querySelectorAll(".inputs_file")[j].name = "arquivo_"+j;
            } 

    
        })
    
    });

}

