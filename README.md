/**
 * This Laravel application provides a simple job listing and posting system.
 *
 * # Routes (routes/web.php)
 * - `/` : Home page.
 * - `/jobs` : Lists jobs with pagination, showing the latest jobs first. Each job is loaded with its employer.
 * - `/jobs/create` : Displays a form to create a new job.
 * - `/jobs/{id}` : Shows details for a specific job.
 * - `POST /jobs` : Handles job creation with validation for title and salary.
 * - `/contact` : Contact page.
 *
 * # Job Model (app/Models/Job.php)
 * - Represents a job listing.
 * - Uses the `jobs_listings` table.
 * - Fillable fields: `employer_id`, `title`, `salary`.
 * - Relationships:
 *   - `employer()`: Each job belongs to an employer.
 *   - `tags()`: Many-to-many relationship with tags, using a custom foreign pivot key (`job_listing_id`).
 *
 * # Post Model (app/Models/Post.php)
 * - Represents a blog post.
 * - Fillable fields: `title`, `content`.
 * - Relationships:
 *   - `tags()`: Many-to-many relationship with tags.
 *
 * # Job Creation View (resources/views/jobs/create.blade.php)
 * - Blade template for creating a new job.
 * - Contains a form with fields for job title and salary.
 * - Displays validation errors for each field.
 * - Uses Blade components and Tailwind CSS for styling.
 *
 * # Notes
 * - The job creation form uses CSRF protection and server-side validation.
 * - The employer ID is currently hardcoded when creating a job.
 * - The application uses Eloquent relationships for data modeling.
 */
/**
 * (No code was provided in the selection to document.)
 */