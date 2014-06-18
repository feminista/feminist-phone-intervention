# Feminist Phone Intervention
### http://feminist-phone-intervention.tumblr.com/
### http://bit.ly/FeministPhonelineDonations

## Setting up the phoneline

### 1) Create a Twilio account (free, up to a certain usage) here: https://www.twilio.com/
![Creating a Twilio account](/screenshots/twilioSignup.png?raw=true "Creating a Twilio account.")

### 2) Create a Google App Engine application here (free, up to a certain usage): https://appengine.google.com
![Creating an App Engine Application](/screenshots/appengineCreate.png?raw=true "Creating an App Engine Application")

### 3) Download the Google App Engine SDK for PHP here (free): https://developers.google.com/appengine/downloads
![Downloading App Engine SDK](/screenshots/appengineSDK.png?raw=true "Downloading App Engine SDK")

### 4) Download and unzip the Feminist Phone Intervention application here (free): https://github.com/feminista/feminist-phone-intervention/archive/master.zip

### 5) Open the Google App Engine Launcher downloaded in step #3. Import the Feminist Phone Intervention application by selecting the folder downloaded in step #4.
![Importing an App Engine Application](/screenshots/appengineImport.png?raw=true "Importing an App Engine Application")

### 6) Double-click on the imported application to open the Application Settings. Change the Application ID so that it matches the application ID created in step #2.
![Renaming an App Engine Application](/screenshots/appengineRename.png?raw=true "Renaming an App Engine Application")

### 7) Deploy the Feminist Phone Intervention application onto Google App Engine. When prompted, enter your Google username and password.
![Deploying an App Engine Application](/screenshots/appengineDeploy.png?raw=true "Deploying an App Engine Application")

### 8) Go to `YOUR-APPLICATION-ID.appspot.com/call`. If the application deployed successfully, you should see a page that looks like this:
![Checking an App Engine Application](/screenshots/appengineSuccess.png?raw=true "Checking an App Engine Application")

### 9) Configure your Twilio number from step #1 so that it points to your Google App Engine application.
![Configuring a Twilio number](/screenshots/twilioConfigure.png?raw=true "Configuring a Twilio number")

## Customizing the Application

### Changing the quotes used
Edit the `quotes.json` file and add your own quotes.

### Activating Text Messages
On the Twilio configuration page, add the following URL to the Messaging section: `YOUR-APPLICATION-ID.appspot.com/text`

### Swapping the automated robot voice with your own recordings
On the Twilio configuration page, replace `/call` with `/recording` in the URL. Make sure to add your recordings to the `recordings/` folder, and make sure to update `recordings.json` 


If you have questions, e-mail feminist.phone.intervention@gmail.com