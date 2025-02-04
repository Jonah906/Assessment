# Laravel Assessment Report

## Overview

This repository contains my submission for the Laravel assessment, which includes CRUD operations, API development, debugging, Git best practices, and SQL query challenges.

---

## Task 1: Laravel CRUD Operations

### **Objective:**

Build a simple Task Management System using Laravel.

### **Implementation:**

- Created a **Task model** with the following fields:
  - `title` (string, required)
  - `description` (text, optional)
  - `status` (enum: pending, completed, default: pending)
  - `due_date` (date, required)
- Implemented **CRUD operations** using Laravel controllers and views.
- Added **validation rules**:
  - `title` is required.
  - `due_date` must be a future date.
- Implemented **Eloquent Scopes** to filter tasks based on status (`pending` or `completed`).
- Set up **Laravel authentication** using Laravel UI.

### **Files Modified:**

- `app/Models/Task.php`
- `app/Http/Controllers/TaskController.php`
- `resources/views/tasks/`
- `routes/web.php`

---

## Task 2: API Development

### **Objective:**

Create a RESTful API for managing products.

### **Implementation:**

- Created a **Product model** with:
  - `name` (string, required)
  - `price` (decimal, required)
  - `stock` (integer, required)
- Developed an **API controller** with CRUD operations.
- Implemented **authentication** using Laravel Sanctum.
- Validated API requests:
  - `price` must be numeric.
  - `stock` must be positive.
- Added **unit tests** for API endpoints.

### **Files Modified:**

- `app/Models/Product.php`
- `app/Http/Controllers/Api/ProductController.php`
- `routes/api.php`
- `tests/Feature/ProductApiTest.php`

---

## Task 3: Debugging & Optimization

### **Objective:**

Identify and fix issues in the provided buggy code.

### **Implementation:**

- Debugged and optimized the `app/Http/Controllers/BuggyTaskController.php` file.
- Fixed issues related to incorrect variable usage, missing validations, and query optimizations.
- Documented all fixes in **BuggyCodeFix.md**.

### **Files Modified:**

- `app/Http/Controllers/BuggyTaskController.php`
- `BuggyCodeFix.md`

---

## Task 4: Git Assessment

### **Objective:**

Demonstrate proper Git usage in a real-world scenario.

### **Implementation:**

1. **Created a new branch**: `feature/task-improvement`
2. **Made improvements** to the Task Management System.
3. **Committed changes** with meaningful messages:
   - `fix: added validation for task status`
   - `feat: implemented task filtering feature`
4. **Opened a Pull Request (PR)** describing the changes.

### **Git Commands Used:**

```sh
# Create and switch to a new branch
git checkout -b feature/task-improvement

# Make changes and commit
git add .
git commit -m "fix: added validation for task status"

# Push branch and create a PR
git push origin feature/task-improvement
```

---

## Task 5: SQL Query Challenge

### **Objective:**

Write optimized MySQL queries for an e-commerce database.

### **Implementation:**

#### **Retrieve the top 5 customers with the highest total spending:**

```sql
SELECT user_id, SUM(total_amount) AS total_spent 
FROM orders 
GROUP BY user_id 
ORDER BY total_spent DESC 
LIMIT 5;
```

#### **Get the total revenue for the current month:**

```sql
SELECT SUM(total_amount) AS total_revenue 
FROM orders 
WHERE MONTH(created_at) = MONTH(CURRENT_DATE) 
AND YEAR(created_at) = YEAR(CURRENT_DATE);
```

#### **List the most sold products:**

```sql
SELECT product_id, SUM(quantity) AS total_sold 
FROM order_items 
GROUP BY product_id 
ORDER BY total_sold DESC;
```

### **Files Modified:**

- `database/sql_queries.sql`

---

## Submission

- All changes have been pushed to GitHub.
- Repository Link: [https://github.com/Jonah906/Assessment](https://github.com/Jonah906/Assessment)

---

### ✅ **Final Notes:**

This project demonstrates Laravel CRUD operations, API development, debugging skills, Git workflow, and SQL query optimization. All tasks have been successfully implemented and tested.

---
