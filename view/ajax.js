function OKClick(){
    var id = $('#Client').val();
    $.ajax({
        type : 'POST',
        url : 'testajax.php',
        data : {'action':'select','id': id},
        success: function (reponse_json) {
             document.write(reponse_json);               
            var option= document.createElement("option");
            
            //foreach en jquery
            $("#select_commande").empty();
            // $.each(reponse_json,function (indice,element){
               
            //   option.value = indice;
            //   option.innerHTML = element;
            //   $("#select_commande").append(option);
              for (var val of reponse_json) {
                   $('#Commande').append('<option value="'+ val+'">'+val+' </option>');
                    }
            
        },
        error: function(result) { alert('erreur !'); },
        datatype : 'JSON'
    });
}
function f1(res) {
    $('#Commande').empty();
    document.write(res);
    //   for (var val of result) {
    //     $('#Commande').append('<option value="'+ val['ID']+'">'+val['ID']+' </option>');
    //      }
       
    //  $.each(result,function(index,elem){
    //     $('#Commande').append('<option value="'+index+'">'+elem.ID+' </option>');
    //  })
    }