#Create Table
CREATE TABLE `quiz` (
  `question_Id` int(11) NOT NULL AUTO_INCREMENT,
  `question_Text` varchar(255) DEFAULT NULL,
  `question_Answers` varchar(255) DEFAULT NULL,
  `correct_Answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`question_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

# Add data to table
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (1,'How much did mobile companies pay for 3G license in the UK?','10 Billion,22 Billion,200 Billion','22 Billion');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (2,'Which is true?','AMPS is a second generation system,MIMO can used to increase the transmission/reception data rate,WiMAX is not IEEE standard','MIMO can used to increase the transmission/reception data rate');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (3,'What is the highest data rate achieved using 802.11n?','600 mbps,300 mbps,100 mbps','600 mbps');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (4,'Which modulation technique is the least suceptible to noise?','16 QAM,QPSK,BSPK','BSPK');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (5,'Which travels further WiMAX or Wi-Fi?','Wi-Fi,WiMAX','WiMAX');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (6,'Which class of WiMAX QoS has the highest priority?','Best Effort Services,Real-time Polling Services,Unsolicited Grant Services','Unsolicited Grant Services');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (7,'Which FEC coding provides the highest data rate?','1/2,3/4,5/6','5/6');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (8,'Which inter-frame spacing has the shortest time slot?','SIFS,DIFS,PIFS','SIFS');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (9,'What modulation techinque is used for Uplink?','OFDM,TDMA,SC-FDMA','SC-FDMA');
INSERT INTO quiz(question_Id,question_Text,question_Answers,correct_Answer) VALUES (10,'What is the role of the S-GW in LTE?','Responsible for IP address allocation for end user,Responsible for enforcing QoS,serves as the anchor for bearers as users move from eNode to eNodeB','serves as the anchor for bearers as users move from eNode to eNodeB');
