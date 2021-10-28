$.noConflict();
jQuery(document).ready(function ($) {
  $(".addFolder").click(function (e) {
    var inputValue = $("#addFolderIput").val();
    e.preventDefault();
    $.ajax({
      url: "process/ajax_handler.php",
      method: "post",
      data: { action: "addFolder", folderName: inputValue },
      success: (response) => {
        alert(`folder with name ${inputValue} created successfully`);
        $("ul.folderList").append(
          '<a style="text-decoration:none;color:#404040;" href="?folderID=' +
            response +
            '"> <li style="display: flex; justify-content: space-between; align-items: center;"> <i class="fa fa-folder"></i>' +
            inputValue +
            '<a style ="font-size:15px;color: #e36f6f;" href="?deleteFolder=' +
            response +
            '"><i style="font-size:15px;" class="fas fa-trash"></i></a> </li> </a>'
        );
      },
      error: (response) => {
        console.log(response);
      },
    });
  });
});
