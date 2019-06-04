/*CREATE DATABASE containerdb;*/
use containerdb;


/************************CREATE TABLES************************/
DROP TABLE IF EXISTS tbl_page;
CREATE TABLE tbl_page (
PAGEID INT(5) NOT NULL AUTO_INCREMENT,
PAGENAME VARCHAR(60) NOT NULL,
PRIMARY KEY (PAGEID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_heading;
CREATE TABLE tbl_heading (
HEADINGID INT(10) NOT NULL AUTO_INCREMENT,
PAGEID INT(5) NOT NULL,
HEADINGDESCRIPTION VARCHAR(100) NOT NULL,
PRIMARY KEY (HEADINGID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_text;
CREATE TABLE tbl_text (
TEXTID INT(10) NOT NULL AUTO_INCREMENT,
PAGEID INT(5) NOT NULL,
TEXTDESCRIPTION VARCHAR(10000) NOT NULL,
PRIMARY KEY (TEXTID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_media;
CREATE TABLE tbl_media (
MEDIAID INT(10) NOT NULL AUTO_INCREMENT,
PAGEID INT(5) NOT NULL,
ISIMAGE BOOLEAN NOT NULL,
MEDIAPATH VARCHAR(5000) NOT NULL,
PRIMARY KEY (MEDIAID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_buttons;
CREATE TABLE tbl_buttons (
BUTTONID INT(10) NOT NULL AUTO_INCREMENT,
PAGEID INT(5) NOT NULL,
BUTTONDESCRIPTION VARCHAR(100) NOT NULL,
PRIMARY KEY (BUTTONID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_contact;
CREATE TABLE tbl_contact (
CONTACTID INT(10) NOT NULL AUTO_INCREMENT,
CLIENTID INT(10) NOT NULL,
SUBJECTID VARCHAR(100),
CONTACTDESCRIPTION VARCHAR(5000),
CONTACTDATE DATE NOT NULL,
PRIMARY KEY (CONTACTID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_client;
CREATE TABLE tbl_client (
CLIENTID INT(10) NOT NULL AUTO_INCREMENT,
CLIENTNAME VARCHAR(250),
COMPANYNAME VARCHAR(250),
CLIENTWEBSITE VARCHAR(250),
CLIENTEMAIL VARCHAR(250) NOT NULL,
CLIENTADRESS VARCHAR(250),
COUNTRYID VARCHAR(2),
CLIENTPHONENUMBER VARCHAR(50),
CLIENTNEW BOOLEAN DEFAULT 1,
CLIENTSUBSCRIBE BOOLEAN DEFAULT 0,
PRIMARY KEY (CLIENTID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_testimonial;
CREATE TABLE tbl_testimonial (
TESTIMONIALID INT (10) NOT NULL AUTO_INCREMENT,
PAGEID INT(5) DEFAULT 6,
ISIMAGE BOOLEAN DEFAULT 1,
MEDIAPATH VARCHAR(5000)  DEFAULT '/img/S2.jpg',
CLIENTID INT(10) NOT NULL,
TEXTDESCRIPTION VARCHAR(5000),
CREATEDDATE DATETIME NOT NULL DEFAULT NOW(),
APPROVED BOOLEAN DEFAULT 0,
PRIMARY KEY (TESTIMONIALID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_country;
CREATE TABLE tbl_country (
COUNTRYID VARCHAR(2) NOT NULL,
COUNTRYNAME VARCHAR(5000) NOT NULL,
PRIMARY KEY (COUNTRYID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_subject;
CREATE TABLE tbl_subject (
SUBJECTID INT(3) NOT NULL AUTO_INCREMENT,
SUBJECTDESCRIPTION VARCHAR(30) NOT NULL,
PRIMARY KEY (SUBJECTID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_news;
CREATE TABLE tbl_news (
NEWSID INT(10) NOT NULL AUTO_INCREMENT,
PAGEID INT(5) NOT NULL,
ISIMAGE BOOLEAN NOT NULL,
MEDIAPATH VARCHAR(5000) NOT NULL,
TITLE VARCHAR(250) NOT NULL,
SUBTITLE VARCHAR(250) NOT NULL,
TEXTDESCRIPTION VARCHAR(500) NOT NULL,
PRIMARY KEY (NEWSID)	
) AUTO_INCREMENT=1;

DROP TABLE IF EXISTS tbl_about;
CREATE TABLE tbl_about (
ABOUTID INT(10) NOT NULL AUTO_INCREMENT,
PAGEID INT(5) NOT NULL,
ISIMAGE BOOLEAN NOT NULL,
MEDIAPATH VARCHAR(5000) NOT NULL,
TITLE VARCHAR(250) NOT NULL,
SUBTITLE VARCHAR(250) NOT NULL,
TEXTDESCRIPTION VARCHAR(1000) NOT NULL,
PRIMARY KEY (ABOUTID)	
) AUTO_INCREMENT=1;



/************************INSERT TABLES************************/
/*PAGE TABLE*/
INSERT INTO tbl_page (PAGENAME) VALUES ('index');
INSERT INTO tbl_page (PAGENAME) VALUES ('servicedata');
INSERT INTO tbl_page (PAGENAME) VALUES ('servicebig');
INSERT INTO tbl_page (PAGENAME) VALUES ('servicebusiness');
INSERT INTO tbl_page (PAGENAME) VALUES ('servicesolution');
INSERT INTO tbl_page (PAGENAME) VALUES ('testimonials');
INSERT INTO tbl_page (PAGENAME) VALUES ('news');
INSERT INTO tbl_page (PAGENAME) VALUES ('contact');
INSERT INTO tbl_page (PAGENAME) VALUES ('about');
INSERT INTO tbl_page (PAGENAME) VALUES ('policy');


/*HEADING TABLE*/
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (1, 'Welcome to Neuron');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (2, 'Data Architecture');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (3, 'Big Data');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (4, 'AI for Business');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (5, 'Solution Integration');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (6, 'What is your Neuron Story?');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (6, 'The Satisfied Customers Testimonials');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (7, 'Subscribe');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (7, 'News');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (8, 'Contact');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (9, 'About');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (9, 'Team');
INSERT INTO tbl_heading (PAGEID, HEADINGDESCRIPTION) VALUES (10, 'Terms and Conditions');



/*TEXT TABLE*/
/*Home TEXT*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia ut provident ratione? Saepe aliquid aspernatur ullam nemo nam nostrum, obcaecati, tempora quae velit facilis asperiores modi repellendus fuga quidem. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, dolorum. Architecto, sequi? Illo, tenetur vero libero, nobis excepturi, autem quia a earum quibusdam aperiam sit consectetur ut. Porro, quas soluta? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dolorem nesciunt dolorum fugit deserunt officia, suscipit labore magnam, perspiciatis inventore modi alias iure provident ipsam quasi architecto impedit mollitia recusandae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, dicta tempore. Soluta, doloremque. Illum dicta nisi tempora vitae animi voluptas voluptate officia! Quia voluptatem illum odio, officiis rerum cum provident?');
    /*Services TEXT - Data Architecture*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (2, '1st Data Architecture - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (2, '2st Data Architecture - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (2, '3st Data Architecture - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (2, 'Would you like to learn more about how this technology can benefit your company? Send us an appointement request and we will be pleased to meet you.');
    /*Services TEXT - Big Data*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (3, '1st Big Data - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (3, '2st Big Data  - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (3, '3st Big Data  - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (3, 'Would you like to learn more about how this technology can benefit your company? Send us an appointement request and we will be pleased to meet you.');
    /*Services TEXT - AI for Business*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (4, '1st AI for Business - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (4, '2st AI for Business - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (4, '3st AI for Business - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (4, 'Would you like to learn more about how this technology can benefit your company? Send us an appointement request and we will be pleased to meet you.');
    /*Services TEXT - Solution Integration*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (5, '1st Solution Integration - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (5, '2st Solution Integration  - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (5, '3st Solution Integration  - adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (5, 'Would you like to learn more about how this technology can benefit your company? Send us an appointement request and we will be pleased to meet you.');
/*Testimonials (Page) TEXT*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (6, 'Have you got some amazing results you would like to share with us? We love to hear success stories from our customers. Get in touch and share your story with us using this form. We look forward to hearing your Neuron story!');
/*News (Page) TEXT*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (7, 'Stay up-to-date with the latest news of technology for business. Subscribe to receive our newsletter.');
/*Contact TEXT*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (8, 'Find us');
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (8, "<h4 class=\"card-title\">Neuron is located at:</h4><p class=\"text-justify\">315 Levers Road, Matua</p><p class=\"text-justify\"> Tauranga, New Zealand</p><p class=\"text-justify\">Phone number: +(64) 0210111111</p>");
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (8, 'Attend the next Neuron Events');
/*About us (Page) TEXT*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (9, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque non, quam est iste quidem id nobis molestias similique et tempora dignissimos laudantium, quod architecto molestiae? Enim reprehenderit alias sint qui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero inventore blanditiis repudiandae nam deleniti iste, sapiente, fugiat dolore beatae ipsam natus reprehenderit omnis recusandae! Itaque corrupti quidem repellendus minima aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo velit repellendus obcaecati minima rem reprehenderit, doloribus odio nam molestiae qui laborum iusto quae dignissimos esse eaque, possimus sint illum et?');
/*Policy TEXT*/
INSERT INTO tbl_text (PAGEID, TEXTDESCRIPTION) VALUES (10, "<p class=\"text-justify\">Your privacy is critically important to us.</p><h6>Neuron is located at:<h/6><address>315 Levers Road Matua<br/>0210111111</address><p class=\"text-justify\">It is Neuron’s policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to <a href=\"https://neuron.co.nz\">https://neuron.co.nz</a> (hereinafter, \"us\", \"we\", or \"https://neuron.co.nz\"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy (\"Privacy Policy\") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>   <p class=\"text-justify\">This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p><h4>Website Visitors</h4><p class=\"text-justify\">Like most website operators, Neuron collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Neuron’s purpose in collecting non-personally identifying information is to better understand how Neuron’s visitors use its website. From time to time, Neuron may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p><p class=\"text-justify\">Neuron also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on https://neuron.co.nz blog posts. Neuron only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p><h4>Gathering of Personally-Identifying Information</h4><p class=\"text-justify\">Certain visitors to Neuron’s websites choose to interact with Neuron in ways that require Neuron to gather personally-identifying information. The amount and type of information that Neuron gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at https://neuron.co.nz to provide a username and email address.</p><h4>Security</h4><p class=\"text-justify\">The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p><h4>Advertisements</h4><p class=\"text-justify\">Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Neuron and does not cover the use of cookies by any advertisers.</p><h4>Links To External Sites</h4><p class=\"text-justify\">Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.</p><p class=\"text-justify\">We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p><h4>Protection of Certain Personally-Identifying Information</h4><p class=\"text-justify\">Neuron discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on Neuron’s behalf or to provide services available at Neuron’s website, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using Neuron’s website, you consent to the transfer of such information to them. Neuron will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, Neuron discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when Neuron believes in good faith that disclosure is reasonably necessary to protect the property or rights of Neuron, third parties or the public at large.</p><p class=\"text-justify\">If you are a registered user of https://neuron.co.nz and have supplied your email address, Neuron may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what’s going on with Neuron and our products. We primarily use our blog to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. Neuron takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p><h4>Aggregated Statistics</h4><p class=\"text-justify\">Neuron may collect statistics about the behavior of visitors to its website. Neuron may display this information publicly or provide it to others. However, Neuron does not disclose your personally-identifying information.</p><h4>Cookies</h4><p class=\"text-justify\">To enrich and perfect your online experience, Neuron uses \"Cookies\", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p><p class=\"text-justify\">A cookie is a string of information that a website stores on a visitor’s computer, and that the visitor’s browser provides to the website each time the visitor returns. Neuron uses cookies to help Neuron identify and track visitors, their usage of https://neuron.co.nz, and their website access preferences. Neuron visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Neuron’s websites, with the drawback that certain features of Neuron’s websites may not function properly without the aid of cookies.</p><p class=\"text-justify\">By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to Neuron's use of cookies.</p><h4>Privacy Policy Changes</h4><p class=\"text-justify\">Although most changes are likely to be minor, Neuron may change its Privacy Policy from time to time, and in Neuron’s sole discretion. Neuron encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p><h4></h4><p class=\"text-justify\"></p><small class=text-muted>Credit & Contact Information</small><small class=text-muted>This privacy policy was created at <a style=\"color:inherit;text-decoration:none;\" href=\"https://termsandconditionstemplate.com/privacy-policy-generator/\" title=\"Privacy policy template generator\" target=\"_blank\">termsandconditionstemplate.com</a>.</small>");



/*MEDIA TABLE*/
/*Home MEDIA*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (1, 1, '/img/ML3.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (1, 1, '/img/ML2.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (1, 1, '/img/ML5.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (1, 1, '/img/ML6.PNG');
/*Service - Data Architecture MEDIA*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (2, 1, '/img/ML3.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (2, 1, '/img/ML2.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (2, 1, '/img/ML5.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (2, 1, '/img/ML6.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (2, 1, '/img/ML3a.jpg');
/*Service - Big Data MEDIA*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (3, 1, '/img/ML3.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (3, 1, '/img/ML2.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (3, 1, '/img/ML5.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (3, 1, '/img/ML6.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (3, 1, '/img/ML2a.jpg');
/*Service - AI for Business MEDIA*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (4, 1, '/img/ML3.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (4, 1, '/img/ML2.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (4, 1, '/img/ML5.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (4, 1, '/img/ML6.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (4, 1, '/img/ML5a.jpg');
/*Service - Solutuion Integration MEDIA*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (5, 1, '/img/ML3.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (5, 1, '/img/ML2.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (5, 1, '/img/ML5.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (5, 1, '/img/ML6.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (5, 1, '/img/ML6a.jpg');
/*Testimonial MEDIA*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (6, 1, '/img/S2.jpg');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (6, 1, '/img/S2.jpg');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (6, 1, '/img/S2.jpg');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (6, 1, '/img/S2.jpg');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (6, 1, '/img/S2.jpg');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (6, 1, '/img/S2.jpg');

/*Contact*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (8, 1, '/img/ML3.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (8, 1, '/img/ML2.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (8, 1, '/img/ML5.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (8, 1, '/img/ML6.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (8, 1, '/img/contact3.jpg');

/*Policy*/
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (10, 1, '/img/ML3.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (10, 1, '/img/ML2.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (10, 1, '/img/ML5.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (10, 1, '/img/ML6.PNG');
INSERT INTO tbl_media (PAGEID, ISIMAGE, MEDIAPATH)	 VALUES (10, 1, '/img/ML7.png');

/*BUTTONS TABLE*/
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (1, 'Data Architecture');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (1, 'Big Data');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (1, 'AI for Business');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (1, 'Solution Integration');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (2, 'Data Architecture');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (2, 'Big Data');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (2, 'AI for Business');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (2, 'Solution Integration');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (3, 'Data Architecture');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (3, 'Big Data');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (3, 'AI for Business');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (3, 'Solution Integration');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (4, 'Data Architecture');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (4, 'Big Data');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (4, 'AI for Business');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (4, 'Solution Integration');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (5, 'Data Architecture');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (5, 'Big Data');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (5, 'AI for Business');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (5, 'Solution Integration');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (6, 'Leave a Testimonial');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (7, 'Subscribe');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (8, 'Data Architecture');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (8, 'Big Data');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (8, 'AI for Business');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (8, 'Solution Integration');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (9, 'Contact');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (10, 'Data Architecture');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (10, 'Big Data');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (10, 'AI for Business');
INSERT INTO tbl_buttons (PAGEID, BUTTONDESCRIPTION) VALUES (10, 'Solution Integration');



/*CONTACT - Country Table*/
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AF','Afghanistan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AX','Aland Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AL','Albania');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('DZ','Algeria');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AS','American Samoa');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AD','Andorra');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AO','Angola');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AI','Anguilla');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AQ','Antarctica');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AG','Antigua and Barbuda');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AR','Argentina');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AM','Armenia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AW','Aruba');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AU','Australia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AT','Austria');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AZ','Azerbaijan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BS','Bahamas');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BH','Bahrain');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BD','Bangladesh');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BB','Barbados');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BY','Belarus');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BE','Belgium');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BZ','Belize');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BJ','Benin');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BM','Bermuda');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BT','Bhutan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BO','Bolivia, Plurinational State of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BQ','Bonaire, Sint Eustatius and Saba');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BA','Bosnia and Herzegovina');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BW','Botswana');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BV','Bouvet Island');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BR','Brazil');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IO','British Indian Ocean Territory');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BN','Brunei Darussalam');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BG','Bulgaria');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BF','Burkina Faso');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BI','Burundi');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KH','Cambodia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CM','Cameroon');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CA','Canada');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CV','Cape Verde');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KY','Cayman Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CF','Central African Republic');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TD','Chad');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CL','Chile');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CN','China');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CX','Christmas Island');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CC','Cocos (Keeling) Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CO','Colombia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KM','Comoros');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CG','Congo');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CD','Congo, the Democratic Republic of the');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CK','Cook Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CR','Costa Rica');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CI','Côte dIvoire');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('HR','Croatia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CU','Cuba');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CW','Curaçao');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CY','Cyprus');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CZ','Czech Republic');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('DK','Denmark');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('DJ','Djibouti');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('DM','Dominica');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('DO','Dominican Republic');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('EC','Ecuador');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('EG','Egypt');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SV','El Salvador');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GQ','Equatorial Guinea');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ER','Eritrea');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('EE','Estonia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ET','Ethiopia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('FK','Falkland Islands (Malvinas)');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('FO','Faroe Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('FJ','Fiji');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('FI','Finland');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('FR','France');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GF','French Guiana');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PF','French Polynesia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TF','French Southern Territories');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GA','Gabon');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GM','Gambia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GE','Georgia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('DE','Germany');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GH','Ghana');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GI','Gibraltar');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GR','Greece');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GL','Greenland');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GD','Grenada');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GP','Guadeloupe');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GU','Guam');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GT','Guatemala');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GG','Guernsey');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GN','Guinea');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GW','Guinea-Bissau');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GY','Guyana');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('HT','Haiti');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('HM','Heard Island and McDonald Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('VA','Holy See (Vatican City State)');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('HN','Honduras');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('HK','Hong Kong');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('HU','Hungary');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IS','Iceland');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IN','India');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ID','Indonesia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IR','Iran, Islamic Republic of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IQ','Iraq');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IE','Ireland');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IM','Isle of Man');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IL','Israel');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('IT','Italy');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('JM','Jamaica');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('JP','Japan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('JE','Jersey');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('JO','Jordan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KZ','Kazakhstan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KE','Kenya');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KI','Kiribati');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KP','Korea, Democratic Peoples Republic of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KR','Korea, Republic of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KW','Kuwait');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KG','Kyrgyzstan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LA','Lao Peoples Democratic Republic');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LV','Latvia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LB','Lebanon');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LS','Lesotho');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LR','Liberia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LY','Libya');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LI','Liechtenstein');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LT','Lithuania');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LU','Luxembourg');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MO','Macao');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MK','Macedonia, the former Yugoslav Republic of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MG','Madagascar');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MW','Malawi');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MY','Malaysia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MV','Maldives');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ML','Mali');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MT','Malta');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MH','Marshall Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MQ','Martinique');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MR','Mauritania');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MU','Mauritius');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('YT','Mayotte');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MX','Mexico');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('FM','Micronesia, Federated States of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MD','Moldova, Republic of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MC','Monaco');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MN','Mongolia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ME','Montenegro');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MS','Montserrat');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MA','Morocco');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MZ','Mozambique');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MM','Myanmar');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NA','Namibia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NR','Nauru');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NP','Nepal');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NL','Netherlands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NC','New Caledonia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NZ','New Zealand');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NI','Nicaragua');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NE','Niger');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NG','Nigeria');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NU','Niue');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NF','Norfolk Island');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MP','Northern Mariana Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('NO','Norway');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('OM','Oman');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PK','Pakistan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PW','Palau');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PS','Palestinian Territory, Occupied');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PA','Panama');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PG','Papua New Guinea');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PY','Paraguay');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PE','Peru');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PH','Philippines');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PN','Pitcairn');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PL','Poland');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PT','Portugal');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PR','Puerto Rico');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('QA','Qatar');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('RE','Réunion');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('RO','Romania');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('RU','Russian Federation');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('RW','Rwanda');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('BL','Saint Barthélemy');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SH','Saint Helena, Ascension and Tristan da Cunha');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('KN','Saint Kitts and Nevis');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LC','Saint Lucia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('MF','Saint Martin (French part)');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('PM','Saint Pierre and Miquelon');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('VC','Saint Vincent and the Grenadines');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('WS','Samoa');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SM','San Marino');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ST','Sao Tome and Principe');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SA','Saudi Arabia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SN','Senegal');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('RS','Serbia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SC','Seychelles');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SL','Sierra Leone');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SG','Singapore');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SX','Sint Maarten (Dutch part)');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SK','Slovakia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SI','Slovenia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SB','Solomon Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SO','Somalia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ZA','South Africa');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GS','South Georgia and the South Sandwich Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SS','South Sudan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ES','Spain');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('LK','Sri Lanka');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SD','Sudan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SR','Suriname');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SJ','Svalbard and Jan Mayen');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SZ','Swaziland');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SE','Sweden');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('CH','Switzerland');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('SY','Syrian Arab Republic');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TW','Taiwan, Province of China');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TJ','Tajikistan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TZ','Tanzania, United Republic of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TH','Thailand');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TL','Timor-Leste');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TG','Togo');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TK','Tokelau');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TO','Tonga');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TT','Trinidad and Tobago');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TN','Tunisia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TR','Turkey');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TM','Turkmenistan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TC','Turks and Caicos Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('TV','Tuvalu');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('UG','Uganda');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('UA','Ukraine');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('AE','United Arab Emirates');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('GB','United Kingdom');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('US','United States');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('UM','United States Minor Outlying Islands');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('UY','Uruguay');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('UZ','Uzbekistan');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('VU','Vanuatu');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('VE','Venezuela, Bolivarian Republic of');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('VN','Viet Nam');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('VG','Virgin Islands, British');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('VI','Virgin Islands, U.S.');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('WF','Wallis and Futuna');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('EH','Western Sahara');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('YE','Yemen');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ZM','Zambia');
INSERT INTO tbl_country (COUNTRYID, COUNTRYNAME) values ('ZW','Zimbabwe');

