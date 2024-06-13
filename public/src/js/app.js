// i take the use jquery and use class from 'dashboard' in 'article' section using class name.


$(".post")
    .find(".interaction")
    .find(".edit")
    .on("click", function () {
      console.log('it works!!');
      $('#edit-modal').modal();
    });