<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<link rel="stylesheet" type="text/css" href="style.css"> 
<title>ME.J Songs</title> 

<head>
</head>
<body>
  <main class="player" >

        <div class="row">
          <div class="ml-auto mr-3">
             <img src="images/logo1.png" alt="" style="width:100px; height:70;padding: 5px;float: right;">
          </div>
        </div>
        
        <div class="container">
            <div class="row" style="margin-left: 0px;">
                <a href="#" class="tab" onclick="openNav()" style="color:#fff">
                  <i class="fas fa-bars" aria-hidden="true"></i>
                  <span class="sr-only">menu bar</span>
                </a>
                <div class="search-container">
                    <input type="text" name="search" placeholder="Search..." class="search-input" onclick="window.open('blank_page.php','_self')">
                    <a href="#" class="search-btn">
                            <i class="fas fa-search"></i>      
                    </a>
                </div>
            </div>
        </div>


      

                       

                          </div>
                        </div>

                        <div id="mySidenav" class="sidenav">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                          <a href="#">About</a>
                          <a href="#">Services</a>
                          <a href="#">Clients</a>
                          <a href="#">Contact</a>
                          <a href="login.php">Login</a>
                        </div>
                        <div style="background: #fff;">
                          <ul class="nav nav-tabs nav-justified" role="tablist" style="margin-top:10px;">

                            <li class="nav-item">
                              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true" style="font-size:12px;">Now playing</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false" style="font-size:12px;">Channels</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false" style="font-size:12px;">Schedule</a>
                            </li>
                          </ul>
                          <div class="card card-primary card-outline card-outline-tabs"> 
                            <div class="tab-content" id="custom-tabs-four-tabContent">

                              <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <div style="height:350px;">
                                  <div id="img-modal">
                                    <div class="alert alert-primary" role="alert">
                                     <div class="row">
                                       <div class="col-4">

                                        <img src="images/bakward.png" height="20px" width="20px">

                                      </div>
                                      <div class="col-8" style="margin-top: 6px;">
                                       <span class="text-center">Chilled Bits</span>
                                     </div>
                                     </div>
                                    </div>

                                 <div class=" crop">
                                  <img class="card-img-top img1" src="images/singer/9.jpg" alt="" style="height:300px">
                                </div>
                                <div class="text-block">
                                  <h4>DJ Snake</h4>
                                  <p>Dust Till Town</p>
                                </div>
                              </div>  
                              <div id="blank-modal">
                                <p></p>
                              </div>

                            </div>
                          </div>

                          <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">

                            <div class="container-fluid" style="height: 350px; overflow-y: auto; scrollbar-width: none;" id="album-list">
                              <div class="row">
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/7.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>DJ Khalid</b></p>
                                </div>
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/2.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>Watson Shane</b></p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/3.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>Emma Bantai</b></p>
                                </div>
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/4.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>Zyan Malik</b></p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/5.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>ED Sheren</b></p>
                                </div>
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/6.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>DJ Khalid</b></p>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/5.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>ED Sheren</b></p>
                                </div>
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/6.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>DJ Khalid</b></p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/5.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>ED Sheren</b></p>
                                </div>
                                <div class="col">
                                  <div class="card channel-img">
                                    <img class="card-img" src="images/singer/6.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                      <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                    </div>
                                  </div>
                                  <p class="text-muted"><b>DJ Khalid</b></p>
                                </div>
                              </div>
            
                            </div>

                           <!--  <div class="container" style="height:400px;" id="album-list">
                              <div class="card-deck" style="padding:10px">
                                <div class="card channel-img" >
                                  <img class="card-img-top" src="images/singer/1.jpg" alt="Card image cap">

                                  <div class="card-img-overlay">
                                    <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                  </div>


                                  <p class="text-muted"><b>DJ Khalid</b></p>

                                </div>
                                <div class="card channel-img">
                                  <img class="card-img-top" src="images/singer/2.jpg" alt="Card image cap">
                                  <div class="card-img-overlay">
                                    <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                  </div>
                                  <p class="text-muted"><b>ED Sheren</b></p>
                                </div>

                              </div>
                              <div class="card-deck" style="padding:10px">
                                <div class="card channel-img">
                                  <img class="card-img-top" src="images/singer/3.jpg" alt="Card image cap">

                                  <div class="card-img-overlay">
                                    <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                  </div>

                                  <p class="text-muted"><b>Zyan Malik</b></p>
                                </div>
                                <div class="card channel-img">
                                  <img class="card-img-top" src="images/singer/4.jpg" alt="Card image cap">
                                  <div class="card-img-overlay">
                                    <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                  </div>
                                  <p class="text-muted"><b>DJ Khalid</b></p>
                                </div>

                              </div>
                              <div class="card-deck" style="padding:10px">
                                <div class="card channel-img">
                                  <img class="card-img-top" src="images/singer/5.jpg" alt="Card image cap">

                                  <div class="card-img-overlay">
                                    <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                  </div>

                                  <p class="text-muted"><b>Emma Bantai</b></p>
                                </div>
                                <div class="card channel-img" >
                                  <img class="card-img-top" src="images/singer/6.jpg" alt="Card image cap">
                                  <div class="card-img-overlay">
                                    <a href="#" style="color:white"><i class="fas fa-play"></i></a>
                                  </div>
                                  <p class="text-muted"><b>Watson Shane</b></p>
                                </div>

                              </div>
                            </div> -->

                            <div style="height:350px;display: none;" id="song-list">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <th width="5%">
                                      <img src="images/singer/7.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                                    </th>
                                    <td width="35%">
                                      <div style="line-height: 4px;margin-top:15px">
                                       <p>Dusk Till Down</p>
                                       <p>Views</p>
                                     </div>
                                   </td>

                                   <td width="5%">
                                    <div class="song-duration">
                                      <i class='fas fa-heart'></i>
                                    </div>
                                  </td>
                                  <td width="5%">
                                   <div class="popup" onclick="myFunction1()"><i class='fas fa-ellipsis-v'></i>
                                    <div class="popuptext"  id="myPopup3">
                                      <ul style="list-style-type:none;">
                                        <li>
                                          <a href="">
                                            <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                          </a>
                                        </li>
                                        <li> 
                                          <a href="">
                                            <i class="fas fa-step-forward"></i>
                                          </a>
                                          <li>
                                            <a href="">
                                              <i class="fas fa-step-forward"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th width="5%">
                                    <img src="images/singer/2.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                                  </th>
                                  <td width="35%">
                                    <div style="line-height: 4px;margin-top:15px">
                                     <p>Machayege</p>
                                     <p>Views</p>
                                   </div>
                                 </td>

                                 <td width="5%">
                                  <div class="song-duration">
                                    <i class='fas fa-heart'></i>
                                  </div>
                                </td>
                                <td width="5%">
                                 <div class="popup" onclick="myFunction2()"><i class='fas fa-ellipsis-v'></i>
                                  <div class="popuptext"  id="myPopup3">
                                    <ul style="list-style-type:none;">
                                      <li>
                                        <a href="">
                                          <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                        </a>
                                      </li>
                                      <li> 
                                        <a href="">
                                          <i class="fas fa-step-forward"></i>
                                        </a>
                                        <li>
                                          <a href="">
                                            <i class="fas fa-step-forward"></i>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  
                                </td>
                              </tr>

                              <tr>
                                <th width="5%">
                                  <img src="images/singer/3.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                                </th>
                                <td width="35%">
                                  <div style="line-height: 4px;margin-top:15px">
                                   <p>Rock On</p>
                                   <p>Views</p>
                                 </div>
                               </td>
                               
                               <td width="5%">
                                <div class="song-duration">
                                  <i class='fas fa-heart'></i>
                                </div>
                              </td>
                              <td width="5%">
                                <div class="popup" onclick="myFunction3()"><i class='fas fa-ellipsis-v'></i>
                                  <div class="popuptext"  id="myPopup3">
                                    <ul style="list-style-type:none;">
                                      <li>
                                        <a href="">
                                          <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                        </a>
                                      </li>
                                      <li> 
                                        <a href="">
                                          <i class="fas fa-step-forward"></i>
                                        </a>
                                        <li>
                                          <a href="">
                                            <i class="fas fa-step-forward"></i>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  
                                </td>
                              </tr>

                              <tr>
                                <th width="5%">
                                  <img src="images/singer/4.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                                </th>
                                <td width="35%">
                                  <div style="line-height: 4px;margin-top:15px">
                                   <p>Milege Milege</p>
                                   <p>Views</p>
                                 </div>
                               </td>
                               
                               <td width="5%">
                                <div class="song-duration">
                                  <i class='fas fa-heart'></i>
                                </div>
                              </td>
                              <td width="5%">
                                <div class="popup" onclick="myFunction4()"><i class='fas fa-ellipsis-v'></i>
                                  <div class="popuptext"  id="myPopup3">
                                    <ul style="list-style-type:none;">
                                      <li>
                                        <a href="">
                                          <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                        </a>
                                      </li>
                                      <li> 
                                        <a href="">
                                          <i class="fas fa-step-forward"></i>
                                        </a>
                                        <li>
                                          <a href="">
                                            <i class="fas fa-step-forward"></i>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      </div>   


                      <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                        <div style="height:350px;">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th width="5%">
                                  <img src="images/singer/6.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                                </th>
                                <td width="35%">
                                  <div style="line-height: 4px;margin-top:15px">
                                   <p>Dusk Till Down</p>
                                   <p>Views</p>
                                 </div>
                               </td>
                               
                               <td width="5%">
                                <div class="song-duration">
                                  <i class='fas fa-heart'></i>
                                </div>
                              </td>
                              <td width="5%">
                               <div class="popup" onclick="myFunction1()"><i class='fas fa-ellipsis-v'></i>
                                <div class="popuptext"  id="myPopup1">
                                  <ul style="list-style-type:none;">
                                    <li>
                                      <a href="">
                                        <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                      </a>
                                    </li>
                                    <li> 
                                      <a href="">
                                        <i class="fas fa-step-forward"></i>
                                      </a>
                                      <li>
                                        <a href="">
                                          <i class="fas fa-step-forward"></i>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th width="5%">
                                <img src="images/singer/2.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                              </th>
                              <td width="35%">
                                <div style="line-height: 4px;margin-top:15px">
                                 <p>Machayege</p>
                                 <p>Views</p>
                               </div>
                             </td>

                             <td width="5%">
                              <div class="song-duration">
                                <i class='fas fa-heart'></i>
                              </div>
                            </td>
                            <td width="5%">
                             <div class="popup" onclick="myFunction2()"><i class='fas fa-ellipsis-v'></i>
                              <div class="popuptext"  id="myPopup2">
                                <ul style="list-style-type:none;">
                                  <li>
                                    <a href="">
                                      <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                    </a>
                                  </li>
                                  <li> 
                                    <a href="">
                                      <i class="fas fa-step-forward"></i>
                                    </a>
                                    <li>
                                      <a href="">
                                        <i class="fas fa-step-forward"></i>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>

                            </td>
                          </tr>

                          <tr>
                            <th width="5%">
                              <img src="images/singer/3.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                            </th>
                            <td width="35%">
                              <div style="line-height: 4px;margin-top:15px">
                               <p>Rock On</p>
                               <p>Views</p>
                             </div>
                           </td>

                           <td width="5%">
                            <div class="song-duration">
                              <i class='fas fa-heart'></i>
                            </div>
                          </td>
                          <td width="5%">
                           <div class="popup" onclick="myFunction3()"><i class='fas fa-ellipsis-v'></i>
                            <div class="popuptext"  id="myPopup3">
                              <ul style="list-style-type:none;">
                                <li>
                                  <a href="">
                                    <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li> 
                                  <a href="">
                                    <i class="fas fa-step-forward"></i>
                                  </a>
                                  <li>
                                    <a href="">
                                      <i class="fas fa-step-forward"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <th width="5%">
                            <img src="images/singer/4.jpg" alt="" style="width:100px; height:100;border-radius: 10px;">
                          </th>
                          <td width="35%">
                            <div style="line-height: 4px;margin-top:15px">
                             <p>Milege Milege</p>
                             <p>Views</p>
                           </div>
                         </td>

                         <td width="5%">
                          <div class="song-duration">
                            <i class='fas fa-heart'></i>
                          </div>
                        </td>
                        <td width="5%">
                          <div class="popup" onclick="myFunction4()"><i class='fas fa-ellipsis-v'></i>
                            <div class="popuptext"  id="myPopup4">
                              <ul style="list-style-type:none;">
                                <li>
                                  <a href="">
                                    <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li> 
                                  <a href="">
                                    <i class="fas fa-step-forward"></i>
                                  </a>
                                  <li>
                                    <a href="">
                                      <i class="fas fa-step-forward"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </td>
                        </tr>



                      </tbody>
                    </table>
                  </div> 
                </div>

              </div>     
            </div>
            <div>
              <div>
                <div class="row">
                  <div class="col">
                    <div class="card">
                      <img class="card-img" src="images/singer/5.jpg" alt="Card image cap">
                    </div>
                  </div>
                  <div class="col">
                    <div class="details">
                      <div class="now-playing"></div>
                      <div class="track-art"></div>
                      <div class="track-name"><b>DJ Khalid</b></div>
                      <div class="track-artist">Views</div>
                    </div>
                    <div class="media-progress">
                      <div class="progress-bar-wrapper progress">
                        <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                      </div>
                      <div class="current-time">
                        00:00
                      </div>
                      <div class="total-duration">
                        00:00
                      </div>
                    </div>

                  </div>
                </div>

              </div>
                  <!-- <div style="margin-top:10px">
                      <div class="row">
                        <div class="col">
                          <div class="button button-lg">
                                  <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                                  <span class="sr-only">Ban</span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="button button-lg">
                                  <i class="fas fa-heart"></i>
                                  <span class="sr-only">Repeat Song</span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="button button-lg playpause-track" onclick="playpauseTrack()">
                                  <i class="fas fa-pause fa-lg" aria-hidden="true" aria-hidden="true"></i>
                                  <span class="sr-only">Pause</span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="button button-lg next-track" onclick="nextTrack()">
                                  <i class="fas fa-step-forward"></i>
                                  <span class="sr-only">Next Music</span>
                          </div>
                        </div>
                        
                        <div class="col">
                          <div class="button button-lg">
                                  <i class="fas fa-volume-up" aria-hidden="true"></i>
                                  <span class="sr-only">Volume Up</span>
                          </div>
                        </div>
                      </div>
                      
                    </div> -->
                    <!------------------------------test------------->
                    <div class="container-fluid mt-3">
                      <div class="d-flex justify-content-between">
                        <div class="p-2">
                          <div class="button button-lg">
                            <i class="fas fa-ban fa-sm" aria-hidden="true"></i>
                            <span class="sr-only">Ban</span>
                          </div>
                        </div>
                        <div class="container">
                          <div class="d-inline-flex">  
                            <div class="p-2">
                              <div class="button button-lg">
                                <i class="fas fa-heart"></i>
                                <span class="sr-only">Repeat Song</span>
                              </div>
                            </div>
                            <div class="p-2">
                              <div class="button button-lg playpause-track" onclick="playpauseTrack()">
                                <i class="fas fa-pause fa-lg" aria-hidden="true" aria-hidden="true"></i>
                                <span class="sr-only">Pause</span>
                              </div>
                            </div>
                            <div class="p-2">
                              <div class="button button-lg next-track" onclick="nextTrack()">
                                <i class="fas fa-step-forward"></i>
                                <span class="sr-only">Next Music</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="p-2">
                          <div class="button button-lg">
                            <i class="fas fa-volume-up" aria-hidden="true"></i>
                            <span class="sr-only">Volume Up</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--------------test----------------------------->
          </div>
      </div>


</main>
<script src="https://kit.fontawesome.com/7d35781f0a.js" crossorigin="anonymous"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<script type="text/javascript" src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $('.channel-img').click(function(){
        $("#album-list").hide();
        $("#song-list").show();
    });

    $('#custom-tabs-four-home-tab').click(function(){
        $("#album-list").show();
        $("#song-list").hide();
    });

    $('#custom-tabs-four-profile-tab').click(function(){
        $("#album-list").show();
        $("#song-list").hide();
    });

    $('#custom-tabs-four-messages-tab').click(function(){
        $("#album-list").show();
        $("#song-list").hide();
    });


// When the user clicks on div, open the popup
function myFunction1() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}

function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}

function myFunction3() {
  var popup = document.getElementById("myPopup3");
  popup.classList.toggle("show");
}

function myFunction4() {
  var popup = document.getElementById("myPopup4");
  popup.classList.toggle("show");
}

$(document).ready(function(){
  $( "#test" ).hover(function() {
   $("#img-modal").hide();
   $("#blank-modal").hide();
 });  
});



</script>
</body>
</html>

