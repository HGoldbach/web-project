$("#title1, #title2").on({
    mouseenter: function() {
        $(this).css("color", "#6EB3B8")
        $(this).css("transition", "1s ease")
    },
    mouseleave: function() {
        $(this).css("color", "black")
        $(this).css("transition", "1s ease")
    }
})

$("#hr").on({
    mouseenter: function() {
        $(this).css("background-color", "#6EB3B8") 
        $(this).css("color", "black")
        $(this).css("transition", "2.5s ease")

    },
    mouseleave: function() {
        $(this).css("background-color", "#2D2D2D")
        $(this).css("color", "white")
        $(this).css("transition", "1.5s ease")
    }
})
