$("#titulo").on({
    mouseenter: function() {
        $(this).css("color", "#6EB3B8")
        $(this).css("transition", "1s ease")
    },
    mouseleave: function() {
        $(this).css("color", "black")
        $(this).css("transition", "1s ease")
    }
})

$(".image").click(function() {
    this.requestFullscreen();
    $(this).css("transition", "1s ease")
})

$("#btn").click(function() {
    var confirmar = window.confirm("Hotel selecionado! Deseja mesmo continuar com a compra?");
    if (confirmar) {
        window.location.href = "form.php"
    } 
})
