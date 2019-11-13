var context, controller, rectangle, loop;

context = document.querySelector("canvas").getContext("2d");

context.canvas.height = 280;
context.canvas.width = 900;

rectangle = {

  height:32,
  jumping:true,
  landed:true,
  width:32,
  x:450, // center of the canvas
  x_velocity:0,
  y:228,
  y_velocity:0

};

controller = {

  left:false,
  right:false,
  up:false,
  keyListener:function(event) {

    var key_state = (event.type == "keydown")?true:false;

    switch(event.keyCode) {

      case 37:// left key
        controller.left = key_state;
      break;
      case 38:// up key
        controller.up = key_state;
      break;
      case 39:// right key
        controller.right = key_state;
      break;

    }

  }

};

loop = function() {

  if (controller.up && rectangle.jumping == false) {

    rectangle.y_velocity -= 30;
    rectangle.jumping = true;
    rectangle.landed=false;

  }

  if (controller.left) {

    rectangle.x_velocity -= 0.5;

  }

  if (controller.right) {

    rectangle.x_velocity += 0.5;

  }
//creates physics
  rectangle.y_velocity += 1.5;// gravity
  rectangle.x += rectangle.x_velocity;
  rectangle.y += rectangle.y_velocity;
  rectangle.x_velocity *= 0.9;// friction
  rectangle.y_velocity *= 0.9;// friction

  // if rectangle is falling below floor line
  if (rectangle.y > 280 - 20 - 32) {

    rectangle.jumping = false;
    rectangle.y = 280 - 20 - 32;
    rectangle.y_velocity = 0;
    rectangle.landed=true;

  }

  // if rectangle is going off the left of the screen
  if (rectangle.x < -32) {

    rectangle.x = 900;

  } else if (rectangle.x > 900) {// if rectangle goes past right boundary

    rectangle.x = -32;

  }
  //collision detection for options;
  //play
  if(rectangle.y==199.5&&(rectangle.x>90&&rectangle.x<150))
  {
    setTimeout(transiti,1000,0);
  }
  //community
  if(rectangle.y==199.5&&(rectangle.x>190&&rectangle.x<340))
  {
    setTimeout(transiti,1000,1);
  }
  //login
  if(rectangle.y==199.5&&(rectangle.x>400&&rectangle.x<500))
  {
    setTimeout(transiti,1000,2);
  }
  //about
  if(rectangle.y==199.5&&(rectangle.x>530&&rectangle.x<650))
  {
    setTimeout(transiti,1000,3);
  }
  //contact
  if(rectangle.y==199.5&&(rectangle.x>700&&rectangle.x<820))
  {
    setTimeout(transiti,1000,4);
  }

  context.fillStyle = "black";
  context.fillRect(0, 0, 900, 280);// x, y, width, height
  context.fillStyle = "#ff0000";// hex for red
  context.beginPath();
  context.rect(rectangle.x, rectangle.y, rectangle.width, rectangle.height);
  context.fill();
  context.strokeStyle = "#202830";
  context.lineWidth = 4;
  context.beginPath();
  context.moveTo(0, 260);
  context.lineTo(900, 260);
  context.stroke();
  context.font="26px Bungee Shade";
  context.fillStyle="white";
  context.fillText("PLAY",90,130);
  context.fillText("COMMUNITY",190,130);
  context.fillText("LOGIN",400,130);
  context.fillText("ABOUT US",530,130);
  context.fillText("CONTACT",700,130);

  // call update when the browser is ready to draw again
  window.requestAnimationFrame(loop);

};

window.addEventListener("keydown", controller.keyListener)
window.addEventListener("keyup", controller.keyListener);
window.requestAnimationFrame(loop);