/*CONTACT - Subject Table*/
INSERT INTO tbl_subject (SUBJECTDESCRIPTION) VALUES ('General information');
INSERT INTO tbl_subject (SUBJECTDESCRIPTION) VALUES ('Appointment request');
INSERT INTO tbl_subject (SUBJECTDESCRIPTION) VALUES ('Feedback');



/*News TABLE*/
    /*News - News 1*/
INSERT INTO tbl_news (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (7, 0, 'https://www.youtube.com/embed/vORRyZQDR8Y', 'Globalization 4.0', 'World Economic Forum, 16/11/2018', 'Globalization is being redefined politically, economically and ecologically at a moment when advanced technologies have ushered in a 4th Industrial Revolution at a speed and scale unparalleled in human history.');
    /*News - News 2*/
INSERT INTO tbl_news (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (7, 0, 'https://www.youtube.com/embed/kpW9JcWxKq0', 'The 4th Industrial Revolution', 'World Economic Forum, 18/07/2016', 'It is characterized by a range of new technologies that are fusing the physical, digital and biological worlds, impacting all disciplines, economies and industries, and even challenging ideas  what it means to be human.');
    /*News - News 3*/
INSERT INTO tbl_news (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (7, 0, 'https://www.youtube.com/embed/YOEFogy9VSQ', 'Applications of AI in Business', 'Growth Tribe, 19/09/2018', 'Artificial Intelligence is a marketers secret weapon right now and most big opportunities have not yet been tapped. Now is the time to get ahead of the game. Predictive analysis to forecast products and Customer Lifetime Value.');
    /*News - News 4*/
INSERT INTO tbl_news (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (7, 1, 'https://www.forbes.com/sites/bernardmarr/2019/03/21/why-every-company-needs-an-artificial-intelligence-ai-strategy-for-2019/#5111ab4e68ea', 'Why Every Company Needs An Artificial Intelligence (AI) Strategy For 2019', 'Forbes, 21/03/2019', 'Why Every Company Needs An Artificial Intelligence (AI) Strategy For 2019. AI is ultimately going to transform every business, in every industry.');
    /*News - News 5*/
INSERT INTO tbl_news (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (7, 1, 'https://www.analyticsinsight.net/the-impact-of-big-data-on-different-industries/', 'The Impact of Big Data on Different Industries', 'Analytics Insight, 24/03/2019', 'Healthcare; Education; Telecom; Banking and Finance; Consumer Goods Industry.');
    /*News - News 6*/
INSERT INTO tbl_news (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (7, 0, 'https://www.youtube.com/embed/eo4oQZdJAaQ', 'Big Data Business Impact', 'Oracle Big Data, 25/10/2015', 'Big Data allows businesses to do big things. Oracle provides leadership and solutions to business ready to maximize big data.');


/*About TABLE*/
    /*About - Staff 1*/
INSERT INTO tbl_about (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (9, 1, '/img/ME1.jpg', 'Name 1', 'Job Position 1', 'Person 1 - maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.');
    /*About - Staff 2*/
INSERT INTO tbl_about (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (9, 1, '/img/ME1.jpg', 'Name 2', 'Job Position 2', 'Person 2 - maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.');
    /*About - Staff 3*/
INSERT INTO tbl_about (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (9, 1, '/img/ME1.jpg', 'Name 3', 'Job Position 3', 'Person 3 -  maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.');
    /*About - Staff 4*/
INSERT INTO tbl_about (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (9, 1, '/img/ME1.jpg', 'Name 4', 'Job Position 4', 'Person 4 -  maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.');
    /*About - Staff 5*/
INSERT INTO tbl_about (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (9, 1, '/img/ME1.jpg', 'Name 5', 'Job Position 5', 'Person 5 -  maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.');
    /*About - Staff 6*/
INSERT INTO tbl_about (PAGEID, ISIMAGE, MEDIAPATH, TITLE, SUBTITLE, TEXTDESCRIPTION) VALUES (9, 1, '/img/ME1.jpg', 'Name 6', 'Job Position 6', 'Person 6 -  maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.');


/*Testimonial Table*/
INSERT INTO tbl_testimonial (CLIENTID, TEXTDESCRIPTION, CREATEDDATE) 
VALUES (1, 'Testimonial 1 - Necessitatibus maxime! Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore', NOW());


/*Client Table*/
INSERT INTO tbl_client (CLIENTNAME, COMPANYNAME, CLIENTWEBSITE, CLIENTEMAIL, CLIENTADRESS, COUNTRYID, CLIENTPHONENUMBER) VALUES ("Name1", "Company1", "123.co.nz", "1234@email.com", "Tauranga", "NZ", "123456");

/*Contact Table*/
/*INSERT INTO tbl_contact (CLIENTID, SUBJECTID, CONTACTDESCRIPTION, CONTACTDATE) VALUES ("", "", "", NOW());

