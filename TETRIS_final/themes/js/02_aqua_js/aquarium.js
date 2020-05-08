
 /*     Pour des raisons de securite d'information,ce code qui joue le role d'une animation aquarium est obtenue
        du siteweb en bas avec notre principales modification

        --- VISIT : http://sule-m2010.blogspot.co.id/2016/07/animated-aquarium.html -- */



/* ---------------- FISH "CLASS" START -------------- */
var FOLLOW_DISTANCE = 100;
var Fish = function(id) {
 this.id = id;
 this.entourage = [];
 // dx/yx is current speed, ox/oy is the previous one
 this.ox = this.dx = Math.random() - 0.5;
 this.oy = this.dy = Math.random() - 0.5;
 this.x = canvas.width * Math.random();
 this.y = canvas.height * Math.random();
 // A couple of helper functions, the names should describe their purpose
 Fish.prototype.angleToClosestFish = function(otherFish) {
  otherFish = otherFish == null ? this.following : otherFish;
  if (otherFish) {
   return Math.atan2(otherFish.y - this.y, otherFish.x - this.x);
  } else {
   return Number.MAX_VALUE;
  }
 }
 Fish.prototype.angleFromFishDirectionToClosestFish = function(otherFish) {
  otherFish = otherFish == null ? this.following : otherFish;
  if (otherFish) {
   return Math.abs(deltaAngle(this.angle, this.angleToClosestFish(otherFish)));
  } else {
   return Number.MAX_VALUE;
  }
 }
 Fish.prototype.angleDirectionDifference = function(otherFish) {
  otherFish = otherFish == null ? this.following : otherFish;

  if (otherFish) {
   Math.abs(deltaAngle(this.angle, otherFish.angle));
  } else {
   return Number.MAX_VALUE;
  }
 }
 // Update the fish "physics"
 Fish.prototype.calc = function() {
  this.ox = this.dx;
  this.oy = this.dy;
  var MAX_SPEED = 1.1;
  var maxSpeed = MAX_SPEED;
  //Do I need to find another fish buddy?
  if (this.following == null || py(this.x - this.following.x, this.y - this.following.y) > FOLLOW_DISTANCE) {
   if (this.following != null) {
    if (keyDown) affinityLine(this.following, this, "white");
    this.following.entourage.splice(this.following.entourage.indexOf(this));
   }
   this.following = null;
   //attract closer to other fish - find closest
   var closestDistance = Number.MAX_VALUE;
   var closestFish = null;
   for (var i = 0; i < fishes.length; i++) {
    var fish = fishes[i];
    if (fish != this) {
     var distance = py(this.x - fish.x, this.y - fish.y);
     // Is it closer, within the max distance and within the sector that the fish can see?
     if (distance < closestDistance && fish.following != this && distance < FOLLOW_DISTANCE && this.angleFromFishDirectionToClosestFish(fish) < Math.PI * 0.25) {
      closestDistance = distance;
      closestFish = fish;
     }
    }
   }
   if (closestFish != null) {
    this.following = closestFish;
    closestFish.entourage.push(this);
   }
  }
  // Fish is following another
  if (this.following != null) {
   // Go closer to other fish
   this.followingDistance = py(this.x - this.following.x, this.y - this.following.y);
   this.distanceFactor = 1 - this.followingDistance / FOLLOW_DISTANCE;
   // If going head on, just break a little before following
   if (this.angleDirectionDifference() > (Math.PI * 0.9) && // On colliding angle?
    this.angleFromFishDirectionToClosestFish() < (Math.PI * 0.2)) { // In colliding sector?
    this.dx += this.following.x * 0.1;
    this.dy += this.following.y * 0.1;
    if (keyDown) affinityLine(this.following, this, "yellow");
   } else if (this.followingDistance > FOLLOW_DISTANCE * 0.3) { // Dont go closer if close
    this.dx += Math.cos(this.angleToClosestFish()) * (0.05 * this.distanceFactor);
    this.dy += Math.sin(this.angleToClosestFish()) * (0.05 * this.distanceFactor);
   }
   if (keyDown) affinityLine(this.following, this, "red");
  }
  // Go closer to center, crashing into the canvas walls is just silly!
  if (this.x < canvas.width * .1 || this.x > canvas.width * .9 || this.y < canvas.height * .2 || this.y > canvas.height * .8) {
   this.dx += (canvas.width / 2 - this.x) / 5000;
   this.dy += (canvas.height / 2 - this.y) / 5000;
  }
  // Poor little fishies are scared of your cursor
  if (py(this.x - cursor.x, this.y - cursor.y) < FOLLOW_DISTANCE * 0.75) {
   this.dx -= (cursor.x - this.x) / 500;
   this.dy -= (cursor.y - this.y) / 500;
   maxSpeed = 4;
   if (keyDown) affinityLine(cursor, this, "green");
  }
  // If following fish, try avoid going close to your siblings
  if (this.following != null) {
   for (var i = 0; i < this.following.entourage.length; i++) {
    var siblingFish = this.following.entourage[i];
    if (siblingFish !== this) {
     if (py(this.x - siblingFish.x, this.y - siblingFish.y) < FOLLOW_DISTANCE * 0.2) {
      if (keyDown) affinityLine(siblingFish, this, "yellow");
      this.dx -= (siblingFish.x - this.x) / 1000;
      this.dy -= (siblingFish.y - this.y) / 1000;
     }
    }
   }
  }
  // Calculate heading from new speed
  this.angle = Math.atan2(this.dy, this.dx);
  // Grab the speed from the vectors, and normalize it
  var speed = Math.max(0.1, Math.min(maxSpeed, py(this.dx, this.dy)));
  // Recreate speed vector from recombining angle of direction with normalized speed
  this.dx = Math.cos(this.angle) * (speed + speedBoost);
  this.dy = Math.sin(this.angle) * (speed + speedBoost);
  // Fish like to move it, move it!
  this.x += this.dx;
  this.y += this.dy;
 }
}
/* ---------------------- MAIN START -------------------- */
var canvas = document.getElementById('Fish flocking simulation ');
var context = canvas.getContext('2d');
var fishes = [];
var speedBoostCountdown = 200,
 speedBoost = 0,
 SPEED_BOOST = 2;
