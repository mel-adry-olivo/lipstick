# TODO

Done - Manage Products
Done - Product Categories
Done - Rating
Done - Review / Comment
Done - User Login
Done - Reservation

# TO STUDY

Database Queries

```sql
  SELECT
      lipsticks.*,
      brands.name AS brand_name,
      categories.name AS category_name,
      GROUP_CONCAT(colors.name SEPARATOR ', ') AS color_names,
      GROUP_CONCAT(colors.hex_code SEPARATOR ', ') AS color_hex_codes,
      ROUND(AVG(reviews.rating), 1) AS average_rating
  FROM lipsticks
  JOIN brands ON lipsticks.brand_id = brands.id
  JOIN categories ON lipsticks.category_id = categories.id
  JOIN lipstick_colors ON lipsticks.id = lipstick_colors.lipstick_id
  JOIN colors ON lipstick_colors.color_id = colors.id
  LEFT JOIN reviews ON lipsticks.id = reviews.lipstick_id
  GROUP BY lipsticks.id
```
