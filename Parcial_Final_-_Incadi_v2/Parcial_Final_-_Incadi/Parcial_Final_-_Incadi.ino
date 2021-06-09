#include <ArduinoJson.h>

void setup() {
  Serial.begin(9600);                     //Se inicia la comunicación serial
   while (!Serial) {
    // wait serial port initialization
  }

  StaticJsonBuffer<200> jsonBuffer;

  JsonObject& json = jsonBuffer.createObject();
  json["Temperatura"] = 20;
  json["Humedad"] = 50;

  json.printTo(Serial);
  // This prints:
  // {"Temperatura":20,"Humedad":50}

 

  json.prettyPrintTo(Serial);
  // Imprimirá
  // {
  //   "Temperatura":20,
  //   "Humedad":50
  // }

   Serial.println("Arduino");
  
}


void loop() {
}

  
