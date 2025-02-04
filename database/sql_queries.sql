-- Retrieve the top 5 customers with the highest total spending
SELECT a.user_id, SUM(a.total_amount) AS total_spent
FROM orders a
GROUP BY a.user_id
ORDER BY total_spent DESC
LIMIT 5;

-- Get the total revenue for the current month
SELECT SUM(total_amount) AS total_revenue
FROM orders
WHERE YEAR(created_at) = YEAR(CURRENT_DATE)
AND MONTH(created_at) = MONTH(CURRENT_DATE);

-- List the most sold products
SELECT a.product_id, SUM(a.quantity) AS total_sold
FROM order_items a
GROUP BY a.product_id
ORDER BY total_sold DESC;


