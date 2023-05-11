# Requiriments

Let's make something simpler here after long and confusing lecture "Show chosen category dynamically". The main goal of this exercise it to help you to distinguish 4 types of tests: acceptance, functional, integration and unit.

To sum up: acceptance and functional tests are similar, they test a whole feature but acceptance test does this from the client point of view by finding elements, clicking links etc. - especially useful if you want to test cross browser compatibility of your app. Integration test connects and tests at least two classes. Unit test tests a single unit of code.


- Instructions:

    1. Download the first zip file. Unzip it. There is a very simple PHP application there - but this is rather a simulation of an app, we do not use there real database etc. This application shows static string on the browser along with dynamic content: correct greeting depending on the time of the day and user name taken from the fake database as well as dynamic css style applied to the website. There is one mistake in this app - in Database.php file, all user names are lower-case. The first letter should be upper-case. The task for you is to correct this but only after you write an integration test that will tell you what's wrong.

    2. Run composer update command to install PHPUnit and Selenium for PHPUnit.

    3. Make it possible to run and test your application by running the following commands:

    php -S localhost:8000 -t public  - this is optional, you can use url address of your choice

    java -jar your_selenium_file_here

    4. Run all tests using PHPUnit. There is already an acceptance test written but it does not pass.

    5. Write functional, integration and unit (keep the order) test by following instructions inside a zipped file.

    Questions for this assignment
    What is the difference between acceptance and functional tests?

Download resource files

## Explanation

- Acceptance tests
    - We use to test a resource that users will use on the screen, ex. A page, buttons, validation, existance of elements in the page, compatibility with browsers, etc.
- Functional tests
    - We bootstrap the application and call a route and test its return, ex. call users/add route and check if the json is valid, call users/new route and check if there is new route on the html of the page
- Integration tests
    - We use for test interaction between classes, ex. Users class extends people and we want to test the method getName from people class, Cars class has Engine as a dependecy so we can test the integration between the two using a method from Cars class
- Unit tests
    - We use to test methods of classes, you can use more than one test to test a method of a class, ex. Depending of the type of car passed to the method getMaxVelocity we will get a result, I can make a test to get all diferent types of results passing all different params