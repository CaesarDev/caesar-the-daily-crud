# The Daily Crud  - News that matters

## Getting set up

### Install Composer dependencies
Navigate to the repository in your terminal. Run ```composer install```


### Make sure that the database connection is set up correctly.
The daily Crud is using the [`sqlite`](https://www.sqlite.org/) database engine.
The database is set up in the .env file. The location of the database is /database/database.sqlite
Make sure that the path in .env is correct by adding the absolute path For example 
/Users/Ola/Code/caesar-the-daily-crud/database/database.sqlite

### Run the migrations
Run the migrations in order to seed the data. ```php artisan migrate```

### Start the server
```php artisan serve```

### Make sure everything is working
Navigate to the site in your browser, using the url given when running ```php artisan serve``` 
( most likley http://127.0.0.1:8000/ ) You should be presented with 10 articles. 
Navigate to http://127.0.0.1:8000/posts/create and make sure that you can post new Posts.


## The tasks
The expectation is not to complete all tasks. We value one good solution over many worse ones. Pick one to start

1. Add voting to the posts. Every post should have a vote up and vote down button and also a count of votes.   
    Suggested steps:
- [ ] Add the necessary field(s) to database/migrations/2022_02_14_125630_create_votes_table.php migration
- [ ] Create VotesController and related functions
- [ ] Add routes to routes/web.php
- [ ] Add vote buttons and count to the view
- [ ] Make sure that voting works
- [ ] BONUS: Add rate limit to the voting system, on visitor can only cast one vote per hour.
<br> <br> <br> 

2. In most newspapers, the articles are sorted by date, latest first. This is NOT a normal newspaper.
The Daily Crud sorts the articles by amount of characters in the body field, posts with more characters are shown first.
I.e "This is a longer sentence" will be seen above "Short short"  
    Suggested steps:  
- [ ] Add a scope to the Post model to sort by body length
- [ ] Use the scope in the PostsController to sort the posts
- [ ] BONUS: Add a button on the main posts page to sort by date instead
<br> <br> <br> 


3. Add a search function to the posts. Users should be able to search for a specific post by title.
    Suggested steps:
- [ ] Add a search function to the PostsController
- [ ] Add routes to routes/web.php
- [ ] Add the search form to the view
- [ ] Add a view to present the search results
- [ ] BONUS: Add the ability to search both title and body
