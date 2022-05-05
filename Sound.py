#Adapted from code in Reference number 10
import RPi.GPIO as GPIO
import time
import send_mail_message

channel = 17
GPIO.setmode(GPIO.BCM)
GPIO.setup(channel, GPIO.IN)


def callback(channel):

    if GPIO.input(channel):
        print("Sound detected!")
        send_mail_message()


GPIO.add_event_detect(channel, GPIO.RISING, bouncetime=600000)
GPIO.add_event_callback(channel, callback)

while True:
    time.sleep(1)
