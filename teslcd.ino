#include <LiquidCrystal.h>
/*
- lcd rs pin ke digital pin 12
- lcd enable pin ke digital pin 11
- lcd d4 pin ke digital pin 5
- lcd d5 pin ke digital pin 4
- lcd d6 pin ke digital pin 3
- lcd d7 pin ke digital pin 2

*/
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);

void setup() {
    lcd.begin(16, 2);
}

void loop() {
  int i;
  
  lcd.setCursor(0, 0);
  lcd.print("HELLO, THERE");
  
}
