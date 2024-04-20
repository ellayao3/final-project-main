-- CREATE table 'reviews'
CREATE TABLE `reviews` (
    `review_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    `star` float NOT NULL,
    `review_message` varchar(1000) NOT NULL,
    PRIMARY KEY (`review_id`)
);

INSERT INTO `reviews` (`name`, `star`, `review_message`)
VALUES ('Melanie Q.', 5.0, 'Let me start off by saying this is the BEST veterinary clinic ever!! I made 3 appointments with other clinics for all of them to be reshuffled and rescheduled due to scheduling conflicts. Called Yao and was able to get an appointment the same day!! The techs and DR. Made us feel right at home! Will will be going here from here on out! Thanks!!');

INSERT INTO `reviews` (`name`, `star`, `review_message`)
VALUES ('Xue W.', 5.0, 'I swear these people should have a straight ticket to heaven for what they do. I have a huge amount of respect for people that can stomach being able to take the best of care for something as helpless as an animal and these guys are the best. Everyone from the front desk to Dr. Yao were incredibly friendly and accommodating. They explained everything in detail and put the needs of my cat over anything else. Came in because my cat was limping, they were able to give me an estimate before I committed to treatment, to which I found pretty standard as far as elite veterinarians are concerned. Made an appointment the day before and had 0 wait time when coming in today. Will be using them from here on out and highly recommend to anyone looking for a vet in Miami.');


-- create table for appointments --
CREATE TABLE `appointments` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `number` VARCHAR(20) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `date` DATE NOT NULL
);
