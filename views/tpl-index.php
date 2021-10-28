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

              <!-- get folders from database -->
              <?php foreach ($folderNames as $key => $value):?>
               <a style="text-decoration:none;color:#404040;" href="?folderID=<?=$value->id?>">
                <li style="display: flex; justify-content: space-between; align-items: center;">
                  <i class="fa fa-folder"></i><?= $value->name ?>
                  <a style ="font-size:15px;color: #e36f6f;" href="?deleteFolder=<?=$value->id?>"><i style="font-size:15px;" class="fas fa-trash"></i></a>
                </li>
               </a>
                
                <?php endforeach;?>
              <!-- get folders from database -->

                <!-- <li class="active"><i class="fa fa-folder"></i>current folder</li> -->
              </ul>
              <!-- create new folders -->
              <input style="border-radius:4px;border: 1px solid #efefef; padding: 5px 10px ; width: 70%;outline: 0;" type="text" name="addFolder" id="addFolderIput" placeholder="add new folder ..">
              <button class="addFolder" style="position: absolute; right: 39px ; display: inline-flex; height: 27px ; justify-content: center; align-items: center; font-size: 25px; border: 2px solid #30b930; color: #30b930;cursor: pointer;" id="addNewFolderBtn"><span class="plusBTN">+</span></button>
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
              <div class="title">Today</div>
              <ul>
                <li class="checked">
                  <i class="fa fa-check-square-o"></i
                  ><span>Update team page</span>
                  <div class="info">
                    <div class="button green">In progress</div>
                    <span>Complete by 25/04/2014</span>
                  </div>
                </li>
                <li>
                  <i class="fa fa-square-o"></i><span>Design a new logo</span>
                  <div class="info">
                    <div class="button">Pending</div>
                    <span>Complete by 10/04/2014</span>
                  </div>
                </li>
                <li>
                  <i class="fa fa-square-o"></i
                  ><span>Find a front end developer</span>
                  <div class="info"></div>
                </li>
              </ul>
            </div>
            <div class="list">
              <div class="title">Tomorrow</div>
              <ul>
                <li>
                  <i class="fa fa-square-o"></i
                  ><span>Find front end developer</span>
                  <div class="info"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.6.0.min.js' integrity='sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=' crossorigin='anonymous'></script>
    <script src="<?=BASE_URL?>assets/js/script.js"></script>
  </body>
</html>
