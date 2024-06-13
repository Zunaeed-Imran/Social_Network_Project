// i take the use jquery and use class from 'dashboard' in 'article' section using class name.

const { data } = require("autoprefixer");


var postId = 0;


$(".post")
    .find(".interaction")
    .find(".edit")
  .on("click", function (event) {
    event.preventDefault();
    var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
    var postId = event.target.parentNode.parentNode.dataset['postid'];
    // console.log('it works!!');
    $('#post-body').val(postBody);
      $('#edit-modal').modal();
  });
    
$('#modal-save').on('click', function () {
  $.ajax({
    method: 'POST',
    url: url,
    data: { body: $('#post-body').val(), postId: '', _token: token }
  })
  .done(function (msg) {
    console.log(msg['message']);
  });
});