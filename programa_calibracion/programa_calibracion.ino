// modulo de medicion de pH Arduino

// configuracion del pin analogico
const int pinPo = A0;

void setup() {
  // comunicacion 9600 baudios
  Serial.begin(9600);
}

void loop() {
  // creacion de variables auxiliares
  int datos[10];
  int orden;
  unsigned long int sumapH = 0; 
  // carga 10 muestras durante 10ms y almacena en pole
  for (int i = 0; i < 10; i++) {
    datos[i] = analogRead(pinPo);
    delay(10);
  }
  // ordena los valores de pole por tamaño
  for (int i = 0; i < 9; i++) {
    for (int j = i + 1; j < 10; j++) {
      if (datos[i] > datos[j]) {
        orden = datos[i];
        datos[i] = datos[j];
        datos[j] = orden;
      }
    }
  }
  // almacena los resultados del 2° al 8°
  // calcula el promedio
  // omite dos miembros de la matriz al principio 
  // y al final para una mejor presicion
  for (int i = 2; i < 8; i++) {
    sumapH += datos[i];
  }
  // calculo del valor de pH promedio
  // medicion y conversion a una gama de 0-14 pH
  float prumerPH = (float)sumapH * 5.0 / 1024 / 6;
  float valorPH = -5.70 * prumerPH + 21.34;
  //
  //
  float fo=(float)sumapH/6;
  //float f1=map(fo,0,1023,0,255);
  float f1=map(fo,263,767,0,255);
  // muestra resultado por monitor serie
  //Serial.print("Valor de pH: ");
  Serial.print(valorPH);
  Serial.println(",");
  //Serial.print("Valor en mV: ");
  //Serial.println(fo);
  //Serial.print("rango 0 - 255: ");
  //Serial.println(f1);
  //
  // pausa de 900ms antes de la nueva medicion, total 1s
  delay(900);
}