var fishflockingsimulation = new Image()
fishflockingsimulation.onload = function() {
 update();
};
fishflockingsimulation.src = "http://2.bp.blogspot.com/-uWu5O2SUk3A/WNn7p4Q_b5I/AAAAAAAAdo8/YLPQljHdeDYZLqXnEpvIG5iJgfjmz_TbgCK4B/s1600/Ikan-kecil-M2010.png";
//Draw Circle
function draw(f) {
 var r = f.angle + Math.PI;
 context.translate(f.x, f.y);
 context.rotate(r);
 var w = 20;
 var acc = py(f.dx - f.ox, f.dy - f.oy) / 0.05;
 // If a fish does a "flip", make it less wide
 if (acc > 1) {
  w = 10 + 10 / acc;
 }
 context.drawImage(fishflockingsimulation, 0, 0, w, 6);
 context.rotate(-r);
 context.translate(-f.x, -f.y);
}
// Pythagoras shortcut
function py(a, b) {
 return Math.sqrt(a * a + b * b);
}
//------------ USER INPUT START -------------
var cursor = {
 x: 0,
 y: 0
};
var cursorDown = false,
 keyDown = false;
document.onmousemove = function(e) {
 cursor.x = e.pageX - (window.innerWidth / 2 - canvas.width / 2);
 cursor.y = e.pageY - (window.innerHeight / 2 - canvas.height / 2);
}
document.onmouseout = function(e) { //Out of screen is not a valid pos
 cursor.y = cursor.x = Number.MAX_VALUE;
}
document.onmousedown = function() {
 activateSpeedBoost();
 cursorDown = true;
}
document.onmouseup = function() {
 cursorDown = false;
}
document.onkeydown = function() {
 keyDown = true;
}
document.onkeyup = function() {
  keyDown = false;
 }
 //------------ USER INPUT STOP -------------
function deltaAngle(f, o) { //Find the shortest angle between two
 var r = f - o;
 return Math.atan2(Math.sin(r), Math.cos(r));
}
function affinityLine(f, o, c) { //Draw a line with pretty gradient
 var grad = context.createLinearGradient(f.x, f.y, o.x, o.y);
 grad.addColorStop(0, c);
 grad.addColorStop(1, "black");
 context.strokeStyle = grad;
 context.beginPath();
 context.moveTo(f.x, f.y);
 context.lineTo(o.x, o.y);
 context.stroke();
}
function activateSpeedBoost() {
 speedBoostCountdown = 400 + Math.round(400 * Math.random());
 speedBoost = SPEED_BOOST;
}
//Update and draw all of them
function update() {
  if (fishes.length < 500) {
   fishes.push(new Fish(fishes.length));
  }
  if (!cursorDown) {
   //clear the canvas
   canvas.width = canvas.width; //Try commenting this line :-)
   //Update and draw fish
   for (var i = 0; i < fishes.length; i++) {
    var fish = fishes[i];
    fish.calc();
    draw(fish);
   }
  }
  speedBoostCountdown--;
  if (speedBoostCountdown < 0) {
   activateSpeedBoost();
  }
  if (speedBoost > 0) {
   speedBoost -= SPEED_BOOST / 80; //Reduce speed bost fast!
  } else {
   speedBoost = 0;
  }
  requestAnimationFrame(update);
 }
