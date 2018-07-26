# faq

Epics:
1) User Registration/Login->Create Profile->Profile->ShareMarket->Question->answer

`

**User Stories:**
  
  **Registrataion/Login User Story:**
  1) As a use I must register first.
  2) As a user I must make a register page on the top right menu bar.
  3) As a user I must put email, password an confirmed password to register myself.
  4) As a user after registration I must create my profile.
 
  **Create Profile User Story:**
  1) As a user I must create a drop down menu title My Account to select Create Profile.
  2) As a user I must enter First Name, Last Name and detail description in the profile page.
  3) As a user after entering required information my profile should be created.
  
  **My Profile User Story:**
  1)  As a user I must be able to see my profile.
  2) As a user I must be able to edit my profile.
  3) As a user I must be able to save my profile.
 
  **Create Question User Story:**
  
  1) As a user I must be able to enter questions.
  2) As a user I must be able to save questions.
  3) As a user I must be able to view my questions.
  4) As a user I must be able to edit questions.
  5) As a user I must be able to delete questions.
  
  **Answer Question User Story:**
  1) As a user I must be able to answer a question.
  2) As a user I must be able to save answer.
  3) As a user I must be able to view my answer.
  4) As a user I must be able to edit my answer.
  5) As a user I must be able to delete my answer.
 
  **Share Market User Story:**
  1) As a user I must be able to enter Share and price.
  2) As a user I must be able to add more shares.
  3) As a user I must be able to sort shares and prices in ascending order.
  4) As a user I must be able sort shares and prices in descending order.
  
  **Prerequisits:**
  1) Enable plugin for laravel by File->setting->plugin->laravel plugging.
  2) Install the laravel IDE helper by typing ” composer require barryvdh/laravel-ide-helper”.
  3) Update Composer.json file as follows:
    "post-update-cmd": [
    
                "Illuminate\\Foundation\\ComposerScripts::postUpdate",
    
                "php artisan ide-helper:generate",
    
                "php artisan ide-helper:meta"
    
            ]
    
   4) On the terminal window type composer update.
   5) To get database column type “composer require doctrine/dbal” on the terminal window.
   6)  Create a new database  “database.sqlite”.
   7) Config the .env file for database.sqlite.
   8) On the terminal run php artisan migrate refresh to update the database table.
   9) On the terminal run the helper models “php artisan ide-helper:models”.
   10) Type “y”
   
   **Database Column sorting:**
   1) First, install the kyslik/column-sortable package via the Composer package manager as follwos:
      
      composer require kyslik/column-sortable
      
   2) Add ServiceProvider in config/app.php as follows:
      
      'providers' => [
                       Kyslik\ColumnSortable\ColumnSortableServiceProvider::class,
                     ]
   3) Publish the default configuration file by the following command:
      
      php artisan vendor:publish --provider="Kyslik\ColumnSortable\ColumnSortableServiceProvider" --tag="config"   
  
  **User Manual:**     
  1) Click on Register on the top right menu bar
  2) Enter email, password  and confirm password fileds and then click on Register button and you will be logged in.
  3) Then click on My Account->Create Profile on the top right drop down menu.
  4) Enter first name, last name and detail description on the body text filed.
  5) Click on Save button and your profile will be created.
  6) To go to Share Market, click on My Account-> Share Market on the top right drop down menu.
  7) Enter Company name and price (i.e company name:AIG  price: 500 etc..). 
  8) Click on Submit button  and your share will be created and  appeared on the Indes Page Table.
  9) Click on Add button to add at least 10 shares to fill tables
  10) To sort in ascending or deschending order,  click on every column header on the Index Page (id, Company Name, Price etc..) to sort on ascending or descinding order
  11) To create a question, click on My Account->Question->Create a Question button.
  12) Enter your question, on the text filed and then click on Save button.
  13) To view question click on My Account->Question->View button
  15) You may edit or delete question by clicking on Edi or Delete button
  16) To answer a question, you must have a question.
  17) Then click on My Account->Question->View->Answer Question button.
  18) Enter your answer on the text filed and then click on Save button.
  19) To edit or delete answer click on view button then click on Edit or Delete button.
  20) To logout click on My Account->Logout on the top right menu bar, and you will be logged out.
  
      