#include <ESP8266WiFi.h>
#include <Servo.h>
#include <ESP8266WebServer.h>

// Define button and servo pins (as per your description)
#define buttonPin1 D3 // GPIO 0
#define buttonPin2 D2 // GPIO 4
#define servoPin1 D4  // GPIO 2
#define servoPin2 D5  // GPIO 14

Servo servo1;
Servo servo2;

ESP8266WebServer server(80);

const char* ssid = "Demo";
const char* password = "ejieflorida";

// const char* ssid = "OFFICE";
// const char* password = "bbbbbbbb";

// const char* ssid = "Yepes_Wifi_Wi-Fi5";
// const char* password = "haroldflint@@";

unsigned long lastDebounceTime1 = 0;
unsigned long lastDebounceTime2 = 0;
const unsigned long debounceDelay = 50;

bool controlServo(Servo& servo, int angle, int delayMs) {
    servo.write(angle);
    delay(delayMs);
    servo.write(0);
    return true;
}

void handleFeedNow() {
    String servoNumber = server.arg("servo");
    
    if (servoNumber == "1") {
        Serial.println("HTTP request: Activating Servo 1...");
        controlServo(servo1, 180, 2000);
        server.send(200, "text/plain", "Servo 1 triggered");
    } 
    else if (servoNumber == "2") {
        Serial.println("HTTP request: Activating Servo 2...");
        controlServo(servo2, 180, 2000);
        server.send(200, "text/plain", "Servo 2 triggered");
    } 
    else {
        server.send(400, "text/plain", "Invalid servo number");
    }
}

void setup() {  
    Serial.begin(115200);
    Serial.println("Initializing Wi-Fi...");

    WiFi.begin(ssid, password);
    while (WiFi.status() != WL_CONNECTED) {
        delay(500);
        Serial.print(".");
    }

    Serial.println("\nConnected to Wi-Fi");
    Serial.print("IP Address: ");
    Serial.println(WiFi.localIP());

    // Attach the servos
    servo1.attach(servoPin1);  // D4 / GPIO2
    servo2.attach(servoPin2);  // D5 / GPIO14

    // Initial swing: move to 180°, wait, then back to 0° 
    Serial.println("Running initial servo swing...");
    servo1.write(180);
    servo2.write(180);
    delay(2000);  // Hold the position for 2 seconds
    servo1.write(0);
    servo2.write(0);
    delay(1000);  // Wait before continuing

    // Set button pins
    pinMode(buttonPin1, INPUT_PULLUP);
    pinMode(buttonPin2, INPUT_PULLUP);

    // Web route
    server.on("/feednow", HTTP_GET, handleFeedNow);
    server.begin();
    Serial.println("Server started.");
}


void loop() {
    server.handleClient();

    int buttonState1 = digitalRead(buttonPin1);
    int buttonState2 = digitalRead(buttonPin2);

    if (buttonState1 == LOW && (millis() - lastDebounceTime1) > debounceDelay) {
        lastDebounceTime1 = millis();
        Serial.println("Button 1 pressed! Activating Servo 1...");
        if (controlServo(servo1, 180, 2000)) {
            Serial.println("Servo 1 is running...");
        } else {
            Serial.println("Servo 1 failed...");
        }
    }

    if (buttonState2 == LOW && (millis() - lastDebounceTime2) > debounceDelay) {
        lastDebounceTime2 = millis();
        Serial.println("Button 2 pressed! Activating Servo 2...");
        if (controlServo(servo2, 180, 2000)) {
            Serial.println("Servo 2 is running...");
        } else {
            Serial.println("Servo 2 failed...");
        }
    }

    delay(100);
}