</script>

<script>
/* ---------------------- gelembung ----------------------- */
var colours=new Array("#FF9900", "#FF9900", "#FF9900", "#FF9900", "#FF9900"); // colours for top, right, bottom and left borders and background of bubbles
    var bubbles=100; // maximum number of bubbles on screen
    var x=ox=400;
    var y=oy=300;
    var swide=800;
    var shigh=600;
    var sleft=sdown=0;
    var bubb=new Array();
    var bubbx=new Array();
    var bubby=new Array();
    var bubbs=new Array();
    window.onload=function() { if (document.getElementById) {
    var rats, div;
    for (var i=0; i<bubbles; i++) {
    rats=createDiv("3px", "3px");
    rats.style.visibility="hidden";
    div=createDiv("auto", "auto");
    rats.appendChild(div);
    div=div.style;
    div.top="1px";
    div.left="0px";
    div.bottom="1px";
    div.right="0px";
    div.borderLeft="1px solid "+colours[3];
    div.borderRight="1px solid "+colours[1];
    div=createDiv("auto", "auto");
    rats.appendChild(div);
    div=div.style;
    div.top="0px";
    div.left="1px";
    div.right="1px";
    div.bottom="0px"
    div.borderTop="1px solid "+colours[0];
    div.borderBottom="1px solid "+colours[2];
    div=createDiv("auto", "auto");
    rats.appendChild(div);
    div=div.style;
    div.left="1px";
    div.right="1px";
    div.bottom="1px";
    div.top="1px";
    div.backgroundColor=colours[4];
    div.opacity=0.5;
    if (document.all) div.filter="alpha(opacity=50)";
    document.body.appendChild(rats);
    bubb[i]=rats.style;
    }
    set_scroll();
    set_width();
    bubble();
    }}
    function bubble() {
    var c;
    if (x!=ox || y!=oy) {
    ox=x;
    oy=y;
    for (c=0; c<bubbles; c++) if (!bubby[c]) {
    bubb[c].left=(bubbx[c]=x)+"px";
    bubb[c].top=(bubby[c]=y)+"px";
    bubb[c].width="3px";
    bubb[c].height="3px"
    bubb[c].visibility="visible";
    bubbs[c]=3;
    break;
    }
    }
    for (c=0; c<bubbles; c++) if (bubby[c]) update_bubb(c);
    setTimeout("bubble()", 40);
    }
    function update_bubb(i) {
    if (bubby[i]) {
    bubby[i]-=bubbs[i]/2+i%2;
    bubbx[i]+=(i%5-2)/5;
    if (bubby[i]>sdown && bubbx[i]>0) {
    if (Math.random()<bubbs[i]/shigh*2 && bubbs[i]++<8) {
    bubb[i].width=bubbs[i]+"px";
    bubb[i].height=bubbs[i]+"px";
    }
    bubb[i].top=bubby[i]+"px";
    bubb[i].left=bubbx[i]+"px";
    }
    else {
    bubb[i].visibility="hidden";
    bubby[i]=0;
    return;
    }
    }
    }
    document.onmousemove=mouse;
    function mouse(e) {
    set_scroll();
    y=(e)?e.pageY:event.y+sleft;
    x=(e)?e.pageX:event.x+sdown; }
    window.onresize=set_width;
    function set_width() {
    if (document.documentElement && document.documentElement.clientWidth) {
    swide=document.documentElement.clientWidth;
    shigh=document.documentElement.clientHeight;
    }
    else if (typeof(self.innerHeight)=="number") {
    swide=self.innerWidth;
    shigh=self.innerHeight;
    }
    else if (document.body.clientWidth) {
    swide=document.body.clientWidth;
    shigh=document.body.clientHeight;
    }
    else {
    swide=800;
    shigh=600;
    }
    }
    window.onscroll=set_scroll;
    function set_scroll() {
    if (typeof(self.pageYOffset)=="number") {
    sdown=self.pageYOffset;
    sleft=self.pageXOffset;
    }
    else if (document.body.scrollTop || document.body.scrollLeft) {
    sdown=document.body.scrollTop;
    sleft=document.body.scrollLeft;
    }
    else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    sleft=document.documentElement.scrollLeft;
    sdown=document.documentElement.scrollTop;
    }
    else {
    sdown=0;
    sleft=0;
    }
    }
    function createDiv(height, width) {
    var div=document.createElement("div");
    div.style.position="absolute";
    div.style.height=height;
    div.style.width=width;
    div.style.overflow="hidden";
    return (div);
    }