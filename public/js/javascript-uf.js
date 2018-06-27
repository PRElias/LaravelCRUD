$(function() {
    $("#dialog").dialog({
        autoOpen: false,
        modal: true,
        buttons : {
            "Confirmar" : function() {
                $(this).dialog("close");
                $.ajax({
                    url: "/uf/excluir/" + id,
                    success: function(result) {
                        window.location="/uf"
                    }
                });
            },
            "Cancelar" : function() {
            $(this).dialog("close");
            }
        }
        });
});

function deleteConfirm(id){
    console.log(id);
    window.id = id;
    //e.preventDefault();
    $("#dialog").dialog("open");
}