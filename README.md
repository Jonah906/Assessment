# Gloztec Laravel Developer Assessment

This project is a Laravel-based system developed as part of the Gloztec Laravel Developer Assessment. Below is a breakdown of my approach to each task:

## Task 1: Laravel CRUD Operations

- Implemented a Task Management System using Laravel.
- Included Eloquent scopes for filtering tasks.
- Used Laravel authentication (Breeze).

## Task 2: API Development

- Created a RESTful API for managing products.
- Used Laravel Sanctum for authentication.
- Included request validation and unit testing.

## Task 3: Debugging & Optimization

- Fixed bugs in `BuggyTaskController.php`.
- Documented all fixes in `BuggyCodeFix.md`.

## Task 4: Git Assessment

- Created a feature branch `feature/task-improvement` for improvements.
- Opened a pull request (PR) for code review.

## Task 5: SQL Query Challenge

- Wrote optimized SQL queries for:
  - Top 5 customers with the highest spending.
  - Total revenue for the current month.
  - Most sold products.
- Queries are in `database/sql_queries.sql`.

## Submission

This repository contains all completed tasks as per the assessment guidelines.




## Task 5: SQL Query Challenge

Below are the SQL queries for the given tasks:

1. **Retrieve the top 5 customers with the highest total spending**

   - This query calculates the total amount spent by each user and sorts them in descending order.
2. **Get the total revenue for the current month**

   - This query sums up all order amounts for the current month.
3. **List the most sold products**

   - This query groups order items by product ID and calculates the total quantity sold.
4. **Get the top 5 most sold products**

   - This query extends the previous one but limits the results to the top 5.

You can find the SQL queries in [`database/sql_queries.sql`](database/sql_queries.sql).
