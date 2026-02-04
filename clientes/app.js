function excluir(codigo, tabela){
    resp = confirm("Tem certeza que deseja excluir o registro "+codigo+"?");
    if (resp==true){
        //cod pra excluir o registro 
        $.ajax({
            type: "post",
            url: "excluir.php",
            data: {codigo:codigo, tabela:tabela},
            success: function(response){
                window.location.reload();
            }
        });
    }
}
$('.sucesso,.erro').click(function (e){
    e.preventDefault();
    $(this).fadeOut(500);
});




$(document).ready(function(){
    $('input[name="telefone"]').mask('(00) 00000-0000');
});