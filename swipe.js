document.documentElement.style.setProperty('--animate-duration', '.3s');

// update on touch
$("#custom-tabs-four-home").swipe({
  swipeStatus:function(event, phase, direction, distance, duration, fingerCount) {    
   
    
    if(phase == 'move') {
      speed = '0ms';      
      if(direction == 'left') {
          console.log("Left Swipe");
   
          //$(".tab-pane").addClass('slide-in');
          
          

      }
      else if(direction == 'right') {
        console.log("Right Swipe");

      }
    }
    else if (phase == 'end') {

    }
  },
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
 
    document.getElementById('custom-tabs-four-profile-tab').click();
    $("#custom-tabs-four-profile").removeClass("animate_animated animate_slideInRight");
    $("#custom-tabs-four-profile").removeClass("animate_animated animate_slideInLeft");
    $("#custom-tabs-four-profile").addClass("animate_animated animate_slideInRight");

  },
  swipeRight:function(event, direction, distance, duration, fingerCount) {
    console.log("Right Swipe2");
  },
  threshold: 50,
  triggerOnTouchEnd: false,
  allowPageScroll: "vertical",
  excludedElements: "button, input, select, textarea, .noSwipe"
});


$("#custom-tabs-four-profile").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingerCount) {    
     
      
      if(phase == 'move') {
        speed = '0ms';      
        if(direction == 'left') {
            console.log("Left Swipe");
     
            //$(".tab-pane").addClass('slide-in');
            
            
  
        }
        else if(direction == 'right') {
          console.log("Right Swipe");
  
        }
      }
      else if (phase == 'end') {
  
      }
    },
    swipeLeft:function(event, direction, distance, duration, fingerCount) {
   
      document.getElementById('custom-tabs-four-messages-tab').click();
      $("#custom-tabs-four-messages").addClass("animate_animated animate_slideInRight");
  
    },
    swipeRight:function(event, direction, distance, duration, fingerCount) {
        document.getElementById('custom-tabs-four-home-tab').click();
        $("#custom-tabs-four-home").removeClass("animate_animated animate_slideInRight");
        $("#custom-tabs-four-home").removeClass("animate_animated animate_slideInLeft");
        $("#custom-tabs-four-home").addClass("animate_animated animate_slideInLeft");
    },
    threshold: 50,
    triggerOnTouchEnd: false,
    allowPageScroll: "vertical",
    excludedElements: "button, input, select, textarea, .noSwipe"
  });
  

  $("#custom-tabs-four-messages").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingerCount) {    
     
      
      if(phase == 'move') {
        speed = '0ms';      
        if(direction == 'left') {
            console.log("Left Swipe");
     
            //$(".tab-pane").addClass('slide-in');
            
            
  
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
        document.getElementById('custom-tabs-four-profile-tab').click();
        $("#custom-tabs-four-profile").removeClass("animate_animated animate_slideInRight");
        $("#custom-tabs-four-profile").removeClass("animate_animated animate_slideInLeft");
        $("#custom-tabs-four-profile").addClass("animate_animated animate_slideInLeft");
        
    },
    threshold: 50,
    triggerOnTouchEnd: false,
    allowPageScroll: "vertical",
    excludedElements: "button, input, select, textarea, .noSwipe"
  });