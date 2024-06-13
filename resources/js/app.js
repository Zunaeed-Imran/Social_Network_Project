import './bootstrap';

// i take the use jquery and use class from 'dashboard' in 'article' section using class name.

$(".post")
    .find("interaction")
    .find("a")
    .eq(2)
    .on("click", function () {
        $("#edit-modal").modal();
    });