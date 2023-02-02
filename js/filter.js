$("#today").click(function() {
    showMovies("today");
});

$("#tomorrow").click(function() {
    showMovies("tomorrow");
});

$("#day_after_tomorrow").click(function() {
    showMovies("day_after_tomorrow");
});

function showMovies(selected_date) {
    var current_date = new Date();
    switch(selected_date) {
        case "today":
            current_date.setDate(current_date.getDate());
            break;
        case "tomorrow":
            current_date.setDate(current_date.getDate() + 1);
            break;
        case "day_after_tomorrow":
            current_date.setDate(current_date.getDate() + 2);
            break;
    }
    var formatted_date = current_date.toISOString().split