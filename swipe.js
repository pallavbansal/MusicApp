document.documentElement.style.setProperty('--animate-duration', '.3s');

// update on touch
$("#custom-tabs-four-home").swipe({
  swipeStatus:function(event, phase, direction, distance, duration, fingerCount) {    
   
    
    if(phase == 'move') {
      speed = '0ms';      
      if(direction == 'left') {
          console.log("Left Swipe");
   
          //$(".tab-pane").addClass('slide-in');
          document.getElementById("mySidenav").style.width = "0";      
          

      }
      else if(direction == 'right') {
        console.log("Right Swipe");

      }
    }
    else if (phase == 'end') {

    }
  },
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
 
    
    //$("#custom-tabs-four-profile").removeClass(" ");
    $("#custom-tabs-four-profile").removeClass("slideRight slideLeft  ");
    $("#custom-tabs-four-profile").addClass(" slideRight  ");
    document.getElementById('custom-tabs-four-profile-tab').click();


  },
//   tap:function(event, target) {
//    alert('Hat be');
//  },
  swipeRight:function(event, direction, distance, duration, fingerCount) {
    console.log("Right Swipe2");
  },
  // threshold: 50,
  // triggerOnTouchEnd: false,
   allowPageScroll: "vertical",
   //excludedElements: "button, input, select, textarea, .noSwipe"
});


$("#custom-tabs-four-profile").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingerCount) {    
     
      
      if(phase == 'move') {
        speed = '0ms';      
        if(direction == 'left') {
            console.log("Left Swipe");
     
            //$(".tab-pane").addClass('slide-in');
            
            document.getElementById("mySidenav").style.width = "0";
  
        }
        else if(direction == 'right') {
          console.log("Right Swipe");
  
        }
      }
      else if (phase == 'end') {
  
      }
    },
    swipeLeft:function(event, direction, distance, duration, fingerCount) {
   
      
      $("#custom-tabs-four-home").removeClass("slideLeft slideRight  ");
      $("#custom-tabs-four-messages").addClass(" slideRight  ");
      document.getElementById('custom-tabs-four-messages-tab').click();
  
    },
    swipeRight:function(event, direction, distance, duration, fingerCount) {
        
       // $("#custom-tabs-four-home").removeClass(" ");
        $("#custom-tabs-four-home").removeClass("slideLeft slideRight  ");
        $("#custom-tabs-four-home").addClass("slideLeft  ");
        document.getElementById('custom-tabs-four-home-tab').click();
    },
    // threshold: 50,
    // triggerOnTouchEnd: false,
    allowPageScroll: "vertical",
    //excludedElements: "button, input, select, textarea, .noSwipe"
  });
  
  

  $("#custom-tabs-four-messages").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingerCount) {    
     
      
      if(phase == 'move') {
        speed = '0ms';      
        if(direction == 'left') {
            console.log("Left Swipe");
     
            //$(".tab-pane").addClass('slide-in');
            document.getElementById("mySidenav").style.width = "0";
            
            
  
        }
        else if(direction == 'right') {
          console.log("Right Swipe");
  
        }
      }
      else if (phase == 'end') {
  
      }
    },
    swipeLeft:function(event, direction, distance, duration, fingerCount) {
   
     
  
    },
    swipeRight:function(event, direction, distance, duration, fingerCount) {
        
        //$("#custom-tabs-four-profile").removeClass(" ");
        $("#custom-tabs-four-profile").removeClass("slideLeft slideRight  ");
        $("#custom-tabs-four-profile").addClass(" slideLeft  ");
        document.getElementById('custom-tabs-four-profile-tab').click();
        
    },
    // threshold: 50,
    // triggerOnTouchEnd: false,
     allowPageScroll: "vertical",
     //excludedElements: "button, input, select, textarea, .noSwipe"
  });