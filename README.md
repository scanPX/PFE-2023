# EXTRAIT - Birth Certificate Management System

A Laravel-based web application for managing birth certificates and extracts (Projet de Fin d'Étude).

## About This Project

EXTRAIT is a comprehensive birth certificate management system that allows users to:

- **Register Birth Records**: Capture and store birth certificate information in both French and Arabic
- **View Birth Certificates**: Access and display registered birth certificates (extraits de naissance)
- **Modify Records**: Update existing birth certificate information
- **Search & Consultation**: Query and consult birth records by year and number
- **Bilingual Support**: Manage data in both French and Arabic languages

## Key Features

- Birth certificate data entry with bilingual fields (French/Arabic)
- Record modification and updates
- Birth certificate viewing and consultation
- User authentication system
- Responsive interface built with React/Inertia.js
- Bootstrap-styled frontend

## Technology Stack

- **Backend**: Laravel (PHP)
- **Frontend**: React.js with Inertia.js
- **Database**: MySQL (via XAMPP)
- **Styling**: Bootstrap 5, Tailwind CSS
- **Authentication**: Laravel Breeze

## Database Structure

The system manages birth records with the following information:
- Personal details (name, surname, birth date, birthplace)
- Nationality
- Parental information (father and mother)
- Death records
- Corresponding Arabic translations for all fields

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Configure your `.env` file with database credentials
4. Run migrations:
   ```bash
   php artisan migrate
   ```
5. Build frontend assets:
   ```bash
   npm run dev
   ```
6. Start the development server:
   ```bash
   php artisan serve
   ```

## Routes

- `/` - Home page
- `/Accueil` - Main dashboard
- `/Saisie` - Birth record entry form
- `/Modification` - Record modification interface
- `/Naissance` - Birth records listing
- `/Extrait` - Birth certificate view
- `/Modifications/{id}` - Edit specific record

## License

This project is developed as a final year project (Projet de Fin d'Étude).
