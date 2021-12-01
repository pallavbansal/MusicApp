<!DOCTYPE html>
<html >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="centerDiv">
        <div class="container">
          <div class="row">
            <img src="images/logo1.png" alt="" style="width:100px; height:70;padding: 5px;float: left;">
            <div class="ml-auto">
              <i class="fa fa-home icon"></i>
              <i class="fa fa-question icon"></i>
            </div>
          </div>
          
          <br><br>
          <form>
            <div class="input-container">
              <label for="your_name"><i class="fa fa-user icon"></i></i></label>
              <input type="text" required="" placeholder="User Name" class="input"/>
            </div>
            <div class="input-container">
              <label for="your_name"><i class="fa fa-lock icon"></i></label>
              <input type="mail" required=""  placeholder="Password" class="input"/>
            </div>

            <h4 style="color:#e05131; font-family: fantasy;">Choose Device</h4>
            <div class="input-container">
              <input type="mail" required=""  placeholder="Password" class="input-field" value="Aman"/>
              <button class="btn btn-secondary input-btn">Offline</button>
            </div>

            <div class="input-container">
              <input type="text" required="" placeholder="User Name" class="input-field" value="Raj"/>
              <button class="btn btn-primary input-btn">Online</button>
            </div>
            <div class="input-container">
             <input type="mail" required=""  placeholder="Password" class="input-field" value="Sumit"/>
             <button class="btn btn-secondary input-btn">Offline</button>
            </div>

            <div class="input-container">
              <input type="text" required="" placeholder="User Name" class="input-field" value="Lokesh"/>
              <button class="btn btn-primary input-btn">Online</button>
            </div>
            <div class="col-md-12" style="text-align:center;font-weight: bold;">
              <span >Offline Devices</span>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit" style="background-color: #e05131;color:white;border-radius:10px">Login</button>
            </div>
          </form>

        </div>
  </div>
</body>
</html>
