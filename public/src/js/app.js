// i take the use jquery and use class from 'dashboard' in 'article' section using class name.


$(".post")
    .find(".interaction")
    .find(".edit")
  .on("click", function (event) {
    event.preventDefault();
    var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
    // console.log('it works!!');
    $('#post-body').val(postBody);
      $('#edit-modal').modal();
    });