#include <Servo.h> 
 
Servo myservo;  // create servo object to control a servo 
int incomingByte = 0;
int counter = 0;

void setup() {
  myservo.attach(9);  
  Serial.begin(9600);
} 
 
void loop() {                                
   
    incomingByte = Serial.read();
    
    if(incomingByte == 1){  // 1 = value that is comming from processing  
      myservo.write(79);
      counter++;
      delay(50);
      myservo.write(90);
    }
    
    else if(incomingByte == 3){  
      for(int i = 0; i<counter; i++){
        myservo.write(94);
        delay(70);
        myservo.write(90);
      }
      counter = 0;
    }
    
    else if(incomingByte == 4){
      myservo.write(94);
      delay(80);
      myservo.write(90);
    }
    
    else if(incomingByte == 5){
      myservo.write(79);
      delay(70);
      myservo.write(90);
    }

//    else if(incomingByte == 2){  // 2 = value that is comming from processing
      myservo.write(90);
//    } 
} 
