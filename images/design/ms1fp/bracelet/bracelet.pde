//http://www.berio.alg-a.org/Controlling-a-servo-motor-with

import processing.serial.*;
import ddf.minim.*;
import ddf.minim.signals.*;
import ddf.minim.analysis.*;
import ddf.minim.effects.*;

Minim minim;
AudioInput input;
FFT fft;
Serial myPort;
float sound; 

void setup(){
  size(500, 300);
  rectMode(CENTER);
  println(Serial.list());
  myPort = new Serial(this, Serial.list()[0], 9600);

  minim = new Minim(this);
  input = minim.getLineIn(Minim.MONO, 512); 
   sound = 0; 
}

void draw(){
  sound = input.left.get(50);
  if(sound > .001){
    fill(255, 0, 0);
    myPort.write(1);  // send 1 to the serial port
  }
  else if(mousePressed){
    fill(0, 0, 255);
    if(mouseX > 210 && mouseX < 290){
      myPort.write(3);
    }
    else if(mouseX > 85 && mouseX < 115){
      myPort.write(5);
    }
    else if(mouseX > 370 && mouseX < 430){
      myPort.write(4);
    }
  }
  
    else{   
       fill(0); 
       myPort.write(2);  // send 2 to the serial port    
    }
  rect(250, height/2, 80, 30);
  ellipse(100, height/2, 30, 30); 
  ellipse(400, height/2, 60, 60);  
 }  


