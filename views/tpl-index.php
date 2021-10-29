<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title><?= SITE_TITLE ?></title>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
 
    <div class="page">
      <div class="pageHeader">
        <div class="title">Dashboard</div>
        <div class="userPanel">
          <i class="fa fa-chevron-down"></i
          ><span class="username">John Doe </span
          ><img
            src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/73.jpg"
            width="40"
            height="40"
          />
        </div>
      </div>
      <div class="main">
        <div class="nav">
          <div class="searchbox">
            <div>
              <i class="fa fa-search"></i>
              <input type="search" placeholder="Search" />
            </div>
          </div>
          <div class="menu" style="position: relative;">
            <div class="title">folders</div>
            <ul class="folderList">
              <a href="?folderID=<?=null?>" class="default <?= empty($_GET["folderID"]) || !isset($_GET["folderID"]) ? "active" : "";?>"><li ><i class="fa fa-folder"></i>ALL</li></a>
              <!-- get folders from database -->
              <?php foreach ($folderNames as $key => $value):?>
               <a style="text-decoration:none;color:#404040;" href="?folderID=<?=$value->id?>">
                <li class="folderItem <?= @$_GET["folderID"] == $value->id ?"active" :"";?>">
                  <i class="fa fa-folder"></i><?= $value->name ?>
                  <a class="folderTrash" onclick="return confirm('are you sure to delete this folder ?');"  style ="font-size:15px;color: #e36f6f;" href="?deleteFolder=<?=$value->id?>"><i style="font-size:15px;" class="fas fa-trash"></i></a>
                </li>
               </a>
                
                <?php endforeach;?>
              <!-- get folders from database -->

              </ul>
              <!-- create new folders -->
              <input style="font-family: vazir;border-radius:4px;border: 1px solid #efefef; padding: 5px 10px ; width: 70%;outline: 0;" type="text" name="addFolder" id="addFolderIput" placeholder="add new folder ..">
              <button class="addFolder" style="position: absolute; right: 39px ; display: inline-flex; height: 33px ; justify-content: center; align-items: center; font-size: 25px;color: #30b930;cursor: pointer;" id="addNewFolderBtn"><span class="plusBTN">+</span></button>
              <!-- create new folders -->
          </div>
        </div>
        <div class="view">
          <div class="viewHeader">
            <div class="title">Manage Tasks</div>
            <div class="functions">
              <div class="button active">Add New Task</div>
              <div class="button">Completed</div>
              <div class="button inverz"><i class="fa fa-trash-o"></i></div>
            </div>
          </div>
          <div class="content">
            <div class="list">
              <div class="title">Tasks</div>
              <ul>
                <?php if(sizeof($tasks)): ?>
                <!-- get tasks from database -->
                <?php foreach($tasks as $key => $value):?>
                <li class=<?= ($value->is_done) ? "checked":"";?>>
                  <i style="cursor:pointer;" class="fa <?=($value->is_done) ? " fa-check-square-o":" fa-square-o";?>"></i         
                  ><span style="margin-left:10px;"><?= $value->title;?></span>
                  <div class="info">
                    <span class="taskDate">created at <?= $value->created_at; ?></span>
                    <a style ="font-size:15px;color: #e36f6f;margin-right:10px;" 
                       href="?deleteTask=<?=$value->id?>" onclick="return confirm('are you sure ?');"><i style="font-size:15px;" class="fas fa-trash"></i></a>
                  </div>
                </li>
                <?php endforeach;?>
                <!-- get tasks from database -->
                <?php else:?>
                  <li>no task here :(</li>
                <?php endif; ?>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.6.0.min.js' integrity='sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=' crossorigin='anonymous'></script>
    <script src="<?=BASE_URL?>assets/js/script.js"></script>
  </body>
</html>
