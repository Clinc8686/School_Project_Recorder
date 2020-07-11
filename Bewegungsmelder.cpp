#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <time.h>
#include <signal.h>
#include <wiringPi.h>
#include <fstream>

using namespace std;

/* Sensor auf GPIO 4, Pin 7, WiringPi 7 */
#define SENSOR 7

unsigned int state = 0;
unsigned int data  = 0;

int main(int argc, char **argv)
  {
int pid = getpid();
ofstream examplefile ("PID.txt");
examplefile << pid;
examplefile.close();

  /* Initialisierung der Bibliothek */
  if (wiringPiSetup() == -1)
    {
    printf("Please run this as root\n");
    return EXIT_FAILURE;
    }

  /* Sensor als Input definieren */
  pinMode(SENSOR, INPUT);

  while((data = digitalRead(SENSOR)) != 0)
    {
    /* Pause 0,1 Sekunde */
    usleep(100000);
    }

  printf("Bereit...\n");
  while (1)
    {
    data = digitalRead(SENSOR);
    if(data == 1 && state == 0)
      {
      printf("Bewegung erkannt - %d\n");
      state = 1;
	system("./recordmove.sh &");
      }
    else if (data == 0 && state == 1)
      {
      printf("Bereit...\n");
      state = 0;
      }
    /* Pause 0,1 Sekunde */
    usleep(100000);
    }
  return EXIT_SUCCESS;
  }

