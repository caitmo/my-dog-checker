#Adapted from code in reference number 11
import smtplib

sender = "yayaandlily@gmail.com"
password = "*******" #Password removed for security
receiver = "caitmorrison@hotmail.com"

message = """\
Subject: Bark Detected   

We barked - have a look at us.
http://mydogchecker.com
"""


def send_mail_message():
    print("Sending now")
    server = smtplib.SMTP('imap.gmail.com', 587)
    server.ehlo()
    server.starttls()
    server.login(sender, password)
    server.sendmail(sender, receiver, message)
    server.quit()
    print("Sent email")
