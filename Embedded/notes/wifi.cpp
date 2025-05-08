#include "wifi.h"
#include <ESP8266WiFi.h>

// Define Wi-Fi credentials here
const char* ssid = "";        // Replace with your Wi-Fi SSID
const char* password = "";     // Replace with your Wi-Fi password

void setupWiFi() {
    Serial.println("\n[WiFi] Connecting to network...");
    WiFi.begin(ssid, password);  // Start Wi-Fi connection

    int attempts = 0;
    while (WiFi.status() != WL_CONNECTED && attempts < 20) {
        delay(1000);  
        Serial.print("."); 
        attempts++;
    }

    if (WiFi.status() == WL_CONNECTED) {
        Serial.println("\n[WiFi] Connected successfully!");
        Serial.print("[WiFi] IP Address: ");
        Serial.println(WiFi.localIP());  
    } else {
        Serial.println("\n[WiFi] Connection failed! Check credentials.");
    }
}

void maintainWiFiConnection() {
    if (WiFi.status() != WL_CONNECTED) {
        Serial.println("\n[WiFi] Lost connection! Reconnecting...");
        WiFi.disconnect();
        WiFi.begin(ssid, password);

        int attempts = 0;
        while (WiFi.status() != WL_CONNECTED && attempts < 10) {
            delay(1000);
            Serial.print("...");
            attempts++;
        }

        if (WiFi.status() == WL_CONNECTED) {
            Serial.println("\n[WiFi] Reconnected!");
        } else {
            Serial.println("\n[WiFi] Reconnection failed.");
        }
    }
}
