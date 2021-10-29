$.noConflict();
jQuery(document).ready(function ($) {
  $(".addFolder").click(function (e) {
    var inputValue = $("#addFolderIput").val();
    e.preventDefault();
    $(".plusBTN").addClass(" anim");
    $.ajax({
      url: "process/ajax_handler.php",
      method: "post",
      data: { action: "addFolder", folderName: inputValue },
      success: (response) => {
        if (response != 0) {
          // alert(`folder with name ${inputValue} successsfully added`);
          $("ul.folderList").append(
            '<a style="text-decoration:none;color:#404040;" href="?folderID=' +
              response +
              '"> <li style="display: flex; justify-content: space-between; align-items: center;"> <i class="fa fa-folder"></i>' +
              inputValue +
              '<a  style ="font-size:15px;color: #e36f6f;" href="?deleteFolder=' +
              response +
              '"><i style="font-size:15px;" class="fas fa-trash"></i></a> </li> </a>'
          );
        } else {
          alert("the folder name should have at least 3 chars");
        }
        $(".plusBTN").removeClass("anim");
      },
      error: (response) => {
        console.log(response);
      },
    });
  });
  //
  $(".folderTrash").click(function () {
    return confirm("are you sure?");
  });
});
