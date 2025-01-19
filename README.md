
# Laravel Security Scanner

This project enhances the security of Laravel applications by introducing a middleware that detects and prevents **SQL Injection**, **XSS**, and **CSRF** attacks. It ensures user data protection and improves the application's overall security.

---

## Key Features
- **SQL Injection Detection:** Identifies and warns about inputs indicating SQL injection attempts.
- **XSS Detection:** Flags inputs containing malicious HTML or JavaScript.
- **CSRF Verification:** Ensures a CSRF token is present in POST requests.

---

## Installation

### Requirements
1. Make sure **Composer** is installed on your machine.
2. Install Laravel using the following command:
   ```bash
   composer create-project laravel/laravel your-project-name
   ```

### Steps
1. **Clone the Project**  
   Clone the repository using the following command:  
   ```bash
   git clone https://github.com/Bodyhc/Laravel-SecurityScanner.git
   ```

2. **Copy Files**  
   - Copy the `SecurityScanner.php` file to:  
     ```
     app/Http/Middleware/SecurityScanner.php
     ```
   - Copy the `web.php` file to:  
     ```
     routes/web.php
     ```

3. **Add Middleware**  
   Include the middleware in your `web.php` file:  
   ```php
   use App\Http\Middleware\SecurityScanner;
   ```

4. **Run the Server**  
   Start the Laravel development server:  
   ```bash
   php artisan serve
   ```

---

## Usage

### Testing the Application
1. Open your browser and navigate to `http://localhost:8000`.
2. Use the following examples to test the middleware:

#### Example 1: XSS Detection
Enter the following URL in your browser:
```
http://localhost:8000/?query=<script>alert('XSS')</script>
```
You should see the error:
```
403 Potential XSS attack detected in field: query
```

#### Example 2: SQL Injection Detection
Enter the following URL in your browser:
```
http://localhost:8000/?query=select * from users
```
You should see the error:
```
403 Potential SQL Injection detected in field: query
```

---

## Contribution
Feel free to fork the repository, make enhancements, and submit pull requests. Contributions are always welcome!

---

## License
This project is open-source and available under the [MIT License](LICENSE).

---

## Author
Developed by **Abdullah (Bodyhc)**  
GitHub: [Bodyhc](https://github.com/Bodyhc)
