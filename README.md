Command for project setup.

1.composer install

2.composer migrate.

3.php artisan serve

Here’s a list of all the API endpoints for the job board application, including their URLs and HTTP methods:
1. *User Authentication*

Register a New User
URL: http://127.0.0.1:8000/api/register
Method: POST
Description: Registers a new user and returns an API token.

Login
URL: http://127.0.0.1:8000/api/login
Method: POST
Description: Authenticates a user and returns an API token.

Logout
URL: http://127.0.0.1:8000/api/logout
Method: POST
Description: Logs out the authenticated user and revokes the API token.
Requires Authentication: Yes

*Authentication is required using a token to access the API.*

*2. Job Listings*

List All Jobs

URL: http://127.0.0.1:8000/api/jobs
Method: GET
Description: Retrieves a list of all job listings.

Create a Job

URL: http://127.0.0.1:8000/api/jobs
Method: POST
Description: Creates a new job listing.
Requires Authentication: Yes

View a Specific Job

URL: http://127.0.0.1:8000/api/jobs/{jobId}
Method: GET
Description: Retrieves details of a specific job by its ID.

Update a Job

URL: http://127.0.0.1:8000/api/jobs/{jobId}
Method: PUT
Description: Updates an existing job listing.

Delete a Job

URL: http://127.0.0.1:8000/api/jobs/{jobId}
Method: DELETE
Description: Deletes a job listing.

3. Job Applications

Apply for a Job

URL: http://127.0.0.1:8000/api/jobs/{jobId}/apply
Method: POST
Description: Allows a user to apply for a specific job.

List Job Applications

URL: http://127.0.0.1:8000/api/jobs/{jobId}/applications
Method: GET
Description: Retrieves a list of applications for a specific job.

4. Bonus Feature: Job Search
   
Search for Jobs
URL: http://127.0.0.1:8000/api/jobs/search
Method: GET
Description: Searches for jobs by title or location.
